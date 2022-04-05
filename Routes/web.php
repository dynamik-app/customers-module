<?php

use Modules\Customers\Http\Controllers\CustomersController;

Route::middleware('auth')->prefix('app/customers')->group(function() {
    Route::get('/', [CustomersController::class, 'index'])->name('app.customers.index');
    Route::get('create', [CustomersController::class, 'create'])->name('app.customers.create');
    Route::post('create', [CustomersController::class, 'store'])->name('app.customers.store');
    Route::get('edit/{id}', [CustomersController::class, 'edit'])->name('app.customers.edit');
    Route::patch('edit/{id}', [CustomersController::class, 'update'])->name('app.customers.update');
    Route::delete('delete/{id}', [CustomersController::class, 'destroy'])->name('app.customers.delete');
});
