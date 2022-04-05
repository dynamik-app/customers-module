<?php

namespace Modules\Customers\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CustomersDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
