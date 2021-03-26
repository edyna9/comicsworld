<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Designer;

class ActionController extends Controller
{
    public function addCharacter(Request $request)
    {
        $character= new Character;
        $character->name = $request->name;
        $character->abilities = $request->abilities;
        $character->publication_year = $request->publication_year ;
        $character->comic = $request->comic ;
        $character->designer_id = $request->designer_id ;
        $character->history = $request->history ;
        $character->description = $request->description;
        $character->save();
        
        return redirect('/list');
    }

    public function deleteCharacter(Request $request)
    {
        //$character = Character::find($request->id);
        //$character->delete();

        Character::destroy($request->id);

        return redirect('/list');
    }

    public function updateCharacter(Request $request)
    {
        $character = Character::findOrFail($request->id);
        $character->name = $request->name;
        $character->abilities = $request->abilities;
        $character->publication_year = $request->publication_year ;
        $character->comic = $request->comic ;
        $character->designer_id = $request->designer_id ;
        $character->history = $request->history ;
        $character->description = $request->description;
        
        $character->save();
        return redirect('/list'); 
    }

    public function addDesigner(Request $request)
    {
        $designer= new Designer;
        $designer->name = $request->name;
        $designer->nationality = $request->nationality;
        $designer->year_birth = $request->year_birth ;
        $designer->biography = $request->biography ;
        $designer->save();
        
        return redirect('/listDesigners');
    }

    public function deleteDesigner(Request $request)
    {
        //$designer = Designer::find($request->id);
        //$designer->delete();

        Designer::destroy($request->id);

        return redirect('/listDesigners');
    }

    public function updateDesigner(Request $request)
    {
        $designer = Designer::findOrFail($request->id);
        $designer->name = $request->name;
        $designer->nationality = $request->nationality;
        $designer->year_birth = $request->year_birth ;
        $designer->biography = $request->biography ;
        $designer->save();
        return redirect('/listDesigners'); 
    }

    
}
