<?php
class student
{
    public  $id;
    public $name;
    public $batch;
    public $file; // = "result_sheet.txt"
    function __construct($file)
    {
        $this->file = $file;
        // $this->file = "result_sheet.txt";

        //ai line tar poriborte amra comment kora part ta dite parbo .. bujanor jonno comment kora: $this->file = "result_sheet.text"
    }

    
    function result($stid)
    {
      $data =  file($this->file);
    //   $data =  file("result_sheet.txt");
    // echo "<pre>";
    // print_r($data);


      foreach($data as $line){
         list($id,$name,$batch,$result) =  explode(" ", $line);
                if($stid == $id){
                    return $id . ", ". $name . ", " .$batch . ", " . $result;
                }

      }

    //   line = 101 Rahim PWAD-68 pass
    }
}
