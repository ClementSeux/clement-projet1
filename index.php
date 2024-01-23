<?php

function getMessage()
{
  if (getName() === null) {
    $message = 'Visiteur';
  } else {
    $message = getName();
  }
  return $message;
}

function getName()
{
  if (isset($_GET['name']) && !empty($_GET['name'])) {
    $name = $_GET['name'];
  } else {
    $name = null;
  }
  return $name;
}

?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Mon super site</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Bonjour <?= getMessage() ?></h1>

  <form action="">
    <label for="name"></label>
    <input type="text" placeholder="nom" name="name">
    <input type="submit" value="Envoyer">
  </form>
</body>

</html>