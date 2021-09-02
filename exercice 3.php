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

  <h1>Exercice 3</h1>
        <?php
        $tab1 = ["moteur", "carotte", "haricot", "pomme de terre", "usine", "salade", "navet", "marteau"];
        ?>
        <p>voici les éléments du tableau de base:
        <ul>
            <li><?php echo $tab1[0]; ?></li>
            <li><?php echo $tab1[1]; ?></li>
            <li><?php echo $tab1[2]; ?></li>
            <li><?php echo $tab1[3]; ?></li>
            <li><?php echo $tab1[4]; ?></li>
            <li><?php echo $tab1[5]; ?></li>
            <li><?php echo $tab1[6]; ?></li>
            <li><?php echo $tab1[7]; ?></li>
        </ul>
        </p>
        <h3>Premier exercice:</h3>
        <p>retirer les 3 intrus: et afficher les valeurs</p>
        <p>résultat:
            <?php
            // Unset variable
            unset($tab1[4], $tab1[7]);

            // Shift an element off the beginning of array
            array_shift($tab1);
            ?>
        <ul>
            <li><?php echo $tab1[0]; ?></li>
            <li><?php echo $tab1[1]; ?></li>
            <li><?php echo $tab1[2]; ?></li>
            <li><?php echo $tab1[3]; ?></li>
            <li><?php echo $tab1[4]; ?></li>
        </ul>
        </p>
        <h3>Second exercice:</h3>
        <p>transformer la chaîne de caractère "bleu, vert, noir, rouge, jaune" en un tableau</p>
        <p>ajouter en première position du tableau la valeur "violet"</p>
        <p>résultat:
            <?php
            $str = 'bleu vert noir rouge jaune';

            // Split a string and return an array of stings
            $array = explode(" ", $str);

            // Shift an element off the beginning of array
            array_unshift($array, "violet");
            print_r($array);
            ?>
        </p>
  </div>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>