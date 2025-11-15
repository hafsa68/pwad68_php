<?php
class Student{
    public $name;
   public $id;
   public $batch;
   function __construct($file)
   {
    $this->file = $file ;
   }

   function result($fid){
    $data =  file($this->file);


      foreach($data as $line){
         list($id,$name,$batch,$result) =  explode(" ", $line);
                if($fid == $id){
                    return $id . "<br> ". $name . "<br> " .$batch . "<br>" . $result;
                }

      }
   }
}


?>