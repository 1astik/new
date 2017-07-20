<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>




<form method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class = "text-center">
    <h1>{{ $error }} </h1>
    <div>
        <strong>Логин</strong>
        <input type = "text"  name = "login" placeholder="Логин">
    </div>

    <div id = "block2">
        <strong>Пароль</strong>
        <input type = "password" name = "password"  placeholder="Пароль">
    </div>

    <div>
        <input type="submit" value="Войти" name="vhod">
    </div>


</div>
</form>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</body>


</html>