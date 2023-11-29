<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://control.msg91.com/api/v5/flow/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"template_id\":\"6566d0cad6fc0545a21c6082\",\"sender\":\"DIGIREG01\",\"short_url\":\"1 (On) or 0 (Off)\",\"mobiles\":\"7506332010\",\"VAR1\":\"test\",\"VAR2\":\"sss\"}",
  CURLOPT_HTTPHEADER => [
    "Authkey: 409880Afm2thuJ4wvH6566d207P1",
    "accept: application/json",
    "content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}