<?php
include 'connect1.php';
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
        <link rel="stylesheet" href="cart.css">
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
                    <a href="bookingproduct.php">PRODUCT</a>
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

    <div class="container">

        <h1>Booking List</h1>
    
        <div class="cart">
    
            <div class="products">
                <?php
                if(isset($_POST['sewa'])){
                    $id = $_POST['sewa'];
                    $qty = $_POST['quantity'];

                    $sql = "SELECT * FROM produk WHERE no_produk='".$id."'";
                    $kueri = mysqli_query($con, $sql);
                    $query = mysqli_fetch_assoc($kueri);

                    $harga = $qty * $query['harga_produk'];
                ?>
                <div class="product">
    
                    <img src="<?php echo $query['gambar_produk']; ?>">
    
                    <div class="product-info">
    
                        <h1 class="product-name"><?php echo $query['nama_produk']; ?></h1>
    
                        <h2 class="product-price">Rp. <?php echo $query['harga_produk']; ?></h2>
    
                        <span>Sewa : </span>
                        <input type="number" min="1" max="30" value="<?php echo $qty; ?>" disabled>
                        <span> /hour </span>
    

    
                    </div>
    
                </div>
    
            </div>
    
            <div class="cart-total">
    
                <p>
    
                    <span>Total Belanja</span>
    
                    <span>Rp. <?php echo $harga; ?></span>
    
                </p>
    
                <a href="#">SEWA</a>
    
            </div>
            <?php
            }else if(empty($_POST['sewa'])){
            ?>
                Tidak ada data yang dipilih.
            <?php
            }
            ?>
        </div>
     <br>
     <br>
     <br>
     <br>
    </div>
    <br>

 
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