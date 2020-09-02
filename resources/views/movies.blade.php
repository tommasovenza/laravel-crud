<h1>Lista Films</h1>

@foreach ($movies as $movie)
    <div>
        <h2>Titolo: {{ $movie->title }} </h2>

        <p>Anno: {{ $movie->year }}</p>
        <p>Rating: {{ $movie->rating }}</p>
        <p>
            <a href="{{ route('movies.show', $movie->id) }}">dettagli</a>
        </p>
    </div>
@endforeach