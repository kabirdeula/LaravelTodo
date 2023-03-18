<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Kabir Deula',
            'email' => 'kabirdeula167@gmail.com',
            'password' => Hash::make('lunala0802'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Sanisha Maharjan',
            'email' => 'msanisha01@gmail.com',
            'password' => Hash::make('sanshook'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Sameer Ali',
            'email' => 'alisamir@gmail.com',
            'password' => Hash::make('princeali'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Sashwot Subedi',
            'email' => 'prazwolsubedi@gmail.com',
            'password' => Hash::make('daiprazz'),
        ]);
    }
}
