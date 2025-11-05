<?php
    // $fh  =  fopen("student1.txt","w"); //write file


$fh  =  fopen("student1.txt","a"); //write file




fwrite($fh,"Hello karimul lorrrem\n");
fclose($fh); //close file
?>



