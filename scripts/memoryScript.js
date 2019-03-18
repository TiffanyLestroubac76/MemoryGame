const cards = document.querySelectorAll('.card');

// let permet de limiter la portée au bloc courant
let firstCard, secondCard;
let isFlippedCard = false;
let lockBoard = false;
var counter = 0;
var total_secondes = 120;


//Permet de détecter le clic sur une carte. La fonction flip est appelée.
cards.forEach(card => card.addEventListener('click', flip));

//Fonction appelée au clic sur une carte
function flip() {
  if (lockBoard) return;
  if (this === firstCard) return;

  //Ajoute la classe flip (dans le CSS, la classe flip fait pivoter la carte de 180deg)
  this.classList.add('flip');

  if (!isFlippedCard) {
    // Clic sur la première carte
    isFlippedCard = true;
    firstCard = this;

    return;
  }
  // Clic sur la deuxième carte
  secondCard = this;
  // Appel de la fonction permettant de regarder si les cartes son similaires
  checkForMatch();
}

// Fonction permettant de vérifier si les cartes sont similaires
function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
  //Condition avec un opérateur ternaire : Si les cartes sont similaires alors on appelle la fonction disableCards sinon on appelle la fonction unFlipCards
  isMatch ? disableCards() : unflipCards();
}

// Fonction permettant de bloquer le listener d'évènement 'clic' sur les deux cartes similaires afin d'éviter de les retourner ultérieurement
function disableCards() {
  firstCard.removeEventListener('click', flip);
  secondCard.removeEventListener('click', flip);
  counter ++;

  if(counter==14){
    $.ajax({
              url: 'php/functions.php',
              type:'POST',
              data: {
                  fonction:'insertScore',
                  params: {score: total_secondes},
                            },
                            success: function(data)
                            {
                              alert(data);
                            }
                        });
    setTimeout(() => {
      alert("Félicitations, vous avez gagné !");
    }, 1500);
    setTimeout(() => {
    location.reload();
    }, 1500);
  }
  resetBoard();
}

// Fonction permettant de retourner les cartes en cas de non correspondance
function unflipCards() {
  lockBoard = true;
   modif(1);
  //Après 1500ms, on retourne les cartes en enlevant la classe flip
  setTimeout(() => {
    firstCard.classList.remove('flip');
    secondCard.classList.remove('flip');

    resetBoard();
  }, 1500);
}

//Fonction permettant de déverouiller le jeu et réinitialiser les valeurs des cartes qui avaient été retournées
function resetBoard() {
  [isFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
}

function avancement() {
  var ava = document.getElementById("avancement");
  var prc = document.getElementById("pourcentage");

}

avancement(); //Initialisation

function modif(val) {
  var ava = document.getElementById("avancement");
  if((ava.value+val)<=ava.max && (ava.value+val)>0) {
     ava.value += val;
  }
  avancement();
}



//Compte à rebours
function compte_a_rebours()
{
    var compte_a_rebours = document.getElementById("compte_a_rebours");

    if(total_secondes-1 != 0){
      total_secondes=total_secondes-1;
         compte_a_rebours.innerHTML = 'Compte à rebours terminé dans '+ total_secondes + ' secondes';
         modif(1);
    }

    else
    {
        compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
         alert("Vous avez perdu !");
         setTimeout(() => {
         location.reload();
         }, 1500);
    }

    var actualisation = setTimeout("compte_a_rebours();", 1000);
}

// Nous faisons appel à une IIFE qui permet d'appeler la fonction dés qu'elle est définie
// Permet grâce à la propriété flex du CSS de mélanger les cartes en leur donnant un index
(function shuffle() {
  cards.forEach(card => {
    let randomPos = Math.floor(Math.random() * 28);
    card.style.order = randomPos;

  });
  compte_a_rebours();
})();
