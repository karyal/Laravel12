<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Addresses extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('addresses')->insert([
            //1	Balaju	raj@gmail.com	9854788987
            //2	Kalanki	sharmila@gmail.com	9841526398
            //3	Balkhu	gipin@gmail.com	9867895623
            
            /*
            'person_id'=>1,
            'address'=>'Balaju',
            'email'=>'raj@gmail.com',
            'phone'=>'9854788987',
            */

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
