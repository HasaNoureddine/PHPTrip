<?php 

function reverse($string){

    $arr=[];
    for($i=0;$i<strlen($string);$i++){
        if(is_numeric($string[$i])){
            echo"$string[$i]";
            $arr[]=$string[$i];
        }

    }
    $j=count($arr)-1;

    for($i=0;$i<strlen($string);$i++){
        if(is_numeric($string[$i])){
           $string = substr_replace($string,$arr[$j],$i,1);
           echo"-word-$string- ";
            $j--;
        }

    }
    return $string;


}


$string=$_GET["string"]
$result=reverse($string);
echo "$result";

?>