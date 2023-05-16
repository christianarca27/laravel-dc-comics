@extends('layouts/main-layout')

@section('content')
    <main>
        <div class="container">
            <h1>Inserisci nuovo fumetto</h1>

            <form action="{{ route('comics.store') }}" method="post">
                @csrf

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="title">Titolo</label>
                    <input type="text" name="title" id="title">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="description">Descrizione</label>
                    <input type="text" name="description" id="description">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="thumb">Thumb</label>
                    <input type="text" name="thumb" id="thumb">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="price">Prezzo</label>
                    <input type="text" name="price" id="price">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="series">Serie</label>
                    <input type="text" name="series" id="series">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="sale_date">Data di vendita</label>
                    <input type="text" name="sale_date" id="sale_date">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="type">Tipo</label>
                    <input type="text" name="type" id="type">
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="artists">Artisti</label>
                    <textarea name="artists" id="artists"></textarea>
                </div>

                <div class="input-group mb-3 gap-3">
                    <label class="w-25" for="writers">Scrittori</label>
                    <textarea name="writers" id="writers"></textarea>
                </div>

                <button class="btn btn-primary">Inserisci</button>
            </form>
        </div>
    </main>
@endsection
