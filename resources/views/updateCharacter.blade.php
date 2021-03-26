@extends('layouts.master')

@section('Title', 'Update a Character')

@section('content')
<div class="contenu">
    <h1>Update a Character</h1>
        <h2>Make better our Comic's World </h2>
            <div>
                <form action="/updateCharacter" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$character->id}}">
                    <div>
                        <label for="name">Character</label>
                        <div>
                            <input type="text" name="name" placeholder="Character" value="{{$character->name}}">
                        </div>
                    </div>
                    <div>
                        <label for="abilities">Abilities</label>
                        <div>
                            <input type="text" name="abilities" placeholder="Abilities" value="{{$character->abilities}}">
                        </div>
                    </div>
                    <div>
                        <label for="publication_year">Publication year</label>
                        <div>
                            <input type="number" name="publication_year" placeholder="Publication year" value="{{$character->publication_year}}">
                        </div>
                    </div>
                    <div>
                        <label for="comic">Comic</label>
                        <div>
                            <input type="text"name="comic" placeholder="Comic" value="{{$character->comic}}">
                        </div>
                    </div>
                    <div>
                        <label for="designer">Designer</label>
                        <div>
                            <select name="designer_id">
                                @foreach ($designers as $designer)
                                    <option value="{{ $designer->id }}">{{$designer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="history">History</label>
                        <div>
                            <input type="text" name="history" placeholder="History" value="{{$character->history}}">
                        </div>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <div>
                            <input type="text"name="description" placeholder="Description" value="{{$character->description}}">
                        </div>
                    </div>
                    <br>
                    <div>
                        <button type="submit">Change this Character</button>
                    </div>
                </form>
            </div>
</div>
@endsection