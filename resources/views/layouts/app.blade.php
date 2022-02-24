<!DOCTYPE html>
<html lang="ru" class="text-gray-900 leading-tight">
    <head>
        <title>ToDo List</title>

        <!-- CSS And JavaScript -->
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body class="min-h-screen bg-gray-100">
        <div class="container">
            <nav class="navbar navbar-default">
                <h1>Список дел</h1>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('main') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Главная</a>
                        <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Выйти</a>
                        <p>Пользователь {{ auth()->user()->name }}</p>
                    @endauth
                </div>
            @endif
            </nav>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>