<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solar_systems')->insert([
            'name' => 'Mlikyway System',
            'age_in_years' => 4500000000,
        ]);
        DB::table('solar_systems')->insert([
            'name' => 'ProximaCentauri System',
            'age_in_years' => 2300000000,
        ]);
        DB::table('planets')->insert([
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
            'solar_system_id' => 1,
        ]);
        DB::table('planets')->insert([
            'name' => 'Mercury',
            'description' => 'Mercury is the smallest planet in the Solar System and the closest to the Sun. Its orbit around the Sun takes 87.97 Earth days, the shortest of all the Sun planets.',
            'solar_system_id' => 1,
        ]);
        DB::table('planets')->insert([
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
            'solar_system_id' => 1,
        ]);
        DB::table('planets')->insert([
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.',
            'solar_system_id' => 1,
        ]);
        DB::table('planets')->insert([
            'name' => 'Jupiter',
            'description' => 'Jupiter is the fifth planet from the Sun and the largest in the Solar System.',
            'solar_system_id' => 1,
        ]);
        DB::table('planets')->insert([
            'name' => 'Saturn',
            'description' => 'Saturn is the sixth planet from the Sun and the second-largest in the Solar System, after Jupiter.',
            'solar_system_id' => 1,
        ]);
        DB::table('planets')->insert([
            'name' => 'Neptune',
            'description' => 'Neptune is the eighth and farthest-known Solar planet from the Sun. In the Solar System, it is the fourth-largest planet by diameter, the third-most-massive planet, and the densest giant planet.',
            'solar_system_id' => 1,
        ]);
        DB::table('planets')->insert([
            'name' => 'Uranus',
            'description' => 'Uranus is the seventh planet from the Sun. Its name is a reference to the Greek god of the sky, Uranus, who, according to Greek mythology, was the great-grandfather of Ares (Mars), grandfather of Zeus (Jupiter) and father of Cronus (Saturn).',
            'solar_system_id' => 1,
        ]);
        DB::table('planets')->insert([
            'name' => 'Uranus',
            'description' => 'Uranus is the seventh planet from the Sun. Its name is a reference to the Greek god of the sky, Uranus, who, according to Greek mythology, was the great-grandfather of Ares (Mars), grandfather of Zeus (Jupiter) and father of Cronus (Saturn).',
            'solar_system_id' => 2,
        ]);
        DB::table('planets')->insert([
            'name' => 'Proxima Centauri c',
            'description' => 'Proxima Centauri c (also called Proxima c[2] or Alpha Centauri Cc) is a very strong exoplanet candidate orbiting the red dwarf star Proxima Centauri, which is the closest star to the Sun and part of a triple star system.',
            'solar_system_id' => 2,
        ]);
        DB::table('planets')->insert([
            'name' => 'BLC1',
            'description' => 'BLC1 (Breakthrough Listen Candidate 1) was a candidate SETI radio signal detected and observed during April and May 2019, and first reported on 18 December 2020, spatially coincident with the direction of the Solar systems closest star, Proxima Centauri.',
            'solar_system_id' => 2,
        ]);
        DB::table('planets')->insert([
            'name' => 'Centaurus',
            'description' => 'Centaurus is a bright constellation in the southern sky. One of the largest constellations, Centaurus was included among the 48 constellations listed by the 2nd-century astronomer Ptolemy, and it remains one of the 88 modern constellations.',
            'solar_system_id' => 2,
        ]);
        DB::table('planets')->insert([
            'name' => 'Red dwarf',
            'description' => 'Red dwarf is the smallest and coolest kind of star on the main sequence',
            'solar_system_id' => 2,
        ]);
        DB::table('planets')->insert([
            'name' => 'Alpha Centauri Cb',
            'description' => ' orbits the star at a distance of roughly 0.05 AU (7.5 million km) with an orbital period of approximately 11.2 Earth days. Its estimated mass is at least 1.17 times that of the Earth.',
            'solar_system_id' => 2,
        ]);
    }
}
