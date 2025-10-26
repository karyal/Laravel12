<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonAddresses extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        DB::table('addresses')->insert([                                    
            'person_id'=>1,
            'address'=>'Balaju'
            /*
            'person_id'=>2,
            'address'=>'Kalanki',
            'email'=>'sharmila@gmail.com',
            'phone'=>'9841526398',            
            */

            /*
            'person_id'=>3,
            'address'=>'Balkhu',
            'email'=>'gipin@gmail.com',
            'phone'=>'9867895623',            
            */
        ]);
    }
}