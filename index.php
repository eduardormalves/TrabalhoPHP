<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .a {
            border: solid 1px black;
            border-radius: 5px;
            height: 100px;
            margin-top: 20px;
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .a .acoes {
            flex: 1;
            display: flex;
            justify-content: space-around;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        require 'navbar.php';
        require 'conectaBanco.php';
    ?>
    <?php
    $select = "SELECT * FROM projeto";
    $resultado = mysqli_query($banco, $select);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="text-center">Projetos</h1>
                <?php
                    if($resultado){
                        while($linha = mysqli_fetch_assoc($resultado)){
                            $projeto_id = $linha['id'];
                            $projeto = $linha['nome'];
                            $descricao = $linha['descricao'];

                            echo "<a href='mostrarTarefa.php?projeto_id=$projeto_id' class='text-decoration-none'>";
                            echo "<div class='a'>
                                    <div class='projeto'>
                                        <h2 class='h5'>$projeto</h2>
                                    </div>
                                    <div class='descricao'>
                                        <p class='mb-0'>$descricao</p>
                                    </div>
                                    <div class='acoes'>
                                        <a href='excluiProjeto.php?id=$projeto_id'><i class='bi bi-trash-fill'></i></a> 
                                    </div>
                                  </div>";
                            echo "</a>";
                        }
                    }
                ?>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>