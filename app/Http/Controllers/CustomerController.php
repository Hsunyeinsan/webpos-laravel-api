<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    


    public function index(Request $request)
    {

        

        $query = Customer::query();
        $keyword = $request->get('q');
        $query->where(function ($q) use ($keyword) {
            $q->where('name', 'like', "%{$keyword}")
                ->orWhere('email', 'like', "%{$keyword}")
                ->orWhere('phone', 'like', "%{$keyword}")
                ->orWhere('address', 'like', "%{$keyword}")
                ->orWhere('gender', 'like', "%{$keyword}")
                ->orWhere('date_of_birth', 'like', "%{$keyword}");
        });

        $filterByGender = $request->get('filter_by_gender');
        if ($filterByGender) {
            $query->where('gender', $filterByGender);
        }

        $sortBy = $request->get('sort_by') ?? 'id';
        $sortDirection = $request->get('sort_direction') ?? 'desc';
        $query->orderBy($sortBy, $sortDirection);

        $customers = $query->paginate(7);

        return response()->json([
            'data' => CustomerResource::collection($customers),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {

        $customerData = [...$request->validated(), 'user_id' =>Auth::id()];

        $customer = Customer::create($customerData);

        return response()->json([
            'message' => 'customer created successfully', 
            'data' => new CustomerResource($customer)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return response()->json([
            'data' => new CustomerResource($customer)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {

        $customer->update($request->validated());

        return response()->json([
            'message' => 'customer updated successfully', 
            'data' => new CustomerResource($customer)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->json([
            
            'data' => [
                "messages"=>"customer deleted successfully"
            ]
        ]);

    }
}
