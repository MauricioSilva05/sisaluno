<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadprofessor.css">
    <title>Cadastro Professor</title>
</head>
<html>

<body>

<?php
include 'header.html';
?>

<div class="container">

<div class="main">

<form action="crudprofessor.php" method="POST">

<h1>Cadastro Professor</h1>

<div class="nomedados1">
<div id="nome"><p>Nome Completo</p></div>
<div id="cpf"><p>CPF</p></div>
</div>


<div class="dadosnome">
<input type="text" name="nome" required class="config">
<input type="text" maxlength="11" minlength="11" name="cpf" required class="config">
</div>


<div class="nome">
    <p>Endereço</p>
</div>

<div class="dadosnome1">
<input type="text" name="endereco" required class="config3">
</div>

<div class="nomedados2">
    
<div id="estatus"><p>Status</p></div>
<div id="datanascimento"><p>Nascimento</p></div>
<div id="idade"><p>Idade</p></div>

</div>

<div class="dadosnome">
    <select name="estatus" required class="config2">
        <option value="">Selecione</option>
        <option value="AT">Ativo</option>
        <option value="DS">Desativo</Rption>
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


</body>
</html>