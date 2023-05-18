@extends('layouts/main-layout')

@section('content')
    <main>
        <div class="container">
            <h1 class="mb-5">Inserisci nuovo fumetto</h1>

            <form action="{{ route('comics.store') }}" method="post" class="mb-5">
                @csrf

                <div class="input-group mb-3">
                    <label class="input-group-text" for="title">Titolo</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
                        id="title" value="{{ old('title') }}" required>

                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text @error('description') is-invalid @enderror"
                        for="description">Descrizione</label>
                    <input class="form-control" type="text" name="description" id="description"
                        value="{{ old('description') }}" required>

                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text @error('thumb') is-invalid @enderror" for="thumb">Thumb</label>
                    <input class="form-control" type="text" name="thumb" id="thumb" value="{{ old('thumb') }}"
                        required>

                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text @error('price') is-invalid @enderror" for="price">Prezzo</label>
                    <input class="form-control" type="number" step="0.01" name="price" id="price"
                        value="{{ old('price') }}" required>

                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text @error('series') is-invalid @enderror" for="series">Serie</label>
                    <input class="form-control" type="text" name="series" id="series" value="{{ old('series') }}"
                        required>

                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text @error('sale_date') is-invalid @enderror" for="sale_date">Data di
                        vendita</label>
                    <input class="form-control" type="date" name="sale_date" id="sale_date"
                        value="{{ old('sale_date') }}" required>

                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text @error('type') is-invalid @enderror" for="type">Tipo</label>
                    <input class="form-control" type="text" name="type" id="type" value="{{ old('type') }}"
                        required>

                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text @error('artists') is-invalid @enderror" for="artists">Artisti</label>
                    <textarea class="form-control" name="artists" id="artists" required>{{ old('artists') }}</textarea>

                    @error('artists')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text @error('writers') is-invalid @enderror" for="writers">Scrittori</label>
                    <textarea class="form-control" name="writers" id="writers" required>{{ old('writers') }}</textarea>

                    @error('writers')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary">Inserisci</button>
            </form>

            <a href="{{ route('comics.index') }}">Torna all'elenco completo</a>
        </div>
    </main>
@endsection
