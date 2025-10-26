<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('students')->insert([
            'fullname'=>'Raj Rai',
            'course'=>'BSc Computing',
            'level'=>'Level-4',
            'section'=>'A'
        ]);
    }
}
