<?php
$str = 'treasurermmss@123';
$encodeText = base64_encode($str);
echo "Encode Text: " . $encodeText."<br>";


$str1 = 'dHJlYXN1cmVybW1zc0AxMjM=';
$decodeText = base64_decode($str1);
echo "Decode Text: " . $decodeText;

?>

<!-- //samjle ka -->