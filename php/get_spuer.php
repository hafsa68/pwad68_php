<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if(isset($_GET['name'])){
// print_r( $_GET);

echo $_GET['name'];
echo "<br>";
echo $_GET['age'];
echo "<br>";
}

?>
    <a href="get_spuer.php?name=karimul&age=24">Click Here</a>
</body>
</html>