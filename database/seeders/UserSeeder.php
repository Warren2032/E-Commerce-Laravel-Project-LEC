<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'Warren K',
                'email'=>"a@gmail.com",
                'password'=> Hash::make('testing'),
                'gender'=>'Male',
                'admin'=>true,
                'dob'=>'2022-10-10',
            ],
            [
                'name'=>'AAA',
                'email'=>"bbb@gmail.com",
                'password'=> Hash::make('testing'),
                'gender'=>'Male',
                'admin'=>true,
                'dob'=>'2022-10-10',
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
