<?php
  include_once("pokemons.php");

  // LEFT - RIGHT

  if (isset($_GET['L'])) { // BTN LEFT
    $id = $_GET['id'];
    if ($id-1 == 0){ // Caso o id anterior for 0 volta pra pagina
      header("Location: index.php?id=" . $id);
    }
    else {
      $id -= 1;
      header("Location: index.php?id=" . $id);
    }

  } else if (isset($_GET['R'])) { // BTN RIGHT
    $id = $_GET['id'];
    if ($id+1 == 152){ // Caso o id anterior for 0 volta pra pagina
      header("Location: index.php?id=" . $id);
    }
    else {
      $id += 1;
      header("Location: index.php?id=" . $id);
    }
  }

  // Default
  else if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    header("Location: index.php?id=" . "1"); // Se nao tiver id na url volta pro site com o id 1
  }

  $name = $pokemons[$id - 1]->name;
  $img = $pokemons[$id - 1]->img;
  
?>

  