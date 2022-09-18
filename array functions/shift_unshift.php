<!-- array_shift():-remove the element present at 0th index -->
<!-- array_unshift():-insert at 0th index -->


<!-- <?php
$fruit=["orange","banana","grapes"];
array_shift($fruit);
echo"<pre?>";
print_r($fruit);
echo"</pre>";  //array([0]=>banana[1]=>grapes)
?> -->


<?php
$fruit=["orange","banana","grapes"];

array_unshift($fruit,"apple","lemon");
echo"<pre>";
print_r($fruit);
echo"</pre>";  //array([0]=>apple [1]=>lemon [2]=>orange [3]=>banana [4]=>grapes)
?>