@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">{{ config('app.name') }}</h1>
			<p>Die Artikeldatenbank.</p>
			<p>Klicken zum Anzeigen der Artikel.</p>
			<p>Oder noch eine Weile die großen Weiten dieser Frontpage genießen.</p>
			<br> <a href="/item" class="btn btn-outline-primary">Alle Artikel
				anzeigen</a>
		</div>
	</div>
</div>
@endsection
