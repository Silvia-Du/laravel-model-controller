@extends('layouts.main')

@section('content')

<div class="about container d-flex flex-column justify-content-center align-items-center text-center p-5">

    <h1>About</h1>
    <h3>Scopri di piu sulla nostra azienda</h3>
    <h3 class="px-5 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt doloremque labore deleniti, necessitatibus nulla excepturi a assumenda saepe quis officia praesentium iste perferendis eum vero modi aut? Asperiores, accusantium ullam?</h3>

    <div class="my-5">
        <a href="{{ route('movies') }}"><button type="button" class="btn btn-primary btn-lg me-2">Vai ai film</button></a>
        <a href="{{ route('contacts') }}"><button type="button" class="btn btn-light btn-lg">Contattaci</button></a>
    </div>
</div>


@endsection
@section('title', 'About')
