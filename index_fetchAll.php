<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	
	<?php  

    //Selecting all products from the table "products" 
	$stmt = $pdo->prepare("SELECT * FROM products");

	if ($stmt->execute()) {
        $products = $stmt->fetchAll();
        echo "<pre>";
		print_r($products);
		echo "<pre>";
	}

	?>

</body>
</html>

