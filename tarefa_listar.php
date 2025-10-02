<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas :: Listar</title>

    <?php
    include "referencias.php";
    ?>

</head>

<body>
    <form  action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">


                    <h2>Tarefas :: Listar</h2>

                    <div class="form-group">
                        <table>

                            <tr>
                                <td><?php echo Descricao ?></td>
                                <td><?php echo Data ?></td>
                                <td> <?php echo Prioridade ?> </td>
                                <td><?php echo Responsavel ?>
                            </td>
                            </tr>
                      <?php
                      // 1 PASSO : montar um comando sql que será executado
                      $sql = "SELECT * FROM tarefa ORDER BY data_entrega DESC ";
                      // 2 PASSO: preparar o comando pra ser executado na conexão de dados
                      $comando =$conexao->prepare($sql);
                      // 3 PASSO: executar o comando
                      // 4 PASSO: capturar os resultados trazidps pelo MYSQL
                      // 5 PASSO: pegar todas as linhas de dados que estão em RESULTADO 
                     while($registro= $resultado->fetch_assoc())
                        {
                         $descricao = $registro["descricao"];
                         $data_enterga= $registro["data_entrega"];
                         $prioridade= $registro["prioridade"];
                         $responsavel= $registro["responsavel"];
                    
                    ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>]
                     
                      <?php }?>
                        </table>
                    
                    </div>

                    <div class="form-group">

                        <a href="index.php">
                            <button type="button" class="btn btn-danger" name="btVoltar">
                                Voltar
                            </button>
                        </a>

                    </div>

                </div>

            </div>
        </div>

    </form>

</body>

</html>