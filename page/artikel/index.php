<?php session_start();

require '../../function.php';

if(isset($_GET['lang'])){
  if($_GET['lang'] == "ID"){
    require '../../lang/lang-id.php';
    $_SESSION['lang'] = "ID";
  }else if(isset($_GET['lang']) == "EN"){
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
                <li class="nav-item dropdown active">
                  <a class="nav-link scroll" href="?lang=ID"><?= $menu[4] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../kontak/?lang=ID"><?= $menu[5] ?></a>
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
                <li class="nav-item dropdown active">
                  <a class="nav-link scroll" href="?lang=EN"><?= $menu[4] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../kontak/?lang=EN"><?= $menu[5] ?></a>
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
                <li class="nav-item dropdown active">
                  <a class="nav-link scroll" href=""><?= $menu[4] ?></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link scroll" href="../kontak/"><?= $menu[5] ?></a>
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
                <a class="btn btn-warning px-3 ml-0 ml-md-2 align-self-center" href="https://api.whatsapp.com/send?phone=+6281317779733&text=Hello...%0AApakah%20saya%20bisa%20memesan%20?"><?= $btn_pesan ?></a>
              </div>
            </li>
          </ul>
        </div>

      </nav>
    </header>

    <!-- Main Content -->
    <main>
      <!-- Blog -->
      <section id="blog" class="text-center mt-4">
        <div class="container">
          <div class="row mb-3">
            <div class="col">
              <h5 class="text-primary mb-3"><?= $judul_artikel ?></h5>
              <h3 class="mt-1"><?= $subJ_artikel ?></h3>
            </div>
          </div>
          <div class="row">
            <div class="col" data-aos="fade-up">
              <!-- Blog Filter -->
              <div class="blog-filter">
                <a href="javascript:void(0)" title="All" data-filter="*" class="btn btn-primary btn-medium filter transition"><?= $nav_artikel[1] ?></a>
                <a href="javascript:void(0)" class="btn btn-medium filter transition" title="Artikel" data-filter=".artikel"><?= $nav_artikel[2] ?></a>
                <a href="javascript:void(0)" class="btn btn-medium filter transition" title="Artikel Video" data-filter=".artikelVideo"><?= $nav_artikel[3] ?></a>
                <a href="javascript:void(0)" class="btn btn-medium filter transition" title="Berita" data-filter=".berita"><?= $nav_artikel[4] ?></a>
                <a href="javascript:void(0)" class="btn btn-medium filter transition" title="Hasil Bumi" data-filter=".hasilBumi"><?= $nav_artikel[5] ?></a>
                <a href="javascript:void(0)" class="btn btn-medium filter transition" title="Makanan Asam Jawa" data-filter=".MakAJ"><?= $nav_artikel[6] ?></a>
                <a href="javascript:void(0)" class="btn btn-medium filter transition" title="Minuman Asam Jawa" data-filter=".MinAJ"><?= $nav_artikel[7] ?></a>
                <a href="javascript:void(0)" class="btn btn-medium filter transition" title="Perawatan" data-filter=".perawatan"><?= $nav_artikel[8] ?></a>
                <a href="javascript:void(0)" class="btn btn-medium filter transition" title="Seputar Asam Jawa" data-filter=".SAJ"><?= $nav_artikel[9] ?></a>
                <a href="javascript:void(0)" class="btn btn-medium filter transition" title="Lainnya" data-filter=".lainnya"><?= $nav_artikel[10] ?></a>
              </div>
              <!-- Blog Grid -->
              <div class="blog-grid--3cols">
                <!-- Artikel 3 -->
                <?php
                $JumIsi = (count($isi)/4)-1;
                for($no = 0;$no <= $JumIsi;$no++){
                ?>
                <div class="post <?= $isi['filter'.$no] ?>">
                  <div class="post-image mb-1">
                    <a href="<?= $no+1 ?>/">
                      <img class="img-fluid" style="object-fit: cover;height:50vh;" src="../../<?= $isi['gambar'.$no] ?>" alt="post image">
                    </a>
                  </div>
                  <div class="post-title">
                    <a href="<?= $no+1 ?>/">
                      <h5 class="text-left mb-1"><?= $isi['judul'.$no] ?></h5>
                    </a>
                  </div>
                  <div class="post-content">
                    <div class="post-text">
                      <p class="text-justify"><?= $isi['desk'.$no] ?> […]</p>
                    </div>
                    <div class="post-read-more">
                      <a class="btn btn-gradient btn-medium" href="<?= $no+1 ?>/"><?= $baca_selengkapnya ?></a>
                    </div>
                  </div>
                </div>
                <?php
                }
                ?>

              </div>
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
