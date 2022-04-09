<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        .box {
            font-size: 1.25rem;
            /* 20 */
            background-color: #c8dadf;
            position: relative;
            padding: 100px 20px;
        }

        .profile {
            float: right;
        }

        .header {
            font-size: xx-large;
        }

        .wrapper {
            display: flex;
            width: 100%;
        }

        #sidebar {
            /* min-width: 250px; */
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 999;
            background: #7386D5;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar a {
            text-decoration: none;
            color: #fff;
            font-size: large;
        }

        #sidebar .menu {
            margin-top: 60px;
            padding-bottom: 20px;
        }

        #content {
            padding-top: 10px;
        }

        #content nav {
            margin-bottom: 40px;
        }

        @media screen and (max-width:582px) {
            #sidebar {
                display: none !important;
                background-color: white;
            }

            #content {
                width: 100% !important;
                padding-left: 20px;
            }
        }
    </style>
</head>
<body>
<div class="row">
        <div class="col-sm-5 col-md-3" id="sidebar">

            <div class="sidebar-header">
                <h3>Curiculum K5</h3>
            </div>

            <ul class="list-unstyled components text-center">
                <li class=" menu">
                    <a href="#">Tambah materi </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
            </ul>

        </div>
        <div class="col-sm-7 col-md-9" id="content">
            <nav>
                <b class="header">Upload Modul</b>
                <div class="profile">
                    <i class="fa fa-user"></i>
                    <button disabled="disabled"> Admin</button>
                </div>
            </nav>
            <div class="uploader">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Modul</label>
                        <input type="text" class="form-control" name="modul_name">

                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="">Uploader</label>
                            <select class="form-control" name="uploader">
                                <option value='user1' >user1</option>
                                <option value='user2' >user2</option>
                                <option value='user3' >user3</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6 col-xs-12">

                            <label for="">Upload</label>
                            <div class="container box" role="main">

                        
                                <div class="box__input">
                                    <input type="file" name="upload_file" class="box__file"
                                        data-multiple-caption="{count} files selected" multiple />
                                </div>


                            </div>

                        </div>
                    </div>
                    <div class="text-center ">
                        <button type="submit" name="simpan" class="btn btn-primary">Tambah Modul</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>