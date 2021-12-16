<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreordersRequest;
use App\Http\Requests\UpdateordersRequest;
use App\Models\orders;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $customer;

    public function __construct()
    {
        $this->customer = JWTAuth::parseToken()->authenticate();
    }


    public function index()
    {
        return $this->customer->orders()->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreordersRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreordersRequest $request)
    {
        $data = $request->only('serviceID', 'customerID', 'automobileID', 'totalAmount');
        $validator = Validator::make($data, [
            'serviceID' => 'required',
            'customerID' => 'required',
            'automobileID' => 'required|string',
            'totalAmount' => 'required|double'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new product
        $order = new orders([
            'serviceID' => $request->serviceID,
            'customerID' => $request->customerID,
            'automobileID' => $request->automobileID,
            'totalAmount' => $request->totalAmount
        ]);
        $order->save();

        //Product created, return success response
        return response()->json([
            'success' => true,
            'message' => 'Order placed successfully',
            'data' => $order
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(orders $orders)
    {
        if(!$orders)
        {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, order not found.'
            ], 400);
        }
        return response()->json([
            'success' => true,
            'message' => 'Order found successfully.',
            'data' => $orders
        ], Response::HTTP_OK);
    }

}
