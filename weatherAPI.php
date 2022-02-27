<?php
// acda14af651628aa4ff6891d1996af69
$curl = curl_init('api.openweathermap.org/data/2.5/weather?lat=35&lon=139&appid=acda14af651628aa4ff6891d1996af69');
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$data = curl_exec($curl);



$data = json_decode($data,true);
echo '<pre>';
var_dump($data);
echo '</pre>';






curl_close($curl);