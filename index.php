<?php

$ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?q=Poltava&appid=a1eb3d0585788328d66af5ddb090c53e",
    CURLOPT_RETURNTRANSFER => true
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";