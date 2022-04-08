<?php
include 'config.php';

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

        <div class="container">
            <!-- Awal Card Form -->
            <div class="card mt-3">
                <div class="card-header bg-primary text-white">
                    Form Edit Modul
                </div>
                <div>
                    <div class="card-body mt-1">
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Nama File</label>
                                <input type="text" name="modul" value="" class="form-control" placeholder="Input Nama modul disini" require>

                            </div>
                            <div class="form-group user-upload row">
                                <div class="user-pilih col">
                                    <label>Uploader</label>
                                    <input type="text" name="upload1" value="<?php echo $upload1 ?>" class="form-control mr-6" placeholder="user 1" require>
                                    <input type="text" name="upload2" class="form-control mt-3" placeholder="user 2" require>
                                    <input type="text" name="upload3" class="form-control mt-3" placeholder="user 3" require>
                                </div>

                                <div class="ganti-file col">
                                    <div class="container mt-3 file-baru">
                                        <span>File sebelumnya</span>
                                    </div>
                                    <div class="container mt-1">
                                        <div class="relative h-32 rounded-lg border-dashed border border-black-700 bg-gray-100 flex justify-center items-center">
                                            <div class="absolute">
                                                <div class="flex flex-col items-center"><i class="bi bi-cloud-arrow-up-fill"></i> <span class="block text-gray-400 font-normal">Ganti File Disni</span> </div>
                                            </div> <input type="file" class="h-full w-full opacity-0" name="">
                                        </div>
                                        <button class="btn btn-success mt-3 upload ">Edit File</button>
                                    </div>
                                </div>
                            </div>
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