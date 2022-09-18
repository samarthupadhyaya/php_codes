<!-- array_pop():- will delete element from last -->
<!-- array_push():- will insert element at last -->
<!-- <?php
$fruit=["orange","banana","apple","orange"];
array_pop($fruit);
echo"<pre>";
print_r($fruit);
echo"</pre>";    //array([0]=>orange [1]=>banana  [2]=>apple)
?>
 -->



 <?php

 $fruit=["orange","banana","grapes"];
 array_push($fruit,"apple","guava");
 echo"<pre>";
 print_r($fruit);
 echo"</pre>"   //array([0]=>orange [1]=>banana [2]=>grapes [3]=>apple [4]=>guava)

 ?>