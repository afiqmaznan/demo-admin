<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class TableUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@afiqmaznan.com',
               'password'=> bcrypt('thisissecret'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
