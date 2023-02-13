<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
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

        $user = new User([
            'id' => $request->get('id'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'new_email' => $request->get('new_email'),
            'password' => $request->get('password'),
            'phone_number' => $request->get('phone_number'),
            'picture' => $request->get('picture'),
            'last_online' => $request->get('last_online'),
            'verification_code' => $request->get('verification_code'),
            'company_contact' => $request->get('company_contact'),
            'credits' => $request->get('credits'),
            'first_trip' => $request->get('first_trip'),
            'incomplete_profile' => $request->get('incomplete_profile'),
            'phone_verify' => $request->get('phone_verify'),
            'token_auto_login' => $request->get('token_auto_login'),
            'user_vertical' => $request->get('user_vertical'),
            'language_id' => $request->get('language_id'),
            'no_registered' => $request->get('no_registered'),
            'last_accept_date' => $request->get('last_accept_date'),
        ]);

        $user->save();
        return response()->json(['success' => 'User has been added']);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $user = User::find($id);
        $user->title = $request->get('title');
        $user->body = $request->get('body');
        $user->save();
        return response()->json(['success' => 'user has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['success' => 'user has been deleted']);
    }
}