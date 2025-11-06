<?php

//nemaric index array


$countrs = ["Bangladesh"=> "dhaka","Nepal"=>"kathmondu","Australia"=>"sydney"];
// sort($countrs); //sudu valuer upor
// krsort($countrs); //reverse order short
krsort($countrs);
foreach($countrs as $key =>  $country){
    echo " $key : $country <br>"; 
  //arry and valuer upor short

}
// print_r($countrs);

?>