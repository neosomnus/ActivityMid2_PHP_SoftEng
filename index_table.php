//Show entire product table into a html table
    <table>
        <thead>
		    <tr>
			    <th>Product ID</th>
			    <th>Product name</th>
                <th>Product batch</th>
			    <th>Selling price</th>
                <th>Buying cost</th>
                <th>Create date</th>
			    <th>Expire date</th>
                <th>Distributor ID</th>
		    </tr>
        </thead>

		<tbody>
		    <?php foreach ($products as $row) { ?>
            <tr>
                <td><?php echo $row['product_id']; ?></td>
			    <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_batch']; ?></td>
			    <td><?php echo $row['selling_price']; ?></td>
                <td><?php echo $row['buying_cost']; ?></td>
			    <td><?php echo $row['create_date']; ?></td>
                <td><?php echo $row['expire_date']; ?></td>
			    <td><?php echo $row['distributor_id']; ?></td>
            </tr>
		    <?php } ?>
        </tbody>

	</table> 
