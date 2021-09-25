<?php

namespace App\Http\Controllers;

use App\Http\Requests\BorrowRequest;
use App\Http\Requests\ReturnRequest;
use App\Models\Borrowed;
use App\Models\Returned;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerBorrowNreturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::withSum(['borrowed_amounts:amount', 'returned_amounts:amount'])->get();
        return view('worker.index')->with('workers', $workers);
    }

    public function history($id)
    {
        $workers = Worker::where('id', $id)->with(['borrowed_amounts', 'returned_amounts'])->first();
        // return $workers;
        return view('worker.index')->with('workers', $workers);
    }

    public function borrow_amount(BorrowRequest $request)
    {
        if (Borrowed::create([
            'amount' => $request->amount,
            'worker_id' => $request->user_id,
            'borrowed_from_id' => Auth::user()->id
        ]) && Worker::where('id', $request->user_id)->increment('peshgi', $request->amount)) {
            return response()->json(['message' => 'Worker borrowed successfully!', 'status' => 200], 200);
        } else {
            return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
        }
    }

    public function return_amount(ReturnRequest $request)
    {
        if (Returned::create([
            'amount' => $request->amount,
            'worker_id' => $request->user_id,
            'returned_to_id' => Auth::user()->id
        ]) && Worker::where('id', $request->user_id)->decrement('peshgi', $request->amount)) {
            return response()->json(['message' => 'Worker returned successfully!', 'status' => 200], 200);
        } else {
            return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
        }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
