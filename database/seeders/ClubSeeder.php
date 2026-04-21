<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getClubs() as $name) {
            Club::query()->updateOrCreate(
                [
                    'name' => $name,
                    'description' => $name,
                ],
            );
        }
    }

    private function getClubs(): array
    {
        return [
            // Rugby league clubs
            'Barrow Raiders',
            'Batley Bulldogs',
            'Bradford Bulls',
            'Castleford Tigers',
            'Catalans Dragons',
            'Dewsbury Rams',
            'Doncaster',
            'Featherstone Rovers',
            'Halifax Panthers',
            'Huddersfield Giants',
            'Hull FC',
            'Hull Kingston Rovers',
            'Hunslet',
            'Keighley Cougars',
            'Leeds Rhinos',
            'Leigh Leopards',
            'London Broncos',
            'Midlands Hurricanes',
            'North Wales Crusaders',
            'Oldham',
            'Rochdale Hornets',
            'St. Helens',
            'Salford Red Devils',
            'Sheffield Eagles',
            'Swinton Lions',
            'Toulouse Olympique',
            'Wakefield Trinity',
            'Warrington Wolves',
            'Whitehaven',
            'Widnes Vikings',
            'Wigan Warriors',
            'Workington Town',
            'York Knights',

            // Rugby union clubs
            'Bath',
            'Bedford Blues',
            'Bristol Bears',
            'Coventry',
            'Exeter Chiefs',
            'Gloucester',
            'Harlequins',
            'Leeds Tykes',
            'Leicester Tigers',
            'Liverpool St Helens',
            'London Irish',
            'London Scottish',
            'London Welsh',
            'Moseley',
            'Newcastle Red Bulls',
            'Northampton Saints',
            'Nottingham',
            'Orrell',
            'Richmond',
            'Rosslyn Park',
            'Rotherham Titans',
            'Rugby Lions',
            'Sale Sharks',
            'Saracens',
            'Wasps',
            'Waterloo',
            'West Hartlepool',
            'Worcester Warriors',

            // IGR Touch clubs
            'Nottinghamshire Hurricanes',
            'Lincoln Lancers',
            'Preston Typhoons',
            'Sheffield Vulcans',
            'Coventry Corsairs',
            'Birmingham Longhorns',
            'Chester Centurions',
            'Manchester Spartans',
            'Leeds Hunters',
            'Hull Roundheads',
            'Newcastle Ravens',
        ];
    }
}
