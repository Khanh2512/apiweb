<?php
$url = array(
"https://i.postimg.cc/ydNwPKxy/51d34faac842f4f1ae1a4bfa624a4e2b.gif",
"https://i.postimg.cc/pV3LpGc6/anime-sleeping.gif",
"https://i.postimg.cc/2ybMsx4q/animesher-com-sleep-chisaki-hiradaira-gif-1335190.gif",
"https://i.postimg.cc/906KCqpL/sleep.gif",
"https://i.postimg.cc/02m2mYL2/sleepy-tired.gif",
"https://i.postimg.cc/sX0bHLZd/umaruchan-gif-7.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$sleep = array(
"data" => $tuandeeptry,
"author" => "VietKhanhApi",
"success" => "true",
);
$rdimg = json_encode($sleep);

$i = ['\/v\/','\/','VietKhanhApi'];
$t = ['/v/','/','VietKhanhApi'];
$j = str_replace($i, $t, $rdimg);
echo $j;
