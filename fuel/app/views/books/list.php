<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista książek</title>
	<?php
		echo Asset::css('bootstrap.css');
		echo Asset::css('style.css');
	?>
</head>
<body>

	<div class="container">

		<a href="/" class="btn btn-primary">&#9664; Powrót</a>

		<h2>Lista książek</h2>
		<p>Lista książek dodanych do bazy danych</p>
		<table class="table">
			<thead>
			<tr>
				<th>Tytuł książki</th>
				<th>Autor książki</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($list as $l) { ?>

				<tr>
					<td><?=$l->bookname?></td>
					<td><?=$l->bookauthor?></td>
				</tr>

			<?php }?>
			</tbody>
		</table>
	</div>


</body>
</html>
