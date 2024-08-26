<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 90%;
            flex-wrap: wrap; /* Allows content to wrap on smaller screens */
        }
        .content {
            text-align: center;
            margin-right: 20px;
            flex: 1; /* Allows content to adjust size based on available space */
            margin-bottom: 20px;
        }
        h1 {
            color: #ff6347;
            font-size: 48px;
            margin: 0;
        }
        p {
            font-size: 24px;
            color: #555;
            margin: 0;
        }
        video {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 480px; /* Ensures video does not get too large */
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }
            .content {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }
        @media (max-width: 480px) {
            h1 {
                font-size: 36px;
            }
            p {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Buka</h1>
        <a href="{{ url('/birthday') }}">HappyBirthDay bbub</a>
    </div>
</body>
</html>
