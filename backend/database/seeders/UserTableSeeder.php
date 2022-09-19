<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'slug' => str::slug(str::random(20)),
            'name' => 'Aminata Sow',
            'email' => 'natasow@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'admin',
            'image' => 'user.png',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\User::factory(50)->create();
    }
}
