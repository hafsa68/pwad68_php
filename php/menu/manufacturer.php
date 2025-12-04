<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['submit'])) {
        extract($_REQUEST);
         $sql = "CALL Manufacturer_Insert('$name','$address','$contact')";
         $db->query($sql);
         if ($db->affected_rows) {
             echo "<h3> Successfully Insert </h3>";
         } 

    }
    ?>
    <h1>Manufacturer Entry Form</h1>
    <form action="" method="post">

        <input type="text" name="name"><br> <br>
        <input type="text" name="address"> <br> <br>
        <input type="text" name="contact"><br> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <h1>List of current Manufacturer</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php $sql = "SELECT * FROM manufacture";
      $rawdata =  $db->query($sql);
      while($row = $rawdata->fetch_assoc()):
        ?>
        
        <tr>
            <td><?php echo $row ['id'];?></td>
            <td><?php echo $row ['name'];?></td>
            <td><?php echo $row ['address'];?></td>
            <td><a href="m_delete.php?id=<?php echo $row['id']?>">Action</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="product.php">CLICK</a>
</body>


</html>