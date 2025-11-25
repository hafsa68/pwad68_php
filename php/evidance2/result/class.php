<?php
class student{
    public $id;
    public $name;
    public $batch;
    public $result;
    function __construct($file)
    {
        $this->file = $file;
    }
    function result($stid){
       $data =  file($this->file);
       foreach($data as $line){
           list($id,$name,$batch,$result) = explode(" " ,$line);
           if($stid==$id){
            return $id. ",". $name. ",". $batch. ",".$result;
           }
       }
    }
}


?>