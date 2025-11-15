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
    $num = $_REQUEST['mynumber'];

    if($num ==1){
        echo "$num is not a prime number";
        exit;
    }

    if($num ==2){
        echo "$num is a prime number";
        exit;
    }
    if($num>2){
        for($i = 2;$i <$num;$i++){
            if($num%$i==0){
                echo "$num is not a prime number";
        exit;
            }
        }
    } echo "$num is a prime number";
        
    }
    
    
    
    ?>

<form action="">
 <input type="number" name="mynumber" placeholder="Enter a number"> <br>
    <input type="submit" name="submit" value="Click">

</form>
   
</body>
</html>