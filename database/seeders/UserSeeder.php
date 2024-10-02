<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        DB::table('role_user')->insert([
            'user_id' => $admin->id,
            'role_id' => 1, 
        ]);

        $user = User::factory()->create([
            'name' => 'Normal User',
            'email' => 'user@example.com',
        ]);

        DB::table('role_user')->insert([
            'user_id' => $user->id,
            'role_id' => 2, 
        ]);
    }
}
