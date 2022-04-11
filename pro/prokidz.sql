-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2022 pada 05.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prokidz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `materi_id` bigint(20) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`materi_id`, `file_name`, `file_type`) VALUES
(10, 'Rahman Zulkarnaen_TaskA01.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
(11, 'acc.txt', 'text/plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_file`
--

CREATE TABLE `materi_file` (
  `materi_file_id` bigint(20) NOT NULL,
  `modul_id` bigint(20) NOT NULL,
  `materi_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `materi_file`
--

INSERT INTO `materi_file` (`materi_file_id`, `modul_id`, `materi_id`) VALUES
(11, 10, 10),
(12, 11, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `moduls`
--

CREATE TABLE `moduls` (
  `modul_id` bigint(20) NOT NULL,
  `modul_name` varchar(255) NOT NULL,
  `upload_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `moduls`
--

INSERT INTO `moduls` (`modul_id`, `modul_name`, `upload_by`) VALUES
(10, 'PHP', 'Rahman'),
(11, 'CSS', 'Rahmanz');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`materi_id`);

--
-- Indeks untuk tabel `materi_file`
--
ALTER TABLE `materi_file`
  ADD PRIMARY KEY (`materi_file_id`,`modul_id`,`materi_id`),
  ADD KEY `fk_materi_file_moduls_idx` (`modul_id`),
  ADD KEY `fk_materi_file_materi1_idx` (`materi_id`);

--
-- Indeks untuk tabel `moduls`
--
ALTER TABLE `moduls`
  ADD PRIMARY KEY (`modul_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `materi_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `materi_file`
--
ALTER TABLE `materi_file`
  MODIFY `materi_file_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `moduls`
--
ALTER TABLE `moduls`
  MODIFY `modul_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `materi_file`
--
ALTER TABLE `materi_file`
  ADD CONSTRAINT `fk_materi_file_materi1` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`materi_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_materi_file_moduls` FOREIGN KEY (`modul_id`) REFERENCES `moduls` (`modul_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
