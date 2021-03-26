@extends('layouts.master')

@section('title', 'List of Designers')

@section('content')
<div class="contenu">
    <h1>THE DESIGNERS</h1>
        <h2>Our selection for you :</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo quos ullam necessitatibus libero debitis. Rem in dolor voluptates at. Velit distinctio saepe autem praesentium magni commodi soluta, sit quasi hic?</p>
                <table border="1">
                    <tr>
                        <th>Designer</th>
                        <th>Nationality</th>
                        <th>Year of birth</th>
                        <th>Biography </th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($designers as $designer)
                    <tr>
                        <td>{{$designer->name}}</td>
                        <td>{{$designer->nationality}}</td>
                        <td>{{$designer->year_birth}}</td>
                        <td><a href="{{$designer->biography}}" target="_blank"> <button>Go to his wikipedia page</button> </a></td>

                        <td>
                            <form action="/deleteDesigner" method="POST">
                                @csrf
                                    <input type="hidden" name="id" value="{{$designer->id}}">
                                    <input type="submit" value="X" class="redButton">
                            </form>
                        </td>
                        <td>
                            <a href="/updateDesigner/{{$designer->id}}" class="yellowButton">Change</a>
                            {{--
                            <form action="/updateDesigner" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$designer->id}}">
                                <input type="submit" value="Change it">
                            </form>
                            --}}
                        </td>
                    </tr>
                    @endforeach
                </table>
                    {{-- @dd($designers) --}}
</div>
@endsection