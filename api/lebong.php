<?php
$url = array(
"https://i.imgur.com/t5KmYpF.jpg",
"https://i.imgur.com/928gdU7.jpg",
"https://i.imgur.com/KBCIY8d.jpg",
"https://i.imgur.com/8mRGXEm.jpg",
"https://i.imgur.com/AGX4vJD.jpg",
"https://i.imgur.com/5LipLPp.jpg",
"https://i.imgur.com/mGWkYJt.jpg",
"https://i.imgur.com/dea0zON.jpg",
"https://i.imgur.com/ApF9L0o.jpg",
"https://i.imgur.com/PWGEhD2.jpg",
"https://i.imgur.com/S8Rselw.jpg",
"https://i.imgur.com/8HxXy73.jpg",
"https://i.imgur.com/lvwLcnw.jpg",
"https://i.imgur.com/j5btrNn.jpg",
"https://i.imgur.com/a0qKof9.jpg",
"https://i.imgur.com/cPh6f15.jpg",
"https://i.imgur.com/x3MTNot.jpg",
"https://i.imgur.com/Gbe187R.jpg",
"https://i.imgur.com/9hb6Pr1.jpg",
"https://i.imgur.com/TOFhTIF.jpg",
"https://i.imgur.com/MNmpnII.jpg",
"https://i.imgur.com/ulqsyTA.jpg",
"https://i.imgur.com/o79OKLr.jpg",
"https://i.imgur.com/W2gp98A.jpg",
"https://i.imgur.com/RSy5C9Q.jpg",
"https://i.imgur.com/gO5a8kc.jpg",
"https://i.imgur.com/lHIc1Vw.jpg",
"https://i.imgur.com/xz8Y7I0.jpg",
"https://i.imgur.com/tZUSMup.jpg",
"https://i.imgur.com/4EGOb3D.jpg",
"https://i.imgur.com/Ag5vO6u.jpg",
"https://i.imgur.com/W2gp98A.jpg",
"https://i.imgur.com/GGFOaml.jpg",
"https://i.imgur.com/shKHJA1.jpg",
"https://i.imgur.com/WDkUJ3W.jpg",
"https://i.imgur.com/CMQq91F.jpg",
"https://i.imgur.com/3LqWQ5u.jpg",
"https://i.imgur.com/NG2gSuU.jpg",
"https://i.imgur.com/gMVanlr.jpg",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$xoa = array(
"url" => $tuandeeptry,
"author" => "VietKhanhApi",
"success" => "true",
);
$rdimg = json_encode($xoa);

$i = ['\/v\/','\/','VietKhanhApi'];
$t = ['/v/','/','VietKhanhApi'];
$j = str_replace($i, $t, $rdimg);
echo $j;
