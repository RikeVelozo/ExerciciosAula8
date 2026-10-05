<?php
$nome = $_POST["nome"];
$cidade = $_POST["cidade"];

if (strcasecmp($cidade, "curitiba") == 0){
  echo "Bem-vindo $nome, pelo visto você é Curitibano";
} else{
  echo "Bem-vindo $nome, você reside na cidade de $cidade";
}
?>
