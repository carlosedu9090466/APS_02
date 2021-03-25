# APS_02

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css">


    <title>Sistema de nota</title>
</head>

<body>

    <div id="container">


        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">

            <!-- LOGO -->
            <a href="" class="navbar-brand">Sistema de Nota</a>

            <!-- MENU  -->

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- NAVEGAÇÃO -->
            <div class="collapse navbar-collapse" id="navegacao">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">Área do Professor</a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">Área do Aluno</a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">Sair</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="space"></div>

        <!-- Inicio formulário -->

        <div class="container-aluno">

            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="aluno">Nome do Aluno:</label>
                        <input type="text" class="form-control" id="aluno" name="aluno">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="curso">Curso:</label>
                        <input type="text" class="form-control" id="curso" name="curso">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="professor">Professor:</label>
                        <input type="text" class="form-control" id="professor" name="professor">
                    </div>

                </div>
                <!-- <button type="submit" class="btn btn-primary">Enviar</button> -->

        </div>

        <div class="space"></div>

        <div class="notas">

            <div class="form-group">
                <label class="input-group-text" for="exampleFormControlSelect1">Selecione a disciplina:</label>
                <select class="form-control" id="exampleFormControlSelect1" name="disciplina">
                    <option value="" selected disabled>Escolha uma disciplina</option>
                    <option value="Português">Português</option>
                    <option value="Matemática">Matemática</option>
                    <option value="Ciências">Ciências</option>
                    <option value="História">História</option>
                    <option value="Filosofia">Filosofia</option>
                </select>
            </div>

            <div class="row">

                <div class="col-sm-2">
                    <label for="nota1" class="visually">Digite a 1° nota:</label>
                    <input type="text" class="form-control" id="nota1" name="nota1">
                </div>

                <div class="col-sm-2">
                    <label for="nota1" class="visually">Digite a 2° nota:</label>
                    <input type="text" class="form-control" id="nota1" name="nota2">
                </div>


                <div class="col-sm-2">
                    <label for="nota1" class="visually">Digite a 3° nota:</label>
                    <input type="text" class="form-control" id="nota1" name="nota3">
                </div>


                <div class="col-sm-2">
                    <label for="nota1" class="visually">Digite a 4° nota:</label>
                    <input type="text" class="form-control" id="nota1" name="nota4">
                </div>

                <div class="col-mb3 btn-media">
                    <button type="submit" class="btn btn-primary btn-lg">Calcular Média</button>
                </div>

            </div>


            </form>

        </div>



    </div>
    <!-- Fim do container -->


    <?php

    $aluno = $_POST['aluno'];
    $blox = $_POST['curso'];
    $prof = $_POST['professor'];
    $disciplina = $_POST['disciplina'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;


    if ($media >= 7) {
        $situacao_aluno = "Aprovado";
    } elseif ($media < 7 && $media >= 4) {
        $situacao_aluno = "Recuperação";
    } else {
        $situacao_aluno = "Reprovado";
    }

    ?>


    <?php
    if ($media == 0) {
    ?>

    <?php
    } else {

    ?>

        <div class="space"></div>


        <h3 class="titulo_result">Situação do aluno</h3>

        <div class="resultado">

            <table class="table conf_ta">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome do aluno</th>
                        <th>Curso:</th>
                        <th>Professor:</th>
                        <th>Disciplina:</th>
                        <th>Média</th>
                        <th>Situação</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?php echo $aluno; ?></td>
                        <td><?php echo $blox; ?></td>
                        <td><?php echo $prof; ?></td>
                        <td><?php echo $disciplina; ?></td>
                        <td><?php echo $media; ?></td>
                        <td><?php echo $situacao_aluno; ?></td>
                    </tr>

                </tbody>
            </table>




        </div>

    <?php }?>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>