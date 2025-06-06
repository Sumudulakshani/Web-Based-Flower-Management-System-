<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>At our web-based flower shop, we offer a seamless online experience, ensuring fresh, handpicked flowers, customizable bouquets, same-day delivery.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We provide a seamless online flower shopping experience, offering a wide range of fresh, handpicked flowers for every occasion, including birthdays, anniversaries, weddings, and special events, with beautifully crafted bouquets, customized floral arrangements, and gift hampers, along with same-day delivery, pre-order options, and doorstep delivery services to ensure freshness.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are a dedicated online flower shop, offering a wide range of fresh, beautifully arranged flowers for every occasion. Our mission is to bring joy through floral artistry, ensuring quality, timely delivery, and exceptional customer service. Whether for celebrations or heartfelt moments, we make every bouquet special and memorable.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>"Beautiful flowers and fast delivery! The bouquet was fresh and exactly as pictured. Excellent service, and I will definitely order again. Highly recommend this shop!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nimal Perera</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>"Absolutely stunning arrangements! The flowers arrived on time and stayed fresh for days. Great customer service and hassle-free ordering. Will buy again for special occasions."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Geethma Fernando</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>"Ordered for my anniversary, and the flowers were perfect! My wife loved them. Timely delivery and great quality. Will trust them for all my floral needs."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <h3>Sithija Rajapakshe</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>"Easy to order, fast delivery, and gorgeous flowers! They smelled amazing and looked elegant. Very satisfied with the service. Will definitely recommend to friends!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sumudu Lakshani</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>"The best online flower shop! Amazing selection, reasonable prices, and fresh flowers every time. Delivered exactly as requested. A go-to place for all floral needs!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kamal Sandeepa</h3>
            
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>"Great experience! Ordered last minute, and they delivered on time. Flowers were fresh and beautifully arranged. Wonderful customer service. Will order again soon!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Gayani Fernando</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>