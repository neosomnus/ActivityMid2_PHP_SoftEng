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

    //Selecting product with ID number 5 from the table "products" 
    $query = "SELECT * FROM products
              WHERE product_id = 5";

	$stmt = $pdo->prepare($query);

	if ($stmt->execute()) {
        $productID5 = $stmt->fetch();
        echo "<pre>";
		print_r($productID5);
		echo "<pre>";
	}

	?>

</body>
</html>
