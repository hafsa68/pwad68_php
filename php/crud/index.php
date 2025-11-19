<?php include_once("db_config.php") ; ?>


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
<?php
$sql = "SELECT * FROM students ORDER BY employeeID desc";
$result = $db ->query($sql);

// $row = $result ->fetch_assoc();

// echo $row['employeeID'];
// echo $row['first_name'];
// echo $row['last_name'];
// echo $row['birthdate'];

{






}; //obj diye kaj

?>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birthdate</th>
            <th>Notes</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        while($row1 = $result ->fetch_object()):
        
        ?>
        <tr>
            <td><?php echo $row1->employeeID; ?></td>
            <td><?php echo $row1->first_name; ?></td>
            <td><?php echo $row1->last_name; ?></td>
            <td><?php echo $row1->birthdate; ?></td>
            <td><?php echo $row1->notes; ?></td>
            <td><a href="student_edit.php?id=<?php echo $row1->employeeID; ?>">Edit</a></td>
            <td><a onclick="return confirm('Are you sure to delete')" href="student_delete.php?id=<?php echo $row1->employeeID; ?>">Delete</a></td>
        </tr>
       
         <?php endwhile;
         $db->close();
         
         ?> 
       
       
    </table>
<br> <br>
    <a href="student_entry.php">CLICK</a>
</body>
</html>