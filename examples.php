<?php

// JSON Chatfuel to send Text
$data = array('messages'=> array(array('text'=>'Este texto ha sido generado desde este script')));

// JSON Chatfuel to send image
$data = array('messages'=> array(array('attachment'=> array('type'=>'image','payload'=> array('url'=>'https://www.google.es/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png')))));

// JSON Chatfuel to send video
$data = array('messages'=> array(array('attachment'=> array('type'=>'video','payload'=> array('url'=>'https://rockets.chatfuel.com/assets/video.mp4')))));

// JSON Chatfuel to send audio
$data = array('messages'=> array(array('attachment'=> array('type'=>'audio','payload'=> array('url'=>'https://rockets.chatfuel.com/assets/hello.mp3')))));

// JSON Chatfuel to send file
$data = array('messages'=> array(array('attachment'=> array('type'=>'file','payload'=> array('url'=>'https://rockets.chatfuel.com/assets/ticket.pdf')))));

echo json_encode($data);

?>
