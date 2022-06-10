<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança</li>
    </ul>
<?php
// Importando a classe
require_once "src/Cliente.php"; // superclasse
require_once "src/PessoaFisica.php"; // subclasse

$clientePF = new PessoaFisica;
$clientePF->setNome('Tiago');
$clientePF->setEmail('tiago@gmail.com');
$clientePF->setSenha('123abc');
$clientePF->setCpf('123.456.789-00');
$clientePF->setIdade(38);
?>

<pre> <?=var_dump($clientePF)?> </pre>


</body>
</html>