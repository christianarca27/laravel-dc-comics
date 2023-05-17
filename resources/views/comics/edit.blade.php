@extends('layouts/main-layout')

@section('content')
    <main>
        <div class="container">
            <h1>Inserisci nuovo fumetto</h1>

            <form action="{{ route('comics.update', $comic) }}" method="post">
                @csrf
                @method('PUT')

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="title">Titolo</label>
                    <input type="text" name="title" id="title" value="{{ $comic->title }}">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="description">Descrizione</label>
                    <input type="text" name="description" id="description" value="{{ $comic->description }}">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="thumb">Thumb</label>
                    <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="price">Prezzo</label>
                    <input type="text" name="price" id="price" value="{{ $comic->price }}">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="series">Serie</label>
                    <input type="text" name="series" id="series" value="{{ $comic->series }}">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="sale_date">Data di vendita</label>
                    <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="type">Tipo</label>
                    <input type="text" name="type" id="type" value="{{ $comic->type }}">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="artists">Artisti</label>
                    <textarea name="artists" id="artists">
                        {{ $comic->artists }}
                    </textarea>
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="writers">Scrittori</label>
                    <textarea name="writers" id="writers">
                        {{ $comic->writers }}
                    </textarea>
                </div>

                <button class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </main>
@endsection
