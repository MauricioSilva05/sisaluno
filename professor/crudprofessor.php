<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cadastro</title>
</head>
<body>


<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');

##cadastrar
if(isset($_POST['cadastrar'])){
        ##dados recebidos pelo metodo POST$_POST
        $nome = $_POST ['nome'];
        $cpf = $_POST ['cpf'];
        $idade   = $_POST ['idade'];
        $datanascimento   = $_POST ['datanascimento'];
        $estatus   = $_POST ['estatus'];
        $endereco = $_POST ['endereco'];
        

        $nomeMaiusculo = mb_strtoupper($nome, 'UTF-8');

        ##codigo SQL
        $sql = "INSERT INTO professor (nome, cpf, idade,  datanascimento, estatus, endereco) VALUES('$nomeMaiusculo',  '$cpf', '$idade', '$datanascimento', '$estatus', '$endereco')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {

                echo "<script>alert('$nome cadastrado com sucesso!!')
                window.location.href = '../index.php'</script>";
         
            }
        }


        #######alterar
    if(isset($_POST['update'])){

        ##dados recebidos pelo metodo $_POST
       
        $nome = $_POST ['nome'];
        $cpf = $_POST ['cpf'];
        $endereco = $_POST ['endereco'];
        $estatus = $_POST ['estatus'];
        $datanascimento = $_POST ['datanascimento'];
        $idade = $_POST ['idade'];
        $id = $_POST ['id'];
   
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, cpf= :cpf, endereco= :endereco, estatus= :estatus, datanascimento= :datanascimento, idade= :idade WHERE id= :id";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros7
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);

    if($stmt->execute())
        {
             echo " <script>alert('Os dados do professor $nome foram alterados com sucesso!!')
                     window.location.href = 'listaprofessor.php'</script>;";
        }

}        


##Excluir
if(isset($_POST['excluir'])){
    $id = $_POST['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
             echo " <script>alert('Os dados do professor $nome foram excluídos!!')
                     window.location.href = 'listaprofessor.php'</script>;";
        }

}

?>

</body>
</html>