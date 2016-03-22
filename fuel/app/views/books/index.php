<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dodaj nową książkę</title>
	<?php
		echo Asset::css('bootstrap.css');
		echo Asset::css('style.css');
	?>
</head>
<body>

	<div class="container">

		<h2>Dodaj nową książkę <a href="/list" class="btn btn-primary right">Lista książek</a></h2>

		<form class="form-horizontal" action="add" method="post">
			<fieldset>

				<div class="form-group">
					<label class="col-md-4 control-label" for="bookname">Tytul książki</label>
					<div class="col-md-4">
						<input id="bookname" name="bookname" type="text" placeholder="nazwa" class="form-control input-md">
						<span class="help-block">Proszę podać tytuł książki</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="bookauthor">Autor książki</label>
					<div class="col-md-4">
						<input id="bookauthor" name="bookauthor" type="text" placeholder="autor" class="form-control input-md">
						<span class="help-block">Proszę podać autora książki</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="send"></label>
					<div class="col-md-4">
						<button id="send" name="send" class="btn btn-primary">Dodaj</button>
					</div>
				</div>

			</fieldset>
		</form>

	</div>

</body>
</html>
