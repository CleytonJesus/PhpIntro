<?php
//Criando uma lista de categorias(com um array(php possui tipagem fraca))

session_start();
$categorias=[];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);



if($idade >= 6 && $idade <= 12)
{
    for($i=0 ; $i <= count($categorias);$i++)
    {
        if($categorias[$i] == 'Infantil'){
            $_SESSION['mensagem-de-sucesso']= 'O nadador '.$nome. ' compete na categorial infantil';
            header("location: pagina.php");
            die();
        }      
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i=0 ; $i <= count($categorias);$i++)
    {
        if($categorias[$i] == 'Adolescente'){
            $_SESSION['mensagem-de-sucesso']= 'O nadador '.$nome. ' compete na categorial Adolescente';
            header("location: pagina.php");
            die();
        }      
    }
}
else
{
    for($i=0 ; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "Adulto"){
            $_SESSION['mensagem-de-sucesso']= 'O nadador '. $nome . ' compete na categorial Adulto';
             header("location: pagina.php");
              die();
        }      
    }
}

