
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
                                <li class="breadcrumb-item active" aria-current="page">Update Modul</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <?php 
            include "config.php";
            $id = $_GET['id'];
            $query_mysql = mysqli_query($conn, "SELECT * FROM moduls JOIN materi_file ON moduls.modul_id = materi_file.modul_id JOIN materi ON materi_file.materi_id = materi.materi_id WHERE moduls.modul_id ='$id'");
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            

            <div class="container">
                <!-- Awal Card Form -->
                <div class="card mt-3">
                    <div class="card-header bg-primary text-white">
                        Form Update Modul
                    </div>
                    <div>
                        <div class="card-body mt-1">
                            <form action="update.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="modul_id" value="<?php echo $data['modul_id']; ?>">
                                <ul>
                                    <li>
                                        <div class="form-group">
                                            <label>Nama File</label>
                                            
                                            <input type="text" name="modul_name" class="form-control" value="<?php echo $data['modul_name']; ?>">

                                        </div>
                                    </li>

                                    <li>
                                        <div class="user-pilih col">
                                            <label>Uploader</label>
                                            <input type="text" name="upload_by" class="form-control mr-6" value="<?php echo $data['upload_by'];?>">
                                        </div>
                                    </li>

                                    <li>
                                        <div class="ganti-file col ">
                                            <div class="container mt-3 file-baru">
                                                <span><a href="./assets/file/<?= $data['file_name'] ?>"><?= $data['file_name'] ?></a></span>
                                            </div>
                                            <div class="container mt-1 light">
                                                <div class="relative h-32 rounded-lg border-dashed border border-black-700 bg-gray-100 flex justify-center items-center">
                                                    <div class="absolute">
                                                        <div class="flex flex-col items-center"><i class="bi bi-cloud-arrow-up-fill"></i> <span class="block text-gray-400 font-normal">Ganti File Disni</span> </div>
                                                    </div>
                                                    <!-- <input type="file" class="h-full w-full opacity-0" name="file"> -->
                                                    <input class="h-full w-full opacity-0" type="file" name="file">
                                                </div>

                                                <button class="btn btn-success mt-3 upload" type="">Update Modul</button>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </form>
                            <?php } ?>
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