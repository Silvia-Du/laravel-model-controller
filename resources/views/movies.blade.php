@extends('layouts.main')

@section('content')

@foreach ($movies as $movie)
<div>

    <p>{{ $movie->id }}</p>
</div>
@endforeach

@endsection

@section('title', 'Movies')
