<?php

namespace Database\Seeders;

use App\Models\Microbe;
use App\Models\SubCategory;
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        SubCategory::truncate();

        SubCategory::flushEventListeners();
        
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
        ]);

        $subCategoryQuantity = 100;

        Microbe::factory()
            ->count($subCategoryQuantity)
            ->create();
    }
}
