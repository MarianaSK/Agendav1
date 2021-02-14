<?php
    require 'verifica.php';

    if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Sistema</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Agenda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?pagina=lembretes">Lembretes</a>
                        <a class="dropdown-item" href="index.php?pagina=compromissos">Compromissos</a>
                        <a class="dropdown-item" href="index.php?pagina=eventos">Eventos</a>
                    </div>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <label for="" class="mr-3"><?php echo $nomeUser ?></label>
                <a href="logout.php">SAIR</a> 
            </div>
        </div>
    </nav>
    

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 520px;">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/LAaSoL0LrYs/" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/bF2vsubyHcQ/" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/ave-calvar-nKF2QcKsYx4-unsplash.jpg" class="d-block w-100" alt="...">
                <span>Photo by <a href="https://unsplash.com/@shotbyrain?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Ave Calvar</a> on <a href="https://unsplash.com/s/photos/pencil?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <div class="container-fluid">

            <?php
                $pagina='';

                if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
                    $pagina = addslashes($_GET['pagina']);
                }

                switch($pagina){
                    case 'lembretes': require 'lembretes.php'; break;
                    case 'compromissos': require 'compromissos.php'; break;
                    case 'eventos': require 'eventos.php'; break;
                    default: require 'home.php'; break;
                }
            ?>

        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

<?php
    else: header("Location: login.php");
endif;
?>