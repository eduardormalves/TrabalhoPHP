<?php
require 'conectaBanco.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM projeto WHERE id = $id";

    if ($banco->query($delete)) {
        header("Location: index.php");
    } else {
        echo "Erro ao excluir o projeto: " . $banco->error;
    }
}

$banco->close();
?>