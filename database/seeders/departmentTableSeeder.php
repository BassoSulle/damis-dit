<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\department;
class departmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
$departments=[
    [
        'name'=>'ICT and Technology Development',
        'department_code'=>''
    ],
    [
        'name'=>'Industrial Research',
        'department_code'=>''
    ],
    [
        'name'=>'Human Resources and Administration ',
        'department_code'=>''
    ],
    [
        'name'=>'Finance',
        'department_code'=>''
    ],
    [
        'name'=>'Engineering Development',
        'department_code'=>''
    ],

];
    foreach($departments as $key=>$value){
    department::create($value);
    };

    }
}
