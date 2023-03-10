<?php
function ananabay($word){
$vowels = array('a','i','o','e','u');
for($i=0;$i<strlen($word);$i++){
    if(in_array("$word[0]",$vowels)){
        $word = $word.""."ay";
        break;
    }
    else{
        $j=$word[0];
        $word = str_replace($word[0],"",$word);
        $word = $word."".$j;
    }

}
return $word;

}


$result=ananabay($_GET["word"]);
echo $result;



?>