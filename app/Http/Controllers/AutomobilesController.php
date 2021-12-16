<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreautomobilesRequest;
use App\Http\Requests\UpdateautomobilesRequest;
use App\Models\automobiles;

class AutomobilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreautomobilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreautomobilesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\automobiles  $automobiles
     * @return \Illuminate\Http\Response
     */
    public function show(automobiles $automobiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\automobiles  $automobiles
     * @return \Illuminate\Http\Response
     */
    public function edit(automobiles $automobiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateautomobilesRequest  $request
     * @param  \App\Models\automobiles  $automobiles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateautomobilesRequest $request, automobiles $automobiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\automobiles  $automobiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(automobiles $automobiles)
    {
        //
    }
}
