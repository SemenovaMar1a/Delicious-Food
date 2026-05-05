<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("header-title")</title>
</head>
<body style="margin:0; font-family: Arial, sans-serif; display:flex; flex-direction:column; min-height:100vh;">

    <!-- Верхняя панель -->
    <div style="
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #2c3e50;
        padding: 15px 30px;
        color: white;
    ">

        <div style="font-size: 20px; font-weight: bold;">
            Delicious Food
        </div>

        <div>
            <a href="{{ route("home") }}" style="color: white; text-decoration: none; margin: 0 15px;">Главная</a>
            <a href="{{ route('menu') }}" style="color: white; text-decoration: none; margin: 0 15px;">Меню</a>
            <a href="{{ route('about') }}" style="color: white; text-decoration: none; margin: 0 15px;">О нас</a>
            <a href="{{ route('contacts') }}" style="color: white; text-decoration: none; margin: 0 15px;">Контакты</a>
        </div>

        <div>
            <a href="#" style="
                background-color: #3498db;
                color: white;
                padding: 8px 15px;
                text-decoration: none;
                border-radius: 5px;
            ">Войти</a>
        </div>
    </div>

    <!-- Контент -->
    <div style="flex:1;">
        @yield("content")
    </div>

    <!-- Футтер -->
    <footer style="
        background:#2c3e50;
        color:white;
        text-align:center;
        padding:15px;
    ">
        © 2026 Delicious Food
    </footer>

</body>
</html>