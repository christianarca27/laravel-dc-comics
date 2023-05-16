@extends('layouts/main-layout')

@section('content')
    <main>
        <div class="container d-flex flex-column align-items-center">
            <a href="{{ route('comics.index') }}">Vai alla lista di fumetti</a>
        </div>
    </main>
@endsection
