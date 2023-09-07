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
      $arquivoAluno = fopen("Alunos.txt", "r") or die("Erro ao ler arquivo");
      $x = 0;
      $linhas[] = fgets($arquivoAluno);

      while (!feof($arquivoAluno)) {
        $linhas[] = fgets($arquivoAluno);
        $colunaDados = explode("-", $linhas[$x]);
        $nome = $colunaDados[0];
        $matricula = $colunaDados[1];
        $materia = $colunaDados[2];
        echo "<tr>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $matricula . "</td>";
        echo "<td>" . $materia . "</td>";
        echo "</tr>";
        $x++;
      }
      fclose($arquivoAluno);
    ?>
  </table>
</body>
</html>