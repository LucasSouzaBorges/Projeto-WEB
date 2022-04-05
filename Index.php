<?php

require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa -> setNome("Lucas Borges");
echo $pessoa -> getNome();
?>