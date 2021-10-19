<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkerDelete;
use App\Http\Requests\WorkerEdit;
use App\Http\Requests\WorkerStore;
use App\Http\Requests\WorkerUpdate;
use App\Models\Worker;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::all();
        return view('worker.index')->with('workers', $workers);
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
    public function store(WorkerStore $request)
    {
        // return $request->all();
        try {
            DB::beginTransaction();
            if ($request->hasFile('wimage')) {
                $filenameWithExt = $request->file('wimage')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('wimage')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $request->file('wimage')->move(public_path('images/profile'), $fileNameToStore);
            } else {
                $fileNameToStore = NULL;
            }

            $create = Worker::create([
                'name' => $request->wname,
                'address' => $request->waddress,
                'phoneNo' => $request->wphone,
                'cnic' => $request->wcnic,
                'peshgi' => $request->wpeshgi,
                'image' => $fileNameToStore
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
            return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
        }
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
    public function edit(WorkerEdit $request)
    {
        return Worker::where('id', $request->id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkerUpdate $request)
    {
        if (Worker::where('id', $request->hidden_id)->update([
            'name' => $request->wname,
            'address' => $request->waddress,
            'phoneNo' => $request->wphone,
            'cnic' => $request->wcnic,
            'peshgi' => $request->wpeshgi
        ])) {
            return response()->json(['message' => 'Worker Updated successfully!', 'status' => 200], 200);
        } else {
            return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (Worker::find($request->id)->delete()) {
            return response()->json(['message' => 'Worker Deleted Successfully!!', 'status' => 200], 200);
        }
        return response()->json(['message' => 'Invalid Data supplied! Please try again!', 'status' => 422], 200);
    }

    public function data()
    {
        $workers = Worker::all();
        return response()->json($workers);
    }
}
