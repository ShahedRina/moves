@extends("layout.layout")

@section("content")


<h1>Popular Movies</h1>

<div class="movies-container">
    @foreach($movies as $movie)
        <div class="movie">
            <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
            <div class="movie-title">{{ $movie['title'] }}</div>
            <div class="movie-release-date">{{ $movie['release_date'] }}</div>
        </div>
    @endforeach
</div>


@endsection