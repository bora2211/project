<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Начална Страница</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #343a40;
            background-image: url('{{ asset("https://watermark.lovepik.com/photo/40027/7318.jpg_wh1200.jpg") }}'); /* Заменете с пътя до вашето изображение */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .container {
            max-width: 800px;
            margin: 10% auto;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        .image {
            flex: 1;
            padding-left: 20px;
            text-align: center;
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px;
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 25px;
            box-shadow: 0px 4px 15px rgba(0, 123, 255, 0.2);
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <h1>Добре дошли в нашия онлайн магазин!</h1>
        <p>Изберете опция за продължаване:</p>
        <a href="{{ route('register') }}" class="btn">Регистрация</a>
        <a href="{{ route('login') }}" class="btn">Вход</a>
    </div>
    <div class="image">
        <img src="{{ asset('project7.png') }}" alt="Изображение" class="img-fluid rounded">
    </div>
</div>

</body>
</html>
