<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Customers;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=User::get();
        foreach ($users as $user){
            if($user->rol==0){
                $customer = new Customers();
                $customer->userId = $user->id;
                $customer->save();
            }
        }
    }
}
