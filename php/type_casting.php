<?php 
$num = (int) 23.23;
echo $num;
var_dump($num);

?>
<hr>
<?php 
$num = (int) "hello";
echo $num;
echo gettype($num);

?>
<hr>

<?php 
$num = (bool) "hello";
echo $num;
var_dump($num);

?>
<hr>
<?php 
$num = (array) 23.23;
var_dump($num);

?>