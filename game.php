<?php
session_start();

require 'blackjack.php';

if (isset($_POST['submitGame'])){

  $player= new Blackjack();
  $dealer= new Blackjack();

} else {
  $player=unserialize($_SESSION['player']);
  $dealer=unserialize($_SESSION['dealer']);

}

if (isset($_POST['submitHit'])){
  $player->hit();
  if ($player->score>21){
    echo "You lost!";
  }
}

if (isset($_POST['submitStand'])){
  if ($player->score<=21){
    $player->stand();
    while ($dealer->score<15){
      $dealer->hit();
    }
    $dealer->stand();
    if ($dealer->pointTotal>21){
      echo "You won!";
    } elseif ($player->pointTotal>$dealer->pointTotal){
      echo "You won!";
    } else {
      echo "You lost!";
    }
  } else {
    echo "You lost!";
  }
}

if (isset($_POST['submitSurrender'])){
  while ($dealer->score<15){
    $dealer->hit();
  }
  echo "You surrendered... (dealer had ".$dealer->score." points)";
  $player->surrender();
  $dealer->surrender();
}



echo "<br/>Score player : ".$player->score;
echo "<br/>Score dealer : ".$dealer->score;

//put objects in session
$_SESSION['player']=serialize($player);
$_SESSION['dealer']=serialize($dealer);

?>

<br/>
<br/>
<a href="home.php"><button>Continue</button></a>

<!--
Save these instances in the session (you're gonna need them)

As a final option: at any point you need to be able to click surrender
after which the page tells you you lost and simulates the dealer's score.

-->
