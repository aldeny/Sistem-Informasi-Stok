<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'name' => 'Manager/Supervisor',
        ]);
        Role::create([
            'name' => 'Administrator',
        ]);
        Role::create([
            'name' => 'Purchasing',
        ]);
        Role::create([
            'name' => 'Supplier',
        ]);
        Role::create([
            'name' => 'Karyawan Gudang',
        ]);
        Role::create([
            'name' => 'Teknisi',
        ]);
    }
}
