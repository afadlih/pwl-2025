
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>BEAUTY AND HEALTH</title>
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
    <title>Beauty and Health - POS</title>
</head>
<body>
   
    
        <h1>Beauty and Health</h1>
    <div class=menu>
        <div class="product">
            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/2/19/ed1eb4f7-2f5f-4329-b224-7e75c5f533ee.jpg" class="img" alt="Product Image">
            <h3>cCushion Carasun Solar</h3>
    
            <div class="buttons">
                <button onclick="decreaseQuantity()">-</button>
                <input type="text" id="quantity" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity()">+</button>
            </div>
    
            <div class="price">
                <p>Price: <span id="pricePerUnit">187.000</span> IDR</p>
                
            </div>
        </div>
        <div class="product">
            <img src="https://api.watsons.co.id/medias/prd-front-19823.jpg?context=bWFzdGVyfGltYWdlc3wzNjgwOHxpbWFnZS9qcGVnfGFEUmtMMmczTXk4eE1Ua3pNelF3TnpFNE1qZzNPQzlYVkVOSlJDMHhPVGd5TXkxbWNtOXVkQzVxY0djfDdjOGJiOGNiMDgyMDhjY2E3ODNmNzFhNzVkNjI5ZjM4YWNmYzZlMzAyMDI4YzFhZDgwNjg3MjI4ZTMzMzA5Nzg" class="image" alt="Product Image">
            <h3>Sun Screen Carasun 45SPF</h3>
    
            <div class="buttons">
                <button onclick="decreaseQuantity()">-</button>
                <input type="text" id="quantity" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity()">+</button>
            </div>
    
            <div class="price">
                <p>Price: <span id="pricePerUnit">47.600</span> IDR</p>
                
            </div>
        </div>
        <div class="product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqT3FpHMfB8JBIQCj9SNbksSOGpjnz5konNA&s" class="image" alt="Product Image">
            <h3>Sun Screen Carasun 50SPF</h3>
    
            <div class="buttons">
                <button onclick="decreaseQuantity()">-</button>
                <input type="text" id="quantity" value="1" readonly style="width: 30px; text-align: center; font-size: 16px;">
                <button onclick="increaseQuantity()">+</button>
            </div>
    
            <div class="price">
                <p>Price: <span id="pricePerUnit">179.000</span> IDR</p>
                
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