<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form id="form-contato" method="POST" action="">
        <input type="text" id="nomeForm" name="nome" placeholder="Nome">

        <input type="email" id="emailForm" name="email" placeholder="E-mail">

        <textarea id="mensagemForm" name="mensagem" placeholder="Mensagem"></textarea>

        <input type="submit" placeholder="Enviar">
    </form>

    <!--jquey-->
    <script src="assets/scripts/jquery-3.4.1.min.js"></script>
    <!--jquery validate-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $('#form-contato').validate();
    </script>
</body>
</html>