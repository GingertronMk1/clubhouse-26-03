<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\UserTypeEnum;
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
            'type' => UserTypeEnum::TYPE_ADMIN->value,
        ]);

        $this->call(ClubSeeder::class);

        $this->command->info('Adding users for clubs');

        Club::query()->each(function (Club $club) {
            $club->users()->attach(User::factory()->create(), ['type' => UserTypeEnum::TYPE_ADMIN]);
            $club->users()->attach(User::factory(10)->create(), ['type' => UserTypeEnum::TYPE_USER]);
        });
    }
}
