<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
use App\Models\services;
use Symfony\Component\HttpFoundation\Response;

class ServicesController extends Controller
{

    public function index()
    {
        $services= services::all()->get();

        if(!$services)
        {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, order not found.'
            ], 400);
        }
        return response()->json([
            'success' => true,
            'message' => 'Success.',
            'data' => $services->toJson()
        ], Response::HTTP_OK);
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
     * @param  \App\Http\Requests\StoreservicesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreservicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(services $services)
    {
        if(!$services)
        {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, service not found.'
            ], 400);
        }
        return response()->json([
            'success' => true,
            'message' => 'Success.',
            'data' => $services->toJson()
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateservicesRequest  $request
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateservicesRequest $request, services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(services $services)
    {
        //
    }
}
