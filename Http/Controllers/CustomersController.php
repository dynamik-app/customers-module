<?php

namespace Modules\Customers\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Customers\Models\Customer;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::get();

        return view('customers::index', compact('customers'));
    }

    public function create()
    {
        return view('customers::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customers_name' => 'required|string'
        ]);

        Customer::create([
            'customers_name' => $request->input('customers_name')
        ]);

        return redirect(route('app.customers.index'));
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customers::edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customers_name' => 'required|string'
        ]);

        Customer::findOrFail($id)->update([
            'customers_name' => $request->input('customers_name')
        ]);

        return redirect(route('app.customers.index'));
    }

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();

        return redirect(route('app.customers.index'));
    }
}
