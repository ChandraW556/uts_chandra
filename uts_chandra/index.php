<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>My Website a Personal Portfolio Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Ck Editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <!-- !Ck Editor -->
</head>

<body>

    <section class="w3l-bootstrap-header">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-3 py-2">
            <div class="container">
                <a class="navbar-brand" href="index.html"> Chandra Wijaya </a>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>
    <!--  Main banner section -->
    <section class="w3l-main-banner" id="home">
        <div class="companies20-content">
            <div class="companies-wrapper">
                <div class="item">

                    <div class="slider-info banner-view text-center">
                        <div class="banner-info container">
                            <img src="assets/images/c1.jpg" alt="about image" class="img-fluid">
                            <h3 class="banner-text mt-5">Hello, Nama Saya Chandra Wijaya
                            </h3>
                            <p class="my-4 mb-5">Network Administrator</p><br>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    <section class="services-12" id="experience">


       <!-- grids block 5 -->
  <section class="w3l-footer-29-main" id="footer">
    <div class="footer-29 text-center">
      <div class="container">

        <div class="main-social-footer-29">

          <a href="https://www.facebook.com/AcyClovirs" class="facebook"><span class="fa fa-facebook"></span></a>
          <a href="https://twitter.com/KangAldebaran" class="twitter"><span class="fa fa-twitter"></span></a>
          <a href="https://www.instagram.com/chandra_wijayaaa/?hl=id" class="instagram"><span class="fa fa-instagram"></span></a>
          <a href="https://www.linkedin.com/in/chandra-99a403182/" class="linkedin"><span class="fa fa-linkedin"></span></a>
        </div>
        <div class="bottom-copies text-center">
          <p class="copy-footer-29">© 2020 My Website. All rights reserved | Designed by <a href="https://w3layouts.com">Chandra Wijaya </a></p>

        </div>
      </div>
    </div>
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-angle-up"></span>
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
        </section>
        <!-- // grids block 5 -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <!-- //footer-28 block -->
    </section>

    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- Smooth scrolling -->

</body>

</html>
<!-- // grids block 5 -->