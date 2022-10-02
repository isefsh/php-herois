<?php
  $universo = $_POST["universo"];
  $heroi = str_replace("-", " ", strtoupper($_POST["heroi"]));
  $imgs = str_replace(" ", "-", $heroi);
  $qtd = $_POST["qtd"];

  $heroiMarvel = array("WOLVERINE","THOR","HOMEM ARANHA","HULK","PANTERA NEGRA");
  $heroiDc = array("BATMAN","SUPERMAN","LEX LUTHOR","SHAZAM","DARKSEID");

  if($universo == "Marvel"){
    for($i = 0; $i < 5; $i++){
      if($heroi == $heroiMarvel[$i]){
        for($j = 0; $j < $qtd; $j++){
          echo "<img src='../imgs/marvel/".strtolower($imgs).".png'>";
        }
      }
    }
  }
  else if($universo == "DC"){
    for($i = 0; $i < 5; $i++){
      if($heroi == $heroiDc[$i]){
        for($j = 0; $j < $qtd; $j++){
          echo "<img src='../imgs/dc/".strtolower($imgs).".png'>";
        }
      }
    }
  }
  else{
    echo "Nenhum universo válido não foi selecionado.";
  }
?>