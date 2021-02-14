<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="conteudo/css/styles.css" rel="stylesheet">
    <title>Agenda - Lembretes</title>
</head>

<body>
    <div class="mt-3 moldura--lembrete">
        <div class="quadro--lembrete">
            <div style="background-color: white; width: 110px; height: 50px; display: grid; grid-template-columns: 50% 50%; padding: 10px;">
                <button type="button" class="btn btn-success botao--add--lembrete">+</button>
                <button type="button" class="btn btn-danger botao--rem--lembrete">-</button>
            </div>
            <div id="mydiv">
                <div id="mydivheader">Click here to move</div>
                <input type="text">
                <input type="submit" value="Salvar">
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="conteudo/js/funcAuxiliares.js"></script>
</html>