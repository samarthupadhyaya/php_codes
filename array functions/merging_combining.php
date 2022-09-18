<!-- array_merge():-indexed or associated array -->
<!-- array_merge_recursive():- multi associative array -->
<!-- array_combine():- index array -->

<!-- <?php
$fruit=["orange","banana","grapes"];
$veggie=['carrot','pea'];
$newarray=array_merge($fruit,$veggie);
echo"<pre?>";
print_r($newarray);  //array([0]=>orange[1]=>banana[2]=>grapes[3]=>carrot[4]=>pea)
echo"</pre>";
?> -->

 <!-- <?php
$fruit=['a'=>"orange",'b'=>"banana",'c'=>"grapes"];
$veggie=['b'=>'carrot','e'=>'pea'];
$newarray=array_merge_recursive($fruit,$veggie);
echo"<pre?>";
print_r($newarray);  //array([a]=>orange[b]=>array([0]=>banana[1]=>carrot)[c]=>grapes[e]=>pea)
echo"</pre>"; 
?> -->

<?php
$name=array("ram","mohan","salman");
$age=array("35","37","43");
$newarray=array_combine($name,$age);
echo"<pre?>";
print_r($newarray); //array([ram]=>35[mohan]=>37[salman]=>43)
echo"</pre>"; 
?>