<?php

namespace App\Http\Controllers;

use App\Http\Requests\KhataTypeDeleteRequest;
use App\Http\Requests\KhataTypeEditRequest;
use App\Http\Requests\KhataTypeStoreRequest;
use App\Http\Requests\KhataTypeUpdateRequest;
use App\Models\KhataType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhataTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.khata-type.index');
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
    public function store(KhataTypeStoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $create = KhataType::create($request->validated());
            if ($create) {
                DB::commit();
                return response()->json(['message' => 'New Khata/Expense type added successfully!', 'status' => 200], 200);
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
     * @param  \App\Models\KhataType  $khataType
     * @return \Illuminate\Http\Response
     */
    public function show(KhataType $khataType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KhataType  $khataType
     * @return \Illuminate\Http\Response
     */
    public function edit(KhataTypeEditRequest $request)
    {
        return KhataType::where('id', $request->id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KhataType  $khataType
     * @return \Illuminate\Http\Response
     */
    public function update(KhataTypeUpdateRequest $request)
    {
        if (KhataType::where('id', $request->hidden_id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ])) {
            return response()->json(['message' => 'Khata Type Updated successfully!', 'status' => 200], 200);
        } else {
            return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KhataType  $khataType
     * @return \Illuminate\Http\Response
     */
    public function destroy(KhataTypeDeleteRequest $request)
    {
        if (KhataType::find($request->id)->delete()) {
            return response()->json(['message' => 'Expense Deleted Successfully!!', 'status' => 200], 200);
        }
        return response()->json(['message' => 'Invalid Data supplied ! Please try again!', 'status' => 422], 200);
    }
}
