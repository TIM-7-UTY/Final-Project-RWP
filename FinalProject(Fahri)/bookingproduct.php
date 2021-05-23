<?php 
require_once 'connect1.php';
$con = mysqli_connect($host, $username, $passwd, $db);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="kamera.jpg">
        <title>7th PHOTOGRAPHY</title>

        <!-- font link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
        <!-- font-family: 'Josefin Sans', sans-serif; -->


        <!-- custom css file link  -->
        <link rel="stylesheet" href="ari-style.css">
    </head>

    <body>
        <!-- header section starts  -->
        <header>
            <div class="header-1">
                <a href="#" class="logo"><img src="logo.png"></a>
                <form action="" class="search-box-container">
                    <input type="search" id="search-box" placeholder="search here...">
                    <label for="search-box" class="fas fa-search"></label>
                </form>
            </div>
            <div class="header-2">
                <div id="menu-bar" class="fas fa-bars"></div>
                <nav class="navbar">
                    <a href="home.html">HOME</a>
                    <a href="bookingproduct.html">PRODUCT</a>
                    <a href="about.html">ABOUT</a>
                </nav>
                <div class="icons">
                    <a href="VmO.html" class="fas fa-shopping-cart"></a>
                    <a href="book.php" class="fas fa-heart"></a>
                    <a href="login.html" class="fas fa-user-circle"></a>
                </div>
            </div>
        </header>
        <!-- header section ends -->

        <!-- Your Code Starts Here -->
        <section class="product" id="product">

            <h1 class="heading">List <span>Produk</span></h1>
        
            <div class="box-container">
                    <!-- Start looping -->
                    <?php
                    $sql = "SELECT * FROM produk";
                    $kueri = mysqli_query($con, $sql);
                    while($query = mysqli_fetch_array($kueri)){
                    ?>
                    <form action="book.php" method="POST">
                        <div class="box">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="fas fa-share"></a>
                                <a href="#" class="fas fa-eye"></a>
                            </div>
                            <img src="<?php echo $query['gambar_produk']; ?>" alt="">
                            <h3><?php echo $query['nama_produk']; ?></h3>
                            <div class="stars">
                                <?php
                                for($i=0;$i<$query['rating_produk'];$i++){
                                ?>
                                    <i class="fas fa-star"></i>
                                <?php
                                }
                                ?>  
                            </div>
                            <div class="price">Rp. <?php echo $query['harga_produk']; ?></div>
                            <div class="quantity">
                                <span>quantity : </span>
                                <input type="number" min="1" max="1000" name="quantity">
                                <span> /hour </span>
                            </div>
                            <center><button class="btn" name="sewa" value="<?php echo $query['no_produk']; ?>" type="submit">Sewa Product</button></center>
                        </div>
                    </form>
                    <?php
                    }
                    ?>                    <!-- End looping -->       
            </div>
        
        </section>
        <!-- Your Code Ends Here -->



        <!-- footer section starts  -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <a href="#" class="logo"><img src="logo2.png"></a><br><br>
                    <p><b>UNTUK INFO KAMERA DAN GEAR LAINNYA SILAHKAN HUBUNGI 087803863707 TERIMAKASIH</b></p><br>
                    <div class="share">
                        <a href="#" class="btn fab fa-facebook-f"></a>
                        <a href="#" class="btn fab fa-twitter"></a>
                        <a href="#" class="btn fab fa-instagram"></a>
                        <a href="#" class="btn fab fa-linkedin"></a>
                    </div>
                </div>               
                <div class="box">
                    <h3>Lokasi Anda</h3>
                    <div class="links">                       
                        <a href="#">Yogyakarta</a>
                        <a href="#">Kalimantan</a>
                        <a href="#">Surabaya</a>                    
                        <a href="#">Madura</a>
                        <a href="#">Jakarta</a>
                    </div>
                </div>
                <div class="box">
                    <h3>Kategori</h3>
                    <div class="links">
                        <a href="#">Hot Sale</a>
                        <a href="#">Promo</a>
                        <a href="#">Best Seller</a>
                        <a href="#">Star</a>
                        <a href="#">Premium</a>
                    </div>
                </div>
                <div class="box">
                    <h3>download app</h3>
                    <div class="links">
                        <a href="#">google play</a>
                        <a href="#">window xp</a>
                        <a href="#">app store</a>
                    </div>
                </div>
            </div>
            <h1 class="credit"> created by <b> Kelompok Tujuh </b></h1>
        </section>
        <!-- footer section ends -->

        <!-- custom js file link  -->
        <script src="ari-script.js"></script>

    </body>
</html>