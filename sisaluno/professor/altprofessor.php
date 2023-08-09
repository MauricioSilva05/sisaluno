<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Professor</title>
</head>

<style>

body{
    background-color: #C4E1FF ;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }


    h2{
    font-size: 40px;
    text-align: center;
    color:#002333;
}

.container{
    width: 50%;
    height: 380px;
    padding: 40px;
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
    width: 600px;
    height: 30px;
}

.config2{
    width: 195px;
    height: 30px;
}

.config3{
    width: 600px;
    height: 30px;
}

.nome{
    font-weight: bold;
    color: #002333;
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
    display: flex;
    gap: 200px;
}

.config{
    width: 300px;
    height: 30px;
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
   $sql = "SELECT * FROM Professor where id= :id";
   
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
   $cpf = $array_retorno['cpf'];
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


  <form method="POST" action="crudprofessor.php">
  <h2>Alterar dados</h2>

        <div class="nomedados1">
        <div id="nome"><p>Nome Completo</p></div>
        <div id="cpf"><p>CPF</p></div>
        </div>

        <div class="dadosnome">
        <input type="text" name="nome" required class="config" value="<?php echo htmlspecialchars($nome)?>">
        <input type="text" name="cpf" required class="config" value=<?php echo $cpf?>>
        </div>

        <div class="nome">
        <p>Endereço</p>
        </div>

        <div class="dadosnome1">
        <input type="text" name="endereco" required class="config3" value="<?php echo htmlspecialchars($endereco)?>">
        </div>
 
        <div class="nomedados2">
            <div id="estatus"><p>Status:</p></div>
            <div id="datanascimento"><p>Nascimento:</p></div>
            <div id="idade"><p>Idade:</p></div>
        </div>

        <div class="dadosnome">
        <select type="text" name="estatus" class="config2" required value=<?php echo $estatus?>>
        <option value="">Selecione</option>
        <option value="AT">Ativo</option>
        <option value="DS">Desativo</Rption>
        </select>
        <input type="date" name="datanascimento" required class="config2" value=<?php echo $datanascimento?> >
        <input type="number" name="idade" class="config2" required  value=<?php echo $idade?> >
        </div>

        <input type="hidden" name="id" value="<?php echo $id?>">


        <div id="layoutbotao">
        <input type="submit" id="botao" name="update" value="Alterar">
        </div>

  </form>

</div>
</body>
</html>