<?php
// connect to call server for activate.

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "61.34.82.144/knk_deposit_up.php");
curl_exec($ch);

echo "처리되었습니다. </br>";

echo "<a href=\"javascript:history.go(-1)\">돌아가기</a>";
