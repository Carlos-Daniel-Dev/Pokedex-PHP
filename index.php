<?php

  include_once("pokedex.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="https://img.icons8.com/color/2x/pokeball.png" type="image/x-icon">
  <title>Pokemons</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div id="pokedex">
    <div class="camera"></div>
    <h1 class="pkmn-name"><?= $name ?></h1>

    <div id="img-container">
      <img src="<?= $img ?>" id="pkmn-img">
    </div>

    <div id="controls">
      <form action="pokedex.php" method="GET" style="height: 10px;">
        <input type="hidden" name="id" value="<?= $id?>">
        <button class="btn" type="submit" name="L">Left</button>
        <button class="btn" type="submit" name="R" value="T">Right</button>
      </form>
    </div>
  </div>

</body>
</html>