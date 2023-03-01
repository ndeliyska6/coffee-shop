<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review page</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <header class="header">

        <a href="#" class="logo">Stardust coffee<i class="fa-solid fa-mug-hot"></i></a>

        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="about.html">about</a>
            <a href="menu.html">menu</a>
            <a href="#reviews">reviews</a>
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

    <section class="review" id="review">
        <h1 class="heading"> reviews <span>what do people think</span></h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="images/pic-1.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ratione vitae neque minima excepturi itaque.</p>
                    <h3>john smith</h3>
                    <span>satisfied client</span>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="images/pic-2.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ratione vitae neque minima excepturi itaque.</p>
                    <h3>elena young</h3>
                    <span>satisfied client</span>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="images/pic-3.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ratione vitae neque minima excepturi itaque.</p>
                    <h3>david jacobs</h3>
                    <span>satisfied client</span>
                </div>
                <div class="swiper-slide box">
                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <img src="images/pic-4.png" alt="">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ratione vitae neque minima excepturi itaque.</p>
                    <h3>erica north</h3>
                    <span>satisfied client</span>
                </div>
            </div>

            <div class="swiper-pagination"></div>

        </div>
    </section>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="scripts/script.js"></script>
</body>