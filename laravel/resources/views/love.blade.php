<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>{{ $name }}，我爱你 ❤️</h1>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb);
            font-family: 'Arial', sans-serif;
            color: #fff;
            overflow: hidden;
        }
        h1 {
            font-size: 3rem;
            text-align: center;
            animation: fadeIn 2s ease-in-out, heartbeat 1.5s infinite;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes heartbeat {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }
        .heart {
            position: absolute;
            width: 100px;
            height: 100px;
            background: red;
            transform: rotate(-45deg);
            animation: float 4s infinite ease-in-out;
        }
        .heart::before,
        .heart::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            background: red;
            border-radius: 50%;
        }
        .heart::before {
            top: -50px;
            left: 0;
        }
        .heart::after {
            left: 50px;
            top: 0;
        }
        @keyframes float {
            0% {
                transform: rotate(-45deg) translateY(0);
                opacity: 1;
            }
            50% {
                transform: rotate(-45deg) translateY(-20px);
                opacity: 0.8;
            }
            100% {
                transform: rotate(-45deg) translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<div class="heart" style="top: 10%; left: 20%;"></div>
<div class="heart" style="top: 30%; left: 70%; animation-delay: 1s;"></div>
<div class="heart" style="top: 50%; left: 40%; animation-delay: 2s;"></div>
<h1>老婆，我爱你 ❤️</h1>
</body>
</html>
