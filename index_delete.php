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
    // Deleting a product item to the table "products"
	$query = "DELETE FROM products 
	    	  WHERE product_id = 20";

	$stmt = $pdo->prepare($query);

	$executeQuery = $stmt->execute();

	if ($executeQuery) {
    	echo "Deletion successful!";
    }
    else {
        echo "Query failed";
    }
	?>

</body>
</html> 