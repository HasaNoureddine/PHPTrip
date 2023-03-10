<?php


function selection_sort($arr, $len) 
{
    for($i = 0; $i < $n ; $i++)
    {
        $low = $i;
        for($j = $i + 1; $j < $n ; $j++)
        {
            if ($arr[$j] < $arr[$low])
            {
                $low = $j;
            }
        }
          

        if ($arr[$i] > $arr[$low])
        {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$low];
            $arr[$low] = $tmp;
        }
    }

    for ($i = 0; $i < $len; $i++) {
        echo "$arr[$i] "; 
    }
    return($arr);
}
echo"hello";

$arr = $_GET["array"];

$len = count($arr);
selection_sort($arr, $len);
  
?>