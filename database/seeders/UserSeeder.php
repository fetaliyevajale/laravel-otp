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
        // Admin istifadəçisini yaradın və ona admin rolunu təyin edin
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        // Rolunu təyin edin
        DB::table('role_user')->insert([
            'user_id' => $admin->id,
            'role_id' => 1, // 1 Admin rolunu təmsil edir
        ]);

        // Normal istifadəçi yaradın və ona user rolunu təyin edin
        $user = User::factory()->create([
            'name' => 'Normal User',
            'email' => 'user@example.com',
        ]);

        // Rolunu təyin edin
        DB::table('role_user')->insert([
            'user_id' => $user->id,
            'role_id' => 2, // 2 User rolunu təmsil edir
        ]);
    }
}
