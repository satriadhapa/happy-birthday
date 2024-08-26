<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday</title>
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
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content {
            text-align: center;
            margin-right: 20px;
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
            width: 480px; /* Adjust this value to control video width */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Happy Birthday!</h1>
            <p>Wishing you a day filled with love and joy.</p>
            <p>back to <a href="{{ url('/') }}">home </a></p>
        </div>
        <video controls>
            <source src="{{ asset('videos/birthday.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</body>
</html>
