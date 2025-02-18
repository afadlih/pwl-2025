<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display' rel='stylesheet'>
    <title>User Profile - POS</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f2f2f2;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateZ(0);
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: translateY(-10px);
        }

        h1 {
            font-family: 'Playfair Display', serif;
            color: #4b3a26;
            margin-bottom: 30px;
            font-size: 36px;
        }

        p {
            color: #4b3a26;
            font-size: 20px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Profile</h1>
        <p>ID: {{ $id }}</p>
        <p>Name: {{ $name }}</p>
    </div>
</body>
</html>