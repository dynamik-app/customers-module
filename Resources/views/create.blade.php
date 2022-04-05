@extends('layouts.frontend.app')

@section('content')
    <div class="card">
        <h1>Add Customer</h1>

        <x-form action="{{ route('app.customers.create') }}">
            <x-form.input name="customers_name" />
            <x-form.button>Submit</x-form.button>
        </x-form>
    </div>
@endsection
