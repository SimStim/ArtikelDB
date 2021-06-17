@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 pt-2">
			<a href="/item" class="btn btn-outline-primary btn-sm">Zurück zur Artikelliste</a>
			<div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
				<h1 class="display-4">Artikel bearbeiten</h1>
				<p>Nehmen Sie Änderungen vor und klicken Sie den Knopf, um diese
					Änderungen abzuspeichern.</p>
				<p>Wahlweise können Sie den Knopf klicken, ohne vorher Änderungen
					auszuführen.</p>
				<p>Eine dritte Möglichkeit besteht darin, Änderungen auszuführen und
					den Knopf anschließen nicht zu klicken. Leider gehen in diesem Fall
					die ausgeführten Änderungen verloren. Sie wurden hiermit gewarnt.</p>
				<hr>
				<form action="" method="POST">
					@csrf @method('PUT')
					<div class="row">
						<div class="control-group col-12">
							<label for="name">Artikelname</label> <input type="text"
								id="name" class="form-control" name="name"
								placeholder="Artikelname" value="{{ $item->artikelname }}"
								required>
						</div>
						<div class="control-group col-12 mt-2">
							<label for="desc">Beschreibung</label>
							<textarea id="desc" class="form-control" name="desc"
								placeholder="Beschreibung hier eingeben" rows="5" required>{{ $item->beschreibung }}</textarea>
						</div>
						<div class="control-group col-12">
							<label for="cost">Preis</label> <input type="text" id="cost"
								class="form-control" name="cost" placeholder="unbezahlbar?"
								value="{{ $item->preis}}" required>
						</div>
					</div>
					<div class="row mt-2">
						<div class="control-group col-12 text-center">
							<button id="btn-submit" class="btn btn-primary">Der Knopf, um
								Änderungen abzuspeichern</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
@endsection
