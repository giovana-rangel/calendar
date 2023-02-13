<?php

namespace App\Http\Controllers;

use App\UserPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class UsersPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersplan = UserPlan::all();
        return response()->json($usersplan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info($request);

        $userplan = new UserPlan;
        $userplan->fill($request->all());
        $userplan->save();
        return response()->json(['success' => 'userPlan has been added']);
    }

    public function show($id)
    {
        $userPlan = UserPlan::find($id);
        return response()->json($userPlan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $userPlan = UserPlan::find($id);
        $userPlan->title = $request->get('title');
        $userPlan->body = $request->get('body');
        $userPlan->save();
        return response()->json(['success' => 'userPlan has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userPlan = UserPlan::find($id);
        $userPlan->delete();
        return response()->json(['success' => 'userPlan has been deleted']);
    }
}