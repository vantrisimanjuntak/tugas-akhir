-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2020 pada 20.49
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `program_studi`, `pendidikan_terakhir`, `foto`) VALUES
(10209011, 'Anton Setiawan H, S.Kom., MT', 'TF3', 'S2', 'anton.jpeg'),
(10301028, 'YULIANI INDRIANINGSIH, ST, M.Kom', 'TF3', 'S2', 'yuli.jpeg'),
(10301030, 'DWI NUGRAHENY, S.Kom, MCS', 'TF3', 'S2', 'dwinugraheni_php.jpg'),
(10303032, 'HERO WINTOLO, M.Kom.', 'TF3', 'S2', 'hero.jpeg'),
(10409041, 'HARUNO SAJATI, S.T., M.Eng', 'TF3', 'S2', 'jati1.jpeg'),
(10706059, 'NURCAHYANI DR., S.Far.Apt., M.T.', 'TF3', 'S2', 'nurcahyani.jpeg'),
(10901061, 'SRI MULYANI, S.T., M.Eng', 'TP1', 'S2', 'sri.jpg'),
(10904068, 'SUDARYANTO, S.T.,M.Eng', 'TF3', 'S2', 'sudaryanto1.jpeg'),
(11001072, 'BANGGA DIRGANTARA A., S.T., M.T', 'TP1', 'S2', 'bangga.jpg'),
(11210095, 'ANGGRAENI K, S.Kom.,M.Cs', 'TF3', 'S2', 'aggra2.jpeg'),
(11409116, 'HARLIYUS AGUSTIAN, S.Kom., M.Cs.', 'TF3', 'S2', 'harlee.jpeg'),
(11611143, 'ASTIKA AYUNING TYAS, S.KOM.,M.Cs', 'TF3', 'S2', 'astika.jpeg'),
(11611144, 'ASIH PUJIASTUTI, S.KOM., M.CS.', 'TF3', 'S2', 'asih.jpeg'),
(2147483647, 'Dra. MARDIANA IRAWATY, M.Sc.St.', 'TF3', 'S3', 'mardiana.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kata_kunci`
--

CREATE TABLE `kata_kunci` (
  `id` int(255) NOT NULL,
  `kata` varchar(20) NOT NULL,
  `idf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kata_kunci`
--

INSERT INTO `kata_kunci` (`id`, `kata`, `idf`) VALUES
(1, 'virtual', 0.477121),
(2, 'network', 0.477121);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`) VALUES
(15030006, 'DENO DASEFTRA CESSARA', 'TF3'),
(15030007, 'RETNO DEWI IRIANTI ', 'TF3'),
(15030011, 'FAJAR TAQY WICAHYA', 'TF3'),
(15030013, 'SULISTYO NUGROHO', 'TF3'),
(15030016, 'DWI NURHAYATI', 'TF3'),
(15030017, 'ISTIQOMAH NURAINI', 'TF3'),
(15030019, 'MUHAMMAD ZAENUDIN SANI ', 'TF3'),
(15030020, 'NOVANDA SANDIANTARA', 'TF3'),
(15030024, 'GEBY NAULY PAKPAHAN', 'TF3'),
(15030025, 'MUHAMMAD VARIAN SAYOGA', 'TF3'),
(15030027, 'ELLYANA MEGA DEWANTRI ASTUTI', 'TF3'),
(15030028, 'ERNI JUMIYANTI', 'TF3'),
(15030031, 'DESYNTA KARMILA SARI', 'TF3'),
(15030032, 'YASIFA YURI HAQLI SUKMA', 'TF3'),
(15030033, 'SATYA WIRA WICAKSANA', 'TF3'),
(15030036, 'ADETYA DYAS SAPUTRA ', 'TF3'),
(15030038, 'DAEWU GUS BINTARA PUTRA ', 'TF3'),
(15030039, 'QATRUNNADA HUMAIRA L ', 'TF3'),
(15030041, 'DIAN FITASARI DURU', 'TF3'),
(15030043, 'AGUNG NUGRAHA', 'TF3'),
(15030049, 'MUHAMMAD ALI SOFYAN', 'TF3'),
(15030052, 'BIMA PRIYOGA WASKITA', 'TF3'),
(15030056, 'DWINNY PUSPA DINAR SAPUTRI', 'TF3'),
(15030061, 'MUHAMMAD IRFAN', 'TF3'),
(15030065, 'BENNY ARIAN SAPUTRA ', 'TF3'),
(15030066, 'NUR HANIFAH', 'TF3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pecah_kata`
--

CREATE TABLE `pecah_kata` (
  `id` int(255) NOT NULL,
  `kata_kata` varchar(100) NOT NULL,
  `no_doc` varchar(100) NOT NULL,
  `total_dokumen` int(255) NOT NULL,
  `idf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pecah_kata`
--

INSERT INTO `pecah_kata` (`id`, `kata_kata`, `no_doc`, `total_dokumen`, `idf`) VALUES
(1, 'sistem', 'dd5d7e', 2, 0.176091),
(2, 'identifikasi', 'dd5d7e', 1, 0.477121),
(3, 'kerusakan', 'dd5d7e', 1, 0.477121),
(4, 'mesin', 'dd5d7e', 1, 0.477121),
(5, 'pada', 'dd5d7e', 3, 0),
(6, 'pesawat', 'dd5d7e', 1, 0.477121),
(7, 'bravo', 'dd5d7e', 1, 0.477121),
(8, 'as202', 'dd5d7e', 1, 0.477121),
(9, 'menggunakan', 'dd5d7e', 3, 0),
(10, 'backward', 'dd5d7e', 1, 0.477121),
(11, 'chaining', 'dd5d7e', 1, 0.477121),
(12, 'berbasis', 'dd5d7e', 2, 0.176091),
(13, 'website', 'dd5d7e', 1, 0.477121),
(14, 'oleh', 'dd5d7e', 3, 0),
(15, 'erni', 'dd5d7e', 1, 0.477121),
(16, 'jumiyanti', 'dd5d7e', 1, 0.477121),
(17, '15030028', 'dd5d7e', 1, 0.477121),
(18, 'intisari', 'dd5d7e', 3, 0),
(19, 'penelitian', 'dd5d7e', 2, 0.176091),
(20, 'ini', 'dd5d7e', 3, 0),
(21, 'membahas', 'dd5d7e', 1, 0.477121),
(22, 'tentang', 'dd5d7e', 1, 0.477121),
(23, 'perancangan', 'dd5d7e', 1, 0.477121),
(24, 'dan', 'dd5d7e', 3, 0),
(25, 'penerapan', 'dd5d7e', 1, 0.477121),
(26, 'perangkat', 'dd5d7e', 2, 0.176091),
(27, 'lunak', 'dd5d7e', 2, 0.176091),
(28, 'sebuah', 'dd5d7e', 1, 0.477121),
(29, 'militer', 'dd5d7e', 1, 0.477121),
(30, 'latih', 'dd5d7e', 1, 0.477121),
(31, 'yaitu', 'dd5d7e', 2, 0.176091),
(32, 'dengan', 'dd5d7e', 3, 0),
(33, 'seri', 'dd5d7e', 1, 0.477121),
(34, 'adanya', 'dd5d7e', 1, 0.477121),
(35, 'mampu', 'dd5d7e', 2, 0.176091),
(36, 'digunakan', 'dd5d7e', 2, 0.176091),
(37, 'untuk', 'dd5d7e', 3, 0),
(38, 'mengetahui', 'dd5d7e', 1, 0.477121),
(39, 'gejala', 'dd5d7e', 1, 0.477121),
(40, 'dalam', 'dd5d7e', 3, 0),
(41, 'di', 'dd5d7e', 3, 0),
(42, 'luar', 'dd5d7e', 2, 0.176091),
(43, 'perawatan', 'dd5d7e', 1, 0.477121),
(44, 'inspection', 'dd5d7e', 1, 0.477121),
(45, 'pendekatan', 'dd5d7e', 1, 0.477121),
(46, 'menentukan', 'dd5d7e', 1, 0.477121),
(47, 'fakta', 'dd5d7e', 1, 0.477121),
(48, 'yang', 'dd5d7e', 3, 0),
(49, 'mendukung', 'dd5d7e', 2, 0.176091),
(50, 'hipotesa-hipotesa', 'dd5d7e', 1, 0.477121),
(51, 'tersebut', 'dd5d7e', 2, 0.176091),
(52, 'ada', 'dd5d7e', 2, 0.176091),
(53, 'diharapkan', 'dd5d7e', 1, 0.477121),
(54, 'mengidentifikasi', 'dd5d7e', 1, 0.477121),
(55, 'kecelakaan', 'dd5d7e', 1, 0.477121),
(56, 'komersil', 'dd5d7e', 1, 0.477121),
(57, 'ataupun', 'dd5d7e', 1, 0.477121),
(58, 'banyak', 'dd5d7e', 2, 0.176091),
(59, 'mengakibatkan', 'dd5d7e', 1, 0.477121),
(60, 'korban', 'dd5d7e', 1, 0.477121),
(61, 'selain', 'dd5d7e', 1, 0.477121),
(62, 'itu', 'dd5d7e', 2, 0.176091),
(63, 'memberikan', 'dd5d7e', 2, 0.176091),
(64, 'kerugian', 'dd5d7e', 1, 0.477121),
(65, 'bagi', 'dd5d7e', 1, 0.477121),
(66, 'semua', 'dd5d7e', 1, 0.477121),
(67, 'pihak', 'dd5d7e', 2, 0.176091),
(68, 'telah', 'dd5d7e', 2, 0.176091),
(69, 'terjadi', 'dd5d7e', 1, 0.477121),
(70, 'selama', 'dd5d7e', 1, 0.477121),
(71, 'selalu', 'dd5d7e', 1, 0.477121),
(72, 'dikaitkan', 'dd5d7e', 1, 0.477121),
(73, 'faktor', 'dd5d7e', 1, 0.477121),
(74, 'seperti', 'dd5d7e', 1, 0.477121),
(75, 'human', 'dd5d7e', 1, 0.477121),
(76, 'error', 'dd5d7e', 1, 0.477121),
(77, 'climate', 'dd5d7e', 1, 0.477121),
(78, 'maupun', 'dd5d7e', 1, 0.477121),
(79, 'engine', 'dd5d7e', 1, 0.477121),
(80, 'mengurangi', 'dd5d7e', 1, 0.477121),
(81, 'resiko', 'dd5d7e', 1, 0.477121),
(82, 'maka', 'dd5d7e', 1, 0.477121),
(83, 'dibutuhkan', 'dd5d7e', 2, 0.176091),
(84, 'menghasilkan', 'dd5d7e', 1, 0.477121),
(85, 'aplikasi', 'dd5d7e', 3, 0),
(86, 'berfungsi', 'dd5d7e', 2, 0.176091),
(87, 'sebagai', 'dd5d7e', 3, 0),
(88, 'mempermudah', 'dd5d7e', 1, 0.477121),
(89, 'teknisi', 'dd5d7e', 1, 0.477121),
(90, 'mencari', 'dd5d7e', 1, 0.477121),
(91, 'informasi', 'dd5d7e', 1, 0.477121),
(92, 'kata', 'dd5d7e', 3, 0),
(93, 'kunci', 'dd5d7e', 3, 0),
(94, 'website\r\n', 'dd5d7e', 1, 0.477121),
(95, 'pemanfaatan', 'f6ae4e', 2, 0.176091),
(96, 'firebase', 'f6ae4e', 1, 0.477121),
(97, 'inventaris', 'f6ae4e', 1, 0.477121),
(98, 'guna', 'f6ae4e', 1, 0.477121),
(99, 'usaha', 'f6ae4e', 1, 0.477121),
(100, 'mikro', 'f6ae4e', 1, 0.477121),
(101, 'kecil', 'f6ae4e', 2, 0.176091),
(102, 'menengah', 'f6ae4e', 1, 0.477121),
(103, 'umkm', 'f6ae4e', 1, 0.477121),
(104, 'studi', 'f6ae4e', 1, 0.477121),
(105, 'kasus', 'f6ae4e', 1, 0.477121),
(106, 'kabupaten', 'f6ae4e', 1, 0.477121),
(107, 'gunung', 'f6ae4e', 1, 0.477121),
(108, 'kidul', 'f6ae4e', 1, 0.477121),
(109, 'adetya', 'f6ae4e', 1, 0.477121),
(110, 'dyas', 'f6ae4e', 1, 0.477121),
(111, 'saputra', 'f6ae4e', 1, 0.477121),
(112, '15030036', 'f6ae4e', 1, 0.477121),
(113, 'adalah', 'f6ae4e', 2, 0.176091),
(114, 'salah', 'f6ae4e', 2, 0.176091),
(115, 'satu', 'f6ae4e', 2, 0.176091),
(116, 'ujung', 'f6ae4e', 1, 0.477121),
(117, 'perekonomian', 'f6ae4e', 1, 0.477121),
(118, 'berdiri', 'f6ae4e', 1, 0.477121),
(119, 'sendiri', 'f6ae4e', 1, 0.477121),
(120, 'memiliki', 'f6ae4e', 1, 0.477121),
(121, 'potensi', 'f6ae4e', 1, 0.477121),
(122, 'perkembangan', 'f6ae4e', 1, 0.477121),
(123, 'besar', 'f6ae4e', 1, 0.477121),
(124, 'satunya', 'f6ae4e', 1, 0.477121),
(125, 'gunungkidul', 'f6ae4e', 1, 0.477121),
(126, 'yogyakarta', 'f6ae4e', 1, 0.477121),
(127, 'beberapa', 'f6ae4e', 1, 0.477121),
(128, 'kendala', 'f6ae4e', 1, 0.477121),
(129, 'bisnis', 'f6ae4e', 1, 0.477121),
(130, 'pemasaran', 'f6ae4e', 1, 0.477121),
(131, 'manajemen', 'f6ae4e', 2, 0.176091),
(132, 'produk', 'f6ae4e', 1, 0.477121),
(133, 'dimana', 'f6ae4e', 2, 0.176091),
(134, 'para', 'f6ae4e', 1, 0.477121),
(135, 'pelaku', 'f6ae4e', 1, 0.477121),
(136, 'hanya', 'f6ae4e', 1, 0.477121),
(137, 'dikenal', 'f6ae4e', 1, 0.477121),
(138, 'daerahnya', 'f6ae4e', 1, 0.477121),
(139, 'saja', 'f6ae4e', 2, 0.176091),
(140, 'kesulitan', 'f6ae4e', 1, 0.477121),
(141, 'memanajemen', 'f6ae4e', 1, 0.477121),
(142, 'produknya', 'f6ae4e', 1, 0.477121),
(143, 'dukungan', 'f6ae4e', 1, 0.477121),
(144, 'dari', 'f6ae4e', 2, 0.176091),
(145, 'sisi', 'f6ae4e', 1, 0.477121),
(146, 'teknologi', 'f6ae4e', 2, 0.176091),
(147, 'sangat', 'f6ae4e', 2, 0.176091),
(148, 'diperlukan', 'f6ae4e', 1, 0.477121),
(149, 'meningkatkan', 'f6ae4e', 1, 0.477121),
(150, 'laju', 'f6ae4e', 1, 0.477121),
(151, 'demi', 'f6ae4e', 1, 0.477121),
(152, 'mengatasi', 'f6ae4e', 1, 0.477121),
(153, 'masalah', 'f6ae4e', 1, 0.477121),
(154, 'biaya', 'f6ae4e', 1, 0.477121),
(155, 'minim', 'f6ae4e', 1, 0.477121),
(156, 'serta', 'f6ae4e', 1, 0.477121),
(157, 'bekerja', 'f6ae4e', 1, 0.477121),
(158, 'baik', 'f6ae4e', 1, 0.477121),
(159, 'masih', 'f6ae4e', 2, 0.176091),
(160, 'daerah', 'f6ae4e', 1, 0.477121),
(161, 'sulit', 'f6ae4e', 1, 0.477121),
(162, 'mendapatkan', 'f6ae4e', 1, 0.477121),
(163, 'sinyal', 'f6ae4e', 1, 0.477121),
(164, 'melakukan', 'f6ae4e', 2, 0.176091),
(165, 'smartphone', 'f6ae4e', 1, 0.477121),
(166, 'platform', 'f6ae4e', 1, 0.477121),
(167, 'buatan', 'f6ae4e', 1, 0.477121),
(168, 'google', 'f6ae4e', 1, 0.477121),
(169, 'fitur', 'f6ae4e', 1, 0.477121),
(170, 'unggulan', 'f6ae4e', 1, 0.477121),
(171, 'realtime', 'f6ae4e', 1, 0.477121),
(172, 'database', 'f6ae4e', 1, 0.477121),
(173, 'cocok', 'f6ae4e', 1, 0.477121),
(174, 'menanggulangi', 'f6ae4e', 1, 0.477121),
(175, 'karna', 'f6ae4e', 1, 0.477121),
(176, 'kemampuannya', 'f6ae4e', 1, 0.477121),
(177, 'offline-capability', 'f6ae4e', 1, 0.477121),
(178, '2', 'f6ae4e', 1, 0.477121),
(179, 'dibuat', 'f6ae4e', 2, 0.176091),
(180, 'disebut', 'f6ae4e', 1, 0.477121),
(181, 'venstta', 'f6ae4e', 1, 0.477121),
(182, 'mitra', 'f6ae4e', 1, 0.477121),
(183, 'konsumen', 'f6ae4e', 1, 0.477121),
(184, 'memasarkan', 'f6ae4e', 1, 0.477121),
(185, 'stok', 'f6ae4e', 1, 0.477121),
(186, 'sedangkan', 'f6ae4e', 1, 0.477121),
(187, 'katalog', 'f6ae4e', 1, 0.477121),
(188, 'berdasarkan', 'f6ae4e', 1, 0.477121),
(189, 'pengujian', 'f6ae4e', 2, 0.176091),
(190, 'diperoleh', 'f6ae4e', 1, 0.477121),
(191, 'skala', 'f6ae4e', 1, 0.477121),
(192, 'likert', 'f6ae4e', 1, 0.477121),
(193, 'skor', 'f6ae4e', 1, 0.477121),
(194, 'fungsi', 'f6ae4e', 1, 0.477121),
(195, 'utama', 'f6ae4e', 1, 0.477121),
(196, 'sebesar', 'f6ae4e', 1, 0.477121),
(197, '788%', 'f6ae4e', 1, 0.477121),
(198, 'uji', 'f6ae4e', 1, 0.477121),
(199, 'ui/ux', 'f6ae4e', 1, 0.477121),
(200, '696%', 'f6ae4e', 1, 0.477121),
(201, '853%', 'f6ae4e', 1, 0.477121),
(202, '702%', 'f6ae4e', 1, 0.477121),
(203, 'sehingga', 'f6ae4e', 2, 0.176091),
(204, 'kedua', 'f6ae4e', 1, 0.477121),
(205, 'berjalan', 'f6ae4e', 1, 0.477121),
(206, 'dapat', 'f6ae4e', 2, 0.176091),
(207, 'diterapkan', 'f6ae4e', 1, 0.477121),
(208, 'belah', 'f6ae4e', 1, 0.477121),
(209, 'android', 'f6ae4e', 1, 0.477121),
(210, 'virtual', 'c8c265', 1, 0.477121),
(211, 'local', 'c8c265', 1, 0.477121),
(212, 'area', 'c8c265', 1, 0.477121),
(213, 'network', 'c8c265', 1, 0.477121),
(214, 'vlan', 'c8c265', 1, 0.477121),
(215, 'web', 'c8c265', 1, 0.477121),
(216, 'cisco', 'c8c265', 1, 0.477121),
(217, 'catalyst', 'c8c265', 1, 0.477121),
(218, '3750', 'c8c265', 1, 0.477121),
(219, 'memanfaatkan', 'c8c265', 1, 0.477121),
(220, 'application', 'c8c265', 1, 0.477121),
(221, 'programming', 'c8c265', 1, 0.477121),
(222, 'interface', 'c8c265', 1, 0.477121),
(223, 'api', 'c8c265', 1, 0.477121),
(224, 'deno', 'c8c265', 1, 0.477121),
(225, 'daseftra', 'c8c265', 1, 0.477121),
(226, 'cessara', 'c8c265', 1, 0.477121),
(227, '15030006', 'c8c265', 1, 0.477121),
(228, 'merupakan', 'c8c265', 1, 0.477121),
(229, 'komputer', 'c8c265', 1, 0.477121),
(230, 'saat', 'c8c265', 1, 0.477121),
(231, 'hal', 'c8c265', 1, 0.477121),
(232, 'dikarenakan', 'c8c265', 1, 0.477121),
(233, 'membagi', 'c8c265', 1, 0.477121),
(234, 'jaringan', 'c8c265', 1, 0.477121),
(235, 'switch', 'c8c265', 1, 0.477121),
(236, 'menjadi', 'c8c265', 1, 0.477121),
(237, 'bagian-bagian', 'c8c265', 1, 0.477121),
(238, 'lain', 'c8c265', 1, 0.477121),
(239, 'sudah', 'c8c265', 1, 0.477121),
(240, 'menyediakan', 'c8c265', 1, 0.477121),
(241, 'permasalahan', 'c8c265', 1, 0.477121),
(242, 'ditemukan', 'c8c265', 1, 0.477121),
(243, 'command', 'c8c265', 1, 0.477121),
(244, 'line', 'c8c265', 1, 0.477121),
(245, 'tidak', 'c8c265', 1, 0.477121),
(246, 'diakses', 'c8c265', 1, 0.477121),
(247, 'jarak', 'c8c265', 1, 0.477121),
(248, 'jauh', 'c8c265', 1, 0.477121),
(249, 'gui', 'c8c265', 1, 0.477121),
(250, 'tujuan', 'c8c265', 1, 0.477121),
(251, 'kebebasan', 'c8c265', 1, 0.477121),
(252, 'pemakaian', 'c8c265', 1, 0.477121),
(253, 'device', 'c8c265', 1, 0.477121),
(254, 'harus', 'c8c265', 1, 0.477121),
(255, 'terfokus', 'c8c265', 1, 0.477121),
(256, 'jenis', 'c8c265', 1, 0.477121),
(257, 'penghubung', 'c8c265', 1, 0.477121),
(258, 'antara', 'c8c265', 1, 0.477121),
(259, 'bahasa', 'c8c265', 1, 0.477121),
(260, 'pemrograman', 'c8c265', 1, 0.477121),
(261, 'telnet', 'c8c265', 1, 0.477121),
(262, 'berperan', 'c8c265', 1, 0.477121),
(263, 'penting', 'c8c265', 1, 0.477121),
(264, 'pembuatan', 'c8c265', 1, 0.477121),
(265, 'akses', 'c8c265', 1, 0.477121),
(266, 'lebih', 'c8c265', 1, 0.477121),
(267, 'luas', 'c8c265', 1, 0.477121),
(268, 'terminal', 'c8c265', 1, 0.477121),
(269, 'emulator', 'c8c265', 1, 0.477121),
(270, 'administrator', 'c8c265', 1, 0.477121),
(271, 'cukup', 'c8c265', 1, 0.477121),
(272, 'mengujungi', 'c8c265', 1, 0.477121),
(273, 'ip', 'c8c265', 1, 0.477121),
(274, 'mengakses', 'c8c265', 1, 0.477121),
(275, 'port', 'c8c265', 1, 0.477121),
(276, 'fowarding', 'c8c265', 1, 0.477121),
(277, 'serveonet', 'c8c265', 1, 0.477121),
(278, 'penyedia', 'c8c265', 1, 0.477121),
(279, 'layanan', 'c8c265', 1, 0.477121),
(280, 'server', 'c8c265', 1, 0.477121),
(281, 'meski', 'c8c265', 1, 0.477121),
(282, 'tanpa', 'c8c265', 1, 0.477121),
(283, 'publik', 'c8c265', 1, 0.477121),
(284, 'hasil', 'c8c265', 1, 0.477121),
(285, 'menunjukkan', 'c8c265', 1, 0.477121),
(286, 'bahwa', 'c8c265', 1, 0.477121),
(287, 'terbukti', 'c8c265', 1, 0.477121),
(288, 'konfigurasi', 'c8c265', 1, 0.477121),
(289, 'mengatur', 'c8c265', 1, 0.477121),
(290, 'hubungan', 'c8c265', 1, 0.477121),
(291, 'antar', 'c8c265', 1, 0.477121),
(292, 'sesuai', 'c8c265', 1, 0.477121),
(293, 'kebutuhan', 'c8c265', 1, 0.477121);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `kd_program_studi` varchar(10) NOT NULL,
  `program_studi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`kd_program_studi`, `program_studi`) VALUES
('TE2', 'Teknik Elektro'),
('TF3', 'Informatika'),
('TP1', 'Teknik Penerbangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `req_bimbingan`
--

CREATE TABLE `req_bimbingan` (
  `id_reg` varchar(10) NOT NULL,
  `mahasiswa` int(10) NOT NULL,
  `judul_proposal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sample`
--

CREATE TABLE `sample` (
  `no_reg` varchar(10) NOT NULL,
  `mahasiswa` int(10) NOT NULL,
  `judul_skripsi` text NOT NULL,
  `abstrak` text NOT NULL,
  `dp_satu` int(10) NOT NULL,
  `dp_dua` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sample`
--

INSERT INTO `sample` (`no_reg`, `mahasiswa`, `judul_skripsi`, `abstrak`, `dp_satu`, `dp_dua`) VALUES
('c8c265', 15030006, 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PRO', 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PROGRAMMING INTERFACE (API) DARI CISCO Oleh Deno Daseftra Cessara 15030006 INTISARI VLAN merupakan salah satu teknologi komputer yang saat ini sangat dibutuhkan. Hal ini dikarenakan VLAN dapat membagi satu jaringan pada perangkat switch menjadi bagian-bagian kecil jaringan lain. Cisco Catalyst 3750 merupakan perangkat switch yang sudah menyediakan teknologi VLAN. Permasalahan yang ditemukan pada Cisco Catalyst 3750 adalah sistem manajemen VLAN yang masih berbasis command line dan tidak dapat diakses dari jarak jauh. Untuk itu dibuat VLAN berbasis GUI dan dapat diakses dari jarak jauh. VLAN yang dibuat berbasis Web dengan tujuan untuk memberikan kebebasan pemakaian device dan tidak harus terfokus pada satu jenis device saja. VLAN berbasis Web ini dibuat dengan memanfaatkan API Cisco sebagai penghubung antara bahasa pemrograman pada VLAN berbasis Web dengan bahasa pada perangkat lunak Cisco Catalyst 3750. Pemanfaatan Telnet berperan penting dalam pembuatan VLAN berbasis Web ini, dimana Telnet memberikan akses lebih luas pada Cisco Catalyst 3750 untuk diakses di luar aplikasi terminal emulator. Dengan pemanfaatan Telnet administrator cukup mengujungi IP yang telah dibuat untuk mengakses Cisco Catalyst 3750. Akses jarak jauh pada VLAN berbasis Web ini menggunakan port fowarding. Serveo.net adalah salah satu penyedia layanan port fowarding. Dengan memanfaatkan Serveo.net, VLAN berbasis Web yang masih dalam server local dapat diakses dari jarak jauh meski tanpa IP publik. Hasil pengujian pada penelitian ini menunjukkan bahwa VLAN berbasis Web terbukti dapat melakukan konfigurasi VLAN sehingga dapat digunakan untuk mengatur hubungan antar komputer sesuai dengan kebutuhan pada jaringan yang digunakan. Kata kunci : VLAN , API Cisco, Telnet, port fowarding, Cisco Catalyst 3750.', 11611143, 10904068),
('dd5d7e', 15030028, 'SISTEM IDENTIFIKASI KERUSAKAN MESIN PADA PESAWAT BRAVO AS202 MENGGUNAKAN BACKWARD CHAINING BERBASIS WEBSITE', 'SISTEM IDENTIFIKASI KERUSAKAN MESIN PADA PESAWAT BRAVO AS202 MENGGUNAKAN BACKWARD CHAINING BERBASIS WEBSITE Oleh Erni Jumiyanti 15030028 INTISARI Pada penelitian ini membahas tentang perancangan dan penerapan perangkat lunak berbasis website pada sebuah mesin pesawat militer latih yaitu Pesawat Bravo dengan seri AS202. Dengan adanya perangkat lunak ini mampu digunakan untuk mengetahui gejala kerusakan dalam mesin pesawat di luar perawatan (Inspection) menggunakan pendekatan Backward Chaining, untuk menentukan sebuah fakta yang mendukung hipotesa-hipotesa tersebut, dengan pendekatan yang ada diharapkan mampu untuk mengidentifikasi adanya kerusakan pada mesin Pesawat Bravo AS202. Kecelakaan pesawat komersil ataupun militer banyak mengakibatkan banyak korban, selain itu memberikan banyak kerugian bagi semua pihak. Kecelakaan pesawat militer yang telah terjadi selama ini selalu dikaitkan dengan banyak faktor seperti: human error, climate, maupun kerusakan engine. Dalam mengurangi resiko kerusakan pesawat militer maka dibutuhkan perawatan pada pesawat. Dalam penelitian ini menghasilkan sebuah aplikasi berbasis website yang berfungsi sebagai sistem identifikasi kerusakan mesin dengan menggunakan Backward Chaining yang mempermudah teknisi dalam mencari informasi kerusakan pada mesin Pesawat Bravo AS202. Kata Kunci : Bravo AS202, Backward Chaining, Website\r\n', 11611143, 2147483647),
('f6ae4e', 15030036, 'Pemanfaatan Firebase Pada Aplikasi Inventaris Guna Mendukung Usaha Mikro Kecil dan Menengah (UMKM) (Studi Kasus Kabupaten Gunung Kidul)', 'PEMANFAATAN FIREBASE PADA APLIKASI INVENTARIS GUNA MENDUKUNG USAHA MIKRO KECIL DAN MENENGAH (UMKM) (STUDI KASUS KABUPATEN GUNUNG KIDUL) Adetya Dyas Saputra 15030036 INTISARI UMKM adalah salah satu ujung perekonomian yang berdiri sendiri dan memiliki potensi perkembangan yang besar, salah satunya di Gunungkidul, Yogyakarta. Beberapa kendala pada bisnis UMKM ini salah satunya yaitu pada pemasaran dan manajemen produk, dimana para pelaku UMKM hanya dikenal di daerahnya saja dan kesulitan dalam memanajemen produknya. Dukungan dari sisi teknologi sangat diperlukan untuk meningkatkan laju perekonomian UMKM demi mengatasi masalah tersebut, dengan biaya yang minim serta mampu bekerja dengan baik di Kabupaten Gunungkidul dimana masih banyak daerah yang sulit mendapatkan sinyal untuk melakukan pemasaran dengan menggunakan smartphone. Firebase adalah platform buatan Google yang memiliki fitur unggulan realtime database yang sangat cocok untuk menanggulangi masalah tersebut karna kemampuannya yaitu offline-capability. Ada 2 aplikasi yang dibuat, untuk pelaku bisnis UMKM yang disebut Venstta Mitra dan untuk konsumen yang disebut Venstta. Venstta Mitra berfungsi untuk memasarkan produk UMKM serta melakukan manajemen stok, sedangkan Venstta berfungsi sebagai katalog produk UMKM. Berdasarkan pengujian yang diperoleh menggunakan skala Likert, Venstta Mitra memiliki skor pengujian fungsi fitur utama sebesar 78,8% dan uji UI/UX sebesar 69,6% sedangkan Venstta memiliki skor pengujian fungsi fitur utama sebesar 85,3% dan Uji UI/UX sebesar 70,2%, sehingga kedua aplikasi tersebut berjalan dan dapat diterapkan oleh kedua belah pihak. Kata kunci : Gunungkidul, Inventaris, UMKM, Firebase, Android', 11611144, 11611143);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_dp`
--

CREATE TABLE `status_dp` (
  `no_reg` int(5) NOT NULL,
  `nip` int(10) NOT NULL,
  `jlh_siswa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `no_reg` varchar(10) NOT NULL,
  `mahasiswa` int(10) NOT NULL,
  `judul_skripsi` varchar(200) NOT NULL,
  `abstrak` text NOT NULL,
  `dp_satu` int(10) NOT NULL,
  `dp_dua` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`no_reg`, `mahasiswa`, `judul_skripsi`, `abstrak`, `dp_satu`, `dp_dua`) VALUES
('139c3e', 15030028, 'SISTEM IDENTIFIKASI KERUSAKAN MESIN PADA PESAWAT BRAVO AS202 MENGGUNAKAN BACKWARD CHAINING BERBASIS WEBSITE', 'SISTEM IDENTIFIKASI KERUSAKAN MESIN PADA PESAWAT BRAVO AS202 MENGGUNAKAN BACKWARD CHAINING BERBASIS WEBSITE Oleh Erni Jumiyanti 15030028 INTISARI Pada penelitian ini membahas tentang perancangan dan penerapan perangkat lunak berbasis website pada sebuah mesin pesawat militer latih yaitu Pesawat Bravo dengan seri AS202. Dengan adanya perangkat lunak ini mampu digunakan untuk mengetahui gejala kerusakan dalam mesin pesawat di luar perawatan (Inspection) menggunakan pendekatan Backward Chaining, untuk menentukan sebuah fakta yang mendukung hipotesa-hipotesa tersebut, dengan pendekatan yang ada diharapkan mampu untuk mengidentifikasi adanya kerusakan pada mesin Pesawat Bravo AS202. Kecelakaan pesawat komersil ataupun militer banyak mengakibatkan banyak korban, selain itu memberikan banyak kerugian bagi semua pihak. Kecelakaan pesawat militer yang telah terjadi selama ini selalu dikaitkan dengan banyak faktor seperti: human error, climate, maupun kerusakan engine. Dalam mengurangi resiko kerusakan pesawat militer maka dibutuhkan perawatan pada pesawat. Dalam penelitian ini menghasilkan sebuah aplikasi berbasis website yang berfungsi sebagai sistem identifikasi kerusakan mesin dengan menggunakan Backward Chaining yang mempermudah teknisi dalam mencari informasi kerusakan pada mesin Pesawat Bravo AS202. Kata Kunci : Bravo AS202, Backward Chaining, Website\r\n', 11611143, 2147483647),
('1456a3', 15030036, 'Pemanfaatan Firebase Pada Aplikasi Inventaris Guna Mendukung Usaha Mikro Kecil dan Menengah (UMKM) (Studi Kasus Kabupaten Gunung Kidul)', 'PEMANFAATAN FIREBASE PADA APLIKASI INVENTARIS GUNA MENDUKUNG USAHA MIKRO KECIL DAN MENENGAH (UMKM) (STUDI KASUS KABUPATEN GUNUNG KIDUL) Adetya Dyas Saputra 15030036 INTISARI UMKM adalah salah satu ujung perekonomian yang berdiri sendiri dan memiliki potensi perkembangan yang besar, salah satunya di Gunungkidul, Yogyakarta. Beberapa kendala pada bisnis UMKM ini salah satunya yaitu pada pemasaran dan manajemen produk, dimana para pelaku UMKM hanya dikenal di daerahnya saja dan kesulitan dalam memanajemen produknya. Dukungan dari sisi teknologi sangat diperlukan untuk meningkatkan laju perekonomian UMKM demi mengatasi masalah tersebut, dengan biaya yang minim serta mampu bekerja dengan baik di Kabupaten Gunungkidul dimana masih banyak daerah yang sulit mendapatkan sinyal untuk melakukan pemasaran dengan menggunakan smartphone. Firebase adalah platform buatan Google yang memiliki fitur unggulan realtime database yang sangat cocok untuk menanggulangi masalah tersebut karna kemampuannya yaitu offline-capability. Ada 2 aplikasi yang dibuat, untuk pelaku bisnis UMKM yang disebut Venstta Mitra dan untuk konsumen yang disebut Venstta. Venstta Mitra berfungsi untuk memasarkan produk UMKM serta melakukan manajemen stok, sedangkan Venstta berfungsi sebagai katalog produk UMKM. Berdasarkan pengujian yang diperoleh menggunakan skala Likert, Venstta Mitra memiliki skor pengujian fungsi fitur utama sebesar 78,8% dan uji UI/UX sebesar 69,6% sedangkan Venstta memiliki skor pengujian fungsi fitur utama sebesar 85,3% dan Uji UI/UX sebesar 70,2%, sehingga kedua aplikasi tersebut berjalan dan dapat diterapkan oleh kedua belah pihak. Kata kunci : Gunungkidul, Inventaris, UMKM, Firebase, Android', 11611144, 11611143),
('16ff', 15030006, 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PRO', 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PROGRAMMING INTERFACE (API) DARI CISCO Oleh Deno Daseftra Cessara 15030006 INTISARI VLAN merupakan salah satu teknologi komputer yang saat ini sangat dibutuhkan. Hal ini dikarenakan VLAN dapat membagi satu jaringan pada perangkat switch menjadi bagian-bagian kecil jaringan lain. Cisco Catalyst 3750 merupakan perangkat switch yang sudah menyediakan teknologi VLAN. Permasalahan yang ditemukan pada Cisco Catalyst 3750 adalah sistem manajemen VLAN yang masih berbasis command line dan tidak dapat diakses dari jarak jauh. Untuk itu dibuat VLAN berbasis GUI dan dapat diakses dari jarak jauh. VLAN yang dibuat berbasis Web dengan tujuan untuk memberikan kebebasan pemakaian device dan tidak harus terfokus pada satu jenis device saja. VLAN berbasis Web ini dibuat dengan memanfaatkan API Cisco sebagai penghubung antara bahasa pemrograman pada VLAN berbasis Web dengan bahasa pada perangkat lunak Cisco Catalyst 3750. Pemanfaatan Telnet berperan penting dalam pembuatan VLAN berbasis Web ini, dimana Telnet memberikan akses lebih luas pada Cisco Catalyst 3750 untuk diakses di luar aplikasi terminal emulator. Dengan pemanfaatan Telnet administrator cukup mengujungi IP yang telah dibuat untuk mengakses Cisco Catalyst 3750. Akses jarak jauh pada VLAN berbasis Web ini menggunakan port fowarding. Serveo.net adalah salah satu penyedia layanan port fowarding. Dengan memanfaatkan Serveo.net, VLAN berbasis Web yang masih dalam server local dapat diakses dari jarak jauh meski tanpa IP publik. Hasil pengujian pada penelitian ini menunjukkan bahwa VLAN berbasis Web terbukti dapat melakukan konfigurasi VLAN sehingga dapat digunakan untuk mengatur hubungan antar komputer sesuai dengan kebutuhan pada jaringan yang digunakan. Kata kunci : VLAN , API Cisco, Telnet, port fowarding, Cisco Catalyst 3750.', 11611143, 10904068),
('226e02', 15030043, 'PEMANFAATAN LIBRARY PORTABLE DOCUMENT FORMAT JAVASCRIPT (PDF.js) UNTUK MENGAMANKAN E-BOOK PADA E-LIBRARY SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO', 'PEMANFAATAN LIBRARY PORTABLE DOCUMENT FORMAT JAVASCRIPT (PDF.js) UNTUK MENGAMANKAN E-BOOK PADA E-LIBRARY SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO Oleh Agung Nugraha 15030043 INTISARI Perpustakaan Sekolah Tinggi Teknologi Adisutjipto (STTA) menjadi bagian dan unit penting di STTA yang berdiri sejak tahun 2002. Fungsi perpustakaan STTA yaitu memberikan layanan pinjam dan pengembalian buku yang dilakukan oleh anggota perpustakaan dalam hal ini mahasiswa, dosen dan karyawan STTA. Proses peminjaman secara manual dengan buku yang berwujud secara fisik ini telah berlangsung hingga saat ini. Buku yang jumlahnya selalu bertambah setiap tahun sangat menyita ruang yang ada di perpustakaan, sehingga perlu dikaji agar bentuk buku ini tidak lagi berwujud fisik tetapi digital atau paperless sehingga dapat disimpan di komputer server. Bentuk perpustakaan seperti ini dikenal sebagai perpustakaan digital atau e-library. E-library merupakan perpustakaan modern sebagai tempat yang menyediakan sumber informasi pendidikan dengan memberikan kemudahan dan keamanan yang lebih. Alur yang ada pada aplikasi tidak jauh berbeda dengan alur yang ada pada perpustakaan manual. Keamanan menjadi bagian penting dari sebuah aplikasi, dengan melakukan pembatasan terhadap akses pada jaringan, akses dokumen pdf dan implementasi PDF Viewer menggunakan library PDF.js dengan melakukan render dokumen pdf ke dalam canvas mampu mengahalau pengunduhan secara ilegal. Berdasarkan dari hasil pengujian, aplikasi e-library dapat berjalan dengan baik. Pada kecepatan buka dokumen pdf dipengaruhi oleh kecepatan server, konten yang ada didalam pdf, dan ukuran file pdf. Kata Kunci : E-library, library PDF.js, PDF Viewer, Keamanan. UTILIZATION OF PORTABLE DOCUMENT FORMAT JAVASCRIPT (PDF.js) LIBRARY TO SECURE E-BOOK IN SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO E-LIBRARY by Agung Nugraha 15030043 ABSTRACT Established in 2002, Sekolah Tinggi Teknologi Adisutjipto (STTA) Library become an important part of STTA. The function of STTA’s Library it self is to provide books rental and return services, in this case the students, lecturers, and the employees. Process of borrowing manually with tangible books have been physically present today. Amount of the books which always increasing every year are very confiscated place in the library, so it should be suggested that the form but digital form or paperless, so it can be store on the computer server. These types of libraries known as digital libraries or e-library. The e-library is a modern library that provides educational resources with greater ease and security. Working systems in this application same with existsing manual libraries. Security also become an essential part of an application by restricting access to the network, access PDF documents and implementing PDF viewer using the PDF.js library by rendering the PDF document into the cavas is able to minimize illegal downloads. Based on testing result, the e-library application can run well. The speed to open PDF document is affected by server speed, the content in the PDF, and PDF file size. Keywords : E-library, PDF.js library, PDF Viewer, Security.', 10303032, 11409116),
('29b543', 15030020, 'SISTEM PENDUKUNG KEPUTUSAN BERBASIS ANDROID UNTUK MENENTUKAN KELAYAKAN SISWA PENERIMA REWARD MENGGUNAKAN METODE WEIGHTED PRODUCT', 'SISTEM PENDUKUNG KEPUTUSAN BERBASIS ANDROID UNTUK MENENTUKAN KELAYAKAN SISWA PENERIMA REWARD MENGGUNAKAN METODE WEIGHTED PRODUCT Novanda Sandiantara 15030020 INTISARI Sekolah Menengah Kejuruan Bina Harapan Sleman memiliki dua jurusan yaitu Teknik Komputer dan Jaringan Serta Teknik Pemboran Minyak. Adanya peningkatan kualitas belajar mengajar baik secara akademik dan non akademik yang semakin maju di SMK Bina Harapan, akan menambah motivasi siswa untuk mendapat reward. Reward akan diberikan kepada siswa berdasarkan kriteria-kriteria yang sudah ditetapkan oleh guru-guru. Terdapat empat kriteria yang digunakan untuk menentukan reward yaitu nilai rapot, absen, extrakurikuler, dan sikap. Kriteria-kriteria tersebut kemudian diolah menggunakan aplikasi sistem pendukung keputusan berbasis Android. Aplikasi sistem pedukung keputusan digunakan untuk menentukan siswa layak mendapat reward yang diolah menggunakan metode Weighted Product. Kemudian data alternatif yang digunakan adalah siswa SMK Bina Harapan kelas 12 yang berjumlah 35 siswa. Hasil dari pengolahan sistem dan manual sudah sesuai dengan hasil perhitungan, vektor V tertinggi dimiliki oleh Veni Nur Aviani dengan nilai 0,03263 dan terendah dimiliki oleh Muhammad Alif Nur I dengan nilai 0,01901. Kata Kunci: Reward, Sistem Pendukung Keputusan, Weighted Product, Android.', 11611144, 10409041),
('317b38', 15030017, 'PEMILIHAN LOKASI OUTBOUND DI GUNUNGKIDUL MENGGUNAKAN METODE MULTI OBJECT OPTIMIZATION ON THE BASE OF RATIO ANALYSIS (MOORA)', 'PEMILIHAN LOKASI OUTBOUND DI GUNUNGKIDUL MENGGUNAKAN METODE MULTI OBJECT OPTIMIZATION ON THE BASE OF RATIO ANALYSIS (MOORA) Oleh Istiqomah Nuraini 15030017 INTISARI Sistem pendukung keputusan adalah sebuah sistem terkomputeriasi yang dapat membantu pengguna dalam mengambil sebuah keputusan. Penerapan SPK ini salah satunya adalah untuk pemilihan lokasi outbound yang berada di Gunungkidul dengan menggunakan metode MOORA. Outbound merupakan metode belajar di alam terbuka yang dilakukan atas dasar pengalaman langsung yang disajikan dalam bentuk permainan, diskusi dan petualangan. Sehingga peserta akan mendapat umpan balik tentang dampak kegiatan yang dilakukan yang berguna untuk pengembangan diri kedepannya. Penerapan Metode MOORA merupakan metode yang dapat menentukan bobot pada setiap kriteria, kemudian dilanjutkan dengan proses perangkingan yang akan menyeleksi alternatif terbaik dari sejumlah alternatif yang ada. Personal Home Page (PHP) merupakan salah satu bahasa pemrograman yang didesain untuk pengembangan web. Dalam penelitian ini dibuatlah aplikasi pemilihan lokasi outbound yang berada di Gunungkidul menggunakan metode MOORA, aplikasi dirancang berbasis website, pengujian ini dilakukan menggunakan pengujian black box. Hasil dari penelitian ini menunujukkan bahwa lokasi terbaik berdasarkan bobot kriteria dan perangkingan dengan beberapa altenatif adalah lokasi Gunung Api Purba Nglanggeran dengan hasil nilai 0.1507, Air Terjun Sri Getuk dengan hasil 0.0909, Kampung Jelok dengan hasil 0.01497, Goa Pindul dengan hasil 0.00182, Pantai Sundak dengan hasil -0.07192, Wulenpari dengan hasil -0.08854, dan yang terakhir adalah pantai indrayanti dengan hasil -0.13179. Kata kunci : Sistem Pendukung Keputusan (SPK), Outbound, MOORA, PHP', 10209011, 2147483647),
('3aa7a3', 15030061, 'FLIGHT SIMULATOR UNTUK TAKE OFF PESAWAT BOEING 737-300 SERIES BERBASIS 3 DIMENSI', 'FLIGHT SIMULATOR UNTUK TAKE OFF PESAWAT BOEING 737-300 SERIES BERBASIS 3 DIMENSI Oleh Muhammad Irfan 15030061 INTISARI Simulator merupakan bentuk peniruan kondisi yang menggambarkan perilaku sesuai dengan kenyataan dimana terdapat interaksi antara pengguna dengan simulasi. Simulator sangat berguna dalam mensimulasikan kejadian-kejadian yang dapat membatu dalam system belajar-mengajar. Hasil dari tugas akhir ini berupa simulator 3D Take-Off pada pesawat Boeing 737-300 berbasis desktop yang bertujuan sebagai media pembelajaran yang berisikan penjelasan materi mengenai take-off dari pesawat Boeing 737-300. Simulator ini memberikan inputan dengan data ideal yang berupa data weight, kecepatan pesawat saat lepas landas, pengaturan flaps, dan jarak untuk memahami pesawat melakukan proses V1, VR, dan V2. Metode pengumpulan data pada pembuatan simulator berupa observasi, analisa kebutuhan sistem dan kepustakaan. Simulator dibangun menggunakan Unity 3D, pemodelan aset 3D menggunakan Blender, dan pemodelan asset 2D menggunakan Photoshop. Pengujian simulasi meliputi uji kelayakan oleh pakar, pengujian Black box dan White Box. Hasil dari pengujian pakar diperoleh dari pemberian kuisioner untuk pakar dan memberikan hasil aplikasi yang dibuat dapat terbantu sebagai media pembelajaran dalam mata kuliah dunia penerbangan, dalam menyampaikan materi take off pada pesawat terbang. Hasil pengujian black box menyatakan bahwa semua fungsi pada simulator berjalan sesuai fungsinya pada Sistem Operasi Windows 7, Windows 8, Windows 10 dengan system type 64-bit. Hasil dari pengujian white box menyatakan bahwa perancangan simulator sesuai dengan hasil eksekusi simulator. Kata Kunci: Simulator Pesawat Terbang, take-off, Boeing 737-300', 10706059, 11001072),
('45b4af', 15030041, 'PERBANDINGAN METODE PROFILE MATCHING DAN WEIGHTED PRODUCT DALAM PENENTUAN CALON PENGAJAR SEKOLAH LUAR BIASA (SLB) BERBASIS WEBSITE (Studi Kasus SLB Pamardi Putra Yogyakarta)', 'PERBANDINGAN METODE PROFILE MATCHING DAN WEIGHTED PRODUCT DALAM PENENTUAN CALON PENGAJAR SEKOLAH LUAR BIASA (SLB) BERBASIS WEBSITE (Studi Kasus SLB Pamardi Putra Yogyakarta) Oleh Dian Fitasari Duru 1503004 ABSTRAK Pada penelitian ini penulis akan membahas tentang perancangan dan penerapan perangkat lunak berbasis website untuk penentuan calon pengajar pada sekolah luar biasa, dimana pada instansi ini menanggani anak-anak berkebutuhan khusus sehingga dibutuhkan pengajar yang sesuai untuk anak-anak tersebut, penentuan calon pengajar harus dilakukan menggunakan sistem penyeleksian yang efektif dan akurat dengan memiliki kriteria sesuai dengan kebutuhkan. Untuk mengetahui calon pengajar yang sesuai, peneliti menerapkan sistem pendukung keputusan sebagai proses penentuan dengan menggunakan metode profile matching dan weighted product sebagai tahap perhitungan perbandingan untuk hasil penetuan calon pengajar. Dalam penelitian ini membandingkan metode profile matching dan weighted product untuk menentukan dan memudahkan sistem penyeleksian calon pengajar SLB yang sesuai dengan kriteria diinginkan. Hasil dari penelitian ini, menghasilkan output yang berbeda. Kata Kunci: Perbandingan Metode Sistem Pendukung Keputusan, Profile Matching, Weighted Product, Website', 10209011, 2147483647),
('6506a4', 15030032, 'PERANCANGAN SISTEM ABSENSI DALAM PENANGANAN PROSES UJIAN BERBASIS PAPERLESS (Studi Kasus : Sekolah Tinggi Teknologi Adisutjipto)', 'PERANCANGAN SISTEM ABSENSI DALAM PENANGANAN PROSES UJIAN BERBASIS PAPERLESS (STUDI KASUS : SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO) Oleh Yasifa Yuri Haqli Sukma 15030032 Intisari Sistem absensi ujian yang ada di STT Adisutjipto saat ini masih menggunakan kertas (manual). Konsep paperless bisa diterapkan dalam sistem absensi ujian. Hasil dari tugas akhir ini berupa perancangan sistem absensi dalam penanganan proses ujian berbasis paperless yang memanfaatkan teknologi QR Code dalam upaya mengurangi penggunaan kertas dan mengefisiensi waktu proses absensi ujian. Sistem absensi dibangun menggunakan bahasa pemrograman PHP dan HTML dengan database PostgreSQL. Pengujian sistem absensi dilakukan secara langsung pada saat ujian. Hasil dari pengujian aplikasi diperoleh bahwa aplikasi absensi berbasis paperless lebih cepat 1 menit 15 detik dibandingkan proses absensi manual. Hasil dari pengujian server diperoleh bahwa database aplikasi absensi menggunakan 13,9 % kapasitas CPU, dan aplikasi absensi ujian menggunakan 0,7 % kapasitas CPU. Kata Kunci: QR Code, Sistem Absensi, Paperless', 10409041, 10904068),
('660e82', 15030038, 'PEMANFAATAN GOOGLE PLAY SERVICE UNTUK MENGUKUR KECEPATAN TERBANG DRONE BERBASIS CLIENT SERVER', 'PEMANFAATAN GOOGLE PLAY SERVICE UNTUK MENGUKUR KECEPATAN TERBANG DRONE BERBASIS CLIENT SERVER Daewu Gus Bintara Putra 15030038 INTISARI Drone sebagai peralatan terbang tanpa pilot telah mengalami perkembangan yang baik dikendalikan menggunakan remote control. Kecepatan drone yang belum dapat diakses pada remote kontrolnya dapat diketahui melalui aplikasi yang berbasis client-server. Aplikasi sisi client ada pada drone dan sisi server ada dibumi. Aplikasi My Drone (client) merupakan aplikasi yang dibawa terbang drone dan Admin Drone (server) merupakan aplikasi untuk memantau kecepatan menggunakan library Google Play Service, data yang didapat dikirim ke aplikasi Admin Drone (server) secara real-time dengan memanfaatkan Google firebase untuk pengiriman data. Dari pengujian yang dilakukan dapat diketahui kecepatan drone saat terbang horisontal, sedangkan saat terbang vertikal kecepatan tidak terdeteksi. Kapasitas baterai juga akan mengalami penurunan saat kecepatan drone 12.583 km/jam dari 60% menjadi 23% karena drone membutuhkan energi dari baterai untuk menggerakkan mesin drone mencapai kecepatan tersebut. Kata kunci : Drone, Google Play Service, Kecepatan Terbang.', 10303032, 11210095),
('6c9843', 15030065, 'ANIMASI PERFORMA MESIN SPEY Mk. 555-15 PADA TURBOJET ENGINE', 'ANIMASI PERFORMA MESIN SPEY Mk. 555-15 PADA TURBOJET ENGINE Oleh Benny Arian Saputra 15030065 INTISARI Turbojet merupakan engine yang masih banyak digunakan pada pesawat terbang. Pada animasi ini menunjukkan performa mesin SPEY Mk. 555-15, menunjukkan adanya perubahan tekanan suhu udara di turbojet ditunjukkan dengan adanya perubahan warna di combustion chamber dan perubahan percepatan perpuataran kompresor. Dalam animasi performa mesin SPEY Mk. 555-15 menggunakan perhitungan dengan inputan Throttle menghasilkan output berupa nilai Thrust, SFC, N1 dan N2 dimana output tersebut hasil dari perhitungan manual yang diinputkan secara sistem agar mempermudah perhitungannya. Dalam pembuatan animasi ini terdapat beberapa proses, yaitu pembuatan modelling turbojet dengan menggunakan Blender, kemudian dilanjutkan dengan proses animation menggunakan Unity. Berdasarkan hasil pengujian black box didapatkan bahwa Animasi Performa Mesin SPEY Mk. 555-15 Pada Turbojet Engine dapat dijalankan pada sistem operasi Windows 7 (64 bit) Windows 8 (64 bit) dan Windows 10 (64 bit). Dan uji pakar didapatkan hasil bahwa animasi ini dapat membantu dosen dalam menyampaikan materi kuliah, informatif, mudah dimengerti, input dan output sudah sesuai. Dari hasil perhitungan inputan Throttle semakin naik maka output nilai Thrust, N1 dan N2 juga akan naik, tetapi nilai Spesific Fuel Consumption (SFC) akan turun. Kata kunci : mesin Turbojet, Thrust, SFC, N1, N2', 10706059, 2147483647),
('73fd39', 15030025, 'PERBANDINGAN METODE SIMPLE MOVING AVERAGE, EXPONENTIAL SMOOTHING, DAN NAIVE METHOD UNTUK PREDIKSI HARGA RUMPUT LAUT DI KOTA TARAKAN BERBASIS ANDROID', '', 11611144, 11409116),
('7ab4b7', 15030013, 'SISTEM PENDUKUNG KEPUTUSAN PRIORITAS PENGAJUAN BEASISWA DIKPORA DIY DAN PPA MENGGUNAKAN METODE MULTI OBJECTIVE OPTIMIZATION ON THE BASIS OF RATIO ANALYSIS (Studi Kasus : Sekolah Tinggi Teknologi Adisu', 'SISTEM PENDUKUNG KEPUTUSAN PRIORITAS PENGAJUAN BEASISWA DIKPORA DIY DAN PPA MENGGUNAKAN METODE MULTI OBJECTIVE OPTIMIZATION ON THE BASIS OF RATIO ANALYSIS (Studi kasus : Sekolah Tinggi Teknologi Adisutjipto) Sulistyo Nugroho 15030013 INTISARI Penentuan prioritas pengajuan beasiswa Dikpora DIY dan PPA di Sekolah Tinggi Teknologi Adisutjipto masih dilakukan dengan cara manual. Dalam menentukan prioritas pengajuan beasiswa maka perlu membutuhkan kriteria pada setiap beasiswa. Dalam menentukan mahasiswa yang berhak menerima beasiswa tersebut, maka metode Multi Objective On The Basis Of Ratio Analysis merupakan metode yang akan digunakan pada proses penentuan beasiswa Dikpora DIY dan PPA karena metode tersebut merupakan sistem multiobjektif untuk pengoptimalan 2 atau lebih kriteria yang yang saling bertentangan secara bersamaan dengan menerapkan 5 langkah proses perhitungan dari memasukan nilai, membuat matriks keputusan, normalisasi, optimasi dan proses perangkingan diurutkan berdasarkan total nilai MOORA dari yang terbesar. Berdasarkan hasil pengujian dengan menggunakan data pendafar beasiswa Dikpora DIY dan PPA tahun 2019, kesamaan perhitungan sistem pendukung keputusan dengan data kemahasiswaan dalam menentukan kandidat yaitu sebesar 100% pada sistem pendukung keputusan prioritas pengajuan beasiswa Dikpora DIY, sedangkan untuk pengujian pada sistem pendukung keputusan prioritas pengajuan beasiswa PPA didapatkan hasil kesamaan perhitungan sistem pendukung keputusan dengan data kemahasiswaan dalam menentukan kandidat berdasarkan program studi menunjukan kesamaan untuk Teknik Elektro sebesar 100%, Teknik Industri 100%, Informatika 75%, Teknik Mesin 80%, Teknik Dirgantara 50%, dan untuk Aeronautika 50%. Kata Kunci : Prioritas Pengajuan Beasiswa, Sistem Pendukung Keputusan, Dikpora DIY, PPA', 10209011, 11611144),
('902383', 15030033, 'PEMANFAATAN RESTFUL API PADA MOBILE BASED TEST UNTUK SERTIFIKASI KARYAWAN PT. GARUDA MAINTENACE FACILTY AEROASIA TBK', 'PEMANFAATAN RESTFUL API PADA MOBILE BASED TEST UNTUK SERTIFIKASI KARYAWAN PT. GARUDA MAINTENACE FACILTY AEROASIA TBK Satya Wira Wicaksana 15030033 INTISARI Dapat merancang dan membuat aplikasi Mobile Based Test untuk sertifikasi karyawan di PT. Garuda Maintenance Facility dengan memanfaatkan restful API. Untuk membuat aplikasi Mobile Based Test menggunakan 2 framework yaitu Android Studio dan Codeigneter. Android Studio digunakan untuk membuat aplikasi GMFAdmin untuk memonitor tes sertifikasi, sedangkan GMF AeroAsia untuk melakukan tes sertifikasi. Codeigneter digunakan untuk membuat Application Programming Interface (API) untuk media transfer data dari aplikasi ke database yang tersimpan di database. Pengujian Mobile Based Test meliputi pengujian fungsionalitas dan uji Whitebox. Berdasarkan uji fungsionalitas pada aplikasi GMFAdmin menyatakan semua fungsi dan button berjalan sesuai fungsinya, sedangkan pada aplikasi GMF AeroAsia semua fungsi dan button juga berjalan sesuai fungsinya. Pada pengujian menggunakan Whitebox aplikasi GMFAdmin terhadap 3 path selama 3 hari didapatkan tingkat keberhasilan sebesar 100%, sedangkan pengujian Whitebox pada aplikasi GMF AeroAsia terhadap 8 path selama 3 hari didapatkan tingkat keberhasilan sebesar 100%. Kata kunci : Restful, API, Mobile, Test, Sertifikasi', 11611144, 11210095),
('9a08b0', 15030024, 'MEDIA PEMBELAJARAN KOMPONEN PESAWAT TERBANG TENTANG CARA KERJA TURBOFAN DENGAN SIKLUS IDEAL', 'MEDIA PEMBELAJARAN KOMPONEN PESAWAT TERBANG TENTANG CARA KERJA TURBOFAN DENGAN SIKLUS IDEAL Oleh Geby Nauly Pakpahan 15030024 INTISARI Turbofan adalah salah satu bagian dari pesawat terbang. Dalam pembelajaran komponen pesawat terbang masih terdapat kesulitan untuk mempelajari cara kerja pada turbofan. Pada media pembelajaran ini perubahan tekanan suhu udara di turbofan ditunjukkan dengan adanya perubahan warna, suara dan perputaran mesin. Pada media pembelajaran ini juga menurut siklus ideal gaya thrust sebesar 1 sampai 6 rpm, ini sesuai dengan keadaan engine yang berada di ground yang tidak terpengaruh oleh ketinggian, velocity dan kecepatan suara. Nilai F/mo 5930,794 lbf/(lbm/sec) sama dengan 6rpm. Dalam pembuatan simulasi turbofan terdapat beberapa proses. Proses petama adalah pembuatan modelling turbofan menggunakan Blender. Setelah melakukan proses modelling selanjutnya proses animation menggunakan Unity. Berdasarkan hasil pengujian black box dan white box terhadap simulasi cara kerja gas turbine pada turbofan berbasis desktop dapat disimpulkan bahwa berhasil. Kata kunci : Turbofan, gaya thrust, engine, siklus ideal', 10706059, 10901061),
('9e6b8c', 15030052, 'PENENTUAN PRIORITAS PENGELUARAN KEBUTUHAN NON RUTIN MENGGUNAKAN METODE MULTI-ATTRIBUTIVE BORDER APPROXIMATION AREA COMPARISON (MABAC) DI MASJID AN-NUUR PANDEYAN', 'PENENTUAN PRIORITAS PENGELUARAN KEBUTUHAN NON RUTIN MENGGUNAKAN METODE MULTI-ATTRIBUTIVE BORDER APPROXIMATION AREA COMPARISON (MABAC) DI MASJID AN-NUUR PANDEYAN\r\n', 10209011, 10301028),
('a324', 15030016, 'MONITORING INTERFACES ETHERNET PADA CISCO CATALYST 3750 UNTUK MENJAMIN KEAMANAN PENGGUNAAN JARINGAN ', 'MONITORING INTERFACES ETHERNET PADA CISCO CATALYST 3750 UNTUK MENJAMIN KEAMANAN PENGGUNAAN JARINGAN KOMPUTER Oleh Dwi Nurhayati 15030016 INTISARI Di laboratorium komputer suatu instansi terdapat banyak perangkat komputer yang terhubung dengan jaringan, hal tersebut berdampak pada peningkatan kebutuhan jaringan dalam hal ini penggunaan bandwidth. Sehingga administrator membutuhkan banyak waktu untuk mengelola jaringan seperti monitoring dan management, contohnya pada perangkat Cisco Catalyst 3750. Hal ini menuntut administrator harus berada di tempat yang sama dengan perangkat jaringan yang sedang dikelola. Oleh karena itu, diperlukan sistem yang dapat memonitoring jaringan dari jarak jauh. Dimana sistem monitoring interfaces ethernet bekerja secara real time dan mampu mengatasi penggunaan jaringan komputer yang terus mengalami peningkatan. Sistem monitoring interfaces ethernet menerapkan port security pada sistem jaringan komputer yang berfungsi sebagai sistem keamanan jaringan komputer agar dapat mengurangi penggunaan jaringan di luar perangkat komputer yang telah didaftarkan atau diijinkan. Sistem monitoring interfaces ethernet yang berbasis Web ini nantinya akan digunakan untuk monitoring dan management perangkat Cisco Catalyst 3750 dengan memanfaatkan API. Hasil dari pengujian menunjukkan bahwa aplikasi dapat memudahkan administrator dalam mengelola jaringan, karena semua fungsi atau perintah yang ada di sistem monitoring interfaces ethernet sama dengan perintah yang ada di-command line. Selain itu, aplikasi monitoring interfaces ethernet dapat berjalan di Browser pada perangkat personal komputer dan smartphone secara responsive. Kata kunci : Port security, monitoring, interfaces ethernet, Cisco Catalyst, API.', 11611143, 10904068),
('af1c62', 15030049, 'SISTEM PENDUKUNG KEPUTUSAN PENENTUAN GUEST STAR PADA E-MARKETPLACE BERBASIS WEB MENGGUNAKAN METODE WEIGHTED PRODUCT', 'SISTEM PENDUKUNG KEPUTUSAN PENENTUAN GUEST STAR PADA E-MARKETPLACE BERBASIS WEB MENGGUNAKAN METODE WEIGHTED PRODUCT Muhammad Ali Sofyan 15030049 INTISARI E-marketplace didefinisikan sebagai sebuah tempat jual beli barang dan jasa secara online yang dikelola oleh satu pihak yaitu developer, kemudian produk yang ada di dalamnya disediakan oleh pihak lain yaitu penjual. Dalam sebuah event biasanya ada bintang tamu (guest star) yang diminta penyelenggara acara untuk tampil sebagai pengisi acara disebuah event. Para penyelenggara event sering kali kesulitan dalam mencari guest star yang sesuai dengan kebutuhan untuk acaranya, di sisi lain para pengisi event seperti musisi, penari dan lain sebagainya juga kesulitan dalam mempromosikan jasanya. Metode weighted product dapat diterapkan untuk aplikasi sistem pendukung keputusan penentuan guest star pada e-marketplace berbasis web. Tujuan dari tugas akhir ini adalah untuk memberikan alternatif keputusan pemilihan guest star yang sesuai kriteria dengan menggunakan metode weighted product dan menciptakan sebuah pasar online untuk mendapatkan guest star yang sesuai dengan yang diharapkan. Terdapat tiga kriteria yang digunakan untuk menentukan guest star pada e-marketplace ini, yaitu jenis pertunjukan, harga dan lokasi. Sedangkan untuk alternatif yang diujikan sebanyak sembilan alternatif yang terdiri dari guest star yang ada di wilayah DIY. Hasil dari uji fungsionalitas berdasarkan pengujian black box menggunakan browser chrome, mozilla, opera dan Microsoft edge menyatakan bahwa semua fungsi validasi dan button yang ada pada e-marketplace dapat berjalan sesuai dengan fungsinya. Pengujian hasil implementasi sudah sesuai dengan perhitungan weighted product, yaitu guest star yang mempunyai hasil tertinggi dari keseluruhan adalah Frengki Sermadi dengan nilai 0,135234, sedangkan guest star yang mempunyai hasil terendah dari keseluruhan adalah Sanggar Titik Dua dengan nilai 0,083222. Kata Kunci: Sistem Pendukung Keputusan, Weighted Product, E-marketplace, Guest star, Website', 11210095, 11611144),
('c99c7d', 15030031, 'PENCARIAN KATA DASAR MENGGUNAKAN METODE PREFIX DAN POSTFIX BERBASIS WEB', 'PENCARIAN KATA DASAR MENGGUNAKAN METODE PREFIX DAN POSTFIX BERBASIS WEB Oleh Desynta Karmila Sari 15030031 INTISARI Kata dasar adalah kata yang belum mengalami penambahan, pengulangan dan penggabungan dengan kata lain. Kata dasar dapat dihasilkan dari sebuah kata berimbuhan dengan cara menghilangkan imbuhan awalan, akhiran atau gabungan awalan dan akhiran. Metode prefix yaitu menghilangkan nol atau lebih simbol karakter dari belakang sedangkan metode postfix yaitu menghilangkan nol atau lebih simbol karakter dari depan. Dalam penelitian ini dibuatlah sebuah aplikasi pencarian kata dasar dengan menggunakan metode prefix dan postfix dengan aplikasi yang dirancang berbasis web, pengujian yang dilakukan yang pertama dengan menggunakan pengujian black box dan hasil yang didapatkan sesuai dengan rancangan yang telah dibuat yaitu tombol pada aplikasi apabila diklik dapat menuju ke halaman yang diinginkan dan kolom pada aplikasi apabila diinputkan, hasil inputan sesuai dengan yang diharapkan. Pengujian yang kedua dengan pengujian fungsional didapatkan keberhasilan sebesar 60,20% dan kegagalan sebesar 39,80%. Pencarian kata dasar dengan menggunakan metode prefix dan postfix cocok digunakan, jika kata berimbuhan berupa kata berawalan, berakhiran, atau berawalan dan berakhiran dengan jumlah huruf yang sama. Kata Kunci: Kata Dasar, Metode Prefix, Metode Postfix', 11611144, 11409116),
('d73c5e', 15030027, 'KRIPTOGRAFI DENGAN METODE BAHASA JAWA WALIKAN YOGYAKARTA BERBASIS WEB', 'KRIPTOGRAFI DENGAN METODE BAHASA JAWA WALIKAN YOGYAKARTA BERBASIS WEB Oleh Ellyana Mega Dewantri Astuti 15030027 INTISARI Kriptografi merupakan suatu ilmu yang yang mempelajari tentang pengamanan sebuah pesan. Cara pengamanan pesan dilakukan dengan mengacak pesan (enkripsi) dan dikembalikan lagi kebentuk aslinya (deskripsi). Metode yang digunakan dalam kriptografi yaitu Bahasa Walikan Yogyakarta di mana metode pembentukannya menggunakan pergeseran letak huruf Aksara Jawa. Bahasa Walikan Yogyakarta menggunakan pergeseran sepuluh huruf Aksara Jawa atau dengan aturan baris pertama Aksara Jawa digeser baris ke tiga, baris ke dua aksara jawa digeser menjadi baris ke empat. Berdasarkan pengujian aplikasi ini dapat berjalan dengan lancar diberbagai jenis perangkat dengan syarat memiliki web browser dan koneksi internet. Namun dalam proses enkripsi dan proses deskripsi pada aplikasi ini terdapat kendala jika sebuah kata yang dienkripsi terdapat huruf m dan p berurutan maka dalam pengembalian kata tidak dapat dilakukan dengan benar. Kata Kunci : Kriptografi, Bahasa Walikan, Berbasis Web', 10303032, 11611144),
('df14', 15030007, 'PENGGUNAAN LINEAR CONGRUENT METHOD PADA COMPUTER BASED TEST UNTUK SERTIFIKASI KARYAWAN PT. GMF AEROASIA TBK', 'The test is something that serves to test the quality of something of intelligence, ability, learning outcomes. One of the results of the exam is used as valid proof that can be used, for example for a promotion or graduation. The certification examination system at PT GMF AeroAsia Tbk is still using paper (Paper Based Test), the test organizer has to select the test results one by one and the participants have to go to the test room at the time and place determined by the test organizer. This examination system is considered ineffective. To resolve this, it is necessary to create a certification examination system that uses a computer to replace the current examination system. The system is designed as a computer based test using the Linear Congruent Method as a randomizer to order questions to save time and reduce paper usage, and guarantees the quality of the results of the exam more accountable. Keywords : Examination, Computer Based Test, Linear Congruent Method, Paper Based Test.\r\n', 10209011, 10904068),
('e4c846', 15030066, 'ANALISIS PENGGABUNGAN KNOWLEDGE ACQUISITION PROSES HAARTRAINING UNTUK DETEKSI OBYEK PADA METODE VIOLA JONES', 'ANALISIS PENGGABUNGAN KNOWLEDGE ACQUISITION PROSES HAARTRAINING UNTUK DETEKSI OBYEK PADA METODE VIOLA JONES Oleh Nur Hanifah 15030066 INTISARI Proses Haartraining membutuhkan sumber daya komputer yang sangat tinggi dan waktu yang berbanding lurus dengan banyaknya data training. Jumlah data training menentukan akurasi pendeteksian obyek. Proses training yang lama diakibatkan karena komputer mempunyai spesifikasi yang rendah dan dengan pembagian file training akan mempercepat proses pembentukan file vector, meminimalisir kesalahan saat melakukan pemotongan fitur Haar pada obyek positif dan juga meminimalisir kesalahan yang terjadi saat melakukan proses training. Permasalahan yang muncul berikutnya bagaimana mengatasi hal tersebut sehingga di peroleh pengetahuan yang lebih baik. Penelitian ini memberikan usulan dan hasil analisis proses penggabungan knowledge acquisition serta pengaruhnya terhadap akurasi pendeteksian obyek menggunakan metode Viola-Jones dengan hasil akhir tingkat kesalahan yang terjadi sebesar 23.689% dan tingkat obyek terdeteksi sebesar 65.584%. Metode Viola Jones menggunakan file classifier yang diperoleh dari proses training. Kata Kunci : Knowledge Acquisition, Haartraining, Pendeteksian Obyek, Viola Jones', 10409041, 11210095),
('f285c3', 15030056, 'SIMULATOR MODUL PEMBELAJARAN MAINTENANCE KOMPONEN AVIONICS PADA SSCVR PN. 980-6022-001 DAN AIRCRAFT BATTERY PN. 405CH (Studi Kasus : Avionics Shop PT GMF AeroAsia Tbk)', 'SIMULATOR MODUL PEMBELAJARAN MAINTENANCE KOMPONEN AVIONICS PADA SSCVR PN. 980-6022-001 DAN AIRCRAFT BATTERY PN. 405CH (Studi Kasus : Avionics Shop PT GMF AeroAsia Tbk) Dwinny Puspa Dinar Saputri 15030056 INTISARI Perkembangan teknologi dapat dimanfaatkan sebagai penunjang dalam mengembangkan pembelajaran inovatif salah satunya menggunakan simulasi sebagai media pembelajaran interaktif. Hasil dari tugas akhir ini berupa simulator modul pembelajaran maintenance komponen avionics berbasis Android dan Desktop yang berisi materi pengenalan, pembongkaran, dan perakitan komponen avionics pada SSCVR PN. 980-6022-001 dan Aircraft Battery PN. 405CH yang bertujuan membantu proses pembelajaran di Avionics Shop PT GMF AeroAsia Tbk. Simulator dibangun menggunakan unity 3D dan pemodelan aset menggunakan blender. Pengujian simulator meliputi uji fungsionalitas dan uji kelayakan oleh pakar sebagai proses validasi dan verifikasi mengenai kriteria penilaian. Hasil dari uji fungsionalitas menyatakan bahwa semua fungsi dan button yang ada pada simulator dapat berjalan dengan baik sesuai dengan fungsinya. Hasil dari uji kelayakan diperoleh nilai rata-rata 90,4 dimana termasuk dalam kategori “Sangat Bagus” dan dinyatakan bahwa simulator telah memenuhi kebutuhan yang mendasari perancangan simulator, memenuhi kebutuhan semua pihak yang berkepentingan, dan dapat dijalankan dengan baik pada beberapa platform yang berbeda. Kata Kunci: Simulator pembelajaran maintenance komponen avionics, assemble-disassemble part component, Avionics, SSCVR, Aircraft Battery', 10409041, 10301030),
('fac7e9', 15030039, 'MAINTENANCE APLIKASI AD/SB MANAGEMENT DI PT. GMF AEROASIA TBK', '', 11210095, 10301030);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `program_studi` (`program_studi`);

--
-- Indeks untuk tabel `kata_kunci`
--
ALTER TABLE `kata_kunci`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `prodi` (`prodi`);

--
-- Indeks untuk tabel `pecah_kata`
--
ALTER TABLE `pecah_kata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_doc` (`no_doc`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`kd_program_studi`);

--
-- Indeks untuk tabel `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `status_dp`
--
ALTER TABLE `status_dp`
  ADD PRIMARY KEY (`no_reg`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`no_reg`),
  ADD KEY `dp_satu` (`dp_satu`),
  ADD KEY `dp_dua` (`dp_dua`),
  ADD KEY `mahasiswa` (`mahasiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kata_kunci`
--
ALTER TABLE `kata_kunci`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pecah_kata`
--
ALTER TABLE `pecah_kata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`program_studi`) REFERENCES `program_studi` (`kd_program_studi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi`) REFERENCES `program_studi` (`kd_program_studi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pecah_kata`
--
ALTER TABLE `pecah_kata`
  ADD CONSTRAINT `pecah_kata_ibfk_1` FOREIGN KEY (`no_doc`) REFERENCES `sample` (`no_reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `status_dp`
--
ALTER TABLE `status_dp`
  ADD CONSTRAINT `status_dp_ibfk_1` FOREIGN KEY (`no_reg`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD CONSTRAINT `tugas_akhir_ibfk_1` FOREIGN KEY (`dp_satu`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tugas_akhir_ibfk_2` FOREIGN KEY (`mahasiswa`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tugas_akhir_ibfk_3` FOREIGN KEY (`dp_dua`) REFERENCES `dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
