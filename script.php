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

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O campo para a inserção do nome não pode estar vazio!';
    
    header("location: pagina.php");
    die();
}
else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve possuir mais de 3 caracteres';
    
    header("location: pagina.php");
    die();
}
else if(strlen($nome)>40){

    $_SESSION['mensagem-de-erro'] = 'O nome excede o número de 40 caracteres permitido';
    
    header("location: pagina.php");
    die();
    
}
else if(!is_numeric($idade))
{

    $_SESSION['mensagem-de-erro'] = 'Informe um número para a idade.';
    
    header("location: pagina.php");
    die();

}

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

