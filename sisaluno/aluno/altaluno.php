<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Aluno</title>
</head>

<style>

body{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-color: #C4E1FF;
    }

.container{
    display: flex;
    margin-top: 30px;
}

.main{
    width: 50%;
    height: 400px;
    padding: 20px;
    margin: auto; 
    border: 2px solid white;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
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

a{
    color: white;
    text-decoration: none;
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

.header{
    display: flex;
    align-items: center;
    justify-content: space-around;
    margin-bottom: 20px;
    border-bottom: 1px solid ;
}



input{
    border: 1px solid #159A9C;
    border-radius: 10px;
    background-color: #cae0f8;
    width: 450px;
    height: 30px;
    margin: auto;
}

img{
    height: 100px;
    width: 250px;
}

h2{
  text-align: center;
  font-size: 35px;
}

.header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 60px;
    border-bottom: 1px solid ;
}

img{
    height: 100px;
    width: 250px;
}

#estatus{
    padding: 0px 160px 0px 0px;
}

#datanascimento{
    padding: 0px 115px 0px 0px;
}

.nomedados2{
    display: flex;
    font-weight: bold;
    gap:0px;
    color: #002333;
}

.config1{
    width: 595px;
    height: 30px;
}

.config2{
    width: 195px;
    height: 30px;
}

select{
    border: 1px solid #039FDA;
    border-radius: 10px;
    background-color: #cae0f8;
    width: 100px;
}

.nomedados1{
    font-weight: bold;
    color: #002333;
}

#layoutbotao{
    padding: 30px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80px;
}


</style>

<body>

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM Aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];
   $datanascimento = $array_retorno['datanascimento'];
   $idade = $array_retorno['idade'];
   
?>

<div class="header">
<img src="Corporate_Tech_Computer_Logo-removebg-preview.png" alt="">
<?php         
   echo "<button class='voltar'><a href='../index.php'>Página inicial</a></button>";
?>
</div>


<div class="container">

<div class="main">

  <form method="POST" action="crudaluno.php">
  <h2>Alterar dados</h2>

        <div class="nomedados1">
        <p>Nome:</p>
        <input type="text"  name="nome" class="config1" required value="<?php echo htmlspecialchars($nome)?>">
        </div>

        <div class="nomedados1">
        <p>Endereço:</p>
        <input type="text" name="endereco" class="config1" required value="<?php echo htmlspecialchars($endereco) ?>">
        </div>
 
        <div class="nomedados2">
            <div id="estatus"><p>Status:</p></div>
            <div id="datanascimento"><p>Nascimento:</p></div>
            <div id="idade"><p>Idade:</p></div>
        </div>

        <div class="dadosnome">
        <select type="text" name="estatus" required class="config2" value=<?php echo  htmlspecialchars($estatus)?>>
        <option value="">Selecione</option>
        <option value="Aprovado">Aprovado</option>
        <option value="Reprovado">Reprovado</Rption>
        </select>
        <input type="date" name="datanascimento" required class="config2" value=<?php echo $datanascimento?> >
        <input type="number" maxlength="2" required minlength="2" name="idade" class="config2"  value=<?php echo $idade?> >
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