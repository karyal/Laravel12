<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Persons extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('persons')->insert([
            //Raj Rai, Sharmila Sharma, Gipin Shrestha
            'name'=>'Raj Rai'
            //'name'=>'Sharmila Sharma'
            //'name'=>'Gipin Shrestha'
        ]);
    }
}