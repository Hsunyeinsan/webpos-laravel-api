<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers=Customer::all();

        return CustomerResource::collection($customers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $customer=Customer::create($request->validated());

        return response()->json([
            "message"=>"customer created successfully",
            "data"=>new CustomerResource($customer),
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return response()->json([
                "data"=>new CustomerResource($customer),
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());

        return response()->json([
            "message"=>"Customer updated successfully",
            "data"=>new CustomerResource($customer->fresh())
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->json([
            "data"=>[
                "message"=>"Customer deleted successfully",
            ]
        ],200);
    }
}
