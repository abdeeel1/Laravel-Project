<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class StagiaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FacadesDB::table("stagiaires")->insert([
            [
                "nom" => "mouad",
                "genre" => "H",
                "note" => 20,
                "groupe" => "DEVOWFS-204"
            ],
            [
                "nom" => "abdessamad",
                "genre" => "H",
                "note" => 20,
                "groupe" => "DEVOWFS-204"
            ]
        ]);
    }
}
