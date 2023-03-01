<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <header class="header">

        <a href="#" class="logo">Stardust coffee<i class="fa-solid fa-mug-hot"></i></a>

        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="about.html">about</a>
            <a href="#menu">menu</a>
            <a href="reviews.html">reviews</a>
           
        </nav>

        <div class="icons">
            <a href="login.html">
                <i class="fas fa-user-large"></i>
            </a>
            <div class="fa-solid fa-cart-shopping" id="basket"></div>

        </div>
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            <div class="cart-content">
                
            </div>

            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">$0</div>
            </div>

            <button type="button" class="btn-buy">Buy Now</button>

            <i class="fa-solid fa-x" id="close-cart"></i>
        </div>
    </header>

    <section class="menu" id="menu">
        <h1 class="heading">our menu <span>popular menu</span></h1>

        <div class="box-container">

            <div class="box">
                <input type="image" src="images/expresso-icon.png" alt="" class="img">
                <div class="content">
                    <h3 class="product-title">Espresso</h3>
                    <span class="price">$1.49</span>
                    <i class="fa-solid fa-cart-plus add-cart"></i>
                </div>
            </div>

            <div class="box">
                <input type="image" src="images/mocha.png" alt="" class="img">
                <div class="content">
                    <h3 class="product-title">Caffè Mocha</h3>
                    <span class="price">$1.49</span>
                    <i class="fa-solid fa-cart-plus add-cart"></i>
                </div>
            </div>

            <div class="box">
                <input type="image" src="images/cappuccino.png" alt="" class="img">
                <div class="content">
                    <h3 class="product-title">Cappuccino</h3>
                    <span class="price">$2.49</span>
                    <i class="fa-solid fa-cart-plus add-cart"></i>
                </div>
            </div>

            <div class="box">
                <input type="image" src="images/frappe.png" alt="" class="img">
                <div class="content">
                    <h3 class="product-title">White Frappe</h3>
                    <span class="price">$2.99</span>
                    <i class="fa-solid fa-cart-plus add-cart"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/cold-brew.png" alt="" class="img">
                <div class="content">
                    <h3 class="product-title">Cold Brew coffee</h3>
                    <span class="price">$2.99</span>
                    <i class="fa-solid fa-cart-plus add-cart"></i>
                </div>
            </div>

            <div class="box">
                <input type="image" src="images/latte-macchiato.png" alt="" class="img">
                <div class="content">
                    <h3 class="product-title">Latte macchiato</h3>
                    <span class="price">$2.49</span>
                    <i class="fa-solid fa-cart-plus add-cart"></i>
                </div>
            </div>
        </div>
    </section>

    <script src="scripts/script.js"></script>

</body>