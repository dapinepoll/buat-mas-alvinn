<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Aqua',
                'qty' => 10
            ],

            [
                'name' => 'Niyan',
                'qty' => 20
            ],

            [
                'name' => 'Mineral',
                'qty' => 30
            ],

            [
                'name' => 'SMS',
                'qty' => 40
            ],

            [
                'name' => 'Air Permata Hijau',
                'qty' => 50
            ],

            [
                'name' => 'Air Mata',
                'qty' => 60
            ]
        ]);
    }
}
