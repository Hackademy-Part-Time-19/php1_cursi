<?php
//ESERCIZIO 1
/*
$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = $text2;
$text7 = 'bevuto';
$text8 = "tutto";

echo $text1, " ", $text2, " ", $text3, $text4, " ", $text6, " ", $text7, " ", $text8;


//ESERCIZIO2

$words1 = [
  'una',
  'del',
  'vita',
  'colle',
  'mi',
  'di',
  [
    'oscura',
    'era',
    89,
    [
      'mezzo',
      [
        'cammin',
        'Nel',
        [
          'selva',
          'la',
          [
            'via',
            'una',
            true,
          ]
        ],
      ]
    ],
    'ritrovai',
    'per'
  ],
  'diritta',
  'vita',
  'retta'
];
$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'nostra',
  'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
  ]
];



$result = $words1[6][3][1][1]. " ". $words1[6][3][0]. " ".  $words1[1]. " ". $words1[6][3][1][0]. " ". $words1[5]. " ". $words2['elemento2']. " ". $words1[8]. " ". $words1[4]. " ". $words1[6][4]. " ". $words1[6][5]. " ". $words1[0]. " ". $words1[6][3][1][2][0]. " ". $words1[6][0]. ", ". $words2['elemento3'][2]. " ". $words1[6][3][1][2][1]. " ". $words1[9]. " ". $words1[6][3][1][2][2][0]. " ". $words1[6][1]. " ". $words2['elemento3'][1];


echo $result;



//ESERCIZIO 3

$x = 10;
$y = 20;
$z = "20";
$w = 10;

var_dump($x<$y);
var_dump($x <= $w);
var_dump($y == $z);
var_dump($y === $z);
var_dump($y !== $z);
var_dump($y != $z);

*/

//ESERCIZIO 4

$corsoHackademy = ["docenti" => ["Emanuele", "Mattia"], "studenti"=> ["Luca","Domenico", "Antonio"], "argomenti" => ["html","css", "php", "frontend", "backend"]];



echo $corsoHackademy["docenti"][1], " è stato il docente di ", $corsoHackademy["argomenti"][3], " dove abbiamo visto ", $corsoHackademy["argomenti"][0], " e ", $corsoHackademy["argomenti"][1], " mentre con ", $corsoHackademy["docenti"][0], " stiamo scoprendo ", $corsoHackademy["argomenti"][2], " e fa parte della parte di ", $corsoHackademy["argomenti"][4];