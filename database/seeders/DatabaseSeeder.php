<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(ClubSeeder::class);

        $this->command->info('Adding users for clubs');

        Club::query()->each(function (Club $club) {
            $club->users()->attach(User::factory(10)->create());
        });
    }
}
