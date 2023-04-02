<?php

$sayilar = [1,2,3,4,5,6,7,8,9,10];

foreach($sayilar as $sayi){
   // echo $sayi.'<br>';
}

$calisanbilgileri = [
    'ad' => 'cagri',
    'soyad' => 'koc',
    'meslek' =>'php developer',
    'sicili' => 'temiz',
    'medenihali' => 'bekar',
    'menşei' => 'Yozgat'

];

//key arraydeki($calisanbilgilerini) çekiyor
foreach ($calisanbilgileri as $key =>$calisan)
{
    echo $calisan . '<br>' ;
}
?>