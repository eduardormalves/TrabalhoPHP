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
        require 'conectaBanco.php';
    ?>
    <h1 class="text-center">Cadastrar Tarefa</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form action="insereTarefa.php" method="post">
                    <div class="form-group">
                        <label for="tarefa">Tarefa</label>
                        <input type="text" class="form-control" id="tarefa" name="tarefa" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="horarioInicio">Horario Inicio</label>
                            <input type="time" class="form-control" id="horarioInicio" name="horarioInicio" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="horarioFim">Horario Fim</label>
                            <input type="time" class="form-control" id="horarioFim" name="horarioFim" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descTarefa">Descrição da Tarefa</label>
                        <textarea class="form-control" id="descTarefa" name="descTarefa" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                    <select id="projeto_id" name="projeto_id" class="form-control" required>
                            <option value="">Selecione um projeto</option>
                            <?php
                                $selectProjetos = "SELECT id, nome FROM projeto";
                                $resultadoProjetos = mysqli_query($banco, $selectProjetos);
                                
                                if ($resultadoProjetos) {
                                    while ($projeto = mysqli_fetch_assoc($resultadoProjetos)) {
                                        echo "<option value='{$projeto['id']}'>{$projeto['nome']}</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>