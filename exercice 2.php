<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <title>Page d'exercices</title>
</head>

<body>
  <?php include("./partial/_navBar.php"); ?>
  <div class="container">

  <h1>Exercice 2</h1>
        <h3>Décoder des messages</h3>
        <p>les messages à décoder</p>
        <?php
        $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
        $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
        $message3 = "aopi?sgnirts@#?sedhtg+p9l!";
        ?>
        <ul>
            <li>message 1 : <?php echo $message1; ?></li>
            <li>message 2 : <?php echo $message2; ?></li>
            <li>message 3 : <?php echo $message3; ?></li>
        </ul>
        <p>comment proceder?</p>
        <ol>
            <li>Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".</li>
            <li>Récupère ensuite la <a href="https://www.php.net/manual/fr/function.substr.php">sous-chaîne</a> de la longueur du chiffre-clé en commençant à partir du 6ème caractère.</li>
            <li>Remplace les chaînes '@#?' par un espace.</li>
            <li>Pour finir, inverse la chaîne de caractères.</li>
        </ol>
        <p>résultats:</p>
        <?php
// Set up var
$stringlgth1 = "0@sn9sirppa@#?ia'jgtvryko1";
$stringlgth2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$stringlgth3 = "aopi?sgnirts@#?sedhtg+p9l!";

// Get the key 
$nbr1 = strlen($stringlgth1);
$result1 = $nbr1 /2;
$nbr2 = strlen($stringlgth2);
$result2 = $nbr2 /2;
$nbr3 = strlen($stringlgth3);
$result3 = $nbr3 /2;

// Get the sub string of every string length
$substring1 = substr($stringlgth1, 5, $result1);
$substring2 = substr($stringlgth2, 5, $result2);
$substring3 = substr($stringlgth3, 5, $result3);

// Replace @#? by a space
$stringreplace1 = str_replace("@#?", " ", $substring1);
$stringreplace2 = str_replace("@#?", " ", $substring2);
$stringreplace3 = str_replace("@#?", " ", $substring3);

// Reverse string
$msg1 = strrev($stringreplace1);
$msg2 = strrev($stringreplace2);
$msg3 = strrev($stringreplace3);
echo $msg1, " ", $msg2, " ", $msg3;
        ?>
  </div>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>