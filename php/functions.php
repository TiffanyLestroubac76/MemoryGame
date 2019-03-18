<?php

  try {
    $base = new PDO('mysql:host=localhost; dbname=memorygame', 'root', '');
    $reponse = $base->query('SELECT ScoreTime FROM score ORDER BY ScoreTime DESC LIMIT 1;');

    while ($donnees = $reponse->fetch())
    {
    	echo $donnees['ScoreTime'] . '<br />';
    }
  if (isset($_POST['score']))
    {
        $reponseInsert = $base->query('INSERT INTO score (ScoreTime) VALUES ($_POST["score"])');
    }

  }


  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }

  function insertScore($data)
  {

      $reponseInsert = $base->query('INSERT INTO score (ScoreTime) VALUES ($_POST["score"])');
  }
?>
