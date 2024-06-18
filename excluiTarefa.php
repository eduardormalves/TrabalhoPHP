<?php
require 'conectaBanco.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM tarefa WHERE id = $id";

    if ($banco->query($delete)) {
        header("Location: mostrarTarefa.php?projeto_id=" . $_GET['projeto_id']);
    } else {
        echo "Erro ao excluir a tarefa: " . $banco->error;
    }
}

$banco->close();
?>