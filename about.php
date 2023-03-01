<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <header class="header">

        <a href="#" class="logo">Stardust coffee<i class="fa-solid fa-mug-hot"></i></a>

        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="#about">about</a>
            <a href="menu.html">menu</a>
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

    <section class="about" id="about">
        <h1 class="heading">about us <span><b>why choose us</b></span></h1>
        <div class="row">
            <div class="image">
                <img src="images/interior-basics.webp" alt="">
            </div>

            <div class="content">
                <h3 class="title"><span>What makes our coffee special?</span></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est laborum mollitia suscipit praesentium,
                    explicabo perferendis, similique quaerat ipsa labore sapiente aliquam soluta eligendi laboriosam
                    aperiam
                    eaque voluptatum, vitae ipsam! Minus.</p>
                <a href="#" class="btn">read more</a>
                <div class="icons-container">
                    <div class="icons">
                        <img src="images/coffee-beaaaans.png" alt="">
                        <h3>quality coffee</h3>
                    </div>
                    <div class="icons">
                        <img src="images/franchise.png" alt="">
                        <h3>our branches</h3>
                    </div>
                    <div class="icons">
                        <img src="images/free-delivery.png" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="scripts/script.js"></script>
</body>