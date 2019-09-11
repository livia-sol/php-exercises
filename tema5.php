<?php 

require 'db.php';
// iteram prin books
// afiseaza intr-un tabel cartile care au pretul intre 20 si 50
// pentru a primi puncte trebuie sa va folositi de keyword-ul continue
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="practice">
	<title>Tema 5</title>
</head>
<body>
<h2>Books with prices between 20 and 50</h2>
<table border="1px solid black" cellspacing="0" align="center">
	<thead>
		<th>ID</th>
		<th>Published date</th>
		<th>Author</th>
		<th>Link</th>
		<th>Rank</th>
	</thead>
	<tbody>
		<?php
		$c=0;
		if (!empty($books) && is_array($books)){

			foreach ($books as $key => $value) {
				if($value['price']<20||$value['price']>50)
					continue;
				else {
					?>

					<tr>
						<td><?= $value['id']; ?></td>
						<td><?= $value['published_date']; ?></td>
						<td><?= $value['author']; ?></td>
						<td><a target="_blank" href="<?= $value['amazon_product_url']; ?>"><?= $value['title']; ?></a></td>
						<td><?= $value['price']; ?></td>
						<td><?= $value['rank']; ?></td>
					</tr>

		<?php
			$c++;
				}
			} 
		}
		?>		
	</tbody>
</table>
<?php 
echo "<br> There are ".$c." values with this interval of prices.";
 ?>
</body>
</html>