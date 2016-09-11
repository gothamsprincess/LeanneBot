<?php

include("Telegram.php");

$bot_id = "292565579:AAGIVqv0vGm3G1pIgVwd0_8QVwgmRpuYfBs";
$telegram = new Telegram($bot_id);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();

//foto
if ($text == "/foto") {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/leanne.jpg")));
}

//tekst
else if ($text == "/tekst") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Bûter, Brea en Griene Tsiis, wa dat net sizze kin is gjin oprjochte Fries."));
}

//tekst
else if ($text == "/goeiedei") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Hoeist mei jimme op dizze moaie dei?."));
}

//sticker
else if ($text == "/sticker") {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADEwADbkngC6ANL5qYiJcwAg' ));
}

//voice
else if ($text == "/voice") {
	$telegram->sendVoice(array('chat_id' => $chat_id, 'voice' => new CURLFile("./assets/leanne.mp3")));
}
?>
