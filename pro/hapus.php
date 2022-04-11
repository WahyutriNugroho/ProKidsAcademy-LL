<?php

require 'config.php';

$id = $_GET["id"];

$q = mysqli_query($conn, "SELECT * FROM moduls JOIN materi_file ON moduls.modul_id = materi_file.modul_id JOIN materi ON materi_file.materi_id = materi.materi_id WHERE moduls.modul_id ='$id'");
$d = mysqli_fetch_assoc($q);
$file = $d["file_name"];
if (hapus($id) > 0 && unlink("assets/file/$file")) {
    echo "
       <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'list-modul.php';
       </script>
       ";
} else {
    echo "
       <script>
        alert('Data gagal dihapus!');
        document.location.href = 'list-modul.php';
       </script>
       ";
}
