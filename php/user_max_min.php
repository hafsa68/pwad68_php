<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_REQUEST['check'])){

    $data = $_REQUEST['number'];
    $num = explode("," , $data);
    
   $max = $num[0];
   $min = $num[0];
   foreach($num as $n){
        if($n>$max){
            $max = $n;
        }
        if($n<$min){
$min = $n;
        }
   }

   echo "Max is :" .$max ."<br>";
   echo "Min is :" .$min ;



}

?>




    <form action="">
        <input type="text" name="number"> <br>
        <input type="submit" name="check" value="CHECK">
    </form>
</body>
</html>