<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrement('id')->primary()->unsigned();
            $table->string('name');
            $table->string('registration')->unique();
            $table->string('vat',8)->nullable();
            $table->string('contact_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone',11)->nullable();
            $table->string('mobile',11)->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('postcode',14)->nullable();

            $table->timestamps(true);
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
