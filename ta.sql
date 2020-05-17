-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2020 at 03:13 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `program_studi`, `pendidikan_terakhir`, `foto`) VALUES
(10209011, 'Anton Setiawan H, S.Kom., MT', 'TF3', 'S2', 'anton.jpeg'),
(10301028, 'YULIANI INDRIANINGSIH, ST, M.Kom', 'TF3', 'S2', 'yuli.jpeg'),
(10303032, 'HERO WINTOLO, M.Kom.', 'TF3', 'S2', 'hero.jpeg'),
(10409041, 'HARUNO SAJATI, S.T., M.Eng', 'TF3', 'S2', 'jati1.jpeg'),
(10706059, 'NURCAHYANI DR., S.Far.Apt., M.T.', 'TF3', 'S2', 'nurcahyani.jpeg'),
(10904068, 'SUDARYANTO, S.T.,M.Eng', 'TF3', 'S2', 'sudaryanto1.jpeg'),
(11210095, 'ANGGRAENI K, S.Kom.,M.Cs', 'TF3', 'S2', 'aggra2.jpeg'),
(11409116, 'HARLIYUS AGUSTIAN, S.Kom., M.Cs.', 'TF3', 'S2', 'harlee.jpeg'),
(11611143, 'ASTIKA AYUNING TYAS, S.KOM.,M.Cs', 'TF3', 'S2', 'astika.jpeg'),
(11611144, 'ASIH PUJIASTUTI, S.KOM., M.CS.', 'TF3', 'S2', 'asih.jpeg'),
(2147483647, 'Dra. MARDIANA IRAWATY, M.Sc.St.', 'TF3', 'S3', 'mardiana.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`) VALUES
(15030006, 'DENO DASEFTRA CESSARA', 'TF3'),
(15030007, 'RETNO DEWI IRIANTI ', 'TF3'),
(15030011, 'FAJAR TAQY WICAHYA', 'TF3'),
(15030016, 'DWI NURHAYATI', 'TF3'),
(15030017, 'ISTIQOMAH NURAINI', 'TF3'),
(15030019, 'MUHAMMAD ZAENUDIN SANI ', 'TF3'),
(15030024, 'GEBY NAULY PAKPAHAN', 'TF3'),
(15030025, 'MUHAMMAD VARIAN SAYOGA', 'TF3'),
(15030027, 'ELLYANA MEGA DEWANTRI ASTUTI', 'TF3'),
(15030028, 'ERNI JUMIYANTI', 'TF3'),
(15030031, 'DESYNTA KARMILA SARI', 'TF3'),
(15030032, 'YASIFA YURI HAQLI SUKMA', 'TF3'),
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
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `kd_program_studi` varchar(10) NOT NULL,
  `program_studi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`kd_program_studi`, `program_studi`) VALUES
('TE2', 'Teknik Elektro'),
('TF3', 'Informatika'),
('TP1', 'Teknik Penerbangan');

-- --------------------------------------------------------

--
-- Table structure for table `req_bimbingan`
--

CREATE TABLE `req_bimbingan` (
  `id_reg` varchar(10) NOT NULL,
  `mahasiswa` int(10) NOT NULL,
  `judul_proposal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status_dp`
--

CREATE TABLE `status_dp` (
  `no_reg` int(5) NOT NULL,
  `nip` int(10) NOT NULL,
  `jlh_siswa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
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
-- Dumping data for table `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`no_reg`, `mahasiswa`, `judul_skripsi`, `abstrak`, `dp_satu`, `dp_dua`) VALUES
('16ff', 15030006, 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PRO', 'VIRTUAL LOCAL AREA NETWORK (VLAN) BERBASIS WEB PADA CISCO CATALYST 3750 MEMANFAATKAN APPLICATION PROGRAMMING INTERFACE (API) DARI CISCO Oleh Deno Daseftra Cessara 15030006 INTISARI VLAN merupakan salah satu teknologi komputer yang saat ini sangat dibutuhkan. Hal ini dikarenakan VLAN dapat membagi satu jaringan pada perangkat switch menjadi bagian-bagian kecil jaringan lain. Cisco Catalyst 3750 merupakan perangkat switch yang sudah menyediakan teknologi VLAN. Permasalahan yang ditemukan pada Cisco Catalyst 3750 adalah sistem manajemen VLAN yang masih berbasis command line dan tidak dapat diakses dari jarak jauh. Untuk itu dibuat VLAN berbasis GUI dan dapat diakses dari jarak jauh. VLAN yang dibuat berbasis Web dengan tujuan untuk memberikan kebebasan pemakaian device dan tidak harus terfokus pada satu jenis device saja. VLAN berbasis Web ini dibuat dengan memanfaatkan API Cisco sebagai penghubung antara bahasa pemrograman pada VLAN berbasis Web dengan bahasa pada perangkat lunak Cisco Catalyst 3750. Pemanfaatan Telnet berperan penting dalam pembuatan VLAN berbasis Web ini, dimana Telnet memberikan akses lebih luas pada Cisco Catalyst 3750 untuk diakses di luar aplikasi terminal emulator. Dengan pemanfaatan Telnet administrator cukup mengujungi IP yang telah dibuat untuk mengakses Cisco Catalyst 3750. Akses jarak jauh pada VLAN berbasis Web ini menggunakan port fowarding. Serveo.net adalah salah satu penyedia layanan port fowarding. Dengan memanfaatkan Serveo.net, VLAN berbasis Web yang masih dalam server local dapat diakses dari jarak jauh meski tanpa IP publik. Hasil pengujian pada penelitian ini menunjukkan bahwa VLAN berbasis Web terbukti dapat melakukan konfigurasi VLAN sehingga dapat digunakan untuk mengatur hubungan antar komputer sesuai dengan kebutuhan pada jaringan yang digunakan. Kata kunci : VLAN , API Cisco, Telnet, port fowarding, Cisco Catalyst 3750.', 11611143, 10904068),
('a324', 15030016, 'MONITORING INTERFACES ETHERNET PADA CISCO CATALYST 3750 UNTUK MENJAMIN KEAMANAN PENGGUNAAN JARINGAN ', 'MONITORING INTERFACES ETHERNET PADA CISCO CATALYST 3750 UNTUK MENJAMIN KEAMANAN PENGGUNAAN JARINGAN KOMPUTER Oleh Dwi Nurhayati 15030016 INTISARI Di laboratorium komputer suatu instansi terdapat banyak perangkat komputer yang terhubung dengan jaringan, hal tersebut berdampak pada peningkatan kebutuhan jaringan dalam hal ini penggunaan bandwidth. Sehingga administrator membutuhkan banyak waktu untuk mengelola jaringan seperti monitoring dan management, contohnya pada perangkat Cisco Catalyst 3750. Hal ini menuntut administrator harus berada di tempat yang sama dengan perangkat jaringan yang sedang dikelola. Oleh karena itu, diperlukan sistem yang dapat memonitoring jaringan dari jarak jauh. Dimana sistem monitoring interfaces ethernet bekerja secara real time dan mampu mengatasi penggunaan jaringan komputer yang terus mengalami peningkatan. Sistem monitoring interfaces ethernet menerapkan port security pada sistem jaringan komputer yang berfungsi sebagai sistem keamanan jaringan komputer agar dapat mengurangi penggunaan jaringan di luar perangkat komputer yang telah didaftarkan atau diijinkan. Sistem monitoring interfaces ethernet yang berbasis Web ini nantinya akan digunakan untuk monitoring dan management perangkat Cisco Catalyst 3750 dengan memanfaatkan API. Hasil dari pengujian menunjukkan bahwa aplikasi dapat memudahkan administrator dalam mengelola jaringan, karena semua fungsi atau perintah yang ada di sistem monitoring interfaces ethernet sama dengan perintah yang ada di-command line. Selain itu, aplikasi monitoring interfaces ethernet dapat berjalan di Browser pada perangkat personal komputer dan smartphone secara responsive. Kata kunci : Port security, monitoring, interfaces ethernet, Cisco Catalyst, API.', 11611143, 10904068),
('df14', 15030007, 'PENGGUNAAN LINEAR CONGRUENT METHOD PADA COMPUTER BASED TEST UNTUK SERTIFIKASI KARYAWAN PT. GMF AEROASIA TBK', 'The test is something that serves to test the quality of something of intelligence, ability, learning outcomes. One of the results of the exam is used as valid proof that can be used, for example for a promotion or graduation. The certification examination system at PT GMF AeroAsia Tbk is still using paper (Paper Based Test), the test organizer has to select the test results one by one and the participants have to go to the test room at the time and place determined by the test organizer. This examination system is considered ineffective. To resolve this, it is necessary to create a certification examination system that uses a computer to replace the current examination system. The system is designed as a computer based test using the Linear Congruent Method as a randomizer to order questions to save time and reduce paper usage, and guarantees the quality of the results of the exam more accountable. Keywords : Examination, Computer Based Test, Linear Congruent Method, Paper Based Test.\r\n', 10209011, 10904068);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `program_studi` (`program_studi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `prodi` (`prodi`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`kd_program_studi`);

--
-- Indexes for table `status_dp`
--
ALTER TABLE `status_dp`
  ADD PRIMARY KEY (`no_reg`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`no_reg`),
  ADD KEY `dp_satu` (`dp_satu`),
  ADD KEY `dp_dua` (`dp_dua`),
  ADD KEY `mahasiswa` (`mahasiswa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`program_studi`) REFERENCES `program_studi` (`kd_program_studi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi`) REFERENCES `program_studi` (`kd_program_studi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `status_dp`
--
ALTER TABLE `status_dp`
  ADD CONSTRAINT `status_dp_ibfk_1` FOREIGN KEY (`no_reg`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD CONSTRAINT `tugas_akhir_ibfk_1` FOREIGN KEY (`dp_satu`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tugas_akhir_ibfk_2` FOREIGN KEY (`mahasiswa`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tugas_akhir_ibfk_3` FOREIGN KEY (`dp_dua`) REFERENCES `dosen` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
