<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Notes</title>
  </head>
  <body>
<?php // include ("chemin");
      // include_once("chemin");
      // require("chemin");
      // require_once("chemin");
include("./partial/_navBar.php"); ?>
<div class="container">

    <h1>Page de prise de notes</h1>
    <pre>
résultats php
========================


  <?php
  // for var in databse
  $texte_du_machin = "écriture en snack case";
  $thing_s_text = "writing in snack case";

  // pour les noms de class
  $TexteDuMachin ="écriture en Pascal case ou upper camel case";
  
  // pour les variables en php,js, les noms des fichiers standard etc...
  $TexteDuMachin = "écriture en camel case";

  // chaîne de caractères ou string
  $texte_de_machin= "php tests";

  $name = "Cohen-Solal";

  // entier ou int
  $truc = 3;

  // décimal ou float
  $decimal = 3.14;

  // tableau ou array
  $tab = [];
  $tab[] = $texte;
  $tab [] = $truc;
  $tab  [] = $decimal;

  $tab = ["vegetable", "carot"];

  // bool bouléen
  $check =true;

  var_dump($check);

  $test = "test";

  $testinUpperCase = strtoupper($test);

    // chaîne de caractère avec des simples cote
$name = 'Cohen-Solal';

// chaîne de caractère avec des doubles cote
$firstName = "Romain";

// concaténation
$fullName = $firstName . ' ' .$name;

$fullName2 = "$name $firstName";

echo "le gugus se nome $firstName et ils nous explique des choses bizare";

// ancienne manière

$tab = array("valeur1", "valeur2");

// nmanière actuelle
$actualArray = [
  "value",
  "value2",
  7,
  9.4,
  [
    "tab2 valeur 1",
    4
  ],
  "coucou",
];

$associatArray = [
  'name' => "Cohen-Solal",
  "first Name" => "Jeff",
];

var_dump($associatArray["first Name"]);

  
$tab = [];

$tab[] = "coucou";
$tab[] = 'beuh';

$tab2 = [
  'key1' => "foo",
  'key2' => "bar",
];
//ancienne notation
array_push($tab, $tab2);

// nouvelle notation
$tab[] = $tab2;

$valueTotreat = array_pop($tab);

var_dump($tab);
echo "=====<br>";
var_dump($valueTotreat);

  ?>
<?php
  $tab1 = [
    'tab1Key1' => "tableau 1 valeur 1",
    'tab1Key2' => "tableau 1 valeur 2",
    'tab1Key3' => "tableau 1 valeur 3",
  ];

  $tab2 = [
    'tab2Key1' => "tableau 2 valeur 1",
    'tab2Key2' => "tableau 2 valeur 2",
    'tab2Key3' => [
      'keyTruc' => "tableau 2 valeur 3",
      'keyMachin' => "autre chose",
    ],
  ];

  $tab3 = [
    'tab3Key1' => "tableau 3 valeur 1",
    'tab3Key2' => "tableau 3 valeur 2",
    'tab3Key3' => "tableau 3 valeur 3",
  ];

  $tab = [
    'tab1' => $tab1,
    'tab2' => $tab2,
    'tab3' => $tab3,
  ];

  var_dump($tab2['tab2Key3']['keyMachin']);
  ?>
 affichage d'une donnée précise: <?php echo $tab['tab2']['tab2Key3']['keyMachin']; ?>






</pre>    
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>