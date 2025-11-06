<?php
class student
{
    public  $id;
    public $name;
    public $batch;
    public $file;
    function __construct($file)
    {
        $this->file = $file;

        //ai line tar poriborte amra comment kora part ta dite parbo .. bujanor jonno comment kora: $this->file = "result_sheet.text"
    }
    function result($fid)
    {
      $data =  file($this->file);


      foreach($data as $line){
         list($id,$name,$batch,$result) =  explode(" ", $line);
                if($fid == $id){
                    return $id . ", ". $name . ", " .$batch . ", " . $result;
                }

      }
    }
}
