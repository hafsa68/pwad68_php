<?php include_once ("db_config.php"); ?>
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
        Name: <br><br>
        <input type="text" name="name"><br> <br>
        Address: <br><br>
        <input type="text" name="address"> <br> <br>
        Contuct No:<br><br>
        <input type="text" name="contact"><br> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <h1>List of Current Manufacturer</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php $sql = "SELECT * FROM manufacturer";
      $rawdata =  $db->query($sql);
      while($row = $rawdata->fetch_assoc()):
        ?>
        
        <tr>
            <td><?php echo $row ['id'];?></td>
            <td><?php echo $row ['name'];?></td>
            <td><?php echo $row ['address'];?></td>
            <td><a href="m_delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="product.php">CLICK</a>
</body>
</html>