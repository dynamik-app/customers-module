@extends('layouts.frontend.app')

@section('content')
    <div class="card">
        <h1>Edit Customer</h1>

        <x-form action="{{ route('app.customers.update', $customer->customer_id) }}" method="patch">
            <x-form.input name="customer_name">{{ $customer->customer_name }}</x-form.input>
            <x-form.button>Update</x-form.button>
        </x-form>
    </div>
@endsection
