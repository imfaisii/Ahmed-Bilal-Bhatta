<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditExpenseRequest;
use App\Http\Requests\ExpenseDeleteRequest;
use App\Http\Requests\ExpenseUpdateRequest;
use App\Http\Requests\NewExpenseStoreRequest;
use App\Models\Expense;
use App\Models\KhataType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.expenses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewExpenseStoreRequest $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();
            foreach ($request->khatas as $khata) {
                $create = Expense::create([
                    'comments' => $khata['comments'],
                    'amount' => $khata['amount'],
                    'khata_type_id' => KhataType::where('description', $khata['description'])->value('id'),
                    'user_id' => Auth::user()->id
                ]);
            }
            if ($create) {
                DB::commit();
                return response()->json(['message' => 'Expense(s) added successfully!', 'status' => 200], 200);
            } else {
                DB::rollBack();
                return response()->json(['message' => 'Failed to add expense(s)', 'status' => 422], 200);
            }
        } catch (Exception $exception) {
            DB::rollBack();
            if (isset($exception->errorInfo[2]))
                $result = $exception->errorInfo[2];
            else
                $result = $exception->getMessage();
            return response()->json(['exception' => $result, 'status' => 409], 409);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(EditExpenseRequest $request)
    {
        return Expense::where('id', $request->id)->with(['khatatypes'])->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(ExpenseUpdateRequest $request)
    {
        if (Expense::where('id', $request->hidden_id)->update([
            'khata_type_id' => $request->khataTypeiD,
            'comments' => $request->comments,
            'amount' => $request->amount,
        ])) {
            return response()->json(['message' => 'Worker Updated successfully!', 'status' => 200], 200);
        } else {
            return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseDeleteRequest $request)
    {
        if (Expense::find($request->id)->delete()) {
            return response()->json(['message' => 'Expense Deleted Successfully!!', 'status' => 200], 200);
        }
        return response()->json(['message' => 'Invalid Data supplied ! Please try again!', 'status' => 422], 200);
    }
}
