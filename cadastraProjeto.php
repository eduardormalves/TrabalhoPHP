<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        require 'navbar.php';
    ?>
    <h1 class="text-center">Cadastrar Projeto</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form action="insereProjeto.php" method="post">
                    <div class="form-group">
                        <label for="projeto">Nome</label>
                        <input type="text" class="form-control" id="projeto" name="projeto" required>
                    </div>
                    <div class="form-group">
                        <label for="descProjeto">Descrição do Projeto</label>
                        <textarea class="form-control" id="descProjeto" name="descProjeto" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>