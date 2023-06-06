<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styling.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;300;600&display=swap" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <form action="" method="POST">
                <input type="text" name="nama" placeholder="nama" style="color: black" value="<?php echo $_GET['nama']; ?>">
                <input type="text" name="nama" placeholder="tanggal" style="color: black" value="<?php echo $_GET['tanggal']; ?>">
                <input type="submit" name="submit" placeholder="kirim" style="color: black">
            </form>
            <?php
              include 'functions.php';
              connection('127.0.0.1', 'popo', 'password', 'MyDB');
              if ( isset($_POST['submit'])):
                ubah($_POST);
                header('Location: index.php');
              endif;
            ?>
        </div>
    </div>
</body>

</html>