<?php

include("Telegram.php");
include("functies.php");

//stop en start
if ($text == "/decirkeltrekbot" && $telegram->Username() == "Maartenwut") {
	if (file_exists(stop)) {
		unlink(stop);
	    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Hoi!"));
	} else {
		$ourFileHandle = fopen(stop, 'w') or die("can't open file");
		fclose($ourFileHandle);
	    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Doei!"));
	}
} else if ($text == "/decirkeltrekbot" && $telegram->Username() != "Maartenwut") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "haha nee", 'reply_to_message_id' => $telegram->MessageID()));
}

else if (file_exists(stop)) {
	die("De bot is momenteel uit");
}

//failsafes
else if (strlen(strstr($text,"@vochtigebot"))>0) {
	die();
}
else if (strlen(strstr($text,"http"))>0) {
	die();
}

//dit
else if ($text == "dit" && $telegram->ReplyID()) {
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Dat", 'reply_to_message_id' => $telegram->ReplyID()));
}

//kek, wauw en ik ihe
/*else if ($text == "kek" || $text == "wauw" || $text == "ik ihe" || $text == "ik_ihe") {
	if (rand(0,99) < 10) {
		$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Keʞ", 'reply_to_message_id' => $telegram->MessageID()));
	} else {
		$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => $telegram->Text(), 'reply_to_message_id' => $telegram->ReplyID()));
	}
}*/

//leve de koning!
else if (strlen(strstr($text," koning"))>0 && strlen(strstr($text," de "))>0 && strlen(strstr($text,"leve "))>0 && substr( $text, 0, 1 ) !== "/" ) {
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Leve de koning!"));
}

//riv of rip
else if ($text == "riv" || $text == "/riv") {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/riv.jpg")));
}

//levedekoning
else if (strlen(strstr($text,"/levedekoning"))>0) {
	$telegram->sendVoice(array('chat_id' => $chat_id, 'voice' => new CURLFile("./assets/levedekoning.mp3")));
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Leve de koning!"));
}

