@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 pt-2">
			<div class="row">
				<div class="col-8">
					<a href="/" class="btn btn-outline-primary">Zurück zu den großen
						Weiten der Frontpage</a>
					<h1 class="display-one">ArtikelDB</h1>
					<p>Liste aller Artikel, klicken zum Anzeigen</p>
				</div>
				<div class="col-4">
					<p>
						<a href="/item/create" class="btn btn-primary btn-sm">Neuen
							Artikel anlegen</a>
					</p>
				</div>
			</div>
			@forelse($items as $item)
			<ul>
				<li><strong><a href="/item/{{ $item->id }}">{{
							ucfirst($item->artikelname) }}</a></strong> <em><a
						href="/item/{{ $item->id }}/edit" class="btn btn-outline-primary">Artikel
							bearbeiten</a></em>
					<form id="delete-frm" class="" action="/item/{{$item->id}}"
						method="POST">
						@method('DELETE') @csrf
						<button class="btn btn-danger">Artikel unwiderruflich entfernen</button>
					</form></li>
			</ul>
			@empty
			<p class="text-warning">Keine Artikel, duh!</p>
			@endforelse
		</div>
	</div>
</div>
@endsection
