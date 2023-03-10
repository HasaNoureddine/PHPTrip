<?php

function Prime($year){

$age=2023-$year;

for($i=2;$i<$age;$i++){
    if($age % $i==0){
        return 0;

    }

}return 1;
}

$year=$_GET["year"]

if (Prime($year)){
    echo "Prime";
}
else{
    echo "not prime";
}
?>