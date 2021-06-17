@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 pt-2">
			<a href="/item" class="btn btn-outline-primary btn-sm">Zurück zur
				Artikelliste</a>
			<div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
				<h1 class="display-4">Neuen Artikel anlegen</h1>
				<p>Formular ausfüllen, um Artikel anzulegen</p>
				<hr>
				<form action="" method="POST">
					@csrf
					<div class="row">
						<div class="control-group col-12">
							<label for="name">Artikelname</label> <input type="text"
								id="name" class="form-control" name="name"
								placeholder="Artikelname eingeben" required>
						</div>
						<div class="control-group col-12 mt-2">
							<label for="desc">Beschreibung</label>
							<textarea id="desc" class="form-control" name="desc"
								placeholder="Beschreibung des Artikels eingeben" rows=""
								required></textarea>
						</div>
						<div class="control-group col-12">
							<label for="cost">Preis</label> <input type="text" id="cost"
								class="form-control" name="cost" placeholder="Preis festlegen"
								required>
						</div>
					</div>
					<hr />
					<div class="row mt-2">
						<div class="control-group col-12 text-center">
							<button id="btn-submit" class="btn btn-primary">Artikel jetzt
								aber wirklich anlegen</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
