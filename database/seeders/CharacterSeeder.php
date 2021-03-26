<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('characters')->insert([
            [
                'name' => 'Wonder Woman',
                'abilities' => 'Superhuman strength, nigh-invulnerability, speed, flight, fast healing and semi-immortality',
                'publication_year' => 1941,
                'comic' => 'All Star Comics #8',
                'designer_id' => 1,
                'history' => "https://www.youtube.com/embed/EpHaCjDxXsg",
                'description' => "Wonder Woman's character was created during World War II; the character in the story was initially depicted fighting Axis military forces as well as an assortment of colorful supervillains.",
            ],
            [
                'name' => 'Superman',
                'abilities' => 'Superhuman strength, speed, flight and semi-immortality',
                'publication_year' => 1938,
                'comic' => 'Action Comics #1',
                'designer_id' => 2,
                'history' => "https://www.youtube.com/embed/SvGwLHODZgo",
                'description' => "Also called The Man of Steel, The Man of Tomorrow, and The Last Son of Krypton. He is the one who saves the world day in, day out. He defends the people against the evil monsters.",
            ],
            [
                'name' => 'Aquaman',
                'abilities' => 'Night Vision, Intense Heat Resistance, Telepathy, Superhuman Strength',
                'publication_year' => 1941,
                'comic' => 'More Fun Comics',
                'designer_id' => 3,
                'history' => "https://www.youtube.com/embed/HS3PQf1jW3c",
                'description' => "Aquaman's biography and origin has been reinvented several times since 1941. Aquaman has several superhuman powers.",
            ],
        ]);

    }
}
