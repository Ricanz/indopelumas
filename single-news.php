<?php
require('connect.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
}
else{
	header('location:blog.php');
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Indopelumas</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <link rel="manifest" href="site.webmanifest"> -->
   <link rel="shortcut icon" type="image/x-icon" href="img/favikon.png">
   <!-- Place favicon.ico in the root directory -->

   <!-- CSS here -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/themify-icons.css">
   <link rel="stylesheet" href="css/nice-select.css">
   <link rel="stylesheet" href="css/flaticon.css">
   <link rel="stylesheet" href="css/gijgo.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/slicknav.css">
   <link rel="stylesheet" href="css/new.css">
   <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

        <!-- header-start -->
        <header>
            <div class="header-area ">
                <div class="header-top_area d-none d-lg-block" style="background: #bfbfbf;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-4">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img\log.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8">
                                <div class="header_right d-flex align-items-center">
                                    <div class="short_contact_list">
                                        <ul>
                                            <li><a href="#" style="color: black;"> <i class="fa fa-envelope"></i> indopelumas@gmail.com</a></li>
                                            <li>
                                        <a href="#" style="color: black;"> <i class="fa fa-envelope"></i> sales@indopelumas.com</a>
                                        </li>
                                            <li><a href="#" style="color: black;"> <i class="fa fa-phone"></i>+62 812 8888 9662</a></li>
                                        </ul>
                                    </div>

                                    <div class="book_btn d-none d-lg-block">
                                        <a class="boxed-btn3-line" href="https://api.whatsapp.com/send?phone=628128222291">Contact Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky-header" class="main-header-area" >
                    <div class="container" >
                        <div class="header_bottom_border" >
                            <div class="row align-items-center" >
                                <div class="col-12 d-block d-lg-none" style="background: #bfbfbf;">
                                    <div class="logo" >
                                        <a href="index.php">
                                            <img src="img/log.png" alt="" width="300px" height="60px">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a  href="index.php">Home</a></li>
                                                <li><a  href="about.php">About Us</a></li>
                                                <li><a href="product.php">Product<i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="product_details.php?id=1">Nebula Oil</a></li>
                                                        <li><a href="product_details.php?id=2">Pertamina Oil</a></li>
                                                        <li><a href="product_details.php?id=3">Shell Oil</a></li>
                                                        <li><a href="product_details.php?id=4">Mobil Oil</a></li>
                                                        <li><a href="product_details.php?id=5">Eni Oil</a></li>
                                                        <li><a href="product_details.php?id=6">Total Oil</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <li><a href="news.php">News</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
              <?php
              include "connect.php";
          			$query = mysqli_query($connect,"select * from news where id_news = '$id'");
          			while ($d=mysqli_fetch_array($query)) {
               ?>
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php $d['judul'] ?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                     </ul>
                     <?php echo $d['news']; ?>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <!--<aside class="single_sidebar_widget search_widget">-->
                  <!--   <form action="#">-->
                  <!--      <div class="form-group">-->
                  <!--         <div class="input-group mb-3">-->
                  <!--            <input type="text" class="form-control" placeholder='Search Keyword'-->
                  <!--               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">-->
                  <!--            <div class="input-group-append">-->
                  <!--               <button class="btn" type="button"><i class="ti-search"></i></button>-->
                  <!--            </div>-->
                  <!--         </div>-->
                  <!--      </div>-->
                  <!--      <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"-->
                  <!--         type="submit">Search</button>-->
                  <!--   </form>-->
                  <!--</aside>-->
                  <aside class="single_sidebar_widget post_category_widget">
                      <h4 class="widget_title">Category</h4>
                      <ul class="list cat-list">
                          <li>
                              <a href="#" class="d-flex">
                                  <p><?php echo $d['kategori']; ?></p>
                              </a>
                          </li>
                      </ul>
                  </aside>
                  <?php
                     }
                  ?>
                  <aside class="single_sidebar_widget instagram_feeds">
                      <h4 class="widget_title">Product</h4>
                      <ul class="instagram_row flex-wrap">
                        <?php
                        include 'connect.php';
                        $no = 1;
                        $prod = mysqli_query($connect, "SELECT * FROM product");
                        while ($p = mysqli_fetch_array($prod)) {
                          ?>
                          <li>
                              <?php echo "<a href=product_details.php?id=".$p['id_prod']." >";?>
                                  <img class="img-fluid" src="<?php echo $p['foto'] ?>" alt="" >
                              </a>
                          </li>
                        <?php
                        }
                         ?>
                      </ul>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

   <!-- contact_location  -->
   <div class="contact_location" style="background: #bfbfbf;">
       <div class="container">
           <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6">
                   <div class="location_left">
                       <div class="logo">
                           <a href="index.html">
                               <img src="img/log.png" alt="" width="300px" height="80px">
                           </a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-3 col-md-3">
                   <div class="single_location">
                       <h3> <img src="img/icon/address.svg" alt=""> Location</h3>
                       <p style="color: black;">Ruko Fantasi Taman Palem (Ruko Seribu)
                         Blok Z2 No 30
                         Kel. Cengkareng barat
                         Kec. Cengkareng
                         Jakarta Barat 11730
                       </p>
                   </div>
               </div>
               <div class="col-xl-3 col-md-3">
                   <div class="single_location">
                       <h3> <img src="img/icon/support.svg" alt="">Contact</h3>
                       <p style="color: black;">+62 812 8888 9662 <br>
                         indopelumas@gmail.com
                       sales@indopelumas.com</p>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!--/ contact_location  -->


   <!-- footer start -->
   <footer class="footer">
       <div class="copy-right_text">
           <div class="container">
               <div class="footer_border"></div>
               <div class="row">
                   <div class="col-xl-12">
                       <p class="copy_right text-center">
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!--/ footer end  -->
  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="serch_form">
           <input type="text" placeholder="search" >
           <button type="submit">search</button>
       </div>
     </div>
   </div>
 </div>
   <!-- JS here -->
   <script src="js/vendor/modernizr-3.5.0.min.js"></script>
   <script src="js/vendor/jquery-1.12.4.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/isotope.pkgd.min.js"></script>
   <script src="js/ajax-form.js"></script>
   <script src="js/waypoints.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/imagesloaded.pkgd.min.js"></script>
   <script src="js/scrollIt.js"></script>
   <script src="js/jquery.scrollUp.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/nice-select.min.js"></script>
   <script src="js/jquery.slicknav.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/gijgo.min.js"></script>

   <!--contact js-->
   <script src="js/contact.js"></script>
   <script src="js/jquery.ajaxchimp.min.js"></script>
   <script src="js/jquery.form.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <script src="js/mail-script.js"></script>

   <script src="js/main.js"></script>



</body>

</html>
