<?php
$url = array(
"https://i.postimg.cc/wjKSqRwk/63e3ee3ad856f6a681ba4d89176d3408.gif",
"https://i.postimg.cc/gJQP3SHC/izxeqykfmf081.gif",
"https://i.postimg.cc/GmCdMfnr/tumblr-inline-p1hl704v-CJ1u96zzb-500.gif",
"https://i.postimg.cc/y62VRdfD/tumblr-m5tt38-Yq-XQ1ry3ufgo1-500.gif",
"https://i.postimg.cc/1zRPSNzj/tumblr-nttrm1-S20q1t8vguho2-500-1.gif",
"https://i.postimg.cc/5tgGS7bP/tumblr-oq10nz-TXi-Q1uwruoco2-400.gif",
"https://i.postimg.cc/RZM2Jxz3/tumblr-os6u0e4-Lj-R1w9f0jko10-r1-500.gif",
"https://i.postimg.cc/RVcznT6Y/tumblr-os6u0e4-Lj-R1w9f0jko2-r1-500.gif",
"https://i.postimg.cc/qB6rprk4/tumblr-os6u0e4-Lj-R1w9f0jko3-r1-500.gif",
"https://i.postimg.cc/Bn4f512n/tumblr-os6u0e4-Lj-R1w9f0jko6-r1-500.gif",
"https://i.postimg.cc/WbcBjJWw/tumblr-os6u0e4-Lj-R1w9f0jko8-r1-500.gif",
"https://i.postimg.cc/150Lz5bh/tumblr-os6u0e4-Lj-R1w9f0jko9-r1-500.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$choigay = array(
"url" => $tuandeeptry,
"author" => "VietKhanhApi",
"success" => "true",
);
$rdimg = json_encode($choigay);

$i = ['\/v\/','\/','VietKhanhApi'];
$t = ['/v/','/','VietKhanhApi'];
$j = str_replace($i, $t, $rdimg);
echo $j;
