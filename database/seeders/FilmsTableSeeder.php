<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('films')->insert([
            [
                "titre" => "Breaking Bad",
                "pays" => "USA",
                "annee" => "2007",
                "duree" => 5,
                "genre" => "meth"
            ],
            [
                "titre" => "Dexter",
                "pays" => "Morocco",
                "annee" => "2015",
                "duree" => 10,
                "genre" => "death"
            ],
            [
                "titre" => "The GodFather",
                "pays" => "Mexique",
                "annee" => "2010",
                "duree" => 8,
                "genre" => "mafia"
            ]
        ]);
    }
}
