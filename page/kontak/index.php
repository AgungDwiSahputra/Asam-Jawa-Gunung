<?php session_start();

require '../../function.php';

if(isset($_GET['lang'])){
  if($_GET['lang'] == "ID"){
    require '../../lang/lang-id.php';
    $_SESSION['lang'] = "ID";
  }else if($_GET['lang'] == "EN"){
    require '../../lang/lang-en.php';
    $_SESSION['lang'] = "EN";
  }
}else{
  require '../../lang/lang-id.php';
  $_SESSION['lang'] = "ID";
}
?>

<!doctype html>
<html>
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Asam Jawa Cap Gunung adalah asam jawa kemasan yang bahannya 100% asam jawa murni tanpa ada tambahan bahan apapun. Asam Jawa Cap Gunung terjamin kebersihan dan keasliannya. Asam Jawa Cap Gunung dapat digunakan sebagai bahan campuran masakan atau obat-obatan. Asam Jawa Cap Gunung juga dapat digunakan sebagai bahan dasar pembuatan jamu. Asam Jawa Cap Gunung memiliki berbagai macam khasiat yang sangat baik bagi kesehatan tubuh.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Asam Jawa Gunung, Asam Jawa Berkualitas, Asam Jawa Menyehatkan">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../images/fav.png" type="image/png">

    <!-- Load Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,500,600,600i,800,900&display=swap" rel="stylesheet">

    <!-- Load CSS -->
    <link rel="stylesheet" href="../../css/style.css">

    <title><?= $title ?></title>

  </head>

  <body class="creative-bg section-80">

    <!-- Preloader -->
    <div id="preloader">
  	   <div id="status">
         <div class = "centered">
        	<div class = "blob-1"></div>
        	<div class = "blob-2"></div>
        </div>
       </div>
  	</div>

    <header class="nav-style-1">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light theme-btn px-lg-5">
        <a class="navbar-brand" href="../../">
          <img src="../../images/logo/logo.png" alt="Asam Jawa Cap Gunung" class="p-2" width="250">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-auto">
          <?php
            if(isset($_GET['lang'])){
              if($_GET['lang'] == "ID"){
                ?>
                <!-- NAV ID -->
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../../?lang=ID"><?= $menu[0] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../tentang/?lang=ID"><?= $menu[1] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../galeri/?lang=ID"><?= $menu[2] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../produk/?lang=ID"><?= $menu[3] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../artikel/?lang=ID"><?= $menu[4] ?></a>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link scroll" href="?lang=ID"><?= $menu[5] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="Bahasa" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../../images/icon/bahasa.png" alt="" width="40">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="Bahasa">
                    <a class="dropdown-item" href="?lang=ID"><?= $bahasa[0] ?></a>
                    <a class="dropdown-item" href="?lang=EN"><?= $bahasa[1] ?></a>
                  </div>
                </li>
                <?php
              }else if(isset($_GET['lang']) == "EN"){
                ?>
                <!-- NAV EN -->
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../../?lang=EN"><?= $menu[0] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../tentang/?lang=EN"><?= $menu[1] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../galeri/?lang=EN"><?= $menu[2] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../produk/?lang=EN"><?= $menu[3] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../artikel/?lang=EN"><?= $menu[4] ?></a>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link scroll" href="?lang=EN"><?= $menu[5] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="Bahasa" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../../images/icon/bahasa.png" alt="" width="40">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="Bahasa">
                    <a class="dropdown-item" href="?lang=ID"><?= $bahasa[0] ?></a>
                    <a class="dropdown-item" href="?lang=EN"><?= $bahasa[1] ?></a>
                  </div>
                </li>
                <?php
              }
            }else{
              ?>
              <!-- NAV DEFAULT -->
              <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../../"><?= $menu[0] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../tentang/"><?= $menu[1] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../galeri/"><?= $menu[2] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../produk/"><?= $menu[3] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../artikel/"><?= $menu[4] ?></a>
                </li>
                <li class="nav-item dropdown active">
                  <a class="nav-link scroll" href=""><?= $menu[5] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="Bahasa" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../../images/icon/bahasa.png" alt="" width="40">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="Bahasa">
                    <a class="dropdown-item" href="?lang=ID"><?= $bahasa[0] ?></a>
                    <a class="dropdown-item" href="?lang=EN"><?= $bahasa[1] ?></a>
                  </div>
                </li>
              <?php
            }
            ?>

            <li class="nav-item dropdown ml-0 ml-md-2 align-content-center align-items-center align-self-center">
              <div class="text-center ml-0 ml-md-2" data-aos="zoom-in" data-aos-delay="100">
                <a class="btn btn-sm btn-warning px-3 ml-0 ml-md-2 align-self-center" href="https://api.whatsapp.com/send?phone=+6281317779733&text=Hello...%0AApakah%20saya%20bisa%20memesan%20?"><?= $btn_pesan ?></a>
              </div>
            </li>
          </ul>
        </div>

      </nav>
    </header>

    <!-- Main Content -->
    <main>
      <!-- About -->
      <section id="about" class="mt-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 align-self-center" data-aos="fade-right">
              <div class="about-splash" style="left:0;buttom:0;">
                <img class="man-figure-left d-none d-xl-block" src="../../images/icon/bulet1.png" alt="About figure" />
                <img class="man-figure-right d-none d-xl-block" src="../../images/icon/bulet2.png" alt="About figure" />
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.111698197539!2d112.67793911477466!3d-7.228098894782058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ff1d0d01b739%3A0x5d0e4f9863e868e!2sTamarind%20Supplier%20Bisnis%20Asam%20Jawa%20Gunung%20dan%20Ekspor%20Jual%20Beli%20Minuman%20Badak%20Sarsapila%2C%20Kemiri%20dan%20Hasil%20Bumi%20Komoditi%20Pertanian!5e0!3m2!1sid!2sid!4v1644226530430!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            <div class="col-lg-6 px-lg-5 align-self-center" data-aos="fade-left">
              <h5 class="text-primary mb-3"><?= $menu[5] ?></h5>
              <h3 class="mt-1"><?= $head[0] ?></h3>
              <!-- Important Links-->
              <img src="../../images/logo/logo.png" alt="Asam Jawa Cap Gunung" width="200">
                <p class="mt-15"><?= $moto ?></p>
                <table class="mt-15">
                    <tr>
                        <td valign="top" width="180"><?= $telepon ?></td>
                        <td valign="top" width="20" align="center">:</td>
                        <td valign="top"><a href="https://api.whatsapp.com/send?phone=+6281317779733&text=Hello...%0AApakah%20saya%20bisa%20memesan%20?">0813-1777-9733</a></td>
                    </tr>
                    <tr>
                        <td valign="top"><?= $mail ?></td>
                        <td valign="top" width="20" align="center">:</td>
                        <td valign="top"><a href="mailto:tamarindogroup1@gmail.com?subject=Pembelian Asam Jawa Gunung">tamarindogroup1@gmail.com</a></td>
                    </tr>
                    <tr>
                        <td valign="top"><?= $alamat ?></td>
                        <td valign="top" width="20" align="center">:</td>
                        <td valign="top"><a href="https://g.page/Asam_jawa_cap_gunung?share"> Jaya II, Blok C6, Asemrowo, Surabaya Jawa Timur</a></td>
                    </tr>
                </table>
              <a href="https://api.whatsapp.com/send?phone=+6281317779733&text=Hello...%0AApakah%20saya%20bisa%20memesan%20?" class="btn btn-gradient btn-large mt-4"><?= $hubungi ?></a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <footer id="footer" class="px-lg-4 pb-80 pt-120">
      <div class="container-fluid">
        <div class="row">
          <!-- Contact Info -->
          <div class="col-md-4">
            <img src="../../images/logo/logo.png" alt="Asam Jawa Cap Gunung" width="200">
            <p class="mt-15"><?= $moto ?></p>
            <div class="social-icons">
              <a href="https://www.facebook.com/asamjawacapgunung/" class="btn btn-facebook btn-circle"></a>
              <a href="https://www.instagram.com/asamjawagunung/" class="btn btn-instagram btn-circle"></a>
            </div>
          </div>
          <!-- Important Links-->
          <div class="col-md-5">
            <h5><?= $head[0] ?></h5>
            <table class="mt-15">
              <tr>
                <td valign="top" width="180"><?= $telepon ?></td>
                <td valign="top" width="20" align="center">:</td>
                <td valign="top"><a href="https://api.whatsapp.com/send?phone=+6281317779733&text=Hello...%0AApakah%20saya%20bisa%20memesan%20?">0813-1777-9733</a></td>
              </tr>
              <tr>
                <td valign="top"><?= $mail ?></td>
                <td valign="top" width="20" align="center">:</td>
                <td valign="top"><a href="mailto:tamarindogroup1@gmail.com?subject=Pembelian Asam Jawa Gunung">tamarindogroup1@gmail.com</a></td>
              </tr>
              <tr>
                <td valign="top"><?= $alamat ?></td>
                <td valign="top" width="20" align="center">:</td>
                <td valign="top"><a href="https://g.page/Asam_jawa_cap_gunung?share"> Jaya II, Blok C6, Asemrowo, Surabaya Jawa Timur</a></td>
              </tr>
            </table>
          </div>
          <!-- Jam Operational -->
          <div class="col-md-3">
            <h5><?= $head[1] ?></h5>
            <table class="mt-15 w-100">
              <tr>
                <td valign="top"><?= $jadwal[0] ?></td>
                <td valign="top" width="20" align="center">:</td>
                <td valign="top">08:00 – 17:00 WIB</a></td>
              </tr>
              <tr>
                <td valign="top"><?= $jadwal[1] ?></td>
                <td valign="top" width="20" align="center">:</td>
                <td valign="top"><?= $libur ?></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row text-center mt-40">
          <!-- Copyrights & Social Icons -->
          <div class="col">
            <span class="copyright">Copyright &copy;
              <script>
                  document.write(new Date().getFullYear());
              </script>
              De Creative Agency | This website is made by <a href="http://decreativeart.com/">Team De Creative</a>
          </div>
        </div>
      </div>
    </footer>

    <div class="back-to-top">
    	<a class="backToTop" href="#hero"><i class="fas fa-chevron-up"></i></a>
    </div>

    <!-- Load Scripts -->
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/counter.js"></script>
    <script src="../../js/anime.min.js"></script>
    <script src="../../js/aos.js"></script>
    <script src="../../js/magnific-popup.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/infinite-scroll.pkgd.min.js"></script>
    <script src="../../js/isotope.pkgd.min.js"></script>
    <script src="../../js/imagesloaded.pkgd.min.js"></script>
    <script src="../../js/parallax.js"></script>
    <script src="../../js/single-page-nav.js"></script>
    <script src="../../js/custom.js"></script>
    <script src="../../js/jquery.easing.1.3.js"></script>

  </body>
</html>
