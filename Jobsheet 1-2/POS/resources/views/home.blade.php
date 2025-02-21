<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display|Montserrat' rel='stylesheet'>
    <title>Home - POS</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(-10px);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(0);
        }

        h1 {
            font-family: 'Playfair Display', serif;
            color: #4b3a26;
            margin-bottom: 20px;
            font-size: 32px;
        }

        button {
            padding: 12px 20px;
            background-color: #8b5e3c;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin: 8px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
        }

        button:hover {
            background-color: #6f4e37;
            transform: translateY(-3px);
        }

        h4, h6 {
            color: #4b3a26;
        }

        h4 {
            margin-top: 30px;
            font-size: 18px;
        }

        h6 {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to POS Application</h1>

        <!-- Button Navigasi -->
        <button onclick="window.location.href='category/'">View Products</button>
        <button onclick="window.location.href='sales/'">Sales Page</button>
        <button onclick="window.location.href='./user/3/name/AHMAD FADLIH WAHYU SARDANA'">Go to User Profile</button>
        <h4>AHMAD FADLIH WAHYU SARDANA - TI 2H - 3</h4>
        <h6>JOBSHEET 2 POS - ROUTING, CONTROLLER, VIEW</h6>
    </div>
</body>
</html>