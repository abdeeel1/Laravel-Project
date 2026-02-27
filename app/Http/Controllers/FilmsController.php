<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmsController extends Controller
{
    //

    public function index(){
        $films = DB::table("films")->get();

        if($films){
            return view("gestion-films.films", compact("films"));
        }
    } 

    public function show($id){
        $film = DB::table("films")->find($id);
        return view("gestion-films.filmDetail", compact('film'));
    }

    public function filmsActeurs($id){
        $acteurs = DB::table("participations")
        ->join('acteurs', 'participations.acteur_id', '=', 'acteurs.id')
        ->join('films', 'participations.films_id', '=', 'films.id')
        ->where('films.id', $id)
        ->select(
            "acteurs.nom",
            "films.titre",
            "acteurs.prenom",
            "acteurs.tel",
            "participations.typeRole",
            "participations.role",
        )
        ->get();

        

        

        return view('gestion-films.filmActeurs', compact('acteurs'));
    }
}
