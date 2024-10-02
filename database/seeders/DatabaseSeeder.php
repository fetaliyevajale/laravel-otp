<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Rolları və istifadəçiləri seeder vasitəsilə əlavə edin
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
