-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2023 pada 12.43
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
-- Struktur dari tabel `pengajuan_kredit`
--

CREATE TABLE `pengajuan_kredit` (
  `id_pengajuan` int(255) NOT NULL,
  `waktu_pengajuan` datetime NOT NULL,
  `nama_marketing` varchar(255) NOT NULL,
  `nik_marketing` int(11) NOT NULL,
  `cabang_pembantu` varchar(255) NOT NULL,
  `no_hp_marketing` int(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik_user` int(255) NOT NULL,
  `nip_user` int(255) NOT NULL,
  `no_pensiun` int(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `no_rekening` int(255) NOT NULL,
  `no_npwp` int(255) NOT NULL,
  `no_telepon` int(255) NOT NULL,
  `tanggal_syarat_ketentuan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengajuan_kredit`
--

INSERT INTO `pengajuan_kredit` (`id_pengajuan`, `waktu_pengajuan`, `nama_marketing`, `nik_marketing`, `cabang_pembantu`, `no_hp_marketing`, `nama_user`, `tempat_lahir`, `tanggal_lahir`, `nik_user`, `nip_user`, `no_pensiun`, `alamat_user`, `nama_ibu`, `nama_instansi`, `pangkat_golongan`, `no_rekening`, `no_npwp`, `no_telepon`, `tanggal_syarat_ketentuan`) VALUES
(15, '2023-06-02 11:29:05', 'marcel', 2147483647, 'kcp ciluar', 2147483647, 'marcel', 'bogoe', '2001-06-24', 2147483647, 23, 24, 'bogor', 'emak', 'atma', 'golongan 3', 2147483647, 332211, 2147483647, '2023-06-02 11:29:05'),
(16, '2023-06-02 11:34:09', '', 0, '', 12382323, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '2023-06-02 11:34:09'),
(17, '2023-06-03 10:27:47', '', 0, '', 0, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '2023-06-03 10:27:47'),
(18, '2023-06-03 10:28:18', '', 0, '', 0, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '2023-06-03 10:28:18'),
(19, '0000-00-00 00:00:00', 'marcel', 12345, 'ciluar', 123456, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE `temp` (
  `id_pengajuan` int(255) NOT NULL,
  `waktu_pengajuan` datetime NOT NULL,
  `nama_marketing` varchar(255) NOT NULL,
  `nik_marketing` int(11) NOT NULL,
  `cabang_pembantu` varchar(255) NOT NULL,
  `no_hp_marketing` int(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik_user` int(255) NOT NULL,
  `nip_user` int(255) NOT NULL,
  `no_pensiun` int(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `no_rekening` int(255) NOT NULL,
  `no_npwp` int(255) NOT NULL,
  `no_telepon` int(255) NOT NULL,
  `tanggal_syarat_ketentuan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form1`
--

CREATE TABLE `temp_form1` (
  `id_pengajuan` int(255) NOT NULL,
  `nama_marketing` varchar(255) NOT NULL,
  `nik_marketing` int(11) NOT NULL,
  `cabang_pembantu` varchar(255) NOT NULL,
  `no_hp_marketing` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form1`
--

INSERT INTO `temp_form1` (`id_pengajuan`, `nama_marketing`, `nik_marketing`, `cabang_pembantu`, `no_hp_marketing`) VALUES
(1, 'mar', 123, 'kcp ciluar', 123),
(2, 'iya', 24, 'iya', 24),
(3, 'saxa', 123, 'kigsxwwsx', 2312312),
(4, 'marcel', 12345, 'ciluar', 123456),
(5, 'test2', 2, '22', 8),
(6, '', 0, '', 0),
(7, 'ppp', 999, 'ppp', 999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form2`
--

CREATE TABLE `temp_form2` (
  `id_pengajuan` int(255) NOT NULL,
  `waktu_pengajuan` datetime NOT NULL,
  `tanggal_syarat_ketentuan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form2`
--

INSERT INTO `temp_form2` (`id_pengajuan`, `waktu_pengajuan`, `tanggal_syarat_ketentuan`) VALUES
(20, '2023-06-10 14:25:01', '2023-06-10 14:25:01'),
(21, '2023-06-10 14:50:15', '2023-06-10 14:50:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form3`
--

CREATE TABLE `temp_form3` (
  `id_pengajuan` int(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik_user` int(255) NOT NULL,
  `nip_user` int(255) NOT NULL,
  `no_pensiun` int(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `no_rekening` int(255) NOT NULL,
  `no_npwp` int(255) NOT NULL,
  `no_telepon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form3`
--

INSERT INTO `temp_form3` (`id_pengajuan`, `nama_user`, `tempat_lahir`, `tanggal_lahir`, `nik_user`, `nip_user`, `no_pensiun`, `alamat_user`, `nama_ibu`, `nama_instansi`, `pangkat_golongan`, `no_rekening`, `no_npwp`, `no_telepon`) VALUES
(0, 'ppp', 'ppp', '9999-09-09', 999, 999, 999, '9p9p9p', 'ppp', 'ppp', 'ppp9', 999, 999, 999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form5`
--

CREATE TABLE `temp_form5` (
  `id_pengajuan` int(11) NOT NULL,
  `kredit_file_1` text NOT NULL,
  `kredit_file_2` text NOT NULL,
  `kredit_file_3` text NOT NULL,
  `kredit_file_4` text NOT NULL,
  `kredit_file_5` text NOT NULL,
  `kredit_file_6` text NOT NULL,
  `kredit_file_7` text NOT NULL,
  `kredit_file_8` text NOT NULL,
  `kredit_file_9` text NOT NULL,
  `kredit_file_10` text NOT NULL,
  `kredit_file_11` text NOT NULL,
  `kredit_file_13` text NOT NULL,
  `kredit_file_14` text NOT NULL,
  `kredit_file_15` text NOT NULL,
  `kredit_file_16` text NOT NULL,
  `kredit_file_17` text NOT NULL,
  `kredit_file_18` text NOT NULL,
  `kredit_file_19` text NOT NULL,
  `kredit_file_20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form5`
--

INSERT INTO `temp_form5` (`id_pengajuan`, `kredit_file_1`, `kredit_file_2`, `kredit_file_3`, `kredit_file_4`, `kredit_file_5`, `kredit_file_6`, `kredit_file_7`, `kredit_file_8`, `kredit_file_9`, `kredit_file_10`, `kredit_file_11`, `kredit_file_13`, `kredit_file_14`, `kredit_file_15`, `kredit_file_16`, `kredit_file_17`, `kredit_file_18`, `kredit_file_19`, `kredit_file_20`) VALUES
(1, 'kredit_file_1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'kredit_file_1', '', 'kredit_file_3', '', 'kredit_file_5', '', 'kredit_file_7', '', 'kredit_file_9', '', 'kredit_file_11', '', 'kredit_file_14', '', 'kredit_file_16', '', 'kredit_file_18', '', 'kredit_file_20');

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
(4, 'Testing admin', 'testingadmin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(5, 'user', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengajuan_kredit`
--
ALTER TABLE `pengajuan_kredit`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form1`
--
ALTER TABLE `temp_form1`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form2`
--
ALTER TABLE `temp_form2`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form3`
--
ALTER TABLE `temp_form3`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form5`
--
ALTER TABLE `temp_form5`
  ADD PRIMARY KEY (`id_pengajuan`);

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
-- AUTO_INCREMENT untuk tabel `pengajuan_kredit`
--
ALTER TABLE `pengajuan_kredit`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `temp_form1`
--
ALTER TABLE `temp_form1`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `temp_form2`
--
ALTER TABLE `temp_form2`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `temp_form5`
--
ALTER TABLE `temp_form5`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_credit`
--
ALTER TABLE `user_credit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
