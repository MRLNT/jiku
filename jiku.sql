-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2023 pada 08.58
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
(19, '0000-00-00 00:00:00', 'marcel', 12345, 'ciluar', 123456, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(20, '0000-00-00 00:00:00', '', 0, '', 0, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(21, '0000-00-00 00:00:00', 'testing marketing Jiku', 435345345, 'Padang', 8967567, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(22, '0000-00-00 00:00:00', 'testing marketing', 45345, 'Padang', 89467467, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(23, '0000-00-00 00:00:00', 'testing Marketing', 234234234, 'Padang', 894564564, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(24, '0000-00-00 00:00:00', 'Testing nama marketing', 234234243, 'padang', 823923923, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00');

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
(7, 'ppp', 999, 'ppp', 999),
(8, '', 0, '', 0),
(9, '', 0, '', 0),
(10, '', 0, '', 0),
(11, '', 0, '', 0),
(12, 'testing marketing Jiku', 435345345, 'Padang', 8967567),
(13, 'retert', 2147483647, 'rsthsrth', 4563456),
(14, 'testing marketing', 45345, 'Padang', 89467467),
(15, 'asd', 123, 'asd', 123),
(16, 'testing Marketing', 234234234, 'Padang', 894564564),
(17, '', 0, '', 0),
(18, 'Testing nama marketing', 234234243, 'padang', 823923923);

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
(21, '2023-06-10 14:50:15', '2023-06-10 14:50:15'),
(22, '2023-06-12 13:39:12', '2023-06-12 13:39:12'),
(23, '2023-06-12 14:14:46', '2023-06-12 14:14:46'),
(24, '2023-06-12 17:36:03', '2023-06-12 17:36:03'),
(25, '2023-06-13 11:45:49', '2023-06-13 11:45:49'),
(26, '2023-06-13 12:30:57', '2023-06-13 12:30:57'),
(27, '2023-06-13 12:38:45', '2023-06-13 12:38:45'),
(28, '2023-06-13 13:15:51', '2023-06-13 13:15:51'),
(29, '2023-06-13 13:28:04', '2023-06-13 13:28:04'),
(30, '2023-06-13 13:40:58', '2023-06-13 13:40:58'),
(31, '2023-06-13 13:47:07', '2023-06-13 13:47:07'),
(32, '2023-06-13 13:49:47', '2023-06-13 13:49:47');

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
(0, 'asd', 'asd', '2023-06-13', 123, 123, 123, 'asd', 'asd', 'asd', 'asd', 123, 123, 123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form4`
--

CREATE TABLE `temp_form4` (
  `id_pengajuan` int(255) NOT NULL,
  `jumlah_pinjaman` int(255) NOT NULL,
  `waktu_pinjaman` int(255) NOT NULL,
  `umur_pengajuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form4`
--

INSERT INTO `temp_form4` (`id_pengajuan`, `jumlah_pinjaman`, `waktu_pinjaman`, `umur_pengajuan`) VALUES
(9, 200000000, 7, 0),
(10, 1000, 7, 993),
(11, 0, 0, 1),
(12, 0, 0, 1),
(13, 0, 0, 1),
(14, 0, 0, 1),
(15, 123456789, 60, 45),
(16, 0, 0, 0),
(17, 0, 0, 0),
(18, 200000000, 120, 48),
(19, 0, 0, 0),
(20, 200000000, 120, 48),
(21, 0, 0, 0),
(22, 200000000, 120, 48),
(23, 0, 0, 0),
(24, 200000000, 120, 49),
(25, 0, 0, 0),
(26, 200000000, 120, 48),
(27, 0, 0, 0),
(28, 200000000, 120, 44),
(29, 0, 0, 0),
(30, 200000000, 60, 44),
(31, 0, 0, 0),
(32, 200000000, 60, 44),
(33, 0, 0, 0),
(34, 200000000, 60, 44),
(35, 0, 0, 0),
(36, 200000000, 60, 44),
(37, 0, 0, 0),
(38, 200000000, 60, 44),
(39, 200000000, 120, 48),
(40, 300000000, 120, 48),
(41, 200000000, 7, 44),
(42, 200000000, 120, 48);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form6`
--

CREATE TABLE `temp_form6` (
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
-- Dumping data untuk tabel `temp_form6`
--

INSERT INTO `temp_form6` (`id_pengajuan`, `kredit_file_1`, `kredit_file_2`, `kredit_file_3`, `kredit_file_4`, `kredit_file_5`, `kredit_file_6`, `kredit_file_7`, `kredit_file_8`, `kredit_file_9`, `kredit_file_10`, `kredit_file_11`, `kredit_file_13`, `kredit_file_14`, `kredit_file_15`, `kredit_file_16`, `kredit_file_17`, `kredit_file_18`, `kredit_file_19`, `kredit_file_20`) VALUES
(1, 'kredit_file_1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'kredit_file_1', '', 'kredit_file_3', '', 'kredit_file_5', '', 'kredit_file_7', '', 'kredit_file_9', '', 'kredit_file_11', '', 'kredit_file_14', '', 'kredit_file_16', '', 'kredit_file_18', '', 'kredit_file_20'),
(3, '', '', '', 'kredit_file_4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'kredit_file_1', 'kredit_file_2', 'kredit_file_3', 'kredit_file_4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'kredit_file_1', 'kredit_file_2', 'kredit_file_3', 'kredit_file_4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'kredit_file_1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'kredit_file_1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'kredit_file_1', '', 'kredit_file_3', 'kredit_file_4', '', 'kredit_file_6', 'kredit_file_7', '', 'kredit_file_9', 'kredit_file_10', '', 'kredit_file_13', 'kredit_file_14', '', '', '', '', 'kredit_file_19', 'kredit_file_20'),
(12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'kredit_file_1', '', 'kredit_file_3', '', 'kredit_file_5', 'kredit_file_6', 'kredit_file_7', '', '', '', 'kredit_file_11', 'kredit_file_13', '', '', '', '', '', '', '');

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
-- Indeks untuk tabel `temp_form4`
--
ALTER TABLE `temp_form4`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form6`
--
ALTER TABLE `temp_form6`
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
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `temp_form1`
--
ALTER TABLE `temp_form1`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `temp_form2`
--
ALTER TABLE `temp_form2`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `temp_form4`
--
ALTER TABLE `temp_form4`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `temp_form6`
--
ALTER TABLE `temp_form6`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
