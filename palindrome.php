<?php



$string = $_GET["string"];

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 






if(Palindrome($string)){ 
    echo "Palindrome"; 
}
else { 
echo "Not a Palindrome"; 
}


?> 