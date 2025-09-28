<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest('id')->get();
        return Inertia::render('Customers/Index', [
            'customers' => $customers
        ]);
    }

    public function create()
    {
        return Inertia::render('Customers/Create');
    }

    public function store(StoreCustomerRequest $request)
    {
        $data = $request->validated();
        Customer::create($data);
        return redirect()->route('customers.index');
    }

    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        //
    }

    public function update(Request $request, Customer $customer)
    {
        //
    }

    public function destroy(Customer $customer)
    {
        //
    }
}
