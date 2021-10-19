<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestmentStoreRequest;
use App\Http\Requests\NewInvestmentRequest;
use App\Models\InvestmentMoney;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestmentMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front.investment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvestmentStoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $create = InvestmentMoney::create($request->validated());
            if ($create) {
                DB::commit();
                return response()->json(['message' => 'Investment money added successfully!', 'status' => 200], 200);
            } else {
                DB::rollBack();
                return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 422);
            }
        } catch (Exception $exception) {
            DB::rollBack();
            if (isset($exception->errorInfo[2]))
                $result = $exception->errorInfo[2];
            else
                $result = $exception->getMessage();
            return response()->json(['message' => $result, 'status' => 400], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvestmentMoney  $investmentMoney
     * @return \Illuminate\Http\Response
     */
    public function show(InvestmentMoney $investmentMoney)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestmentMoney  $investmentMoney
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return InvestmentMoney::where('id', $request->id)->with('receiver', 'investor')->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestmentMoney  $investmentMoney
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvestmentMoney $investmentMoney)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestmentMoney  $investmentMoney
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (InvestmentMoney::find($request->id)->delete()) {
            return response()->json(['message' => 'Investor Deleted Successfully!!', 'status' => 200], 200);
        }
        return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
    }
}
