<?php
//Criando uma lista de categorias(com um array(php possui tipagem fraca))
$categorias=[];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

$nome = "Cleyton Jesus";
$idade = 9;

//var_dump($nome);
//var_dump($idade);

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
        if($categorias[$i] == 'Adulto'){
             echo 'O nadador '.$nome. ' compete na categorial Adulto';
        }      
    }
}