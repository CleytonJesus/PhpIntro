<?php
    include "servicos/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
    <form action="script.php" method="POST">
    <?php
        //Operadores ternários(Compôr condições em apenas uma linha).
        $mensagemDeSucesso = obterMensagemSucesso();
        if(!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = obterMensagemErro();
        if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }
    ?>
        <p>Seu nome: <input type="text" name="nome"></p>
        <p>Sua idade: <input type="text" name="idade"></p>
        <p><input type="submit" value="Enviar dados do competidor"/></p>
    </form>
</body>
</html>