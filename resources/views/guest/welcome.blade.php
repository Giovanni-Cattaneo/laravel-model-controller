@extends('layouts.app')

@section('main-content')
    <div class="container pb-5">
        <div class="row">
            @forelse($movies as $movie)
                <div class="col-12 col-md-6 col-lg-4 g-4">
                    <div class="card">
                        {{-- TODO aggiungere immagini di locandina, terribili da picsum ma buoni segnaposto --}}
                        <img class="card-img-top" src="https://picsum.photos/300" alt="Title" />
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $movie->title }}</h4>
                            <p class="card-text">Release date: {{ $movie->date }}</p>
                            <p class="card-text">Score: {{ $movie->vote }}</p>
                        </div>
                    </div>

                </div>
            @empty
                <p>Scusa ma non ci sono film al momento</p>
            @endforelse

        </div>
    </div>
@endsection
