<?php include_once "db_config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Module_name</th>
            <th>TotalMArks</th>
            <th>Student NAME</th>
        </tr>
        <? 
       $sql = "SELECT * FROM student_records";
        $rawdata = $db->query($sql);
        while($row = $rawdata->fetch_assoc()):
        ?>
        <tr>
            <td><? echo $row['id']; ?></td>
            <td><? echo $row ['module_name'];?></td>
            <td><? echo $row ['totalmarks']; ?></td>
            <td><? echo $row ['name']; ?></td>
        </tr>
        <? endwhile; ?>
    </table>
    <a href="student.php">click</a>
</body>
</html>