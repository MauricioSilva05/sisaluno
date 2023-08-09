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
        $nomedisciplina = $_POST ['nomedisciplina'];
        $ch = $_POST ['ch'];
        $semestre   = $_POST ['semestre'];
        $idprofessor   = $_POST ['idprofessor'];

        $nomedisciplinaMaiusculo = mb_strtoupper($nomedisciplina, 'UTF-8');

        

        ##codigo SQL
        $sql = "INSERT INTO Disciplina (nomedisciplina, ch, semestre, idprofessor) VALUES('$nomedisciplinaMaiusculo', '$ch', '$semestre', '$idprofessor')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o Professor
                $nome foi Incluido com sucesso!!!"; 
                echo "<script>alert('$nomedisciplina, cadastrado com sucesso.')
                window.location.href = '../index.php'</script>";  
            }
        }
    

        #######alterar
        if(isset($_POST['update'])){

        ##dados recebidos pelo metodo $_POST
       
        $nomedisciplina = $_POST ['nomedisciplina'];
        $ch = $_POST ['ch'];
        $semestre = $_POST ['semestre'];
        $idprofessor = $_POST ['idprofessor'];
        $id = $_POST ['id'];
   
        ##codigo sql
        $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, ch= :ch, semestre= :semestre, idprofessor= :idprofessor WHERE id= :id" ;
   
        ##junta o codigo sql a conexao do banco
        $stmt = $conexao->prepare($sql);

        ##diz o paramentro e o tipo  do paramentros7
        $stmt->bindParam(':nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
        $stmt->bindParam(':ch',$ch, PDO::PARAM_INT);
        $stmt->bindParam(':semestre',$semestre, PDO::PARAM_INT);
        $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_INT);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);

        if($stmt->execute())
           {
             echo " <script>alert('Os dados de $nomedisciplina foram alterados com sucesso!!')
                     window.location.href = 'listadisciplina.php'</script>;";
           }

}        


##Excluir
if(isset($_POST['excluir'])){
    $id = $_POST['id'];
    $sql ="DELETE FROM `disciplina` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
             echo " <script>alert('Os dados da disciplina foram exluídos!!')
                     window.location.href = 'listadisciplina.php'</script>;";
        }

}

?>

</body>
</html>