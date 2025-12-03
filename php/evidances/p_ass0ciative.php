<?php

$counterss = ["Habiba"=>"A","Karima" => "B","Farhana"=>"C"];
 krsort($counterss);
foreach($counterss as $key=>$name ){
echo "$key:$name .<br>"; 
}
?>