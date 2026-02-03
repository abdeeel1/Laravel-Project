<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(){
        $name = "abdessamad";
        $title = "Portfolio Laravel";

        return view("layouts.home", compact('name', 'title'));
    }

    public function about(){
        $bio = "My name is abdessamad najib junior full stack web developer.";
        $skills = ["Php", "Html", "Css", "React", "Laravel"];
        $name = "abdessamad";

        return view("layouts.about", compact('bio', 'skills', 'name'));
    }

    public function projects(){
        $projects = [
            ["name" => "professional calculator", "description" => "a proffesional web calculator using javascript"],
            ["name" => "weather application", "description" => "weather that fetch real data from an api"]
        ];
        $name = "abdessamad";

        return view("layouts.projects", compact('projects', 'name'));
    }

    public function contact(){
        $email = "najibabdessamad10@gmail.com";
        $phone = "0697483167";
        $name = "abdessamad";

        return view("layouts.contact", compact('email', 'phone', 'name'));
    }
}
