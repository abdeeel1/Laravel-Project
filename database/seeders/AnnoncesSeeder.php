<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnoncesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        

        DB::table('annonces')->insert([
            [
                "titre" => "Vente dune maison R+2",
                "desc" => "decription 1",
                "type" => "Maison",
                "ville" => "Fes",
                "superficie" => 120,
                "etat" => "Neuf",
                "prix" => 1800000.00
            ],
            [
                "titre" => "Vente dune maison R+4",
                "desc" => "decription 2",
                "type" => "Maison",
                "ville" => "Casablanca",
                "superficie" => 140,
                "etat" => "Ancien",
                "prix" => 4000000.00
            ],
        ]);
    }
}
