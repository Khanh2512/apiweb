<?php
$url = array(
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_1.GIF",
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_3.GIF",
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_6.GIF",
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_8.GIF",
"https://i.postimg.cc/vZ5CPKTV/13126.gif",
"https://i.postimg.cc/RZfxkFsq/1467506881-1016b5fd386cf30488508cf6f0a2bee5.gif",
"https://i.postimg.cc/3NRHVFVH/1Ky5.gif",
"https://i.postimg.cc/BQj0CN2T/83GiP3o.gif",
"https://i.postimg.cc/9fpK2qGX/anime-punch.gif",
"https://i.postimg.cc/HnjfBs8Y/Gamehubvn-10-man-danh-dam-trong-anime-khien-nguoi-xem-nhin-ma-ngua-tay-14.gif",
"https://i.postimg.cc/W31K1bnG/Imperfect-Frightened-Foal-size-restricted.gif",
"https://i.postimg.cc/9fY5fkjh/minionpunc-8nuwqn3e.gif",
"https://i.postimg.cc/L57G7Kjz/onehit-30-5-2016-3.gif",
"https://i.postimg.cc/02MTSjqZ/onehit-30-5-2016-6.gif",

);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$punch = array(
"url" => $tuandeeptry,
"author" => "VietKhanhApi",
"success" => "true",
);
$rdimg = json_encode($punch);

$i = ['\/v\/','\/','VietKhanhApi'];
$t = ['/v/','/','VietKhanhApi'];
$j = str_replace($i, $t, $rdimg);
echo $j;
