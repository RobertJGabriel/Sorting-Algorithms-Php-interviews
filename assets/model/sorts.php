<?php


class sorts{





    public
    function __construct()    {
 

    }



    public
    function __destruct()    {
    }


    public 
    function bubbleSort(array $arr)
    {
        $n = sizeof($arr);
            for ($i = 1; $i < $n; $i++) {
                for ($j = $n - 1; $j >= $i; $j--) {
                    if($arr[$j-1] > $arr[$j]) {
                        $tmp = $arr[$j - 1];
                        $arr[$j - 1] = $arr[$j];
                        $arr[$j] = $tmp;
                    }
                }
            }
    return $arr;
    }
    
    
    public 
    function bubbleSortImproved(array $arr)
    {
        $n = sizeof($arr);    
            for ($i = 1; $i < $n; $i++) {
            $flag = false;
                for ($j = $n - 1; $j >= $i; $j--) {
                    if($arr[$j-1] > $arr[$j]) {
                        $tmp = $arr[$j - 1];
                        $arr[$j - 1] = $arr[$j];
                        $arr[$j] = $tmp;
                        $flag = true;
                    }
                }
            if (!$flag) {
                break;
                }
            }
      return $arr;
}
    
    
    
    public
    function selectionSort(array $arr)
    {
        $n = sizeof($arr);
    for ($i = 0; $i < $n; $i++) {
        $lowestValueIndex = $i;
        $lowestValue = $arr[$i];
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $lowestValue) {
                $lowestValueIndex = $j;
                $lowestValue = $arr[$j];
            }
        }
 
        $arr[$lowestValueIndex] = $arr[$i];
        $arr[$i] = $lowestValue;
    }
     
    return $arr;
}
    
    
    
public
    function countingSort(array $arr)
{
    $n = sizeof($arr);
    $p = array();
    $sorted = array();
     
    for ($i = 0; $i < $n; $i++) {
        $p[$i] = 0;
    }
     
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $p[$i]++;
            } else {
                $p[$j]++;
            }
        }
    }        
     
    for ($i = 0; $i < $n; $i++) {
        $sorted[$p[$i]] = $arr[$i];
    }
     
    return $sorted;
}
 
    
    
    
    public
        function quicksort(array $arr, $left, $right)
{
    $i = $left;
    $j = $right;
    $separator = $arr[floor(($left + $right) / 2)];
     
    while ($i <= $j) {
        while ($arr[$i] < $separator) {
            $i++;
        }
         
        while($arr[$j] > $separator) {
            $j--;
        }
         
        if ($i <= $j) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
            $i++;
            $j--;
        }
    }
     
    if ($left < $j) {
        $arr = quicksort($arr, $left, $j);
    }
     
    if ($right > $i) {
        $arr = quicksort($arr, $i, $right);
    }
     
    return $arr;
}
    
    
     public
    function shellsort(array $arr)
{
    $n = sizeof($arr);
    $t = ceil(log($n, 2));
    $d[1] = 1;
    for ($i = 2; $i <= $t; $i++) {
        $d[$i] = 2 * $d[$i - 1] + 1;
    }
     
    $d = array_reverse($d);
    foreach ($d as $curIncrement) {
        for ($i = $curIncrement; $i < $n; $i++) {
            $x = $arr[$i];
            $j = $i - $curIncrement;
            while ($j >= 0 && $x < $arr[$j]) {
                $arr[$j + $curIncrement] = $arr[$j];
                $j = $j - $curIncrement;
            }
            $arr[$j + $curIncrement] = $x;
        }
    }
     
    return $arr;
}
    
    
    
    

}

?>