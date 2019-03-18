<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>O'Clock Memory Game</title>
  <link rel="stylesheet" href="style/style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
  <section class="game">
    <div class="titre">
      <h1> O'CLOCK MEMORY GAME</h1>
      <p><progress id="avancement" value="0" max="120"></progress></p>
      <div id="compte_a_rebours"> </div>
      <div>
          <p> Meilleur temps : <?php include('php/functions.php') ; ?> </p>
      </div>
    </div>
    <div class="card" data-framework="pomme">
      <img class="front" src="img/pomme.png" alt="pomme" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="pomme">
      <img class="front" src="img/pomme.png" alt="pomme" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>

    <div class="card" data-framework="peche">
      <img class="front" src="img/peche.png" alt="peche" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="peche">
      <img class="front" src="img/peche.png" alt="peche" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>

    <div class="card" data-framework="citronVert">
      <img class="front" src="img/citronVert.png" alt="citronVert" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="citronVert">
      <img class="front" src="img/citronVert.png" alt="citronVert" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>

    <div class="card" data-framework="citron">
      <img class="front" src="img/citron.png" alt="citron" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="citron">
      <img class="front" src="img/citron.png" alt="citron" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>

    <div class="card" data-framework="framboise">
      <img class="front" src="img/framboise.png" alt="framboise" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="framboise">
      <img class="front" src="img/framboise.png" alt="framboise" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>

    <div class="card" data-framework="cerise">
      <img class="front" src="img/cerise.png" alt="cerise" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="cerise">
      <img class="front" src="img/cerise.png" alt="cerise" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>

    <div class="card" data-framework="poire">
      <img class="front" src="img/poire.png" alt="poire" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="poire">
      <img class="front" src="img/poire.png" alt="poire" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>

    <div class="card" data-framework="pommeVerte">
      <img class="front" src="img/pommeVerte.png" alt="pommeVerte" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="pommeVerte">
      <img class="front" src="img/pommeVerte.png" alt="pommeVerte" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="banane">
      <img class="front" src="img/banane.png" alt="banane" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="banane">
      <img class="front" src="img/banane.png" alt="banane" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="abricot">
      <img class="front" src="img/abricot.png" alt="abricot" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="abricot">
      <img class="front" src="img/abricot.png" alt="abricot" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="pasteque">
      <img class="front" src="img/pasteque.png" alt="pasteque" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="pasteque">
      <img class="front" src="img/pasteque.png" alt="pasteque" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="prune">
      <img class="front" src="img/prune.png" alt="prune" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="prune">
      <img class="front" src="img/prune.png" alt="prune" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="grenade">
      <img class="front" src="img/grenade.png" alt="grenade" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="grenade">
      <img class="front" src="img/grenade.png" alt="grenade" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="raisin">
      <img class="front" src="img/raisin.png" alt="raisin" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
    <div class="card" data-framework="raisin">
      <img class="front" src="img/raisin.png" alt="raisin" />
      <img class="back" src="img/oclock.svg" alt="oclock" />
    </div>
  </section>

  <script src="scripts/memoryScript.js"></script>
</body>
</html>
