<?php
//Criando uma lista de categorias(com um array(php possui tipagem fraca))
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
    echo 'O campo para a inserção do nome não pode estar vazio!';
    return;
}
if(strlen($nome) < 3){
    echo 'O nome deve possuir mais de 3 caracteres';
    return;
}
if(strlen($nome)>40){
    echo 'O nome excede o número de 40 caracteres permitido';
    return;
}
if(!is_numeric($idade))
{
    echo 'Informe um número para a idade.';
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for($i=0 ; $i <= count($categorias);$i++)
    {
        if($categorias[$i] == 'Infantil'){
             echo 'O nadador '.$nome. ' compete na categorial infantil';
        }      
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i=0 ; $i <= count($categorias);$i++)
    {
        if($categorias[$i] == 'Adolescente'){
             echo 'O nadador '.$nome. ' compete na categorial Adolescente';
        }      
    }
}
else
{
    for($i=0 ; $i <= count($categorias);$i++)
    {
        if($categorias[$i] == "Adulto"){
             echo 'O nadador '.$nome. ' compete na categorial Adulto';
        }      
    }
}