@extends('layouts.master')

@section('title', 'Add a Designer')

@section('content')
<div class="contenu">
    <h1>Add a Designer</h1>
        <h2>Make our list better</h2>
        <div>
            <form action="/addDesigner" method="POST">
                @csrf
                <div>
                    <label for="name">Designer</label>
                    <div>
                        <input type="text" name="name" placeholder="Designer" value="Stan Lee">
                    </div>
                </div>
                <div>

                    <label for="nationality">Nationality</label>
                        
                        <input type="text" name="nationality" placeholder="Nationality" value="American">

                </div>

                <div>

                    <label for="year_birth">Year birth</label>
                        
                        <input type="number" name="year_birth" placeholder="Year birth" value="1922">
                    
                </div>

                <div>
                    <label for="biography">Biography</label>
                    <p>Write the URL of the designer in wikipedia </p>
                    <p>Exemple: https://en.wikipedia.org/wiki/Stan_Lee</p>
                    <div>
                        <input type="text" name="biography" placeholder="Biography" value="https://en.wikipedia.org/wiki/Stan_Lee">
                    </div>
                </div>
                
                    <button type="submit">Add a New Designer!</button>
                </div>
            </form>
        </div>
</div>
@endsection