//willempie
else if (strlen(strstr($text,"/willempie"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/willem.jpg")));
}

//lachen
else if (strlen(strstr($text,"/lachen"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile("./assets/lachen.gif")));
}

//kek
else if (strlen(strstr($text,"/kek"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADOQADkzoFAAFw9gW6EJBQIQI' ));
}

//applaus
else if (strlen(strstr($text,"/applaus"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADVQADkzoFAAHl_TiVLZF85AI' ));
}

//netjes
else if (strlen(strstr($text,"/netjes"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADvgIAAsaj4AABihreNcuFbD0C' ));
}

//wat
else if (strlen(strstr($text,"/wat"))>0 && strlen(strstr($text,"/watzeije")) == 0 && strlen(strstr($text,"watch")) == 0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/wat.jpg")));
}

//patat
else if (strlen(strstr($text,"/patat"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/patat.jpg")));
}

//waardeloos
else if (strlen(strstr($text,"/waardeloos"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAAD1AAD2U2JB26yI3XZE6IGAg' ));
}

//perfect
else if (strlen(strstr($text,"/perfect"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADFgADkzoFAAHdW_c7r7CjaAI' ));
}

//jezus
else if (strlen(strstr($text,"/jezus"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAAD2AAD2U2JB4bqtEgPGqC_Ag' ));
}

//toppie
else if (strlen(strstr($text,"/toppie"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADUQADkzoFAAHlKFBIGuS3sAI' ));
}

//spanje
else if (strlen(strstr($text,"/spanje"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/spanje.jpg")));
}

//willemsliefde
else if (strlen(strstr($text,"/willemsliefde"))>0 || strlen(strstr($text,"/koningsliefde"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => 'Willem is liefde, Willem is leven.'. PHP_EOL . 'https://www.youtube.com/watch?v=VSv0w8egCYE'));
}

//koningslied
else if (strlen(strstr($text,"/koningslied"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => 'https://www.youtube.com/watch?v=MEUKyKb4g6k'));
}
//waarisdekoning
else if (strlen(strstr($text, "/waarisdekoning"))>0) {
	$telegram->sendLocation(array('chat_id' => $chat_id, 'latitude' => '52.080810', 'longitude' => '4.306228'));
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Hier is de koning! \xF0\x9F\x98\x9C"));
}

//kopieerpasta
else if (strlen(strstr($text,"/kopieerpasta"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => kopieerpasta()));
}

//aanvalshelikopter
else if (strlen(strstr($text,"/aanvalshelikopter"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/aanvalshelikopter.txt')));
}

//meemsterkaas
else if (strlen(strstr($text,"/meemsterkaas"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/meemsterkaas.txt')));
}

//cirkeltrek
else if (strlen(strstr($text,"/cirkeltrek"))>0 && substr( $text, 0, 1 ) == "/") {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/cirkeltrek.txt')));
}

//goedepoep
else if (strlen(strstr($text,"/goedepoep"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/goedepoep.txt')));
}

//watzeije
else if (strlen(strstr($text,"/watzeije"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/watzeije.txt')));
}

//stadhouders
else if (strlen(strstr($text,"/stadhouders"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/stadhouders.txt')));
}

//oorporno
else if (strlen(strstr($text,"/oorporno"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => oorporno()));
}

//drieswave
else if (strlen(strstr($text,"/drieswave"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/drieswave.png")));
}

//proost
else if (strlen(strstr($text,"/proost"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BBQADBAADcwADkzoFAAG-8JnnS_BGLgI' ));
}

//opwillem
else if (strlen(strstr($text,"/opwillem"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADLAADkgu4AAG76ewKdZNbggI' ));
}

//noice
else if (strlen(strstr($text,"/noice"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile("./assets/noice.gif")));
}

//feest
else if (strlen(strstr($text,"/feest"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADAgADxAIAAi6uVQHaiW805ofWBgI' ));
}

//gaben
else if (strlen(strstr($text,"/gaben"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADmAAD0KSvAAG0nuRpqVg8SwI' ));
}

//spam
else if (strlen(strstr($text,"/spam"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile("./assets/spam.gif")));
}

//getrekkert
else if (strlen(strstr($text,"/getrekkert"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/getrekkert.jpg")));
}

//moetdit
else if (strlen(strstr($text,"/moetdit"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADLwADOXRRAzX6um5Sinh6Ag' ));
}

//goedbezig
else if (strlen(strstr($text,"/goedbezig"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAAD0gAD2U2JB1VxulAa-EKkAg' ));
}

//nee
else if (strlen(strstr($text,"/nee"))>0 && strlen(strstr($text,"/neetoch"))==0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/hahanee.jpg")));
}

//willem en ja
else if (strlen(strstr($text,"/willem"))>0 || strlen(strstr($text,"/ja"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADUwADkzoFAAGkGccCqSSWSAI' ));
}

//doei
else if (strlen(strstr($text,"/doei"))>0 || strlen(strstr($text,"/dag"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADHQADkzoFAAGOXUKdbVRkMQI' ));
}

//ik_ihe
else if (strlen(strstr($text,"/ik_ihe"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => ik_ihe()));
}

//papgrap
else if (strlen(strstr($text,"/papgrap"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => papgrap(), 'parse_mode' => Markdown));
}

//halt
else if (strlen(strstr($text,"/halt"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADLgADkgu4AAEgqEHum5xBdAI' ));
}

//helemaalmooi
else if (strlen(strstr($text,"/helemaalmooi"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADPQADOXRRA549oF1BJ6kPAg' ));
}

//kut
else if (strlen(strstr($text,"/kut"))>0 && strlen(strstr($text,"/kutzooi")) == 0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/kut.jpg")));
}

//kutzooi
else if (strlen(strstr($text,"/kutzooi"))>0 && strlen(strstr($text,"/kut ")) == 0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/kutzooi.png")));
}

//randig
else if (strlen(strstr($text,"/randig"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/randig.jpg")));
}

//nederland
else if (strlen(strstr($text,"/nederland"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/nederland.jpg")));
}

//angelsaksisch
else if (strlen(strstr($text,"/angelsaksisch"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/angelsaksisch.jpg")));
}

//hoekig
else if (strlen(strstr($text,"/hoekig"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/hoekig.jpg")));
}

//goedverhaal
else if (strlen(strstr($text,"/goedverhaal"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/goedverhaal.jpg")));
}

//zucht
else if (strlen(strstr($text,"/zucht"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADEwADbkngC6ANL5qYiJcwAg' ));
}

//kansloos
else if (strlen(strstr($text,"/kansloos"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAADAQEAAtlNiQcKdjaIYPZ0qAI' ));
}

//klapklap
else if (strlen(strstr($text,"/klapklap"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile("./assets/klapklap.gif")));
}

//veelspam
else if (strlen(strstr($text,"/veelspam"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile("./assets/veelspam.gif")));
}

//zoutig
else if (strlen(strstr($text,"/zoutig"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/zoutig.jpg")));
}

//meerjpeg
else if (strlen(strstr($text,"/meerjpeg"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/meerjpeg.jpg")));
}

//feesboek
else if (strlen(strstr($text,"/feesboek"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => feesboek()));
}

//opalberto
else if (strlen(strstr($text,"/opalberto"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/opalberto.jpg")));
}

//ditlooptuitdehand
else if (strlen(strstr($text,"/ditlooptuitdehand"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/ditlooptuitdehand.jpg")));
}

//inderdaad
else if (strlen(strstr($text,"/inderdaad"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/inderdaad.jpg")));
}

//goedgemeemd
else if (strlen(strstr($text,"/goedgemeemd"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/goedgemeemd.jpg")));
}

//lama
else if (strlen(strstr($text,"/lama"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/lama.jpg")));
}

//blaashet
else if (strlen(strstr($text,"/blaashet"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/blaashet.jpg")));
}

//heil
else if (strlen(strstr($text,"/heil"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/heil.jpg")));
}

//saai
else if (strlen(strstr($text,"/saai"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/saai.jpg")));
}

//klootviool
else if (strlen(strstr($text,"/klootviool"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/klootviool.jpg")));
}

//neetoch
else if (strlen(strstr($text,"/neetoch"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/neetoch.jpg")));
}

//lui
else if (strlen(strstr($text,"/lui"))>0) {
	$telegram->sendDocument(array('chat_id' => $chat_id, 'document' => new CURLFile("./assets/lui.gif")));
}

//meh
else if (strlen(strstr($text,"/meh"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/meh.jpg")));
}

//weersvoorspelling
else if (strlen(strstr($text,"/weersvoorspelling"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/weersvoorspelling.jpg")));
}

//nsb
else if (strlen(strstr($text,"/nsb"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => nsb()));
}

//eens
else if (strlen(strstr($text,"/eens"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/eens.jpg")));
}

//poephoofd
else if (strlen(strstr($text,"/poephoofd"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/poephoofd.jpg")));
}

//ditisprima
else if (strlen(strstr($text,"/ditisprima"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/ditisprima.jpg")));
}

//poetsgebakken
else if (strlen(strstr($text,"/poetsgebakken"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/poetsgebakken.jpg")));
}

//vochtig
else if (strlen(strstr($text,"/vochtig"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/vochtig.jpg")));
}

//zalwel
else if (strlen(strstr($text,"/zalwel"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/zalwel.jpg")));
}

//topkek
else if (strlen(strstr($text,"/topkek"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/topkek.jpg")));
}

//ikookbedankt
else if (strlen(strstr($text,"/ikookbedankt"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/ikookbedankt.jpg")));
}

//gewoondoehet
else if (strlen(strstr($text,"/gewoondoehet"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/gewoondoehet.jpg")));
}

//accuraat
else if (strlen(strstr($text,"/accuraat"))>0) {
	$telegram->sendSticker(array('chat_id' => $chat_id, 'sticker' => 'BQADBAAD3QADCoLFAho4MfEEHQ92Ag' ));
}

//gezichtspalm
else if (strlen(strstr($text,"/gezichtspalm"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/gezichtspalm.jpg")));
}

//dankje
else if (strlen(strstr($text,"/dankje"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/dankje.jpg")));
}

//fedora
else if (strlen(strstr($text,"/fedora"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => file_get_contents('assets/kopieerpasta/fedora.txt')));
}

//nuleiland
else if (strlen(strstr($text, "/nuleiland"))>0) {
        $telegram->sendLocation(array('chat_id' => $chat_id, 'latitude' => '0.0', 'longitude' => '0.0'));
        $telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/nullisland.png")));
}

//excuses
else if (strlen(strstr($text,"/excuses"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/excuses.jpg")));
}

//siebe
else if (strlen(strstr($text,"/siebe"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => new CURLFile("./assets/siebe.jpg")));
}

//luchtvochtigheid
else if (strlen(strstr($text,"/luchtvochtigheid"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "69%"));
}

//rms
else if (strlen(strstr($text,"/rms"))>0) {
	$telegram->sendPhoto(array('chat_id' => $chat_id, 'photo' => rms()));
}

//meem
else if (strlen(strstr($text,"/meem"))>0) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => meem()));
}

//zeg
else if (strlen(strstr($text,"/zeg"))>0 && $telegram->ReplyID() == null) {
	$telegram->sendVoice(array('chat_id' => $chat_id, 'voice' => zeg(substr($text,4))));
}

//zeg op reply
else if ($text == "/zeg" && $telegram->ReplyID()) {
	$telegram->sendVoice(array('chat_id' => $chat_id, 'voice' => zeg($telegram->ReplyText()), 'reply_to_message_id' => $telegram->ReplyID()));
}

//levededevs
else if (strlen(strstr($text,"/levededevs"))>0) {
    $telegram->sendMessage(array('chat_id' => $chat_id, 'text' => "Ik ben gemaakt door @Maartenwut met overgeporte code van de oude @FlippyBot gemaakt door @Flippylosaurus. \xF0\x9F\x98\x84" . PHP_EOL . "Ik sta op github. https://github.com/Maartenwut/DeCirkeltrekBot"));
}

else if ($telegram->person() != false) {
	if ($telegram->person() == 'new') {
		$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => 'Sterf, '.$telegram->personName().'!'));
	} else if ($telegram->person() == 'left') {
		$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => $telegram->personName().' was gehalt!'));
	}
}

else if ($telegram->newphoto()) {
	$telegram->sendMessage(array('chat_id' => $chat_id, 'text' => 'Haha vet lelijke foto man doe weg'));
}
?>
