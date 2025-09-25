<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarefa ::INSERIR </title>
</head>
<body>
 include "referencias.php"
</body>
<?php 
// 1 passo : capturar os dados da entrada 
$Descricao = $_POST["txtDescricao"];
$Data_Entrega= $_POST["txtData"];
$Prioridade = $_POST["txtPrioridade"];
$Responsavel = $_POST["txtResponsavel"];

//2 passo: Montar o comando sql - insert
$sql = "INSERT INTO tarefa(Descricao,Data_Entrega,Prioridade,Responsavel) VALUES(?,?,?,?)"

// 3 PASSO: preparar o comando sql para ser executado
// ou seja, relacionar o comando sql que sera executado 
$Comando = $conexao->prepare($sql);

// 4 passo : vincular os ? com as variaveis de entrada de dados
$Comando->bind_param("ssss",$descricao,$Data_Entrega,$Prioridade,$Responsavel);

// 5 PASSO: EXECUTAR O COMANDO
if ($Comando->execute())
{
    echo "<h1>tarefa agendada</h1>";

}
else 
{
    echo "<h1>erro!</h2>";
    
}
?> 
</html>