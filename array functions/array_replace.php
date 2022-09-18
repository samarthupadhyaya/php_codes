<!-- <?php

$fruit=['orange','banana','apple','grapes'];
$veggie=['carrot','pea'];

$newarray=array_replace($fruit,$veggie);

echo"<pre>";
print_r($newarray);
 echo"<pre>"; //array([0]=>carrot
              //[1]=>pea      
              //[2]=>apple
              //[3]=>grapes           
              //)

?> -->


<?php
$fruit=['orange','banana','grapes','apple'];
$veggie=['a'=>'carrot','b'=>'pea'];

$newarray=array_replace($fruit,$veggie);

//echo"<pre>"
print_r($newarray);  //array([0]=>[1]=>banana[2]=>grapes[3]=>apple[a]=>carrot[b]=>pea)
//echo"</pre>";
?>