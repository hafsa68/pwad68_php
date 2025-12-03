<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$result ="";
if(isset($_POST['submit'])){
$grade = $_POST['grade'];
if($grade == "A"){
    $result = "Excelent";
}else if($grade == "B"){
    $result = "good";
}else{
    $result = "invalid";
}
}

echo $result;
?>



    <form action="" method="post">
        <input type="text" name="grade"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>