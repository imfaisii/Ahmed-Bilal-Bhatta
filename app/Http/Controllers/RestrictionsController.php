<?php

namespace App\Http\Controllers;

use App\Models\Restrictions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestrictionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.restrictions.index');
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
     * @param  \App\Models\Restrictions  $restrictions
     * @return \Illuminate\Http\Response
     */
    public function show(Restrictions $restrictions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restrictions  $restrictions
     * @return \Illuminate\Http\Response
     */
    public function edit(Restrictions $restrictions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restrictions  $restrictions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (Auth::user()->id == 1 || Auth::user()->id == 2) {
            if (Restrictions::where('user_id', $request->user_id)->update([
                'access' => $request->check
            ]))
                return response()->json(['message' => 'success', 'response' => 'Access changed successfully !', 'status' => '200'], 200);
            else
                return response()->json(['message' => 'failed', 'response' => 'Internal server error !', 'status' => '400'], 200);
        } else {
            return response()->json(['message' => 'failed', 'response' => 'You dont have rights to do this! Good luck for the future !', 'status' => '409'], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restrictions  $restrictions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restrictions $restrictions)
    {
        //
    }
}
