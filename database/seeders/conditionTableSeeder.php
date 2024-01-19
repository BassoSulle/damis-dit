<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\condition;

class conditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conditions=[
            [
            'name'=>'new',
            ],
            [
                'name'=>'very good',
            ],
            [
                'name'=>'good',
            ],
            [
                'name'=>'fair',
            ],
            [
                'name'=>'poor',
            ],
            [
                'name'=>'very poor',
            ],
            [
                'name'=>'obsolete',
            ],
        ];
        foreach($conditions as $key=>$value){
            condition::create($value);
            };

        //
    }
}
