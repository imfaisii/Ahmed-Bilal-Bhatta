<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteInvestorRequest;
use App\Http\Requests\EditInvestorRequest;
use App\Http\Requests\NewInvestorRequest;
use App\Models\Investor;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.investors.index');
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
    public function store(NewInvestorRequest $request)
    {
        //
        try {
            DB::beginTransaction();
            if ($request->hasFile('profile_image')) {
                $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('profile_image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $request->file('profile_image')->move(public_path('images/investors/'), $fileNameToStore);
            } else {
                $fileNameToStore = NULL;
            }

            $create = Investor::create([
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'cnic' => $request->cnic,
                'profile_photo' => $fileNameToStore,
            ]);
            if ($create) {
                DB::commit();
                return response()->json(['message' => 'Worker Added successfully!', 'status' => 200], 200);
            } else {
                DB::rollBack();
                return response()->json(['message' => 'Failed to add new record!', 'status' => 309], 309);
            }
        } catch (QueryException $exception) {
            DB::rollBack();
            if (isset($exception->errorInfo[2]))
                $result = $exception->errorInfo[2];
            else
                $result = $exception->getMessage();
            return response()->json(['message' => $result, 'status' => 422], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function show(Investor $investor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function edit(EditInvestorRequest $request)
    {
        return Investor::where('id', $request->id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (Investor::where('id', $request->hidden_id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'cnic' => $request->cnic,
            'phone' => $request->phone,
        ])) {
            return response()->json(['message' => 'Investor Updated successfully!', 'status' => 200], 200);
        } else {
            return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteInvestorRequest $request)
    {
        // return $request->all();
        if (Investor::find($request->id)->delete()) {
            return response()->json(['message' => 'Investor Deleted Successfully!!', 'status' => 200], 200);
        }
        return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
    }
}
