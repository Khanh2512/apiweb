<?php
$url = array(
"https://i.postimg.cc/qMQdf7bJ/1or7sa.gif",
"https://i.postimg.cc/L8XFmMwz/2ce5a017f6556ff103bce87b273b89b7.gif",
"https://i.postimg.cc/5thh5Q03/Anime-083428-6224795.gif",
"https://i.postimg.cc/zGcZBcY4/anime-kick.gif",
"https://i.postimg.cc/tC9Hm6zv/gif-2-15319836727292050186373.gif",
"https://i.postimg.cc/XJ9TsNB0/giphy.gif",
"https://i.postimg.cc/MHmJpZzY/jXOwoHx.gif",
"https://i.postimg.cc/J0mSvwjH/kick-anime.gif",
"https://i.postimg.cc/59qhv0MB/kick-anime-1.gif",
"https://i.postimg.cc/MpXNhmf5/OHNW.gif",
"https://i.postimg.cc/s2h82fcZ/tumblr-1ae35cc7d78b5e579d5baabe3f0c03db-00a2d481-540.gif",
"https://i.postimg.cc/MTJLfkP3/tumblr-nyc5ygy2a-Z1uz35lto1-540.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$spar = array(
"url" => $tuandeeptry,
"author" => "VietKhanhApi",
"success" => "true",
);
$rdimg = json_encode($spar);

$i = ['\/v\/','\/','VietKhanhApi'];
$t = ['/v/','/','VietKhanhApi'];
$j = str_replace($i, $t, $rdimg);
echo $j;
