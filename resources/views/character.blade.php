@extends('layouts.master')

@section('title', 'List of Characters')

@section('content')
<div class="contenu">
    <h1>More information about :</h1>
        <table border="1">
            <tr>
                <th><h3>Character</h3></th>
                <th><h3>Abilities</h3></th>
                <th><h3>Publication year</h3></th>
                <th><h3>Comic</h3></th>
                <th><h3>Designer</h3></th>
                
            </tr>
            <tr>
                <td><h4>{{$character->name }}</h4></td>
                <td><p>{{$character->abilities}}</p></td>
                <td><p>{{$character->publication_year}}</p></td>
                <td><p>{{$character->comic}}</p></td>   
                <td><p>{{$character->designer->name}}</p></td>   
                
            </tr>
        </table>
    <br>

    <h3>Description</h3>
        <p>{{$character->description}}</p>
            <div class="center">
                <iframe width="560" height="315" src="{{$character->history}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <br>       
            <a href="{{$character->history}}" target="_blank"> <button>Click here for more videos</button> </a>
            <br>
            <a href="/list">BACK TO THE LIST OF CHARACTERS</a>
</div>
@endsection