<!-- array_slice():-return selected part of an array -->

<!-- <?php
$color=["red","green","blue","yellow","brown"];
$new_arr=array_slice($color,1,2);
echo"<pre>";
print_r($new_arr);
echo"</pre>";  //array([0]=>green [1]=>blue)

?> -->

<!-- <?php
$color=["red","green","blue","yellow","brown"];
$new_arr=array_slice($color,-2,-1);
echo"<pre>";
print_r($new_arr);
echo"</pre>";//array([0]=>yellow)  
?> -->

<!-- <?php
$color=["red","green","blue","yellow","brown"];
$new_arr=array_slice($color,1,3,true);
echo"<pre>";
print_r($new_arr);
echo"</pre>";
// array([1]=>green [2]=>blue [3]=>yellow)
?> -->


<?php
$color=["a"=>"red","b"=>"green","42"=>"blue","d"=>"yellow"];
$new_arr=array_slice($color,1,3);
echo"<pre>";//array([b]=>green [0]=>blue [d]=>yellow)
print_r($new_arr);
echo"</pre>";
?>