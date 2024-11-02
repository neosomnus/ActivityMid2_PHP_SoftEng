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
	// Updating a product_id = 8, Canned sardines, from the table products

	$query = "UPDATE products 
			  SET product_name = ?, distributor_id = ?
			  WHERE product_id = 8";

	$stmt = $pdo->prepare($query);

	$executeQuery = $stmt->execute(
		["Canned Tuna", 2]
	);

	if ($executeQuery) {
        echo "Update successful!";
	}
	else {
        echo "Query failed";
	}
	?>

</body>
</html> 