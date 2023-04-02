<?php

function cagri()
{
    return "geri döndü";
}

$a = cagri();

// echo $a;



function mod($say1,$say2)
{
    return ($say1 % $say2);
}

$alma = mod(20,8);

// echo $alma;

function adsoyad($soyad)
{
    return $GLOBALS['ad'] . '' . $soyad;
}

echo adsoyad('Erbilen');

?>