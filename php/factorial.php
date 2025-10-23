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

        $number = $_REQUEST['num'];


       
            $x = 1;
            for ($i = 1; $i <= $number; $i++) {
                $x *= $i;
                
            }
        echo $x;
    }



    ?>

    <form action="">
        <input type="number" name="num"> <br>
        <input type="submit" name="submit" value="number">
    </form>
</body>

</html>