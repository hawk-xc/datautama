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
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
    <div class="box">
            <a href="tambah.php"><i data-feather="plus-circle" class="icon"></i></a>
            <table cellspacing="0" border="1" style="width: 500px;">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require 'functions.php';
                        connection('127.0.0.1', 'popo', 'password', 'MyDB');
                        $query = mysqli_query($connect, "SELECT * FROM data ORDER BY id ASC");
                        while ( $data = mysqli_fetch_assoc($query) ):
                            $id = $data['id'];
                            $nama = $data['nama'];  
                            $tanggal = $data['tanggal'];
                            echo "<tr>";
                            echo "<td style='padding: 0.4rem;'>", $id, "</td>";
                            echo "<td>", $nama, "</td>";
                            echo "<td>", $tanggal, "</td>";
                            echo "<td class='separate'>";
                            echo "<a href='hapus.php?id=$id'><i data-feather='trash-2' class='icon'></i></a>"; 
                            echo "<a href='ubah.php?id=$id&nama=$nama&tanggal=$tanggal'><i data-feather='edit' class='icon'></i></a>";
                            echo "</td>";
                            echo "</tr>";
                        endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
      feather.replace()
    </script>
</body>
</html>