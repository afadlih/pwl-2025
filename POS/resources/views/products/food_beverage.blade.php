
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>FOOD AND BEVERAGE</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Montserrat';
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
        }
        header, footer {
    color: white;
    text-align: center;
    padding: 10px 0;
    background-image: linear-gradient(#01153e, #4b3a26);
}
    .menu{
        display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 3px;
            
    }
        .product {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 4px solid #ccc;
            padding: 20px;
            width: 300px;
            margin : 30px;
            margin-top: 20px;
            margin-bottom: 30px;
            border-radius: 35px;
        }
        .product img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }
        button {
    padding: 10px 10px;
    background-color: #01153e;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin : 10px;
    border-radius: 35px;
    padding : 10px;
}

button:hover {
    background-color: #4b3a26;
}
        .price {
            font-size: 18px;
            margin-top: 10px;
        }
        .submit{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 5px; 
        }
    </style>
    <title>Food & Beverage - POS</title>
</head>
<body>
   
    
        <h1>Food & Beverage</h1>
    <div class=menu>
        <div class="product">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/8b/Nasi-Goreng.jpg" class="img" alt="Product Image">
            <h3>Nasi Goreng</h3>
    
            <div class="buttons">
                <button onclick="decreaseQuantity()">-</button>
                <input type="text" id="quantity" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity()">+</button>
            </div>
    
            <div class="price">
                <p>Price: <span id="pricePerUnit">10.000</span> IDR</p>
                
            </div>
        </div>
        <div class="product">
            <img src="https://nilaigizi.com/assets/images/produk/produk_1578041377.jpg" class="image" alt="Product Image">
            <h3>Es Teh Manis</h3>
    
            <div class="buttons">
                <button onclick="decreaseQuantity()">-</button>
                <input type="text" id="quantity" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity()">+</button>
            </div>
    
            <div class="price">
                <p>Price: <span id="pricePerUnit">5.000</span> IDR</p>
                
            </div>
        </div>
        <div class="product">
            <img src="https://dorebyletao.com/wp-content/uploads/2021/03/Matcha-choco-1-533x800-1.jpg" class="image" alt="Product Image">
            <h3>Cake Matcha</h3>
    
            <div class="buttons">
                <button onclick="decreaseQuantity()">-</button>
                <input type="text" id="quantity" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity()">+</button>
            </div>
    
            <div class="price">
                <p>Price: <span id="pricePerUnit">20.000</span> IDR</p>
                
            </div>
        </div>
    </div>
    <div class = submit>
    <!-- Button Navigasi -->
    <button onclick="window.location.href='../'">Home</button>
    <button onclick="window.location.href='./'">Choose Another Category</button>
    <button onclick="window.location.href='../sales'">Go to Sales</button>
    <button onclick="window.location.href='../user/3/name/AHMAD FADLIH WAHYU SARDANA'">Go to User Profile</button>
    </div>
</body>
</html>