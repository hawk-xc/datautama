<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <title>ubah data</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <fieldset
                style="width: 300px; padding: 2rem; display: flex; justify-content: center; gap: 0.6rem; margin-top: 12rem;">
                <?php
                    $id = $_GET['id'];
                    $nama = $_GET['nama'];
                    $tanggal = $_GET['tanggal'];
                ?>
                <input type="text" value="<?php echo $id; ?>" name="id" class="keyword" placeholder=" data ID" autofocus
                    autocomplete="off">
                <input type="text" value="<?php echo $nama; ?>" name="nama" class="keyword" placeholder=" data nama"
                    autofocus autocomplete="on">
                <input type="text" value="<?php echo $tanggal; ?>" name="tanggal" class="keyword"
                    placeholder=" data tanggal" autofocus autocomplete="on">
                <input type="submit" name="kirim" class="cari" onclick="return confirm('apakah anda yakin?');">
            </fieldset>
        </form>
        <?php
            include 'functions.php';
            if ( isset($_POST['kirim']) > 0 ) {
                if ( ubah($_POST) > 0 ) {
                    echo "
                    <script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php';
                    </script>";
                }
                else {
                    echo "
                    <script>
                    alert('data gagal diubah');
                    document.location.href = 'index.php';
                    </script>";
                }
            }
        ?>
    </div>
</body>

</html>