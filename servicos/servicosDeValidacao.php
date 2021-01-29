<?php 

function validaNome(string $nome) : bool{

if(empty($nome))
{
    setarMensagemDeErro('O campo para a inserção do nome não pode estar vazio!');
    return false;
}
else if(strlen($nome) < 3){
    setarMensagemDeErro('O nome deve possuir mais de 3 caracteres');
    return false;
}
else if(strlen($nome)>40){
    setarMensagemDeErro('O nome excede o número de 40 caracteres permitido');
    return false;
}
return true;
}

function validaIdade(string $idade) : bool{
    
if(!is_numeric($idade))
{
    setarMensagemDeErro('Informe um número para a idade.');
    return false;

}
return true;
}

?>