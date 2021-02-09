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
            if($user->rol==1){
                $customer = new Dealers();
                $customer->userId = $user->id;
                $customer->save();
            }
        }
    }
}
