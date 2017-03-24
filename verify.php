<?php
$access_token = 'tfFysG9vPhSDbKq9mvs/6iAr4SWE+yd8Y/W8D6QLOnvVJaas0s9KnngxInABg0zeJgScqzb7/FxLrEX2wx0klsO7dd4A5nU1DQscTYkcuLKhKCqH0rzfBE2QQyru4f6Gm5NheNYRTJ/oqmsuUQ8xCAdB04t89/1O/w1cDnyilFU=';

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
