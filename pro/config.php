<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "prokidz"
);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $modul = htmlspecialchars($data["modul"]);
    $user = htmlspecialchars($data["user"]);

    $query = "INSERT INTO `moduls` (`modul_id`, `modul_name`, `upload_by`) VALUES (NULL, '$modul', '$user')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE materi_file, moduls, materi FROM moduls JOIN materi_file ON moduls.modul_id = materi_file.modul_id JOIN materi ON materi_file.materi_id = materi.materi_id WHERE moduls.modul_id = ".$id);

    return mysqli_affected_rows($conn);
}


// function ubah($id)
// {
//     global $conn;

//     $nim = htmlspecialchars($data["nim"]);
//     $nama = htmlspecialchars($data["nama"]);
//     $email = htmlspecialchars($data["email"]);
//     $jurusan = htmlspecialchars($data["jurusan"]);
//     $gambar = htmlspecialchars($data["gambar"]);

//     $query = "UPDATE mahasiswa SET
//                 nim = '$nim',
//                 nama = '$nam',
//                 email = '$email',
//                 jurusan = '$jurusan',
//                 gambar = '$gambar'
//                 ";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

