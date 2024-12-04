@extends('layouts.app')

@section('title', 'My Favorites')

@section('content')
<div class="container my-5">
    <h2>My Favorites</h2>

    <div class="row">
        @if($favorites->isEmpty())
            <p class="text-center">You have no favorites yet!</p>
        @else
            @foreach ($favorites as $favorite)
                @if ($favorite->book)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('book_images/' . $favorite->book->image) }}" class="card-img-top" alt="{{ $favorite->book->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $favorite->book->title }}</h5>
                                <p class="card-text">By {{ $favorite->book->author }}</p>
                            </div>
                        </div>
                    </div>
                @elseif ($favorite->game)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('games_images/' . $favorite->game->image) }}" class="card-img-top" alt="{{ $favorite->game->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $favorite->game->name }}</h5>
                                <p class="card-text">{{ $favorite->game->type }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>
@endsection
