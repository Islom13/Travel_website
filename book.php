<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<!-- Header section boshi -->

<section class="header">

    <a href="home.php" class="logo">islomXo bilan tour</a>

    <nav class="navbar">
        <a href="home.php">asosiy</a>
        <a href="about.php">biz haqimizda</a>
        <a href="package.php">sayohatlar</a>
        <a href="book.php">bron qilish</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- Header section oxiri -->
<div class="heading" style="background:url(Images/header-bg-3.png) no-repeat">
    <h1>hoziroq bron qiling</h1>
</div>

<!-- booking section boshi -->

<section class="booking">

    <h1 class="heading-title">Sayohatingizni bron qiling!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>Ismingiz: </span>
                <input type="text" placeholder="ismingizni kiriting" name="name">
            </div>
            <div class="inputBox">
                <span>emailingiz: </span>
                <input type="email" placeholder="emailingizni kiriting" name="email">
            </div>
            <div class="inputBox">
                <span>Telefon raqamingiz: </span>
                <input type="number" placeholder="telefon raqamingizni kiriting" name="phone">
            </div>
            <div class="inputBox">
                <span>manzilingiz: </span>
                <input type="text" placeholder="manzilingizni kiriting" name="address">
            </div>
            <div class="inputBox">
                <span>Qayerga: </span>
                <input type="text" placeholder="tashrif buyurmoqchi bo'lgan joyingiz" name="location">
            </div>
            <div class="inputBox">
                <span>necha kishisizlar: </span>
                <input type="number" placeholder="mehmonlar soni" name="guests">
            </div>
            <div class="inputBox">
                <span>Sanani tanlang (dan): </span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>Sanani tanlang (gacha): </span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="Jo'natish" class="btn" name="send">

    </form>

</section>

<!-- booking section oxiri -->








<!-- footer section boshi -->

<section class="footer">

    <div class="box-container">

    <div class="box">
            <h3>menyu</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>asosiy</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>biz haqimizda</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>sayohatlar</i></a>
            <a href="book.php"><i class="fas fa-angle-right"></i>bronlashtirish</a>
        </div>

        <div class="box">
            <h3>qo'shimcha</h3>
            <a href="#"><i class="fas fa-angle-right"></i>savol yo'llang</a>
            <a href="#p"><i class="fas fa-angle-right"></i>ishga marxamat</a>
            <a href="#php"><i class="fas fa-angle-right"></i>maxfiylik siyosati</a>
            <a href="#"><i class="fas fa-angle-right"></i>foydalanish sharlari</a>
        </div>

        <div class="box">
            <h3>Bog'lanish</h3>
            <a href="#"><i class="fas fa-phone"></i> +99899 825-32-30 </a>
            <a href="#"><i class="fas fa-phone"></i> +99899 864-07-39 </a>
            <a href="#"><i class="fas fa-envelope gmail"></i> islaam.1999.ok@gmail.com </a>
            <a href="#"><i class="fas fa-map"></i> Toshkent,O'zbekiston - 100069 </a>
        </div>

        <div class="box">
            <h3>obuna bo'ling</h3>
            <a href="https://www.facebook.com/islom.obidov.16"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://www.instagram.com/obidovislom/"><i class="fab fa-instagram"></i> instagram </a>
            <a href="https://t.me/Islomshomakhmudov"><i class="fab fa-telegram"></i> telegram </a>
            <a href="https://www.youtube.com/channel/UCvB03JRmVyoLkt2p7KFCk1w"><i class="fab fa-youtube"></i> youtube </a>
        </div>

    </div>

    <div class="credit"> sayt <span>©travel with IslomXo company</span> tomonidan yaratilgan | barcha huquqlar himoyalangan</div>

</section>

<!-- footer section oxiri -->
 

<!-- Swiper js link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- Custom js file link -->
<script src="js/script.js"></script>
   
</body>
</html>