<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::all();
        return response()->json($routes);
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
        Log::info($request);

        $route = new Route([
            'id' => $request->get('id'),
            'external_id' => $request->get('external_id'),
            'invitation_code' => $request->get('invitation_code'),
            'title' => $request->get('title'),
            'start' => $request->get('start'),
            'end' => $request->get('end')
        ]);

        $route->save();
        return response()->json(['success' => 'Route has been added']);
    }

    public function show($id)
    {
        $route = Route::find($id);
        return response()->json($route);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $route = Route::find($id);
        $route->title = $request->get('title');
        $route->body = $request->get('body');
        $route->save();
        return response()->json(['success' => 'Route has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = Route::find($id);
        $route->delete();
        return response()->json(['success' => 'Route has been deleted']);
    }
}
