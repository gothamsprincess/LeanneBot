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
else if ($text == "/frysk") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Bûter, Brea en Griene Tsiis, wa dat net sizze kin is gjin oprjochte Fries."));
}

//tekst
else if ($text == "/nijskierrig") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Do nijskierrige hin!"));
}

//tekst
else if ($text == "/moat") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Als 't net kin sa als t moat, dan moat it mar sa 't it kin."));
}

//tekst
else if ($text == "/hert") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Wa't in Fries ienkear yn it hert slûten hat, is der min wer út te krijen."));
}


//tekst
else if ($text == "/willem85") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Willem siet yn de olvestêdetocht fan '85"));
}

//tekst
else if ($text == "/sok") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Sokkebolje op"));
}

//tekst
else if ($text == "/ok") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Ok famke"));
}


//tekst
else if ($text == "/haadsted") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Ljouwert is de haadstêd fan Fryslân"));
}

//tekst
else if ($text == "/frlboppe") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Fryslân Boppe!"));
}

//tekst
else if ($text == "/goeiedei") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Hoeist mei jimme op dizze moaie dei?."));
}

//tekst
else if ($text == "/rûgeltsjes") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Mat dr ek nog ien rûgeltsjes op bôle ha?"));
}

//tekst
else if ($text == "/oan") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "It giet oan!"));
}

//tekst
else if ($text == "/leafde") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Ik hoar fan dy"));
}

//tekst
else if ($text == "/ekfandy") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Ik hoar ek fan dy leave"));
}

//tekst
else if ($text == "/bekje") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Hoar dy 't bekje mar even ticht, leave."));
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
