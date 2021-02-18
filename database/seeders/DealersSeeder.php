<?php

namespace Database\Seeders;

use App\Models\Dealers;
use App\Models\User;
use Illuminate\Database\Seeder;

class DealersSeeder extends Seeder
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
            if($user->rol=='dealer'){
                $customer = new Dealers();
                $customer->userId = $user->id;
                $customer->save();
            }
        }
    }
}
