<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $materia = $_POST["materia"];
    
    $arqAlunos = fopen("Alunos.txt","a") or die("erro ao criar arquivo");
    $linha = $nome . "-" . $matricula . "-" . $materia . "\n";
    fwrite($arqAlunos,$linha);
    fclose($arqAlunos);
    $msg = "Aluno Adicionado com Sucesso.";
 
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Incluir Aluno</title>
</head>
<body>
<h1>Adicionar Aluno</h1>
<form action="Incluir_aluno.php" method="POST">
    Nome: <input type="text" name="nome" placeholder="João Vitor Romania Balbino">
    <br><br>
    Matrícula: <input type="number" name="matricula" placeholder="12345">
    <br><br>
    Matéria: <input type="text" name="materia" placeholder="3DAW">
    <br><br>
    <input type="submit" value="Enviar">
</form>
<p><?php echo $msg ?></p>
<br>
</body>
</html>
