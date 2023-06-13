<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <title>tambah data</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <fieldset
                style="width: 300px; padding: 2rem; display: flex; justify-content: center; gap: 0.6rem; margin-top: 12rem;">
                <input type="text" name="nama" class="keyword" placeholder=" masukkan nama" autofocus autocomplete="on">
                <input type="submit" name="kirim" class="cari">
            </fieldset>
        </form>
        <?php
            include 'functions.php';
            if ( isset($_POST['kirim']) > 0 ) {
                $nama = $_POST['nama'];
                if ( tambah($nama) > 0 ) {
                    echo "
                    <script>
                    alert('data berhasil ditambah');
                    document.location.href = 'index.php';
                    </script>";
                }
                else {
                    echo "
                    <script>
                    alert('data gagal ditambah');
                    document.location.href = 'index.php';
                    </script>";
                }
            }
        ?>
    </div>
</body>

</html>