<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet'>
    <title>BABY AND KID</title>
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
    <title>BABY AND KID - POS</title>
</head>
<body>
   
    
        <h1>Baby and Kid</h1>
    <div class=menu>
        <div class="product">
            <img src="https://assets.babyzania.com/image/cache/catalog/1/cussons-baby-cream-50-gr-almond-rose-800x800.jpg" class="img" alt="Product Image">
            <h3>Cusson Baby Cream</h3>
    
            <div class="buttons">
                <button onclick="decreaseQuantity()">-</button>
                <input type="text" id="quantity" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity()">+</button>
            </div>
    
            <div class="price">
                <p>Price: <span id="pricePerUnit">13.500</span> IDR</p>
                
            </div>
        </div>
        <div class="product">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/MTA-132435084/cussons_baby_cussons_baby_shampoo_bayi_-_shampo_bayi_-_sampo_bayi_-_50-50ml_-_100-100ml_full04_hpj6sik1.jpg" class="image" alt="Product Image">
            <h3>Cusson Shampo Baby</h3>
    
            <div class="buttons">
                <button onclick="decreaseQuantity()">-</button>
                <input type="text" id="quantity" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity()">+</button>
            </div>
    
            <div class="price">
                <p>Price: <span id="pricePerUnit">8.000</span> IDR</p>
                
            </div>
        </div>
        <div class="product">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/97/MTA-143802195/cussons_cusson_baby_soap_-_sabun_batang_bayi_-_sabun_anak_-_sabun_bayi_-_75gr_full01_usj7gmtz.jpg" class="image" alt="Product Image">
            <h3>Cusson Baby Soap</h3>
    
            <div class="buttons">
                <button onclick="decreaseQuantity()">-</button>
                <input type="text" id="quantity" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity()">+</button>
            </div>
    
            <div class="price">
                <p>Price: <span id="pricePerUnit">5.000</span> IDR</p>
                
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