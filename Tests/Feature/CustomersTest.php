<?php

use Modules\Customers\Models\Customer;

uses(Tests\TestCase::class);

test('can see customer list', function() {
    $this->authenticate();
   $this->get(route('app.customers.index'))->assertOk();
});

test('can see customer create page', function() {
    $this->authenticate();
   $this->get(route('app.customers.create'))->assertOk();
});

test('can create customer', function() {
    $this->authenticate();
   $this->post(route('app.customers.store', [
       'name' => 'Joe',
       'email' => 'joe@joe.com'
   ]))->assertRedirect(route('app.customers.index'));

   $this->assertDatabaseCount('customers', 1);
});

test('can see customer edit page', function() {
    $this->authenticate();
    $customer = Customer::factory()->create();
    $this->get(route('app.customers.edit', $customer->id))->assertOk();
});

test('can update customer', function() {
    $this->authenticate();
    $customer = Customer::factory()->create();
    $this->patch(route('app.customers.update', $customer->id), [
        'name' => 'Joe Smith',
       'email' => 'joe@joe.com'
    ])->assertRedirect(route('app.customers.index'));

    $this->assertDatabaseHas('customers', ['name' => 'Joe Smith']);
});

test('can delete customer', function() {
    $this->authenticate();
    $customer = Customer::factory()->create();
    $this->delete(route('app.customers.delete', $customer->id))->assertRedirect(route('app.customers.index'));

    $this->assertDatabaseCount('customers', 0);
});