@extends('layouts.master')

@section('title', 'Add a Character')

@section('content')
<div class="contenu">
    <h1>Add a Character</h1>
        <h2>Your opinion is our inspiration</h2>
            <div>
                <form action="/addCharacter" method="POST">
                    @csrf
                        <div>
                            <label for="name">Character</label>
                            <div>
                                <input type="text" name="name" placeholder="Character" value="Flash">
                            </div>
                        </div>

                        <div>

                            <label for="abilities">Abilities</label>
                                
                                <input type="text" name="abilities" placeholder="Abilities" value="Super-speed">

                        </div>

                        <div>

                            <label for="publication_year">Publication year</label>
                                
                                <input type="number" name="publication_year" placeholder="Publication year" value="1940">
                            
                        </div>

                        <div>

                            <label for="comic">Comic</label>
                                
                                <input type="text" name="comic" placeholder="Comic" value="Flash Comics #1">

                        </div>

                        <div>


                            <label for="designer">Designer</label>
                                <select name="designer_id">
                                    @foreach ($designers as $designer)
                                        <option value="{{ $designer->id }}">{{$designer->name}}</option>
                                    @endforeach
                                </select>


                        </div>

                        <div>
                            <label for="history">History</label>
                            <div>
                                <input type="text" name="history" placeholder="History" value="https://www.youtube.com/embed/Img49q_NTIU">
                            </div>
                        </div>
                        
                        <div>
                            <label for="description">Description</label>
                            <div>
                                <input type="text"name="description" placeholder="description" value="The Flash (Bartholomew Henry Barry Allen) is a fictional superhero appearing in a series of American comic books published by DC Comics.">
                            </div>
                        </div>

                        <br>
                        
                        <div>
                            <button type="submit">Add a New Character!</button>
                        </div>
                </form>
            </div>
</div>
@endsection