<?php 
 
include 'config.php';
$modul_id = $_POST['modul_id'];
$upload_by = $_POST['upload_by'];
$modul_name = $_POST['modul_name'];

// make upload file
$nama_file = $_FILES['file']['name'];
$ukuran_file = $_FILES['file']['size'];
$tipe_file = $_FILES['file']['type'];
$tmp_file = $_FILES['file']['tmp_name'];

// set path folder tempat menyimpan file
$path = "assets/file/".$nama_file;

if(move_uploaded_file($tmp_file, $path)){
    $query = "UPDATE moduls SET modul_name='$modul_name', upload_by='$upload_by' WHERE modul_id='$modul_id'";
    $query2 = query("SELECT * FROM materi_file WHERE modul_id='$modul_id'")[0]['materi_id'];
    $query3 = "UPDATE materi SET file_name='$nama_file', file_type='$tipe_file' WHERE materi_id='$query2'";
    if (mysqli_query($conn, $query) && mysqli_query($conn, $query3)) {
        echo "
        <script>
         alert('Data berhasil diubah!');
         document.location.href = 'list-modul.php';
        </script>
        ";
    } else {
        echo "
        <script>
         alert('Data gagal diubah!". mysqli_error($conn) ."');
        </script>
        ";
    }
}else{
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form-update.php'>Kembali Ke Form</a>";
}

// $sql = "UPDATE moduls SET upload_by='$upload_by', modul_name='$modul_name' WHERE modul_id='$modul_id'";
// mysqli_query($conn, $sql);
 
// header("location:list-modul.php");
?>