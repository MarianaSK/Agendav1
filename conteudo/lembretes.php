<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="conteudo/css/styles.css" rel="stylesheet">
    <title>Agenda - Lembretes</title>
</head>

<body>
    <div class="mt-3 moldura--lembrete">
        <div class="quadro--lembrete">
            <div class="menu--botoes--lembrete">
                <button type="button" class="btn btn-success botao--add--lembrete">+</button>
                <button type="button" class="btn btn-danger botao--rem--lembrete">-</button>
            </div>
            <div id="mydiv">
                <div id="mydivheader">Click here to move</div>
                <form action="conteudo/conexaoLembrete/conexao.php" method="POST">
                    <fieldset>
                        <label for="">Nome: </label>
                        <input type="text" name="nome_lembrete">
                    </fieldset>
                    <fieldset>
                        <label for="">Descrição: </label>
                        <input type="text" name="desc_lembrete">
                    </fieldset>
                    <input type="submit" value="Salvar">
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="conteudo/js/funcAuxiliares.js"></script>
</html>