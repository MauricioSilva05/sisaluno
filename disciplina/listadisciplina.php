<style>

body{
    background-color: #C4E1FF ;
    }

table{
    border: solid 1px;
    background-color: white;
    width: 100%;
}
th{
    border-bottom: solid 1px;
    border-right: solid 1px;
    font-size: 18px;
    height: 50px;
    background-color: #039FDA;
}

td{
    border-right: 1px solid;
    text-align: center;
}
.container{
    margin: auto;
    margin-top: 20px;
    height: 100%;
    width: 1300px;
}

.botao{
    border: 0px;
}

a{
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.voltar{
    margin: 5px;
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
    justify-content: space-between;
    margin-bottom: 60px;
    border-bottom: 1px solid ;
}


</style>


<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
  $retorno->execute();

?>      
<div class="container">

<div class="header">
<img src="Corporate_Tech_Computer_Logo-removebg-preview.png" alt="">
<?php         
   echo "<button class='voltar'><a href='../index.php'>Página inicial</a></button>";
?>
</div>

        <table> 
            <thead>
            
                <tr>
                    <th>Nome Disciplina</th>
                    <th>Carga Horária</th>
                    <th>Semestre</th>
                    <th>ID Professor</th>
                </tr>
            
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['nomedisciplina'] ?>   </td> 
                            <td> <?php echo $value['ch'] ?>   </td> 
                            <td> <?php echo $value['semestre']?> </td> 
                            <td> <?php echo $value['idprofessor']?> </td> 

                            <td class="botao">
                               <form method="POST" action="altdisciplina.php">

                                        <input name="id" type="hidden" value="
                                        <?php echo $value['id'];?>"/>

                                        <button  name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td class="botao">

                               <form method="POST" action="cruddisciplina.php">
                                        <input name="id" type="hidden" value="
                                        <?php echo $value['id'];?>"/>
                                        <button  name="excluir" onclick="return confirm('Tem certeza que deseja deletar este registro?')" type="submit">Excluir</button>
                                </form>
                             </td>           
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
    </div>
