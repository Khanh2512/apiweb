<?php
$url = array(
"https://i.postimg.cc/v82gDfxf/anime-cute.gif",
"https://i.postimg.cc/MZLHzwgY/anime-hug-38.gif",
"https://i.postimg.cc/Y0TCRNQP/anime-hug-cry-gif-4.gif",
"https://i.postimg.cc/k4146PGq/animesher-com-kou-x-futaba-gif-manga-1498196.gif",
"https://i.postimg.cc/V6LvkkYK/B7bp.gif",
"https://i.postimg.cc/4Nt9Mnnc/ezgif-com-624b1ca218.gif",
"https://i.postimg.cc/prmdKc58/f9e934cddfd6fefe0079ab559ef32ab4.gif",
"https://i.postimg.cc/0NCrvwq6/g-DEE1-QGHMm-MAOJRb4-Q-ehq-F7ckhc-VAUyzog-C6-VP5v-LTa-MUavlk-FTEj-Yp-SFl-BPX1c-SJXC7qzk-D4s-Huogbit-b-BX45-Oo-Xs26-B5bs-S.gif",
"https://i.postimg.cc/tTTRHv5f/giphy.gif",
"https://i.postimg.cc/DzhmRcRk/giphy-1.gif",
"https://i.postimg.cc/GtTc4B6x/r9aU2xv.gif",
"https://i.postimg.cc/d0nQpc8r/tumblr-m2rq4k-T2e-Y1qkb6keo1-500.gif",
"https://i.postimg.cc/pT6WVQcd/unnamed.gif",
"https://i.postimg.cc/V5yznf8Q/v07ICwl.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$hug = array(
"url" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($hug);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
