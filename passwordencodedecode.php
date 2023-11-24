<?php
$str = 'admin@123';
$encodeText = base64_encode($str);
echo "Encode Text: " . $encodeText."<br>";


$str1 = 'YWRtaW5AMTIz';
$decodeText = base64_decode($str1);
echo "Decode Text: " . $decodeText;

?>

<!-- //samjle ka -->