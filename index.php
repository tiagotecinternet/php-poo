<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 7</title>
</head>
<body>
    <h1>PHP POO - Exemplo 7</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Propriedades e Métodos Estáticos</li>
    </ul>
<?php
require_once "src/PessoaFisica.php";

$clientePF = new PessoaFisica;
$clientePF->setNome('Tiago');
$clientePF->setIdade(38);

// Acessando e atribuindo valor para uma propriedade estática
PessoaFisica::$cidade = "São Paulo";

// Acessando e lendo o valor de uma propriedade estática
echo PessoaFisica::$cidade;
?>
<h3>Pessoa Física</h3>
<p> <?=$clientePF->getNome()?> </p>
<p> <?=$clientePF->getIdade()?> </p>
<p> Tipo de atendimento: 
    <?=PessoaFisica::verificaIdade( $clientePF->getIdade() )?> 
</p>

<p> <?=PessoaFisica::verificaIdade(90)?> </p>
<p> <?=PessoaFisica::verificaIdade(50)?> </p>



</body>
</html>