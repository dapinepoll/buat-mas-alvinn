<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\SubItem;
use App\Models\User;
use Database\Factories\ItemFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         Item::factory(20)->create();
        $this->call(ItemSeeder::class); // ini udh manggil si seeder nya
        $this->call(SubItemSeeder::class);
    }
}
