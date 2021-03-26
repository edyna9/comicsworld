@extends('layouts.master')

@section('title', 'List of Characters')

@section('content')
<div class="contenu">
    <h1>The best characters ever</h1>
        <h2>Our selection for you :</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo quos ullam necessitatibus libero debitis. Rem in dolor voluptates at. Velit distinctio saepe autem praesentium magni commodi soluta, sit quasi hic?</p>
                <table border="1">
                    <tr>
                        <th>Character</th>
                        <th>Abilities</th>
                        <th>Publication year</th>
                        <th>Comic </th>
                        <th>Designer </th>
                        <th>History </th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($characters as $character)
                    <tr>
                        <td> <a href="/character/{{ $character->id }}" class="blueTitle">{{ $character->name }} </a> </td>
                        <td>{{$character->abilities}}</td>
                        <td>{{$character->publication_year}}</td>
                        <td>{{$character->comic}}</td>

                        <td>{{$character->designer->name}}</td>

                        <td><a href="{{$character->history}}" target="_blank"> <button>Whatch</button> </a></td>

                        <td>
                            <form action="/deleteCharacter" method="POST">
                                @csrf
                                    <input type="hidden" name="id" value="{{$character->id}}">
                                    <input type="submit" value=" X " class="redButton">
                            </form>
                        </td>
                        <td>
                            <a href="/updateCharacter/{{$character->id}}" class="yellowButton">Change</a>
                            {{--
                            <form action="/updateCharacter" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$character->id}}">
                                <input type="submit" value="Change it">
                            </form>
                            --}}
                        </td>
                    </tr>
                    @endforeach
                </table>

            <h3>Somes reasons why we choose them</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo quos ullam necessitatibus libero debitis. Rem in dolor voluptates at. Velit distinctio saepe autem praesentium magni commodi soluta, sit quasi hic?</p>
                    {{-- @dd($characters) --}}
</div>
@endsection