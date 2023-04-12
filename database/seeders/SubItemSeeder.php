<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_items')->insert([
            [
                'items_id' => 1,
            ],

            [
                'items_id' => 2,
            ],

            [
                'items_id' => 3,
            ],
        ]);
    }
}
