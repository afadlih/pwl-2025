<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Checkout - POS</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
            background-color: #f2f2f2;
        }

        header, footer {
            color: white;
            text-align: center;
            padding: 15px 0;
            background-image: linear-gradient(#4b3a26, #8b5e3c);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-bottom: 2px solid #8b5e3c;
        }

        main {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4b3a26;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }

        h1 {
            color: #f2f2f2;
            text-align: center;
            font-weight: 700;
        }

        table {
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #4b3a26;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tfoot td {
            font-weight: bold;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <header>
        <h1>Checkout</h1>
    </header>

    <main>
        <h2>Rincian Pesanan</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nasi Goreng</td>
                    <td>10.000</
