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
    if(isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $sql ="CALL students_insert('$fname','$address','$mobile')";
        $db->query($sql);
        if($db->affected_rows){
            echo "Insert Successfull";
        }

    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="fname"><br>
        <input type="text" name="address"><br>
        <input type="text" name="mobile"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <h3>Student Record</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
        <?php 
        $sql = "SELECT * FROM student";
        $rawdata = $db->query($sql);
        while($row =$rawdata->fetch_assoc()):
        
        ?>
        <tr>
            <td><? echo $row['id']; ?></td>
            <td><? echo  $row['name']; ?></td>
            <td><? echo  $row['address']; ?></td>
            <td><? echo $row['mobile'];?></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">action</a></td>
            
        </tr>
        <? endwhile; ?>
    </table>
    <a href="result.php">click</a>
    
</body>
</html>