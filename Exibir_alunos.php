<!DOCTYPE html>
<html>
  <style>
    table, tr, th, td {
      border: solid black 1px; 
      border-collapse: collapse;
    }
  </style>
<head>
  <title>Exibir Alunos</title>
</head>
<body>
  <h1>Exibir Alunos</h1>
  <table>
    <tr>
      <th>Nome</th>
      <th>Matrícula</th>
      <th>Matéria</th>
    </tr>
    <?php
      $arquivoAluno = fopen("Alunos.txt", "r");

      if ($arquivoAluno) {
      while (($linha = fgets($arquivoAluno)) !== false) {
        $dados = explode("-", $linha);
        $nome = $dados[0];
        $matricula = $dados[1];
        $materia = $dados[2];
        echo "<tr>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $matricula . "</td>";
        echo "<td>" . $materia . "</td>";
        echo "</tr>";
      }
      fclose($arquivoAluno);
      } else {
        echo "Erro ao abrir o arquivo!";
      }
    ?>
  </table>
</body>
</html>