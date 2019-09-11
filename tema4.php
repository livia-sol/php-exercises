<?php 

require 'db.php';

// afiseaza intr-un tabel datele din array books
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="practice">
	<title>Tema 4</title>
</head>
<body>
	<h2>Books from Amazon.com</h2>
	<table border="1px solid black" cellspacing="0">
		<thead>
			<th>Id</th>
			<th>Published date</th>
			<th>Amazon product url</th>
			<th>Author</th>
			<th>Description</th>
			<th>Price</th>
			<th>Publisher</th>
			<th>Title</th>
			<th>Rank</th>
			<th>Rank last week</th>
			<th>Weeks on list</th>
		</thead>
		<tbody>	
			<?php 
			if (!empty($books) && is_array($books)){

				foreach ($books as $key => $value) {
					?>
					<tr>
						<td><?= $value['id']; ?></td>
						<td><?= $value['published_date']; ?></td>
						<td><a target="_blank" href="<?= $value['amazon_product_url']; ?>"><?= $value['amazon_product_url']; ?></a></td>
						<td><?= $value['author']; ?></td>
						<td><?= $value['description']; ?></td>
						<td><?= $value['price']; ?></td>
						<td><?= $value['publisher']; ?></td>
						<td><?= $value['title']; ?></td>
						<td><?= $value['rank']; ?></td>
						<td><?= $value['rank_last_week']; ?></td>
						<td><?= $value['weeks_on_list'] ?></td>
					</tr>
					<?php 
				}
			}	 ?>

		</tbody>
	</table>
</body>
</html>