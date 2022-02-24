<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Регистрация</h1>
        <form method="post" action="{{ route('register.store') }}">
            @csrf
            <h2>{{session('success')}}</h2>
            <div class="form-control">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-control">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-control">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-control">
            <label for="password_confirmation">Повторите пароль</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
        <button type="submit" class="btn btn-primary">Создать аккаунт</button>
        <a href="{{ route('login.create') }} "> Уже есть аккаунт? Войдите в систему! </a> 

        </form>
    </div>
</body>
</html>