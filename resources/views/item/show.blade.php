@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{ route('item.index') }}" class="btn btn-outline-primary btn-sm">Zurück zur Artikelliste</a>
                <h1 class="display-one">{{ ucfirst($item->artikelname) }}</h1>
                <h2 class="display-one">Unschlagbarer Preis: {{ $item->preis }}</h2>
                <p>{{ $item->beschreibung }}</p>
                <hr>
                <a href="{{ route('item.edit', $item) }}" class="btn btn-outline-primary">Artikel bearbeiten</a>
                <br><br>
                <form action="{{ route('item.destroy', $item) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Artikel unwiderruflich entfernen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
