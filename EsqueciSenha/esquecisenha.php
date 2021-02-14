<!--Inspirado em http://clubedosgeeks.com.br/design/10-temas-incriveis-para-flutter em especial Hugo Extrat-->
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="background--padrao">
        <div class="div--voltar">
            <i class="fa fa-arrow-left seta--voltar" aria-hidden="true"></i>
            <a href="../login.php" class="voltar">
                Voltar
            </a>
        </div>
        <div class="caixa--esqueci--senha">
            <form action="" method="POST" class="form--esqueci--senha">
                <fieldset class="campo--email">
                    <i class="fa fa-envelope-o" style="font-size:24px"></i>
                    <label for="email">E-mail: </label>
                    <input 
                        id="email" 
                        type="email" 
                        autocomplete="email" 
                        name="email"
                        inputmode="email" 
                        minlength="8"
                        autofocus 
                        required>
                </fieldset>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>