@extends('layouts/main-layout')

@section('content')
    <main>
        <div class="container text-center">
            <h1>{{ $comic->title }}</h1>

            <img class="show-image" src="{{ $comic->thumb }}" alt="Comic Thumb">

            <p>{{ $comic->description }}</p>

            <h2>Specs</h2>
            <ul>
                <li>Series: {{ $comic->series }}</li>
                <li>U.S. Price: {{ $comic->price }}</li>
                <li>On Sale Date: {{ $comic->sale_date }}</li>
            </ul>

            <h2>Talent</h2>
            <ul>
                <li>Art by: {{ $comic->artists }}</li>
                <li>Written by: {{ $comic->writers }}</li>
            </ul>

            <div class="row my-5">
                <div class="col-6">
                    <a href="{{ route('comics.edit', $comic) }}">
                        <button class="btn btn-primary">Modifica elemento</button>
                    </a>
                </div>

                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Elimina elemento</button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ route('comics.destroy', $comic) }}" method="post" class="modal-content">
                        @csrf
                        @method('DELETE')

                        <div class="modal-header text-dark">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminazione</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body text-dark">
                            Sei sicuro di voler eliminare questo elemento?
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                            <button type="submit" class="btn btn-danger">Conferma</button>
                        </div>
                    </form>
                </div>
            </div>

            <a href="{{ route('comics.index') }}">Torna all'elenco completo</a>
        </div>
    </main>
@endsection
