<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert([
            [
                'name' => 'William Moulton Marston',
                'nationality' => 'American',
                'year_birth' => 1893,
                'biography' => 'https://en.wikipedia.org/wiki/William_Moulton_Marston',
            ],
            [
                'name' => 'Joe Shuster',
                'nationality' => 'Canadian, American',
                'year_birth' => 1914,
                'biography' => 'https://en.wikipedia.org/wiki/Joe_Shuster',
            ],
            [
                'name' => 'Paul Norris',
                'nationality' => 'American',
                'year_birth' => 1914,
                'biography' => 'https://en.wikipedia.org/wiki/Paul_Norris',
            ],
            [
                'name' => 'Joe Shuster',
                'nationality' => 'American',
                'year_birth' => 1911,
                'biography' => 'https://en.wikipedia.org/wiki/Gardner_Fox',
            ],
        ]);

    }
}
