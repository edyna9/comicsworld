<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Character;
use App\Models\Designer;

class NavController extends Controller
{
    public function showHome()
    {
        return view('home');
    }

    public function showList()
    {
        $characters = Character::all();
        return view('list', ['characters'=> $characters]);
    }

    public function showCharacter($id)
    {
        //$characters = Character::all();
        //return view('character',['characters'=> $characters]);
        
        return view('character', ['character' => Character::findOrFail($id)]);
    }

    public function showAddCharacter()
    {   
        $designers = Designer::all()->sortBy('name');
    

        return view('addCharacter', ['designers' => $designers]);
    }

    public function showUpdateCharacter($id)
    {
        $character = Character::findOrFail($id);
        $designers = Designer::all()->sortBy('name');
        return view('updateCharacter', ['character' => $character, 'designers' => $designers]);
    }

    public function showListDesigners()
    {
        $designers = Designer::all();
        return view('listDesigners', ['designers'=> $designers]);
    }

    public function showAddDesigner()
    {   
        return view('addDesigner');
    }

    public function showUpdateDesigner($id)
    {
        $designer = Designer::findOrFail($id);
        
        return view('updateDesigner', ['designer' => $designer]);
    }
}