<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
</head>

<body>
<form action="{{route('users.store')}}" method="post">
    @csrf    <!--O @crsf é uma forma de criptografar o sistema para não receber POST de outros sistemas-->

    <!--Dentro de action o route é a rota que foi definido em web.php-->
    <label for="">
        Nome do usuário
    </label>
    <input type="text" name="name">

    <label for="">
        E-mail
    </label>
    <input type="text" name="email">

    <label for="">
        Senha do usuário
    </label>
    <input type="password" name="password">

    <button type="submit">
        Cadastrar
    </button>
</form>

</body>

</html>
