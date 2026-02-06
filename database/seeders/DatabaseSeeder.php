<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\Step;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Robert Bednarowicz',
            'email' => 'robb.bednarowicz@gmail.com',
            'password' => Hash::make('password'),
        ]);    
    
        User::factory(10)->create();

        Idea::factory(50)->create();

        Step::factory(200)->create();
    }
}
