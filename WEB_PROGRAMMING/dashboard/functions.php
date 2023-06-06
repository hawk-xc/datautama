<?php
    function connection($local, $user, $pass, $database) {
        global $connect;
        $connect = mysqli_connect($local, $user, $pass, $database);
        if ( mysqli_connect_errno() ) {
            echo mysqli_connect_error($connect);
        }
    }

    function tambah($data) {
        global $connect;
        $nama = htmlspecialchars($data['nama']);
        mysqli_query($connect, "INSERT INTO data (nama) VALUES ('$nama')");
        if ( mysqli_affected_rows($connect) > 0 ):
            echo "<script>alert('data berhasil ditambahkan!');</script>";
            header('Location: index.php');
        endif;
    }

    function ubah($data) {
        global $connect;
        $id = $data['id'];
        $nama = htmlspecialchars($data['nama']);
        $tanggal = htmlspecialchars($data['tanggal']);
        mysqli_query($connect, "UPDATE data SET nama='$nama', tanggal='$tanggal' WHERE id=$id)");
        if ( mysqli_affected_rows($connect) > 0 ):
            echo "<script>alert('data berhasil diupdate!');</script>";
            header('Location: index.php');
        endif;
    }

    function hapus($data) {
        global $connect;
        $id = $data['id'];
        mysqli_query($connect, "DELETE FROM data WHERE id=$id");
        if ( mysqli_affected_rows($connect) > 0 ):
            echo "<script>alert('data berhasil dihapus!');</script>";
            header('Location: index.php');
        endif;
    }
?>