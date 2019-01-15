<?php

// RECEIVE BY PARAMETER
// URL.com/?name=name=daniel


if (isset($_GET['name'])) {

$parameter=$_GET['name'];

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.genderize.io/?name='. $parameter,
    CURLOPT_USERAGENT => 'Chatfuel'
));
$response = curl_exec($curl);
curl_close($curl);
$json=json_decode($response,true);


//Translate to Chatfuel...
if ($json['gender']=="male") {
$textToSay="Ese es un nombre de hombre";
}
else {
$textToSay="Ese es un nombre de mujer";
}

// JSON Chatfuel to send Text
$data = array('messages'=> array(array('text'=>$textToSay)));

echo json_encode($data);

}
else {
echo "No parameter";
}

?>
