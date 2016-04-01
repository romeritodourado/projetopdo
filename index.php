<?php
require_once "banco.php";

$sql = "Select * from alunos order by nome";
$stmt = $conexao->prepare($sql);
$stmt->execute();

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<b>Notas dos Alunos:</b><br>";
foreach($alunos as $aluno){
    echo $aluno['nome']." - nota: <b>".$aluno['nota']."</b><br>";
}

echo "<br><br>###########################<br><br>";

$sql = "Select * from alunos order by nota desc limit 3";
$stmt = $conexao->prepare($sql);
$stmt->execute();

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<b>As 3 melhores Notas:</b><br>";
foreach($alunos as $aluno){
    echo $aluno['nome']." - nota: <b>".$aluno['nota']."</b><br>";
}