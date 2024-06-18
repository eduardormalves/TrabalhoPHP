<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .a{
            border: solid 1px black;
            border-radius: 5px;
            height: 100px;
            margin-top: 20px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        require 'navbar.php';
        require 'conectaBanco.php';

        $projeto_id = $_GET['projeto_id'];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="text-center">Tarefas do Projeto</h1>
                <?php
                $select = "SELECT * FROM tarefa WHERE projeto_id = $projeto_id";
                $resultado = mysqli_query($banco, $select);
                ?>
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Tarefa</th>
                        <th scope="col">Inicio</th>
                        <th scope="col">Fim</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Excluir</th>
                    </thead>
                    <tbody>
                        <?php
                            if($resultado){
                                while($linha = mysqli_fetch_assoc($resultado)){
                                    $tarefa_id = $linha['id'];
                                    $tarefa = $linha['nome'];
                                    $inicio = $linha['horarioInicio'];
                                    $fim = $linha['horarioFim'];
                                    $desc = $linha['descricao'];
                                    echo "<tr>
                                    <td> $tarefa </td>
                                    <td> $inicio</td>
                                    <td> $fim </td>
                                    <td> $desc </td>
                                    <td> 
                                        <a href='excluiTarefa.php?id=$tarefa_id&projeto_id=$projeto_id'><i class='bi bi-trash-fill'></i></a> 
                                    </td>
                                    </tr>";                
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>