-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2023 pada 13.31
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
(24, '0000-00-00 00:00:00', 'Testing nama marketing', 234234243, 'padang', 823923923, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(25, '0000-00-00 00:00:00', 'Testing marketing', 2147483647, 'Padang', 893556, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(26, '0000-00-00 00:00:00', 'testing ', 54656456, 'testing ', 456456456, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(27, '0000-00-00 00:00:00', 'testing', 2147483647, 'CABANG PASAR RAYA', 893929202, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(28, '0000-00-00 00:00:00', 'Sasa', 321101, 'CABANG LUBUK GADANG', 321101, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00'),
(29, '0000-00-00 00:00:00', 'Salvator', 1234567890, 'CABANG PULAU PUNJUNG', 129400234, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form1`
--

CREATE TABLE `temp_form1` (
  `id_pengajuan` int(255) NOT NULL,
  `nama_marketing` varchar(255) NOT NULL,
  `nik_marketing` int(11) NOT NULL,
  `cabang_pembantu` varchar(255) NOT NULL,
  `no_hp_marketing` int(255) NOT NULL,
  `kode_marketing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form1`
--

INSERT INTO `temp_form1` (`id_pengajuan`, `nama_marketing`, `nik_marketing`, `cabang_pembantu`, `no_hp_marketing`, `kode_marketing`) VALUES
(1, '123', 123, 'CAPEM RSUP M JAMIL', 123, 'marcel'),
(2, '333', 333, 'CAPEM UNAND', 333, 'Adam'),
(3, '444', 444, 'CAPEM TABEK PATAH', 444, 'Adam'),
(4, '34', 34, 'CABANG SYARIAH PADANG', 34, 'marcel'),
(5, '35', 35, 'CAPEM BAWAN', 35, 'marcel'),
(6, '36', 36, 'CAPEM BANDAR BUAT', 36, 'Adam'),
(7, '', 0, 'CABANG ALAHAN PANJANG', 0, 'Adam'),
(8, 'Salvator', 1234567890, 'CABANG PULAU PUNJUNG', 129400234, 'marcel'),
(9, 'Salvator', 1231234, 'CAPEM SIMPANG HARU', 1231342, 'marcel'),
(10, 'Salvator', 12314322, 'CAPEM TABEK PATAH', 234234, 'marcel'),
(11, 'testingA1', 456354625, 'CABANG SITEBA', 2147483647, 'marcel'),
(12, 'testingA2', 43545342, 'CAPEM AROSUKA', 53245345, 'Adam'),
(13, 'testingA3', 3453453, 'CABANG PAINAN', 45345345, 'marketing'),
(14, 'testingA4', 345435, 'CAPEM RSUP M JAMIL', 2147483647, 'marketing'),
(15, 'marketing 1', 4353245, 'CABANG ALAHAN PANJANG', 32452345, 'marketing2'),
(16, 'marketing 2', 2147483647, 'CABANG NIAGA', 32454325, 'marketing2'),
(17, 'marketing 3', 32453425, 'CAPEM GUBERNUR', 234523455, 'marketing2'),
(18, 'marketing 4', 234234234, 'CABANG SYARIAH PADANG', 0, 'marketing2'),
(19, 'marketing 5', 43534, 'CABANG SIMPANG EMPAT', 3465436, 'marketing2'),
(20, 'marketing 1', 0, 'CABANG ALAHAN PANJANG', 0, 'marketing1'),
(21, 'marketing 2', 0, 'CABANG ALAHAN PANJANG', 0, 'marketing2'),
(22, 'marketing 3', 0, 'CABANG ALAHAN PANJANG', 0, 'marketing3'),
(23, 'Sal', 12312, 'CABANG UJUNG GADING', 12312, 'Adam'),
(24, 'FFF', 1231, 'CAPEM SIMPANG HARU', 12312, 'user'),
(25, '', 0, 'CABANG ALAHAN PANJANG', 0, 'marcel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form2`
--

CREATE TABLE `temp_form2` (
  `id_pengajuan` int(255) NOT NULL,
  `waktu_pengajuan` datetime NOT NULL,
  `tanggal_syarat_ketentuan` datetime NOT NULL,
  `kode_marketing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form2`
--

INSERT INTO `temp_form2` (`id_pengajuan`, `waktu_pengajuan`, `tanggal_syarat_ketentuan`, `kode_marketing`) VALUES
(1, '2023-07-11 09:21:04', '2023-07-11 09:21:04', 'marcel'),
(2, '2023-07-11 11:45:28', '2023-07-11 11:45:28', 'Adam'),
(3, '2023-07-11 11:50:34', '2023-07-11 11:50:34', 'Adam'),
(4, '2023-07-11 11:50:49', '2023-07-11 11:50:49', 'Adam'),
(5, '2023-07-11 13:27:26', '2023-07-11 13:27:26', 'marcel'),
(6, '2023-07-11 13:29:05', '2023-07-11 13:29:05', 'marcel'),
(7, '2023-07-11 13:34:35', '2023-07-11 13:34:35', 'Adam'),
(8, '2023-07-11 22:01:02', '2023-07-11 22:01:02', 'Adam'),
(9, '2023-07-11 22:05:36', '2023-07-11 22:05:36', 'marcel'),
(10, '2023-07-11 22:08:18', '2023-07-11 22:08:18', 'marcel'),
(11, '2023-07-11 22:08:38', '2023-07-11 22:08:38', 'marcel'),
(12, '2023-07-11 22:19:28', '2023-07-11 22:19:28', 'marcel'),
(13, '2023-07-11 22:19:31', '2023-07-11 22:19:31', 'Adam'),
(14, '2023-07-11 22:19:35', '2023-07-11 22:19:35', 'marketing'),
(15, '2023-07-11 22:19:47', '2023-07-11 22:19:47', 'marketing'),
(16, '2023-07-11 22:30:31', '2023-07-11 22:30:31', 'marketing2'),
(17, '2023-07-11 22:30:33', '2023-07-11 22:30:33', 'marketing2'),
(18, '2023-07-11 22:30:37', '2023-07-11 22:30:37', 'marketing2'),
(19, '2023-07-11 22:30:40', '2023-07-11 22:30:40', 'marketing2'),
(20, '2023-07-11 22:31:18', '2023-07-11 22:31:18', 'marketing2'),
(21, '2023-07-11 22:52:27', '2023-07-11 22:52:27', 'marketing1'),
(22, '2023-07-11 22:52:30', '2023-07-11 22:52:30', 'marketing2'),
(23, '2023-07-11 22:52:34', '2023-07-11 22:52:34', 'marketing3'),
(24, '2023-07-11 22:57:22', '2023-07-11 22:57:22', 'Adam'),
(25, '2023-07-11 22:57:38', '2023-07-11 22:57:38', 'user'),
(26, '2023-07-12 12:03:53', '2023-07-12 12:03:53', 'marcel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form3`
--

CREATE TABLE `temp_form3` (
  `id_pengajuan` int(255) NOT NULL,
  `nama_debitur` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik_debitur` varchar(255) NOT NULL,
  `nip_debitur` varchar(255) NOT NULL,
  `nomor_pensiun` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `nomor_npwp` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `gaji_debitur` int(255) NOT NULL,
  `kode_marketing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form3`
--

INSERT INTO `temp_form3` (`id_pengajuan`, `nama_debitur`, `tempat_lahir`, `tanggal_lahir`, `nik_debitur`, `nip_debitur`, `nomor_pensiun`, `alamat_rumah`, `nama_ibu`, `nama_instansi`, `pangkat_golongan`, `nomor_rekening`, `nomor_npwp`, `nomor_telepon`, `gaji_debitur`, `kode_marketing`) VALUES
(1, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, ''),
(2, 'testing', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, ''),
(3, 'qwe', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 'marcel'),
(4, 'ewq', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 'Adam'),
(5, 'ewq', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 'Adam'),
(6, 'ewq', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 'Adam'),
(7, 'rew', 'rew', '2023-07-11', '', '', '', '', '', '', '', '', '', '', 0, 'Adam'),
(8, 'rrr', 'rrr', '2023-07-02', '', '', '', '', '', '', '', '', '', '', 0, 'Adam'),
(9, 'xxx', 'xxx', '2023-06-25', '123', '', '', '', '', '', '', '', '', '', 0, 'Adam'),
(10, 'xxx', 'xxx', '2023-06-25', '123', '', '', '', '', '', '', '', '', '', 0, 'Adam'),
(11, 'xxx', 'xxx', '2023-06-24', '222', '222', '222', '', '', '', '', '', '', '', 0, 'Adam'),
(12, 'xxx', 'xxx', '2023-06-24', '222', '222', '222', '', '', '', '', '', '', '', 0, 'Adam'),
(13, 'vvv', 'vvv', '2023-06-24', '0123', '123', '123', '', '', '', '', '', '', '', 0, 'Adam'),
(14, '35', '35', '2023-06-26', '35', '35', '35', '35', '35', '35', 'Golongan III A Penata Muda', '35', '35', '35', 0, 'marcel'),
(15, '36', '36', '2023-06-27', '36', '36', '36', '36', '36', '36', 'Golongan I D Juru Tingkat 1', '36', '36', '36', 0, 'Adam'),
(16, '', '', '0000-00-00', '', '', '', '', '', '', 'Golongan IV A Pembina', '', '', '', 0, 'Adam'),
(17, 'Salvator Sangi', 'Ende', '1968-07-10', '12312', '12312', '123123', 'dasda', 'asdas', 'asdas', 'Golongan I A Juru Muda', '123124234', '1231413', '342341341', 0, 'marcel'),
(18, 'Salvator Sangi', 'Ende', '1952-08-07', '123123', '123123', '1231', '1231', 'asdasd', 'asdasd', 'Golongan I C Juru', '1231231', '1323123', '12312312', 0, 'marcel'),
(19, 'testing debitur 1', 'jakarta', '1966-05-11', '3452345', '324523452345', '23452345', '32452345', '23452345', '23453245', 'Golongan II A Pengatur Muda', '23452345', '23452345', '23453425', 0, 'marcel'),
(20, 'testing debitur 2', 'Jkarata', '1963-06-11', '3456356354', '345634565346', '34563456345', '34563456', 'testing', 'srgserg', 'Golongan III D Penata Tingkat 1', '4365436546', '5644536', '5456456456', 0, 'Adam'),
(21, 'testing debitur 4', 'jakarta', '1972-06-03', '356345', '436436456', '45364356', '34564356435', 'dfgawsefsd', 'sdfgesrfgesr', 'Golongan III B Penata Muda Tingkat 1', '46456', '456456', '43564356', 0, 'marketing'),
(22, 'testing debitur 3', 'jakarta', '1953-10-27', '32453245', '34252435234', '32453245', 'ghgfdh', 'dfthgsdthser', 'gsergesg', 'Golongan III B Penata Muda Tingkat 1', '34653456', '546456', '456456', 0, 'marketing'),
(23, 'debitur 1', 'Jakarta 1', '1956-06-14', '345346', '456456', '34564356', 'dzfgsdfg', 'ergserg', 'stregesrg', 'Golongan I D Juru Tingkat 1', '34563456', '34564356', '34564356435', 0, 'marketing2'),
(24, 'debitur 2', 'Jakarta 2', '1991-06-13', '43564356435', '43564536', '45643564356', 'dfsfrf', 'aergeargear', 'aergeargearg', 'Golongan II C Pengatur', '345673456', '4563456', '4564356456', 0, 'marketing2'),
(25, 'debitur 3', 'Jakarta 3', '1975-07-03', '5467657', '745675467', '54675467', 'fgbdrtghse', 'tgsetrgertg', 'srthrth', 'Golongan III C Penata', '464356354', '673547567', '5467546754', 0, 'marketing2'),
(26, 'debitur 5', 'Jakarta 5', '1965-11-10', '465436', '34563456', '34564356', 'dfgasdfgv', 'dfgvdfg', 'dzrgzdrg', 'Golongan IV A Pembina', '56475467', '54675467', '54675467', 0, 'marketing2'),
(27, 'debitur 4', 'Jakarta 4', '1977-09-13', '456456', '45645645', '45645645', 'esrgearg', 'aergeargaer', 'eargaerg', 'Golongan IV C Pembina Utama Muda', '5464536356', '34564356', '435643564356', 0, 'marketing2'),
(28, 'Debitur 1', 'Jkarta 1', '1957-05-11', '111111111111111111111111111111', '111111112121111111111111111111111111', '111111111111111111111111111121212', 'testing 1', 'testing ibu 1', 'testing ins 1', 'Golongan I D Juru Tingkat 1', '111111111111111111212121212', '111111111111111111212121', '121111111111121212212', 0, 'marketing1'),
(29, 'Debitur 2', 'Jkarta 2', '1982-06-25', '222222222222222222222222212112', '2222222222222211112222', '2222222222211112222', 'testing 2', 'testing ibu 2', 'testing ins 2', 'Golongan II D Pengatur Tingkat 1', '2222222111122222', '22221112121212', '22222111112121212', 0, 'marketing2'),
(30, 'Debitur 3', 'Jkarta 3', '1983-02-03', '3333333333333123121212', '3333333333333333333333333112321', '3333333333331212123', 'testing rmh 3', 'testing ibu3', 'testing ins 3', 'Golongan III A Penata Muda', '33333324242424', '333321222', '333311222', 0, 'marketing3'),
(31, 'FFF', 'wdasd', '1954-06-10', '123', '1231', '3123', '1231', '123', '13123', 'Golongan I C Juru', '1231', '23123', '123123', 0, 'user'),
(32, 'GGG', 'asdas', '1986-02-12', '23123', '123123', '1231', '1231', '12312', '1231', 'Golongan IV E Pembina Utama', '1231', '123', '123123', 0, 'Adam'),
(33, 'sss', '', '0000-00-00', '', '', '', '', '', '', 'Golongan IV A Pembina', '', '', '', 222, 'marcel'),
(34, 'sss', '', '0000-00-00', '', '', '', '', '', '', 'Golongan IV A Pembina', '', '', '', 123, 'marcel'),
(35, 'aaa', '', '0000-00-00', '', '', '', '', '', '', 'Golongan IV A Pembina', '', '', '', 123456789, 'marcel'),
(36, 'aaa', '', '0000-00-00', '', '', '', '', '', '', 'Golongan IV A Pembina', '', '', '', 123456789, 'marcel'),
(37, '', '', '2001-06-24', '', '', '', '', '', '', 'Golongan IV A Pembina', '', '', '', 0, 'marcel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form4`
--

CREATE TABLE `temp_form4` (
  `id_pengajuan` int(255) NOT NULL,
  `jumlah_pinjaman` int(255) NOT NULL,
  `waktu_pinjaman` int(255) NOT NULL,
  `umur_pengajuan` int(11) NOT NULL,
  `kode_marketing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form4`
--

INSERT INTO `temp_form4` (`id_pengajuan`, `jumlah_pinjaman`, `waktu_pinjaman`, `umur_pengajuan`, `kode_marketing`) VALUES
(1, 300000000, 60, 22, 'marcel'),
(2, 300000000, 60, 22, 'marcel'),
(3, 300000000, 10, 22, 'marcel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form6`
--

CREATE TABLE `temp_form6` (
  `id_pengajuan` int(11) NOT NULL,
  `kode_marketing` varchar(255) NOT NULL,
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
  `kredit_file_12` text NOT NULL,
  `kredit_file_13` text NOT NULL,
  `kredit_file_14` text NOT NULL,
  `kredit_file_15` text NOT NULL,
  `kredit_file_16` text NOT NULL,
  `kredit_file_17` text NOT NULL,
  `kredit_file_18` text NOT NULL,
  `kredit_file_19` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form6`
--

INSERT INTO `temp_form6` (`id_pengajuan`, `kode_marketing`, `kredit_file_1`, `kredit_file_2`, `kredit_file_3`, `kredit_file_4`, `kredit_file_5`, `kredit_file_6`, `kredit_file_7`, `kredit_file_8`, `kredit_file_9`, `kredit_file_10`, `kredit_file_11`, `kredit_file_12`, `kredit_file_13`, `kredit_file_14`, `kredit_file_15`, `kredit_file_16`, `kredit_file_17`, `kredit_file_18`, `kredit_file_19`) VALUES
(1, 'Adam', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada'),
(2, 'Adam', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'marcel', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'marcel', 'Tidak', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'marcel', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', 'Ada', 'Ada', '', 'Ada', 'Ada', 'Ada', 'Ada', ''),
(6, 'Adam', 'Ada', 'Ada', '', '', 'Ada', 'Ada', 'Ada', '', 'Ada', 'Ada', 'Ada', 'Ada', '', 'Ada', '', '', '', '', ''),
(7, 'marketing', 'Ada', 'Ada', '', '', 'Ada', 'Ada', '', '', 'Ada', '', 'Ada', 'Ada', 'Ada', '', 'Ada', 'Ada', 'Ada', '', ''),
(8, 'marketing', 'Ada', 'Ada', 'Ada', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', 'Ada', 'Ada', 'Ada', 'Ada', '', '', 'Ada', ''),
(9, 'marketing2', 'Ada', 'Tidak', 'Tidak', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada'),
(10, 'marketing2', 'Tidak', 'Tidak', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada'),
(11, 'marketing2', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak'),
(12, 'marketing2', 'Tidak', 'Tidak', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Ada'),
(13, 'marketing2', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada'),
(14, 'marketing1', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', ''),
(15, 'marketing2', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', '', '', '', '', '', '', '', '', '', ''),
(16, 'marketing3', 'Ada', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', '', '', ''),
(17, 'user', 'Ada', '', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'Adam', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `kode_marketing` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`, `kode_marketing`) VALUES
(1, 'marcel', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm321'),
(2, 'admin123', 'admin123@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', 'm322'),
(3, 'Adam', 'testing@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm323'),
(4, 'Testing admin', 'testingadmin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', 'm324'),
(5, 'user', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm325'),
(6, 'marketing', 'marketing@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm326'),
(7, 'marketing1', 'marketing1@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm327'),
(8, 'marketing2', 'marketing2@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm328'),
(9, 'marketing3', 'marketing3@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm329'),
(10, 'marketing4', 'marketing4@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm330'),
(11, 'marketing5', 'marketing5@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm331');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengajuan_kredit`
--
ALTER TABLE `pengajuan_kredit`
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
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `temp_form1`
--
ALTER TABLE `temp_form1`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `temp_form2`
--
ALTER TABLE `temp_form2`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `temp_form3`
--
ALTER TABLE `temp_form3`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `temp_form4`
--
ALTER TABLE `temp_form4`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `temp_form6`
--
ALTER TABLE `temp_form6`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user_credit`
--
ALTER TABLE `user_credit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
