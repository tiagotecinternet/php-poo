<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP POO - Exemplo 3</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto à propriedades</li>
        <li>Atribuição de dados e leitura</li>
    </ul>
<?php
// Importando a classe
require_once "src/Cliente.php";

// Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;

// Atribuindo dados às propriedades do objeto
$clienteA->nome = "Tiago";
$clienteA->email = "tiago@gmail.com";
$clienteA->telefones = ["11-2135-0300", "11-97777-5555"];

$clienteB->nome = "Bernardo";
$clienteB->email = "bernardo@hotmail.com";
$clienteB->telefones = array("11-98888-5555");
?>

<h2>Dados dos objetos (leitura)</h2>
<h3> <?= $clienteA->nome ?> </h3>
<p>E-mail: <?=$clienteA->email?> </p>
<p>Telefones: <?=implode(", ",$clienteA->telefones)?> </p>
<p>Senha: <?=$clienteA->senha?></p>

<h3> <?= $clienteB->nome ?> </h3>
<p>E-mail: <?=$clienteB->email?> </p>
<p>Telefones: <?=implode(", ",$clienteB->telefones)?> </p>

<h2>Chamando método exibirDados</h2>
<?= $clienteA->exibirDados() ?>
<?= $clienteB->exibirDados() ?>


</body>
</html>