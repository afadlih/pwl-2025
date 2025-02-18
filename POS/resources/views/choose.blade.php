<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display' rel='stylesheet'>
    <title>Home - POS</title>
    <style>
        body {
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5dc; /* Light beige background */
        }

        .container {
            text-align: center;
            background-color: #fffaf0; /* Floral white background */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-10px);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(0);
        }

        h1 {
            color: #8b4513; 
            margin-bottom: 20px;
            font-size: 36px;
            font-family: 'Montserrat', sans-serif;
        }

        button {
            padding: 12px 20px;
            background-color: #8b4513; 
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin: 8px;
            border-radius: 20px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        button:hover {
            background-color: #a0522d; 
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        }

        h4, h6 {
            color: #8b4513; 
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Choose Product</h1> 
        <button onclick="window.location.href='category/food-beverage'">Food & Beverage</button>
        <button onclick="window.location.href='category/beauty-health'">Beauty & Health</button>
        <button onclick="window.location.href='category/home-care'">Home Care</button>
        <button onclick="window.location.href='category/baby-kid'">Baby & Kid</button>
        <h4>AHMAD FADLIH WAHYU SARDANA - TI 2H - 3</h4>
        <h6>JOBSHEET 2 POS - ROUTING, CONTROLLER, VIEW</h6>
    </div>
</body>
</html>