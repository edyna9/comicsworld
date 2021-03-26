@extends('layouts.master')

@section('title', 'Update a Designer')

@section('content')
<div class="contenu">
    <h1>Update a Designer</h1>
        <h2>Make our list better</h2>
            <div>
                <form action="/updateDesigner" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$designer->id}}">
                    <div>
                        <label for="name">Designer</label>
                        <div>
                            <input type="text" name="name" placeholder="Designer" value="{{$designer->name}}">
                        </div>
                    </div>
                    <div>

                        <label for="nationality">Nationality</label>
                            
                            <input type="text" name="nationality" placeholder="Nationality" value="{{$designer->nationality}}">

                    </div>

                    <div>

                        <label for="year_birth">Year birth</label>
                            
                            <input type="number" name="year_birth" placeholder="Year birth" value="{{$designer->year_birth}}">
                        
                    </div>

                    <div>
                        <label for="biography">Biography</label>
                        <div>
                            <input type="text" name="biography" placeholder="Biography" value="{{$designer->biography}}">
                        </div>
                    </div>
                    
                        <button type="submit">Change this Designer!</button>
                    </div>
                </form>
            </div>
</div>
@endsection