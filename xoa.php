<?php
$url = array(
"https://i.postimg.cc/3w5NCX26/anime-head-pat-1.gif",
"https://i.postimg.cc/9M1fhss5/c1WnZsEk.gif",
"https://i.postimg.cc/m2PgvXwJ/giphy.gif",
"https://i.postimg.cc/jdBStH35/pat-head.gif",
"https://i.postimg.cc/wBpxs6pY/tumblr-0c8250dafba85bb286426ce1c364a1cf-37b7a99b-1280.gif",
"https://i.postimg.cc/Pxdq0d3Q/tumblr-13717a06189c0af93ea4b58b86accd5a-bc3ce2fe-250.gif",
"https://i.postimg.cc/yxbYJcVL/tumblr-nom2ap-Cfio1tydz8to2-500.gif",
"https://i.postimg.cc/CxDL1R94/tumblr-peb6js73li1sk6fb9-1280.gif",
"https://i.postimg.cc/FFWKn5j0/v07ICwl.gif",

);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$xoa = array(
"url" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($xoa);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
