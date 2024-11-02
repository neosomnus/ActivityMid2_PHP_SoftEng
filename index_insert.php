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
    // Inserting a new product item to the table "products"
	$query = "INSERT INTO products (product_id, product_name, product_batch, selling_price, buying_cost, 
              create_date, expire_date, distributor_id) 
              VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($query);

	$executeQuery = $stmt->execute(
        [21,'Watermelon','0354127554', 60, 50, '2024/10/30', '2024/11/20', 5]
	);

	if ($executeQuery) {
        echo "Query successful!";
    }
	else {
        echo "Query failed";
	}
	?>

</body>
</html> 