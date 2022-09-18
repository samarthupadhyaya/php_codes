<!-- array_spice():-remove and replace specific element of an array -->

<?php
$color=["red","green","blue","yellow","brown"];
array_splice($color,1);  //array([0]=>red)
array_splice($color,2,1);//array([0]=>red [1]=>green [2]=>yellow [3]=>brown)
array_splice($color,1,-2);//array([0]=>red [1]=>yellow [2]=>brown)
echo"<pre?>";
print_r($color);
echo"</pre>";  
?>