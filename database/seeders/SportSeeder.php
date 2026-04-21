<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getSports() as $name => $scoring) {
            Sport::query()->updateOrCreate([
                'name' => $name,
                'description' => $name,
                'scoring' => $scoring,
            ]);
        }
    }

    /**
     * @return array<string, array<string, int>>
     */
    private function getSports(): array
    {
        return [
            'Rugby League' => [
                'try' => 4,
                'conversion' => 2,
                'penalty' => 2,
                'drop-goal' => 1,
            ],
            'Rugby Union' => [
                'try' => 5,
                'conversion' => 2,
                'penalty' => 3,
                'drop-goal' => 3,
            ],
            'Touch Rugby' => [
                'try' => 1,
            ],
        ];
    }
}
