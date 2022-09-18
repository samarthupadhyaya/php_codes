<!-- in_array():- checks if specific value exist in array or not it returns true or false(0 or 1) -->
<!-- array_serach():- it returns either key or index -->
<!-- <?php
$food=array('orange','banana','apple','orange');
echo in_array('banana',$food); //1
echo in_array('lime',$food); //0

?> -->




<?php
$food=array('orange','banana','apple','55','grapes');

echo in_array(55,$food);  //1
echo in_array(55,$food,true);  //whitespaces

?>