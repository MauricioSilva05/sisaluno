<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Disciplina</title>
</head>

<style>

body{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #002333;
}

h1{
    font-size: 40px;
    text-align: center;
    color:#002333;
}

.container{
    display: flex;
    margin-top: 30px;
}

a{
    text-decoration: none;
    color: rgb(5, 5, 63);
    padding: 15px;
}

.main{
    width: 50%;
    height: 400px;
    padding: 20px;
    margin: auto; 
    border: 1px solid lightblue;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nomedados1{
    font-weight: bold;
    color: #002333;
    display: flex;
    gap: 200px;
}


.nomedados2{
    display: flex;
    font-weight: bold;
    gap:0px;
    color: #002333;
}

.config1{
    width: 600px;
    height: 30px;
}

.config2{
    width: 195px;
    height: 30px;
}

#ch{
    padding: 0px 105px 0px 0px;
}

#semestre{
    padding: 0px 140px 0px 0px;
}

#botao{
    background-color: #159A9C;
    color: #002333;
    padding: 10px;
    border: 3px rgb(0, 0, 0);
    border-radius: 10px;
    width: 180px;
    height: 50px;
    font-size: 15px;
    cursor: pointer;
    transition: 0.5s;
    font-weight: bold;
} 

#botao:hover{
color: black;
background-color:#C4E1FF;
font-weight: bold;
}

#layoutbotao{
    padding: 30px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80px;
}


input{
    border: 1px solid #159A9C;
    border-radius: 10px;
    background-color: #cae0f8;
}

</style>

<body>

<?php
include 'header.html';
include_once('../professor/crudprofessor.php');
?>

<div class="container">

<div class="main">

<form action="cruddisciplina.php" method="POST">

<h1>Cadastro Disciplina</h1>

<div class="nomedados1">
<p>Nome Disciplina</p>
</div>

<div class="dadosnome">
<input type="text" name="nomedisciplina" required class="config1">
</div>

<div class="nomedados2">
<div id="ch"><p>Carga Horária</p></div>
<div id="semestre"><p>Semestre</p></div>
<div id="idprofessor"><p>ID professor</p></div>
</div>


<div class="dadosnome">
<input type="number" name="ch" required maxlength="1" minlength="3" class="config2">
<input type="number" name="semestre" maxlength="2" minlength="1" required class="config2">
<input type="number" name="idprofessor" required class="config2">
</div>


<div id="layoutbotao">
<input type="submit" name="cadastrar" value="Cadastrar" id="botao">
</div>

</form>

</div>
</div>

    
</body>
</html>