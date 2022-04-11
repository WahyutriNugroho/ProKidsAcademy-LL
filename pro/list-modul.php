<?php

require 'config.php';

$modul = query("SELECT * FROM  moduls");

?>
<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
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
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html">Prokidz Academy</a>
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
                            <a href="ui-file-uploader.html" class='sidebar-link'>
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
                                <li class="breadcrumb-item active" aria-current="page">File Uploader</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="row">

                    <div class="col-12 col-md-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                <h5 class="card-title">Upload Modul</h5>
                            </div> -->
                            <div class="card-content">
                                <div class="card-body">

                                    <!-- File uploader with multiple files upload -->


                                    <!-- <div class="relative h-32 rounded-lg border-dashed border border-black-700 bg-gray-100 flex justify-center items-center">
                                        <div class="absolute">
                                            <div class="flex flex-col items-center"><i class="bi bi-cloud-arrow-up-fill"></i> <span class="block text-gray-400 font-normal">Upload File Disni</span> </div>
                                        </div> <input type="file" class="h-full w-full opacity-0" name="">
                                    </div> -->



                                    <!-- awal list modul -->

                                    <div class="card mt-4">
                                        <div class="card-title text-black mt-1">List Modul </div>
                                        <div class="card-body">

                                            <table class="table table-border table-striped border-5">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Modul</th>
                                                    <th scope="col">Uploader</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>

                                                <?php $i = 1; ?>
                                                <?php foreach ($modul as $m) : ?>
                                                    <tr>

                                                        <td><?= $i ?></td>
                                                        <td><?= $m["modul_name"]; ?></td>
                                                        <td><?= $m["upload_by"]; ?></td>
                                                        <td>
                                                            <a href="edit-modul.php?id=<?= $m["modul_id"]; ?>" class="btn btn-warning">Edit</a>
                                                            <a href="hapus.php?id=<?= $m["modul_id"]; ?>" onclick="return confirm('Yakin!')" class="btn btn-danger">Hapus</a>
                                                            <a href="" class="btn btn-primary">Unduh</a>
                                                        </td>
                                                    </tr>

                                                    <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </table>
                                            <a href="tambah-modul.php" class="btn btn-primary">Tambah Data</a>
                                        </div>
                                    </div>
                                    <!-- akhir list modul -->

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
        <script src="assets/js/main.js"></script>
</body>

</html>