<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\role;

class roleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles=[
            // [
            // 'name'=>'admin',

            // ],
            [
                'name'=>'estate',

            ],
            [
                'name'=>'director',

            ],
            [
                'name'=>'store keeper',

            ],
            [
                'name'=>'stock checker',

            ],
            
            [
                'name'=>'head of section',

            ],
            [
                'name'=>'head of office',

            ],
        ];
        foreach($roles as $key=>$value){
            role::create($value);
            };

    }
}
