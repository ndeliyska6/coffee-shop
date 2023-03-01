<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course project</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>


<body>
    <header class="header">

        <a href="#" class="logo">Stardust coffee<i class="fa-solid fa-mug-hot"></i></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="about.html">about</a>
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

    <!--home section-->
    <section class="home" id="home">
        <div class="content">
            <h3>Fresh coffee in the morning</h3>
            <a href="menu.html" class="btn">buy one now</a>

        </div>
    </section>


    <!-- <script src="scripts/script.js"></script> -->
</body>
<script src="scripts/script.js"></script>

</html>