<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClinicSeeder::class,
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'A.N. Other',
            'email' => 'test@example.com',
        ]);
    }
}
