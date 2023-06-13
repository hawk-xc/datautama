<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>database customer</title>
</head>

<body>
    <div class="container">
        <?php
            // query variable
            include 'functions.php';
            $query = query("SELECT * FROM data ORDER BY id ASC");
        ?>
        <div class="boc-tool">
            <!-- tambah data -->
            <a href="tambah.php">
                <i data-feather="plus-square" class="tambah"></i>
            </a>
            <div class="search-box">
                <form action="" method="POST">
                    <input type="text" name="keyword" placeholder="cari dihalaman..." class="keyword">
                    <input type="submit" name="cari" class="cari">
                </form>
                <?php
                    if ( isset($_POST['cari']) ):
                        $query = cari($_POST['keyword']);
                    endif;
                ?>
            </div>
        </div>
        <table border="1" cellspacing="0" cellpadding="4" class="tabel">
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>tanggal</th>
                <th>aksi</th>
            </tr>
            <?php
            foreach ( $query as $query_return ):
                echo "<tr>";
            ?>
            <td><?php echo $query_return['id']; ?></td>
            <td><?php echo $query_return['nama']; ?></td>
            <td><?php echo $query_return['tanggal']; ?></td>
            <td>
                <a
                    href="
                        ubah.php?id=<?php echo $query_return['id']; ?>&nama=<?php echo $query_return['nama']; ?>&tanggal=<?php echo $query_return['tanggal']; ?>">ubah</a>
                | <a href="hapus.php?id=<?php echo $query_return['id']; ?>"
                    onclick="return confirm('apakah anda yakin?');">hapus</a>
            </td>
            <?php
                echo "</tr>";
            endforeach;
            ?>
        </table>
    </div>
    <script>
        feather.replace()
    </script>
</body>

</html>