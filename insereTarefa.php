<?php
require 'conectaBanco.php';

$tarefa = $_POST['tarefa'];
$horarioInicio = $_POST['horarioInicio'];
$horarioFim = $_POST['horarioFim'];
$descTarefa = $_POST['descTarefa'];
$projeto_id = $_POST['projeto_id'];

$insert = "INSERT INTO tarefa (nome, descricao, horarioInicio, horarioFim, projeto_id) VALUES ('$tarefa', '$descTarefa', '$horarioInicio', '$horarioFim', '$projeto_id')";
if ($banco->query($insert)) {
    header("Location: index.php");
} else {
    echo "Erro ao cadastrar a tarefa: " . $banco->error;
}

$banco->close();
?>