<?php
include 'config.php';



if (isset($_POST["submit"])) {

    //cek apakah data berhasil
    $nama_file = $_FILES['file']['name'];
    $ukuran_file = $_FILES['file']['size'];
    $tipe_file = $_FILES['file']['type'];
    $tmp_file = $_FILES['file']['tmp_name'];

    // set path folder tempat menyimpan file
    $path = "assets/file/".$nama_file;

    if(move_uploaded_file($tmp_file, $path)){
        if (tambah($_POST) > 0) {
            $modul_id = mysqli_insert_id($conn);
            mysqli_query($conn, "INSERT INTO `materi` (`materi_id`, `file_name`, `file_type`) VALUES (NULL, '$nama_file', '$tipe_file')");
            $materi_id = mysqli_insert_id($conn);
            // die(print_r($materi_id));
            mysqli_query($conn, "INSERT INTO `materi_file` (`materi_file_id`, `modul_id`, `materi_id`) VALUES (NULL, '$modul_id', '$materi_id')");
            echo "
           <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'list-modul.php';
           </script>
           ";
        } else {
            echo "
           <script>
            alert('Data gagal ditambahkan!". mysqli_error($conn) ."');
           </script>
           ";
        }
    }else{
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a href='form-update.php'>Kembali Ke Form</a>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader - Currikulm K5</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/toastify/toastify.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html">Curriculum K5</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item active ">
                            <a href="edit-modul.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-fill"></i>
                                <span>List Modul</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">

                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Modul</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- Awal Card Form -->
                <div class="card mt-3">
                    <div class="card-header bg-primary text-white">
                        Form Tambah Modul
                    </div>
                    <div>
                        <div class="card-body mt-1">
                            <form method="post" action="" enctype="multipart/form-data">
                                <ul>
                                    <li>
                                        <div class="form-group" >
                                            <label>Nama File</label>
                                            <input type="text" name="modul" class="form-control" placeholder="Input Nama modul disini" require>

                                        </div>
                                    </li>

                                    <li>
                                        <div class="user-pilih col">
                                            <label>Uploader</label>
                                            <input type="text" name="user" class="form-control mr-6" placeholder="user 1" require>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="ganti-file col">
                                            <div class="container mt-3 file-baru">
                                                
                                            </div>
                                            <div class="container mt-1">
                                                <div class="relative h-32 rounded-lg border-dashed border border-black-700 bg-gray-100 flex justify-center items-center">
                                                    <div class="absolute">
                                                        <div class="flex flex-col items-center"><i class="bi bi-cloud-arrow-up-fill"></i> <span class="block text-gray-400 font-normal">Ganti File Disni</span> </div>
                                                    </div>
                                                    <!-- <input type="file" class="h-full w-full opacity-0" name="file"> -->
                                                    <input class="h-full w-full opacity-0" type="file" name="file">
                                                </div>

                                                <button class="btn btn-primary mt-2 mb-2 upload " name="submit">Tambah File</button>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>



    <!-- filepond -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <script>
        // Filepond: Multiple Files
        // FilePond.create(document.querySelector('.multiple-files-filepond'), {
        //     allowImagePreview: false,
        //     allowMultiple: true,
        //     allowFileEncode: false,
        //     required: false

        // });
    </script>

    <script src="assets/js/main.js"></script>
</body>

</html>