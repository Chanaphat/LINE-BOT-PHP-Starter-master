<?php
$access_token = 'l7fHzcMPoT/0MohHBMIY3S/k9lFG6Jlp8lPpv75RlND3llKR4kA7PV/IA7M5swy66uRTXfTcnSnH9ABkCYrb3yciuNLhJEuIn3ItIRxv+dHrsBUm7FzrsvGJyA4ZETVnc+k0GtOXDIk2HfJIr5F7ZQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
