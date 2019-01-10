<?php

// JSON Chatfuel to send Text
$data = array('messages'=> array(array('text'=>'Este texto ha sido generado desde internet')));

// JSON Chatfuel to send image

$url='https://www.google.es/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
$data = array('messages'=> array(array('attachment'=> array('type'=>'image','payload'=> array('url'=>$url)))));

// JSON Chatfuel to send video

$url='https://rockets.chatfuel.com/assets/video.mp4';
$data = array('messages'=> array(array('attachment'=> array('type'=>'video','payload'=> array('url'=>$url)))));

// JSON Chatfuel to send audio

$url='https://rockets.chatfuel.com/assets/hello.mp3';
$data = array('messages'=> array(array('attachment'=> array('type'=>'audio','payload'=> array('url'=>$url)))));

// JSON Chatfuel to send file

$url='https://rockets.chatfuel.com/assets/ticket.pdf';
$data = array('messages'=> array(array('attachment'=> array('type'=>'file','payload'=> array('url'=>$url)))));

echo json_encode($data);

?>
