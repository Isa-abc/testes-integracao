<?php
  include("modelTestes.php");
  include("testes.php");

  $nome = filter_input(INPUT_GET, "nome");
  $email = filter_input(INPUT_GET, "email");

  $testes = new Testes();
  $testes->setNome($nome);
  $testes->setEmail($email);

  $modelTestes = new modelTestes();
  $modelTestes->inserir($testes);
  
?>