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
                    <a href="{{ route('comics.edit', $comic) }}">Modifica elemento</a>
                </div>

                <div class="col-6">
                    <form action="" method="get">
                        <button type="submit" class="btn btn-danger">Elimina elemento</button>
                    </form>
                </div>
            </div>

            <a href="{{ route('comics.index') }}">Torna all'elenco completo</a>
        </div>
    </main>
@endsection
