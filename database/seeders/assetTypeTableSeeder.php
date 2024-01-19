<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\asset_type;

class assetTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $asset_types=[
            [
                'name'=>'land',
            ],
            [
                'name'=>'MPM',
            ],
            [
                'name'=>'Books',
            ],
            [
                'name'=>'Building',
            ],
            [
                'name'=>'Funiture',
            ],
            [
                'name'=>'Biological Asset',
            ],
            [
                'name'=>'Infrasructure',
            ],
            [
                'name'=>'Intangible Asset',
            ],
            
        ];

        foreach($asset_types as $key=>$value){
            asset_type::create($value);
            };

    }
}
