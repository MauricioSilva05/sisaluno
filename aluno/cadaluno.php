<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadaluno.css">
    <title>Cadastro aluno</title>
</head>
<html>

<body>

<?php
include 'header.html';
?>

<div class="container">

<div class="main">

<form action="crudaluno.php" method="POST">

<h1>Cadastro Aluno</h1>

<div class="nomedados1">
<div class="nome"><p>Nome Completo</p></div>
</div>

<div class="dadosnome">
<input type="text" name="nome" required class="config1">
</div>


<div class="nomedados1">
<p>Endereço</p>
</div>

<div class="dadosnome">
<input type="text" required name="endereco" class="config1">
</div>

<div class="nomedados2">
    
<div id="estatus"><p>Status</p></div>
<div id="datanascimento"><p>Nascimento</p></div>
<div id="idade"><p>Idade</p></div>

</div>

<div class="dadosnome">
    <select name="estatus" required class="config2">
        <option value="">Selecione</option>
        <option value="aprovado">Aprovado</option>
        <option value="reprovado">Reprovado</Rption>
    </select>
<input type="date" name="datanascimento" required class="config2">
<input type="number" name="idade" maxlength="2" minlength="2" required class="config2">
</div>


<div id="layoutbotao">
<input type="submit" name="cadastrar" value="Cadastrar" id="botao">
</div>
</form>

</div>
</div>

</body>
</html>
