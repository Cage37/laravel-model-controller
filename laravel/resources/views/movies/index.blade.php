@extends('layout.app')


<div class="title">
    <h1>MOVIES</h1>
</div>


<div class="movies">
    @foreach($movies as $movie) 
    <div class="card">
        <span>Title:</span> <h3>{{ $movie->title }}</h3>
        <span>Date:</span> <p>{{ $movie->date }}</p>
        <span>Vote:</span> <p>{{ $movie->vote }}</p>
    </div>
    @endforeach
</div>