<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Eccentric portfolio V2 - Personal Category Bootstrap Responsive Website Template | Contact : W3layouts</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <?php
    include_once "koneksi.php";
    $status = 2;
    if (isset($_POST['id'])) {

        $id = $_POST['id'];
        $gambar = $_POST['gambar'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        //buat koneksi
        $strSQL = "UPDATE about SET 
         gambar='" . $gambar . "', 
         judul='" . $judul . "',
         isi='" . $isi . "' WHERE id='" . $id . "'";
        // echo $strSQL;
        // die;
        $runSQL = mysqli_query($conn, $strSQL);
        if ($runSQL) {
            $status = 1; //sukses
        } else {
            $status = 0; //tidak sukses;
        }
        header("refresh:3; url=about.php");
    } else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $strSQL = "SELECT * FROM about WHERE id='" . $id . "'";
        $runStrSQL = mysqli_query($conn, $strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $gambar = $row["gambar"];
                $judul = $row["judul"];
                $isi = $row["isi"];
            }
        }
    } else {
        $gambar = "";
        $judul = "";
        $isi = "";
        $id = "";
    }
    ?>
    <div class="container">
        <h2>Edit About</h2>

        <?php
        include "modalabout.php";
        if ($status == 1) {
        ?>
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data berhasil diinput ke dalam database.
            </div>
        <?php
        } else if ($status == 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data tidak berhasil diinput ke dalam database.
            </div>
        <?php
        }

        ?>
        <form id="myform" method="POST" action="edit_about.php">
            <div class="form-group">
                <label>ID</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $id ?>">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input id="gambar" class="form-control" type="text" name="gambar" value="<?php echo $gambar ?>">
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input id="judul" class="form-control" type="text" name="judul" value="<?php echo $judul ?>">
            </div>
            <div class="form-group">
                <label>Isi</label>
                <input id="isi" class="form-control" type="text" name="isi" value="<?php echo $isi ?>">
            </div>
            <input class="btn btn-success" type="submit" id="tombol" value="Simpan">
            <a href="about.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>
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
        $(document).ready(function() {
            $('#proses').click(function() {
                $('#myform').submit();
            });
            $('#tombol').click(function() {
                //ambil data dari form
                const id = $('#id').val();
                const gambar = $('#gambar').val();
                const judul = $('#judul').val();
                const isi = $('#isi').val();

                $('#id').text(id);
                $('#gbr').text(gambar);
                $('#jdl').text(judul);
                $('#isi').text(isi);

                //buka modal
                $('#pesan').modal({
                    show: true
                });
            });
        });
        // When the user clicks on the button, scroll to the top of the document
    </script>
    <!-- /move top -->
</body>
</body>

</html>