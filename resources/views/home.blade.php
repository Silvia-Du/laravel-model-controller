@extends('layouts.main')

@section('content')

<div class="container home py-5 d-flex flex-column justify-content-center align-items-center text-center px-5">

    <h1 class="my-5">Scopri il catalogo dei film disponibili</h1>
    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate reiciendis dicta facere molestias perferendis eligendi adipisci dolores laborum. Doloremque, ex. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam aliquid quos dolor fuga beatae vero amet commodi itaque totam?</h3>
    <div class="my-5">
        <a href="{{ route('movies') }}"><button type="button" class="btn btn-primary btn-lg me-2">Vai ai film</button></a>
        <a href="{{ route('about') }}"><button type="button" class="btn btn-light btn-lg">Scopri di piu</button></a>
    </div>

    <h2>Guarda nella lista dei più votati</h2>


</div>

@endsection

@section('title', 'Home')

