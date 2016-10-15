<?php
$access_token = '9PuQVaKkFuW6bisJatXdO5r1hXSkt8qtUm4SGx7t6qvtubx7Tb2r07tEurOP+dT9mfUbsBs0YwTfJtRTVP/2yG2oy9TCET585B1RkMhZ6nJ8RDRC99WV6hmjZk86rTGdV3P3stk6a5OtUytbl0Ty2QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>