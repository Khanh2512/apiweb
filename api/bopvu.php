<?php
$url = array(
"https://i.postimg.cc/X7v187tb/0e4455b481ddb8706d0787212ddaa859.gif",
"https://i.postimg.cc/tJv5fW8H/1.gif",
"https://i.postimg.cc/XJQcG9jy/24.gif",
"https://i.postimg.cc/HkqSd0nY/3.gif",
"https://i.postimg.cc/d3V644HB/78d07b6be53bea612b6891724c1a23660102a7c4.gif",
"https://i.postimg.cc/fLK5c6Ky/d4a69a2b5846b35a32543c97fbe7fccc.gif",
"https://i.postimg.cc/9XLJrH0N/detail.gif",
"https://i.postimg.cc/65TzZbG6/detail-1.gif",
"https://i.postimg.cc/rmcQt857/detail-2.gif",
"https://i.postimg.cc/qMYwxc8s/detail-3.gif",
"https://i.postimg.cc/XJVkYsbb/GiC86RK.gif",
"https://i.postimg.cc/Hky2ZJ2f/tumblr-mktumr8-HVP1rbi7o1o1-400.gif",
"https://i.postimg.cc/QMgqDRvm/tumblr-ml9mp4-Tw-P21qcp4aro1-500.gif",
"https://i.postimg.cc/rp29v8Zz/tumblr-myzq44-Hv7-G1rat3p6o1-500.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$bopvu = array(
"url" => $tuandeeptry,
"author" => "VietKhanhApi",
"success" => "true",
);
$rdimg = json_encode($bopvu);

$i = ['\/v\/','\/','VietKhanhApi'];
$t = ['/v/','/','VietKhanhApi'];
$j = str_replace($i, $t, $rdimg);
echo $j;
