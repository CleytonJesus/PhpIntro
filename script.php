<?php
//Criando uma lista de categorias(com um array(php possui tipagem fraca))

include "servicos/servicoMensagemSessao.php";
include "servicos/servicosDeValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

defineCategoriaCompetidor($nome,$idade);

header("location:pagina.php");






