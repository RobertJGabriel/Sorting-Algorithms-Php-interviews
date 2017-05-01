<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="assests/css/style.css">
</head>
<body>
    
    <div id="header"> 
    <h1>Sorting Arrays for Php</h1>
    </div>

    
    <div id="wrapper">
    
<?php

echo '<div class="small">';
echo '<h1>Bubble Sort</h1>';
echo '<p>The simplest sorting algorithm is bubble sort. The bubble sort works by iterating down an array to be sorted from the first element to the last, comparing each pair of elements and switching their positions if necessary. This process is repeated as many times as necessary, until the array is sorted. </p>';
echo '<br>';
 echo 'Start : <br>';

$arr1 = array(255,1,22,3,45,5);



foreach ($arr1 as &$value) {
    echo $value . ',';
}




$result1 = $this->sorts->bubbleSort($arr1);
  

echo '<br>';
echo '<br>';
echo 'After : <br>';
echo '<br>';

foreach ($result1 as &$value2) {
    echo $value2 . ',';
}





echo '</div>';
    ?>
        
      
        
        <?php

echo '<div class="small">';
echo '<h1>Bubble Sort Improved</h1>';
echo '<p> The simplest sorting algorithm is bubble sort. The bubble sort works by iterating down an array to be sorted from the first element to the last, comparing each pair of elements and switching their positions if necessary. This process is repeated as many times as necessary, until the array is sorted.</p><br> <h1>  

When to use it 

</h1>
<p>
Bubble sort, selection sort: When youre doing something quick and dirty and for some reason you cant just use the standard librarys sorting algorithm. The only advantage these have over insertion sort is being slightly easier to implement.
</p>



';
echo '<br>';
 echo 'Start : <br>';

$arr2 = array(255,1,22,3,45,5);


foreach ($arr2 as &$value) {
    echo $value . ',';
}

$result2 = $this->sorts->bubbleSortImproved($arr2);
  
echo '<br>';
echo '<br>';
echo 'After : <br>';
echo '<br>';

foreach ($result2 as &$value2) {
    echo $value2 . ',';
}









echo '</div>';
    ?>
        
                <?php

echo '<div class="small">';

echo '<h1>Selection Sort</h1>';
echo '<p> 1. find the minimum value in the list 
2. swap it with the value in the first position 
3. sort the remainder of the list (excluding the first value) </p>';




echo '<br>';

    echo 'Start : <br>';
// Example:
$arr3 = array(255,1,22,3,45,5);


foreach ($arr3 as &$value) {
    echo $value . ',';
}

$result3 = $this->sorts->selectionSort($arr3);
echo '<br>';
echo '<br>';
echo 'After : <br>';
echo '<br>';

foreach ($result3 as &$value2) {
    echo $value2 . ',';
}






echo '</div>';
    ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                        <?php

echo '<div class="small">';
echo '<h1>Count Sort</h1>';
echo '<p> Counting sort is a sorting technique based on keys between a specific range. It works by counting the number of objects having distinct key values (kind of hashing). Then doing some arithmetic to calculate the position of each object in the output sequence.</p>';

echo '<br>';

    echo 'Start : <br>';
$arr4 = array(255,1,22,3,45,5);

foreach ($arr4 as &$value) {
    echo $value . ',';
}


$result4 = $this->sorts->countingSort($arr4);
  
echo '<br>';
echo '<br>';
echo 'After : <br>';
echo '<br>';

foreach ($result4 as &$value2) {
    echo $value2 . ',';
}



echo '</div>';
    ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                
                        <?php

echo '<div class="small">';

echo '<h1>Shell Sort</h1>';
echo '<p> Shellsort, also known as Shell sort or Shells method, is an in-place comparison sort. It can be seen as either a generalization of sorting by exchange (bubble sort) or sorting by insertion (insertion sort).</p>';
// Example:

echo '<br>';

    echo 'Start : <br>';

$arr5 = array(20,12,4,13,5);



foreach ($arr5 as &$value) {
    echo $value . ',';
}


$result5 = $this->sorts->shellsort($arr5);
 
echo '<br>';
echo '<br>';
echo 'After : <br>';
echo '<br>';

foreach ($result5 as &$value2) {
    echo $value2 . ',';
}









echo '</div>';
    ?>
        
        

</div>
</body>
</html>
