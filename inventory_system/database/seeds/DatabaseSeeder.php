<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            	'id' => '1',
            	'name' => 'utensils',
            ],
            [
            	'id' => '2',
            	'name' => 'equipments',
            ]
        ]);
    }
}