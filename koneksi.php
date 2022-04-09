<?php
    // koneksi ke engine host mysql
    // valuenya adalah host, user, dan password
    $siteinfo = array(
        "_site_url_" => "localhost/",
        "_db_host_" => "localhost",
        "_db_user_" => "root",
        "_db_pass_" => "",
        "_db_name_" => "k5",
    );

$conn = mysqli_connect($siteinfo['_db_host_'], $siteinfo['_db_user_'], $siteinfo['_db_pass_']);
mysqli_select_db($conn, $siteinfo['_db_name_']);

?>