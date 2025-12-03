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
    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql = "CALL Manufacturer_Insert('$name','$address','$contact')";
        $db->query($sql);
        if ($db->affected_rows) {
            echo "<h3> Successfully Insert </h3>";
        }
    }


    ?>
    <h3>Manufacturer Form</h3>
    <form action="" method="post">
        <input type="text" name="name"> <br> <br>
        <input type="text" name="address"><br><br>
        <input type="text" name="contact"><br> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <h3>List of Current Manufacturer</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>

            <th>Address</th>

            <th>Contact_no</th>
            <th>Action</th>


        </tr>
    </table>
</body>

</html>