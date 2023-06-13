<?php
    // koneksi database
    $connect = mysqli_connect('localhost', 'popo', 'password', 'MyDB');

    // query function
    function query($query) {
        global $connect;
        $result = mysqli_query($connect, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    // tambah function
    function tambah($data) {
        global $connect;
        $query = "INSERT INTO data (nama) values ('$data')";
        mysqli_query($connect, $query);
        return mysqli_affected_rows($connect);
    }

    // ubah function
    function ubah($data) {
        global $connect;
        // get name
        $id = $data['id'];
        $nama = $data['nama'];
        $tanggal = $data['tanggal'];

        $query = "UPDATE data SET nama='$nama', tanggal='$tanggal' WHERE id=$id";
        mysqli_query($connect, $query);
        return mysqli_affected_rows($connect);
    }

    // hapus function
    function hapus($data) {
        global $connect;
        mysqli_query($connect, "DELETE FROM data WHERE id=$data");
        return mysqli_affected_rows($connect);
    }

    function cari($keyword) {
        $query = "SELECT * FROM data WHERE nama LIKE '%$keyword%'";
        return query($query);
    }
?>