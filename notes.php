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

<?php

// si [] ou "" ou 0 ou false ou null
$a = 1;
$b = "1";

// comparateurs
/*
* ==
* ===
*!=
*<=
*>=
*
*/
if ( $a === $b ){
  echo "la valeur de \$a est de : $a <br>";
  echo "la valeur de \$b est de : $b <br>";
}
?>
<?php

// $name = "Cohen-Solal";
// $role = "admin";

// if ($name == "Cohen-Solal"){
//   echo "Bonjour Mr $name, bienvenu sur ton site <br>";
// } elseif ($role =="admin") {"Bonjour Mr l'administrateur, bienvenu sur ton site <br>";
// }
// else{
//   echo "Bonjour à vous, bienvenu sur ce site <br>";
// }

?>
<h3>Affichage conditionnel</h3>
<?php
if ($role == "admin"):
?>
<p>Bonjour Mr l'administrateur, bienvenu sur ton site tu es bien connectté</p>
<?php
else :
?>
<p>Bonjour à vous, bienvenu sur ce site<br>
vous n'avez aucun pouvoir
</p>
<?php endif ?>

<?php

$colors = ["bleu", "vert", "rouge", "marron", "orange", "jaune", "blanc", "noir", "violet", "turquoise"];

$colors[] = "rose";

// echo "<ul>";
// for ($i = 0; $i < count($colors); $i++){
// echo'<li>couleur 1: ' . $i + 1 . ': ' . $colors [$i] . ' <li>';
// }
// echo "</ul>";

// echo "**************<br>";

// for ($i = 0; $i < 10; $i++){
//   echo "valeur de \$i: $i <br>";
// }

?>
<ul>
  <?php for ($i = 0; $i < count ($colors); $i++) : ?>
    <li>couleur <?php echo $i +1; ?>: <?php echo $colors[$i]; ?></li>
    <?php endfor ?>
</ul>

<?php
$colors = ["bleu", "vert", "rouge", "marron", "orange", "jaune", "blanc", "noir", "violet", "turquoise"];
for ($i = 0; $i < count($colors); $i++) {
  $colorsTab["couleur $i"] = $colors [$i];
}

echo "<ul>";
foreach ($colors as $color => $value){
  echo "$color : $value<br>";
}
echo"</ul>"; 

// boucle while attention aux boucles infinis
$continue = true;
$i = 0;
$counteur = 10000;
while ($continue) {
  echo "<li>ligne numéro: $i</li>";
  $i++;
  if($i > 10){
    $continue = false;
  }

  if ($counteur){
    $continue = false;
  }
  $counteur--;
}

do{
  echo "<li>ligne numéro: $i</li>";
  $i--;
} while ($i >= 0);

// i--
// $i = $i -1;

// for($j = 0; $j < 100; $j++)

$pays = "France";

switch($state){
  case"Suisse" :
  case"France": 
    echo "it's so go";
    $language = "le français";
    break;
  case "Angleterre":
    case "Amérique" :
    $language="l'anglais";
    break;
    default :
    $language = "sans doute anglais, what else possible?";
    }
echo "nom du pays : $state, on y parle $language";

?>

<?php 

if (!empty($_GET)){
  if (isset($_GET["name"])){
    $name = strip_tags($_GET["question"]);

  }
}

function maFonction(){
  echo "coucou, je viens de la fonction maFonction";
}

function addition (int $a, int $b): int
{
  $c = $a + $b;
  return $c;
}
echo "je suis le programme principale<br>";
maFonction();
echo"<br>";

$nombre1 = 10;
$nombre2 = 13;

$result = addition($nombre1, $nombre2);

echo "le résultat du calcul $nombre1 + $nombre2 = $result<br>";
define("NOMBRE3", 3);

$nbr1 = 10;
$nbr2 = 13;

function addition2 (int $nbr1, int $nbr2): int
{
  return 30 + 40 + NOMBRE3;
}
echo "je suis la valeur de nbr1: $nbr1<br>";
$resultat = addition2($nbr1, $nbr2);
echo "le résultat du calcul est $nbr1 + $nbr2 = $resultat<br>";
?>

<form method="get">
  <div class="mb-3">
    <label for="name" class="form-label">votre nom:</label>
    <input type="text" name="name" id="question">
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

</pre>    
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>