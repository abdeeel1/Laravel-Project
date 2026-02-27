<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('acteurs')->insert([
            [
                "nom" => "white",
                "prenom" => "walter",
                "date_naissance" => "1980-02-15",
                "tel" => "+1 458 452"
            ],
            [
                "nom" => "morgan",
                "prenom" => "arthur",
                "date_naissance" => "2000-10-10",
                "tel" => "+1 114 235"
            ]
        ]);
    }
}
