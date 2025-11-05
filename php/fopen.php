<?php
    $fh  =  fopen("student.txt","r"); //open file

//   echo  fgets(($fh));

while(!feof($fh)){
 echo  fgets(($fh)) . "<br>";

}
fclose($fh); //close file
?>