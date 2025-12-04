<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        table,th,td{
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
     <h1>Product  List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer Company</th>
        </tr>
<?php 
$sql = "SELECT * FROM product_list";
        $rawdata = $db ->query($sql);
        while($row = $rawdata->fetch_assoc()):
?>
        <tr>
            <td><?php echo $row['id'] ;?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['Manufacturer Company']; ?></td>
            

        </tr>
        <?php endwhile; ?>

    </table>
    <a href="manufacturer.php">CLICK</a>
</body>
</html>