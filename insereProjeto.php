<?php
require 'conectaBanco.php';
    $nomeProjeto = $_POST['projeto'];
    $descProjeto = $_POST['descProjeto'];

    $insert = "INSERT INTO projeto (nome, descricao) VALUES ('$nomeProjeto', '$descProjeto')";

    if ($banco->query($insert)) {
        header("Location: index.php");
    } else {
        echo "Erro ao cadastrar a projeto: " . $banco->error;
    }
    
    $banco->close();
?>