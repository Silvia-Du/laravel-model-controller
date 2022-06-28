@extends('layouts.main')

@section('content')

<div class="container movies my-5">

    <div class="row text-center">
        <h2>I più votati:</h2>

        @foreach ($best_movies as $movie)
        <div class="col-4 p-2">
            <div class="box p-3">

                <div class="top p-2 mb-2">
                    <p>Titolo: {{ $movie->title }}</p>
                    <p>Titolo originale: {{ $movie->original_title }}</p>
                </div>

                <div class="bottom p-2">
                    <p>Voto del pubblico: {{ $movie->vote }}</p>
                    <p>Origine:{{ $movie->nationality }}</p>
                    <p>Prima uscita: {{ $movie->date }}</p>

                    <button type="button" class="btn btn-primary ">Download</button>
                </div>


            </div>
        </div>
        @endforeach

        <h2 class="my-5">Film disponibili per il download:</h2>
        @foreach ($movies as $movie)
        <div class="col-6 p-2">
            <div class="box p-3">

                <div class="top p-2 mb-2">
                    <p>Titolo: {{ $movie->title }}</p>
                    <p>Titolo originale: {{ $movie->original_title }}</p>
                </div>

                <div class="bottom p-2">
                    <p>Voto del pubblico: {{ $movie->vote }}</p>
                    <p>{{ $movie->nationality }}</p>
                    <p>Prima uscita: {{ $movie->date }}</p>

                    <button type="button" class="btn btn-primary ">Download</button>
                </div>


            </div>
        </div>
        @endforeach


    </div>

</div>

@endsection

@section('title', 'Movies')
