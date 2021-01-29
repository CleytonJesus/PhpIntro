<?php


function defineCategoriaCompetidor(string $nome, string $idade)
{
$categorias=[];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

    if($idade >= 6 && $idade <= 12)
    {
        for($i=0 ; $i <= count($categorias);$i++)
        {
            if($categorias[$i] == 'Infantil'){
             setarMensagemDeSucesso('O nadador '.$nome. ' compete na categorial infantil');
                
               
            }      
        }
    }
    else if($idade >= 13 && $idade <= 18)
    {
        for($i=0 ; $i <= count($categorias);$i++)
        {
            if($categorias[$i] == 'Adolescente'){
                setarMensagemDeSucesso( 'O nadador '.$nome. ' compete na categorial Adolescente');
               
           
            }      
        }
    }
    else
    {
        for($i=0 ; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == "Adulto"){
                setarMensagemDeSucesso('O nadador '. $nome . ' compete na categorial Adulto');
                
           
            }      
        }    
}

?>