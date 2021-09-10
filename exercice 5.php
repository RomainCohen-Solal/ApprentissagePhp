<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <title>Exercice 5</title>
</head>

<body>
  <?php include("./partial/_navBar.php"); ?>
  <div class="container">

    <h1>Exercice 5</h1>
    <h5>Système d'encodage et de décodage de vigenère</h5>
    <?php
    // Create an array containing a range of elements
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $alphabetTab = str_split($alphabet);
    $doubleAlphaTab = array_merge($alphabetTab, $alphabetTab);

    $sizeAlphabet = count($alphabetTab);

    for ($i = 0; $i < $sizeAlphabet; $i++) {
      for ($j = 0; $j < $sizeAlphabet; $j++) {
        $line = $alphabetTab[$i];
        $column = $alphabetTab[$j];
        $vigenere[$line][$column] = $doubleAlphaTab[$i + $j];
      }
    }

    ?>

    <?php

    // Set up form to get message to encode or decrypt
    ?>
    <form method="POST">
      <div class="form-group">
        <label for="message">le message:</label>
        <textarea name="message" class="form-control border border-3" rows="2"><?php echo $message1;?></textarea>
        <label for="key" class="form-label">la clé:</label>
        <input type="text" name="key" id="key" value="<?php echo $key1;?>">
        <label for="crypted" class="form-label">le message codé:</label>
        <input type="text" name="crypted" id="crypted" value="<?php echo $encodedMessage; ?>">
      </div>
      <a href="./exercice 5.php" class="btn btn-primary mt-3 mb-3">Annuler</a>
      <input type="submit" class="btn btn-primary mt-3 mb-3" value="Vigenèriser">
    </form>
    <?php
    if (!empty($_POST)) {
      if (isset($_POST["message"])) {
        $message1 = strip_tags($_POST["message"]);
      }
      if (isset($_POST["key"])) {
        $key1 = strip_tags($_POST["key"]);
      }
      if (isset($_POST["crypted"])) {
        $encodedMessage = strip_tags($_POST["crypted"]);
      }
      if ((!$key1 && $message1) || (!$key1 && $encodedMessage)) {
        $errorMessage = "vous devez rentrer la clé";
      } elseif (!$message1 && !$encodedMessage && $key1) {
        $errorMessage = "action non définie";
      } elseif ($message1 && $encodedMessage && $key1) {
        $errorMessage = "trop d'informations";
      }
      if (!$errorMessage) {
        $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $alphabetTab = str_split($alphabet);
        $doubleAlphaTab = array_merge($alphabetTab, $alphabetTab);

        $sizeAlphabet = count($alphabetTab);

        for ($i = 0; $i < $sizeAlphabet; $i++) {
          for ($j = 0; $j < $sizeAlphabet; $j++) {
            $line = $alphabetTab[$i];
            $column = $alphabetTab[$j];
            $vigenere[$line][$column] = $doubleAlphaTab[$i + $j];
          }
        }
        if ($message1 && $key1) { 
          $msgtab = str_split($message1);
          $keyTab = str_split($key1);
          $keylgth = count($keyTab);
      
          $encodedmsg = [];
          $keyCounter = 0;
          foreach ($msgtab as $pointer => $letterToEncode) {
            $positionKeyLetter = $keyCounter % $keylgth;
            $keyLetter = $keyTab[$positionKeyLetter];
            if ($letterToEncode != " ") {
              $encodedMessage[] = $vigenere[$letterToEncode][$keyLetter];
            } else {
              $encodedMessage[] = " ";
            }
            $keyCounter++;
          }
      
          $encodedMessage = implode($encodedMessage);
        } elseif($encodedMessage && $key1){
          $key4decode =$key1;
          $encodedMessageTab = str_split($encodedMessage);
          $key4decodeTab = str_split($key4decode);
          $key4decodeSize = count($key4decodeTab);
      
          $keyCounter = 0;
          foreach ($encodedMessageTab as $pointer => $letterToDecode) {
            $positionKeyLetter = $keyCounter % $key4decodeSize;
            $keyLetter = $key4decodeTab[$positionKeyLetter];
            if ($letterToDecode != " ") {
              for ($i = 0; $i < $sizeAlphabet; $i++) {
                $lineToDecode = $alphabetTab[$i];
                if ($vigenere[$lineToDecode][$keyLetter] == $letterToDecode) {
                  $decryptedMessage[] = $lineToDecode;
                }
              }
            } else {
              $decryptedMessage[] = " ";
            }
            $keyCounter++;
          }
          $message1 = implode($decryptedMessage);
        }
      }
    }
    if ($errorMessage) :?>
    <div class="alert alert-dismissible alert-warning">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <h4 class="alert-heading">Attention!</h4>
      <p class="mb-0"><?php echo $errorMessage ?></p>
    </div>
    <?php endif ?>
    <?php
    var_dump($message1);
    var_dump($key1);
    var_dump($encodedMessage);
    ?>



    <h5>3- decoder le message "TWA PEE WM TESLH WL LSLVNMRJ" avec la clé "VIGENERE"</h5>
    <?php
    $encodedMessage = "TWA PEE WM TESLH WL LSLVNMRJ";
    $key4decode = "VIGENERE";
    $encodedMessageTab = str_split($encodedMessage);
    $key4decodeTab = str_split($key4decode);
    $key4decodeSize = count($key4decodeTab);

    $keyCounter = 0;
    foreach ($encodedMessageTab as $pointer => $letterToDecode) {
      $positionKeyLetter = $keyCounter % $key4decodeSize;
      $keyLetter = $key4decodeTab[$positionKeyLetter];
      if ($letterToDecode != " ") {
        for ($i = 0; $i < $sizeAlphabet; $i++) {
          $lineToDecode = $alphabetTab[$i];
          if ($vigenere[$lineToDecode][$keyLetter] == $letterToDecode) {
            $decryptedMessage[] = $lineToDecode;
          }
        }
      } else {
        $decryptedMessage[] = " ";
      }
      $keyCounter++;
    }
    $decodedMessage = implode($decryptedMessage);

    ?>
  </div>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>