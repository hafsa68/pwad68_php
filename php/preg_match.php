<?php 
$line = "vim is  the  gresest person! oh  vim ,how I love thee";
echo preg_match("/\bvim\b/i",$line,$match); //return 1
if (preg_match("/\bvim\b/i",$line,$match)) print "Match Found";
print_r($match);


?>
<hr>
<?php 
$line = "Vim is  the  gresest person! oh  vim ,how I love thee";
echo preg_match_all("/\bvim\b/i",$line,$match); //return 1
if (preg_match_all("/\bvim\b/i",$line,$match)) print "Match Found";
print_r($match);


?>
<hr>
<?php 
$foods = array("pasta","steak","fish","potato");
$food = preg_grep("/^p/", $foods);

print_r($food);
?>
<hr>
<?php
$pswd = "supersectrear";
$pswd2 = "supersectrear";
if (strcmp($pswd,$pswd2) == 0){
    echo "password do not match";
}else {
    echo "match";
}


?>
