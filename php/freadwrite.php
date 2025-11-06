<?php
    // $fh  =  fopen("student1.txt","w"); //write file


$fh  =  fopen("student1.txt","a"); //write file

  //open file
 $fh  =  fopen("student1.txt","r");
while(!feof($fh)){

   
 echo  fgets(($fh)) . "<br>";

}


 fwrite($fh,"Hello karimul lorrrem\n");
fclose($fh); //close file
?>



