<!-- <?php

// count() and sizeof() function in arrays tells the size of array (number of elements present in array)


$food=array('orange','banana','apple','grapes');
echo count($food);    //4


echo sizeof($food);   //4

?> -->




<?php

$food=array('fruits'=>array('orange','banana','apple'),
'veggie'=>array('carrot','collard','pea')
);

echo count($food);   //2
echo count($food,1);   //8
echo count($food['fruits'],1);  //3
echo"<pre>";



// The array_count_values():- is an inbuilt function in PHP which is used to count all the values inside an array.
// In other words we can say that array_count_values() function is used to calculate the frequency 
// of all of the elements of an array.




print_r(array_count_values($food));   //array([orange]=>1  [banana]=>1   [apple]=>1   [grapes]=>1)
echo"<pre>";








?>