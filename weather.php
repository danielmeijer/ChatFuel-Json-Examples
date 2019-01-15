<?php
// RECEIVE BY PARAMETER
// URL.com/?location=Cordoba

// Define API KEY openweathermap
$api_key="<API_KEY>";


if (isset($_GET['location'])) {
$parameter=$_GET['location'];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.openweathermap.org/data/2.5/weather?q='.$parameter.'&appid='.$api_key.'&units=metric' ,
    CURLOPT_USERAGENT => 'Chatfuel'
));
$response = curl_exec($curl);
curl_close($curl);
$json=json_decode($response,true);
//Translate to Chatfuel...
$textToSay="En ". $parameter." hace ".$json['main']['temp']." grados";

// JSON Chatfuel to send Text
$data = array('messages'=> array(array('text'=>$textToSay)));
echo json_encode($data);
}
else {
echo "No parameter";
}
?>
