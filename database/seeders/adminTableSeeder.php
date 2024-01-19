<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class adminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin=[
            [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('@admin'),
            'remember_token'=>Str::random(60),
            'role_id'=>1,
            ],
        ];

        foreach($admin as $key=>$value){
            User::create($value);
            };


    }
}
