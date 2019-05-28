<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>

<form action="game.php" method="post">
  <input type="submit" name="submitGame" value="Play Blackjack"/>
</form>
<form action="game.php" method="post">
  <input type="submit" name="submitHit" value="Hit"/>
</form>
<form action="game.php" method="post">
  <input type="submit" name="submitStand" value="Stand"/>
</form>
<form action="game.php" method="post">
  <input type="submit" name="submitSurrender" value="Surrender"/>
</form>




</body>
