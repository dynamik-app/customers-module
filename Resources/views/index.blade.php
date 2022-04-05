@extends('layouts.frontend.app')

@section('content')
    <div class="card">
    <h1>Customers</h1>

    <p><a href="{{ route('app.customers.create') }}">Add Customer</a> </p>

    <table>
        <tr>
            <td>Name</td>
            <td>Action</td>
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->customer_name }}</td>
                <td>
                    <a href="{{ route('app.customers.edit', $customer->customer_id) }}">Edit</a>

                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>
                    <x-form id="delete-form" method="delete" action="{{ route('app.customers.delete', $customer->customer_id) }}" />
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection
