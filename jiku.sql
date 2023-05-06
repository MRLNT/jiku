-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2023 pada 07.58
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jiku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_credit`
--

CREATE TABLE `user_credit` (
  `ID` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Tempat_Lahir` text NOT NULL,
  `Tgl_Lahir` varchar(255) NOT NULL,
  `NIK` int(255) NOT NULL,
  `NIP` int(255) NOT NULL,
  `No_Pensiun` int(255) NOT NULL,
  `Nama_Ibu` text NOT NULL,
  `Nama_Instansi` varchar(255) NOT NULL,
  `Pangkat` varchar(255) NOT NULL,
  `No_Rekening` int(255) NOT NULL,
  `NPWP` int(255) NOT NULL,
  `No_Telepon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_credit`
--

INSERT INTO `user_credit` (`ID`, `Nama`, `Tempat_Lahir`, `Tgl_Lahir`, `NIK`, `NIP`, `No_Pensiun`, `Nama_Ibu`, `Nama_Instansi`, `Pangkat`, `No_Rekening`, `NPWP`, `No_Telepon`) VALUES
(4, 'asd', 'asd', '05-06-2018', 124123, 124124, 12124, '235235', 'asdfasdf', 'asdfasdf', 12124, 12312, 345345),
(5, 'Tooer', 'Jakarta', '21-07-1994', 546485059, 2147483647, 2147483647, 'Astuti', 'Polri', '3 A', 2147483647, 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'marcel', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(2, 'admin123', 'admin123@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'Adam', 'testing@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(4, 'Testing admin', 'testingadmin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user_credit`
--
ALTER TABLE `user_credit`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_credit`
--
ALTER TABLE `user_credit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
