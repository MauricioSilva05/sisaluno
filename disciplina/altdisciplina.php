<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Disciplina</title>
</head>
<body>

<style>

body{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-color: #C4E1FF;
}

h2{
    font-size: 40px;
    text-align: center;
    color:#002333;
}

.container{
    display: flex;
    margin-top: 30px;
    height: 400px;
    padding: 20px;
}

a{
    text-decoration: none;
    color: white;
    padding: 15px;
}
img{
    height: 100px;
    width: 250px;
}

.main{
    width: 50%;
    height: 350px;
    padding: 20px;
    margin: auto; 
    border: 2px solid white;
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
    padding: 0px 110px 0px 0px;
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

.voltar{
    margin: 100px 20px 15px 0px;
    background-color: #159A9C;
    color: white;
    text-decoration: none;
    padding: 10px;
    border: 3px rgb(0, 0, 0);
    border-radius: 10px;
    width: 200px;
    height: 50px;
    font-size: 15px;
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

.header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 60px;
    border-bottom: 1px solid ;
}

</style>

<body>

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um Disciplina
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];
   
?>

<div class="header">
<img src="Corporate_Tech_Computer_Logo-removebg-preview.png" alt="">
<?php         
   echo "<button class='voltar'><a href='../index.php'>Página inicial</a></button>";
?>
</div>


<div class="container">

<div class="main">

  <form method="POST" action="cruddisciplina.php">

  <h2>Alterar dados</h2>

        <div class="nomedados1">
        <p>Nome Disciplina</p>
        </div>

        <div class="dadosnome">
        <input type="text"  name="nomedisciplina" class="config1" value="<?php echo htmlspecialchars($nomedisciplina)?>" >
        </div>


        <div class="nomedados2">
        <div id="ch"><p>Carga Horária</p></div>
        <div id="semestre"><p>Semestre</p></div>
        <div id="idprofessor"><p>ID professor</p></div>
        </div>

        <div class="dadosnome">
        <input type="number" name="ch" required maxlength="1" minlength="3" class="config2" value="<?php echo $ch?>">
        <input type="number" name="semestre" maxlength="2" minlength="1" required class="config2" value="<?php echo $semestre?>">
        <input type="number" name="idprofessor" required class="config2" value="<?php echo  $idprofessor?>"> 
        </div>
 
        <input type="hidden" name="id" value="<?php echo $id?>">


        <div id="layoutbotao">
        <input type="submit" id="botao" name="update" value="Alterar">
        </div>

  </form>

  </div>
</div>

</body>
</html>