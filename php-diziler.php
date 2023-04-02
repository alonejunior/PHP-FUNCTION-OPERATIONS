<?php
    $ad="cagri";
    $soyad="koc";
    $meslek="php developer";
    $yas=20;

 
    $benlik=[
       'ad' => "cagri",
       'soyad'=> "koc",
       'meslek'=> "php developer",
       'yas'=> 20
    ];
//varsayılan sıralama 0 1 2 3 diye devam eder.
   // print_r($benlik);
// echo $benlik[3];

$kategoriler = [
    'siteler'=> [
        'e-ticaret'=>[
                'sahibinden',
                'n11',
                'gittigidiyor',
                'göndergelsin'
        ],
        'egitim'=>[
            'udemy',
            'prototurk'

        ]
    ]
];
// echo $kategoriler['siteler']['egitim'][1];
// print_r($kategoriler);




?>