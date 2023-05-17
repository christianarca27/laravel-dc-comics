@extends('layouts/main-layout')

@section('content')
    <main>
        <div class="container">
            <h1 class="mb-5">Inserisci nuovo fumetto</h1>

            <form action="{{ route('comics.store') }}" method="post" class="mb-5">
                @csrf

                <div class="input-group mb-3">
                    <label class="input-group-text" for="title">Titolo</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="description">Descrizione</label>
                    <input class="form-control" type="text" name="description" id="description">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="thumb">Thumb</label>
                    <input class="form-control" type="text" name="thumb" id="thumb">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="price">Prezzo</label>
                    <input class="form-control" type="number" step="0.01" name="price" id="price">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="series">Serie</label>
                    <input class="form-control" type="text" name="series" id="series">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="sale_date">Data di vendita</label>
                    <input class="form-control" type="date" name="sale_date" id="sale_date">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="type">Tipo</label>
                    <input class="form-control" type="text" name="type" id="type">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="artists">Artisti</label>
                    <textarea class="form-control" name="artists" id="artists"></textarea>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="writers">Scrittori</label>
                    <textarea class="form-control" name="writers" id="writers"></textarea>
                </div>

                <button class="btn btn-primary">Inserisci</button>
            </form>

            <a href="{{ route('comics.index') }}">Torna all'elenco completo</a>
        </div>
    </main>
@endsection
