<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 — Страница не найдена</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-container {
            position: absolute;
            width: 80%;
            height: 80%;
            top: 5%;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
        }
        img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .back-link {
            position: fixed;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 191, 255, 0.8);
            color: #ffffff;
            text-decoration: none;
            font-size: 20px;
            padding: 15px 30px;
            border-radius: 25px;
            opacity: 0;
            animation: fadeIn 1s ease-out 2s forwards;
            transition: background-color 0.3s ease;
            -webkit-tap-highlight-color: transparent;
        }
        .back-link:hover {
            background-color: rgba(0, 191, 255, 1);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .image-container {
                width: 90%;
                height: 70%;
                top: 10%;
            }
            .back-link {
                bottom: 60px;
                font-size: 24px;
                padding: 20px 40px;
                min-width: 200px;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .image-container {
                width: 95%;
                height: 65%;
                top: 15%;
            }
            .back-link {
                bottom: 80px;
                font-size: 28px;
                padding: 25px 50px;
                min-width: 250px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="okak.png" alt="Кот 'окак'">
        </div>
        <a href="/" class="back-link">Вернуться на главную</a>
    </div>
</body>
</html> 