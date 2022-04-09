<?php

include "koneksi.php";

  if(isset($_POST['simpan'])){
    $modul_name = $_POST['modul_name'];
    $uploader = $_POST['uploader'];
    $upload_file = $_FILES['upload_file']['name'];
    

    if ($upload_file != ""){
      // ekstensi yang diperbolehkan
      $ekstensi_izin = array('png','jpg','jepg','mp4', 'mkv','3gp', 'pdf');
      $pisah_ekstensi = explode('.', '$upload_file');
      $file_tmp = $_FILES['upload_file']['tmp_name'];

      if ($ekstensi_izin == true) {
        move_uploaded_file($file_tmp, 'upload/'.$upload_file);
        // query kalo ada file
        mysqli_query($conn,"insert into moduls (modul_name, upload_by, file) values ('$modul_name', '$uploader', '$upload_file')");
        echo "Tersimpan dengan file";
      }
    } else {
      // jika tidak  ada file yang ingindi upload
      mysqli_query($conn,"insert into moduls (modul_name, upload_by) values ('$modul_name', '$uploader')");
      echo "Tersimpan tanpa file";
    }


    
    
  } else {
    echo "error";
  }

?>