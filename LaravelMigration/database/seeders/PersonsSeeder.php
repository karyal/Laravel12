<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persons')->insert([
            'fullname'=>'Raj Rai',
            'address'=>'Balaju',
            'email'=>'raj@gmail.com',
            'phone'=>'985478787'
        ]);
    }
}
