<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<style>
    body{
    background-color: #C4E1FF ;
    }

    .container{
        background-color: white;
        height: 580px;
        width: 600px;
        border-radius: 50% 20% / 10% 40%;
        margin: 50px auto;
        box-shadow: 0px 0px 20px 0px #002333;
    }

    img{
        height: 100px;
        width: 500px;
    }

    .img{
        display: flex;
        justify-content: center;
        padding: 80px;
        height: 150px;
    }

    #botao{
    background-color: #C4E1FF;
    color: #002333;
    padding: 10px;
    border: 3px rgb(0, 0, 0);
    border-radius: 10px;
    font-size: 20px;
    cursor: pointer;
    transition: 0.5s;
    font-weight: bold;
    text-decoration: none;
    
    } 

   #botao:hover{
   color: black;
   background-color: #159A9C;
   font-weight: bold;
   }

   #layoutbotao{
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   text-align: center;
   height: 160px;
}

.botao{
    margin: 20px;
}

</style>

<body>


<div class="container">
<div class="img">
    <img src="../sisaluno/aluno/Corporate Tech Computer Logo.png" alt="">
</div>

<div id="layoutbotao">
    
    <div class="botao">
    <a href="../sisaluno/aluno/cadaluno.php" id="botao">
        Cadastrar aluno
    </a>
    </div>

    <div class="botao">
    <a href="../sisaluno/aluno/listaalunos.php" id="botao">Lista de alunos</a>
    </div>

    <div class="botao">
    <a href="../sisaluno/professor/cadprofessor.php" id="botao">
        Cadastrar professor
    </a>
    </div>

    <div class="botao">
    <a href="../sisaluno/professor/listaprofessor.php" id="botao">Lista de professores</a>
    </div>

    <div class="botao">
    <a href="../sisaluno/disciplina/caddisciplina.php" id="botao">
        Cadastrar disciplina
    </a>
    </div>

    <div class="botao">
    <a href="../sisaluno/disciplina/listadisciplina.php" id="botao">
        Lista disciplina
    </a>
    </div>
    
    </div>


   
    
</div>

</div>


</body>
</html>