<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Dashboard </title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="./assets/css/style-starter.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>

<body>

    <section class="w3l-bootstrap-header">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-3 py-2">
            <div class="container">
                <a class="navbar-brand" href="index.html"> Chandra Wijaya</a>
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

    <section class="w3l-contact-breadcrum">
        <div class="breadcrum-bg">
            <div class="container py-5">
                <p><a href="./index.html">Home</a> &nbsp; / &nbsp; Dashboard</p>
            </div>
        </div>
        <?php
        include_once "koneksi.php";
        include_once "header.php";
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Isi Database About</h1>
                </div>
            </div>
            <div class="row mb-3 mt-3">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="listtable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode halaman</th>
                                <th> Gambar Halaman</th>
                                <th>Judul halaman</th>
                                <th>Isi halaman</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //buat sql
                            $query = "SELECT * FROM about";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) < 0) {
                                echo "<tr><td colspan='4'>Data profil tidak terdapat pada database</td></tr>";
                            } else {
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row["id"] ?></td>
                                        <td><?php echo $row["gambar"] ?></td>
                                        <td><?php echo $row["judul"] ?></td>
                                        <td><?php echo $row["isi"] ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#listtable').DataTable();
            });
        </script>

</body>

</html>
<!-- // grids block 5 -->