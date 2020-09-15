-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2020 pada 18.07
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
  `id` int(11) NOT NULL,
  `no_reg_dokumen` varchar(30) NOT NULL,
  `kata_kata` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pecah_kata`
--

INSERT INTO `pecah_kata` (`id`, `no_reg_dokumen`, `kata_kata`) VALUES
(235, '9e6bec', 'sistem'),
(236, '9e6bec', 'pendukung'),
(237, '9e6bec', 'keputusan'),
(238, '9e6bec', 'prioritas'),
(239, '9e6bec', 'pengajuan'),
(240, '9e6bec', 'beasiswa'),
(241, '9e6bec', 'dikpora'),
(242, '9e6bec', 'diy'),
(243, '9e6bec', 'dan'),
(244, '9e6bec', 'ppa'),
(245, '9e6bec', 'menggunakan'),
(246, '9e6bec', 'metode'),
(247, '9e6bec', 'multi'),
(248, '9e6bec', 'objective'),
(249, '9e6bec', 'optimization'),
(250, '9e6bec', 'on'),
(251, '9e6bec', 'the'),
(252, '9e6bec', 'basis'),
(253, '9e6bec', 'of'),
(254, '9e6bec', 'ratio'),
(255, '9e6bec', 'analysis'),
(256, '9e6bec', 'studi'),
(257, '9e6bec', 'kasus'),
(258, '9e6bec', ''),
(259, '9e6bec', 'sekolah'),
(260, '9e6bec', 'tinggi'),
(261, '9e6bec', 'teknologi'),
(262, '9e6bec', 'adisutjipto'),
(263, '9e6bec', 'sulistyo'),
(264, '9e6bec', 'nugroho'),
(265, '9e6bec', '15030013'),
(266, '9e6bec', 'intisari'),
(267, '9e6bec', 'penentuan'),
(268, '9e6bec', 'prioritas'),
(269, '9e6bec', 'pengajuan'),
(270, '9e6bec', 'beasiswa'),
(271, '9e6bec', 'dikpora'),
(272, '9e6bec', 'diy'),
(273, '9e6bec', 'dan'),
(274, '9e6bec', 'ppa'),
(275, '9e6bec', 'di'),
(276, '9e6bec', 'sekolah'),
(277, '9e6bec', 'tinggi'),
(278, '9e6bec', 'teknologi'),
(279, '9e6bec', 'adisutjipto'),
(280, '9e6bec', 'masih'),
(281, '9e6bec', 'dilakukan'),
(282, '9e6bec', 'dengan'),
(283, '9e6bec', 'cara'),
(284, '9e6bec', 'manual'),
(285, '9e6bec', 'dalam'),
(286, '9e6bec', 'menentukan'),
(287, '9e6bec', 'prioritas'),
(288, '9e6bec', 'pengajuan'),
(289, '9e6bec', 'beasiswa'),
(290, '9e6bec', 'maka'),
(291, '9e6bec', 'perlu'),
(292, '9e6bec', 'membutuhkan'),
(293, '9e6bec', 'kriteria'),
(294, '9e6bec', 'pada'),
(295, '9e6bec', 'setiap'),
(296, '9e6bec', 'beasiswa'),
(297, '9e6bec', 'dalam'),
(298, '9e6bec', 'menentukan'),
(299, '9e6bec', 'mahasiswa'),
(300, '9e6bec', 'yang'),
(301, '9e6bec', 'berhak'),
(302, '9e6bec', 'menerima'),
(303, '9e6bec', 'beasiswa'),
(304, '9e6bec', 'tersebut'),
(305, '9e6bec', 'maka'),
(306, '9e6bec', 'metode'),
(307, '9e6bec', 'multi'),
(308, '9e6bec', 'objective'),
(309, '9e6bec', 'on'),
(310, '9e6bec', 'the'),
(311, '9e6bec', 'basis'),
(312, '9e6bec', 'of'),
(313, '9e6bec', 'ratio'),
(314, '9e6bec', 'analysis'),
(315, '9e6bec', 'merupakan'),
(316, '9e6bec', 'metode'),
(317, '9e6bec', 'yang'),
(318, '9e6bec', 'akan'),
(319, '9e6bec', 'digunakan'),
(320, '9e6bec', 'pada'),
(321, '9e6bec', 'proses'),
(322, '9e6bec', 'penentuan'),
(323, '9e6bec', 'beasiswa'),
(324, '9e6bec', 'dikpora'),
(325, '9e6bec', 'diy'),
(326, '9e6bec', 'dan'),
(327, '9e6bec', 'ppa'),
(328, '9e6bec', 'karena'),
(329, '9e6bec', 'metode'),
(330, '9e6bec', 'tersebut'),
(331, '9e6bec', 'merupakan'),
(332, '9e6bec', 'sistem'),
(333, '9e6bec', 'multiobjektif'),
(334, '9e6bec', 'untuk'),
(335, '9e6bec', 'pengoptimalan'),
(336, '9e6bec', '2'),
(337, '9e6bec', 'atau'),
(338, '9e6bec', 'lebih'),
(339, '9e6bec', 'kriteria'),
(340, '9e6bec', 'yang'),
(341, '9e6bec', 'yang'),
(342, '9e6bec', 'saling'),
(343, '9e6bec', 'bertentangan'),
(344, '9e6bec', 'secara'),
(345, '9e6bec', 'bersamaan'),
(346, '9e6bec', 'dengan'),
(347, '9e6bec', 'menerapkan'),
(348, '9e6bec', '5'),
(349, '9e6bec', 'langkah'),
(350, '9e6bec', 'proses'),
(351, '9e6bec', 'perhitungan'),
(352, '9e6bec', 'dari'),
(353, '9e6bec', 'memasukan'),
(354, '9e6bec', 'nilai'),
(355, '9e6bec', 'membuat'),
(356, '9e6bec', 'matriks'),
(357, '9e6bec', 'keputusan'),
(358, '9e6bec', 'normalisasi'),
(359, '9e6bec', 'optimasi'),
(360, '9e6bec', 'dan'),
(361, '9e6bec', 'proses'),
(362, '9e6bec', 'perangkingan'),
(363, '9e6bec', 'diurutkan'),
(364, '9e6bec', 'berdasarkan'),
(365, '9e6bec', 'total'),
(366, '9e6bec', 'nilai'),
(367, '9e6bec', 'moora'),
(368, '9e6bec', 'dari'),
(369, '9e6bec', 'yang'),
(370, '9e6bec', 'terbesar'),
(371, '9e6bec', 'berdasarkan'),
(372, '9e6bec', 'hasil'),
(373, '9e6bec', 'pengujian'),
(374, '9e6bec', 'dengan'),
(375, '9e6bec', 'menggunakan'),
(376, '9e6bec', 'data'),
(377, '9e6bec', 'pendafar'),
(378, '9e6bec', 'beasiswa'),
(379, '9e6bec', 'dikpora'),
(380, '9e6bec', 'diy'),
(381, '9e6bec', 'dan'),
(382, '9e6bec', 'ppa'),
(383, '9e6bec', 'tahun'),
(384, '9e6bec', '2019'),
(385, '9e6bec', 'kesamaan'),
(386, '9e6bec', 'perhitungan'),
(387, '9e6bec', 'sistem'),
(388, '9e6bec', 'pendukung'),
(389, '9e6bec', 'keputusan'),
(390, '9e6bec', 'dengan'),
(391, '9e6bec', 'data'),
(392, '9e6bec', 'kemahasiswaan'),
(393, '9e6bec', 'dalam'),
(394, '9e6bec', 'menentukan'),
(395, '9e6bec', 'kandidat'),
(396, '9e6bec', 'yaitu'),
(397, '9e6bec', 'sebesar'),
(398, '9e6bec', '100%'),
(399, '9e6bec', 'pada'),
(400, '9e6bec', 'sistem'),
(401, '9e6bec', 'pendukung'),
(402, '9e6bec', 'keputusan'),
(403, '9e6bec', 'prioritas'),
(404, '9e6bec', 'pengajuan'),
(405, '9e6bec', 'beasiswa'),
(406, '9e6bec', 'dikpora'),
(407, '9e6bec', 'diy'),
(408, '9e6bec', 'sedangkan'),
(409, '9e6bec', 'untuk'),
(410, '9e6bec', 'pengujian'),
(411, '9e6bec', 'pada'),
(412, '9e6bec', 'sistem'),
(413, '9e6bec', 'pendukung'),
(414, '9e6bec', 'keputusan'),
(415, '9e6bec', 'prioritas'),
(416, '9e6bec', 'pengajuan'),
(417, '9e6bec', 'beasiswa'),
(418, '9e6bec', 'ppa'),
(419, '9e6bec', 'didapatkan'),
(420, '9e6bec', 'hasil'),
(421, '9e6bec', 'kesamaan'),
(422, '9e6bec', 'perhitungan'),
(423, '9e6bec', 'sistem'),
(424, '9e6bec', 'pendukung'),
(425, '9e6bec', 'keputusan'),
(426, '9e6bec', 'dengan'),
(427, '9e6bec', 'data'),
(428, '9e6bec', 'kemahasiswaan'),
(429, '9e6bec', 'dalam'),
(430, '9e6bec', 'menentukan'),
(431, '9e6bec', 'kandidat'),
(432, '9e6bec', 'berdasarkan'),
(433, '9e6bec', 'program'),
(434, '9e6bec', 'studi'),
(435, '9e6bec', 'menunjukan'),
(436, '9e6bec', 'kesamaan'),
(437, '9e6bec', 'untuk'),
(438, '9e6bec', 'teknik'),
(439, '9e6bec', 'elektro'),
(440, '9e6bec', 'sebesar'),
(441, '9e6bec', '100%'),
(442, '9e6bec', 'teknik'),
(443, '9e6bec', 'industri'),
(444, '9e6bec', '100%'),
(445, '9e6bec', 'informatika'),
(446, '9e6bec', '75%'),
(447, '9e6bec', 'teknik'),
(448, '9e6bec', 'mesin'),
(449, '9e6bec', '80%'),
(450, '9e6bec', 'teknik'),
(451, '9e6bec', 'dirgantara'),
(452, '9e6bec', '50%'),
(453, '9e6bec', 'dan'),
(454, '9e6bec', 'untuk'),
(455, '9e6bec', 'aeronautika'),
(456, '9e6bec', '50%'),
(457, '9e6bec', 'kata'),
(458, '9e6bec', 'kunci'),
(459, '9e6bec', ''),
(460, '9e6bec', 'prioritas'),
(461, '9e6bec', 'pengajuan'),
(462, '9e6bec', 'beasiswa'),
(463, '9e6bec', 'sistem'),
(464, '9e6bec', 'pendukung'),
(465, '9e6bec', 'keputusan'),
(466, '9e6bec', 'dikpora'),
(467, '9e6bec', 'diy'),
(468, '9e6bec', 'ppa'),
(469, '15b87e', 'sistem'),
(470, '15b87e', 'pendukung'),
(471, '15b87e', 'keputusan'),
(472, '15b87e', 'berbasis'),
(473, '15b87e', 'android'),
(474, '15b87e', 'untuk'),
(475, '15b87e', 'menentukan'),
(476, '15b87e', 'kelayakan'),
(477, '15b87e', 'siswa'),
(478, '15b87e', 'penerima'),
(479, '15b87e', 'reward'),
(480, '15b87e', 'menggunakan'),
(481, '15b87e', 'metode'),
(482, '15b87e', 'weighted'),
(483, '15b87e', 'product'),
(484, '15b87e', 'novanda'),
(485, '15b87e', 'sandiantara'),
(486, '15b87e', '15030020'),
(487, '15b87e', 'intisari'),
(488, '15b87e', 'sekolah'),
(489, '15b87e', 'menengah'),
(490, '15b87e', 'kejuruan'),
(491, '15b87e', 'bina'),
(492, '15b87e', 'harapan'),
(493, '15b87e', 'sleman'),
(494, '15b87e', 'memiliki'),
(495, '15b87e', 'dua'),
(496, '15b87e', 'jurusan'),
(497, '15b87e', 'yaitu'),
(498, '15b87e', 'teknik'),
(499, '15b87e', 'komputer'),
(500, '15b87e', 'dan'),
(501, '15b87e', 'jaringan'),
(502, '15b87e', 'serta'),
(503, '15b87e', 'teknik'),
(504, '15b87e', 'pemboran'),
(505, '15b87e', 'minyak'),
(506, '15b87e', 'adanya'),
(507, '15b87e', 'peningkatan'),
(508, '15b87e', 'kualitas'),
(509, '15b87e', 'belajar'),
(510, '15b87e', 'mengajar'),
(511, '15b87e', 'baik'),
(512, '15b87e', 'secara'),
(513, '15b87e', 'akademik'),
(514, '15b87e', 'dan'),
(515, '15b87e', 'non'),
(516, '15b87e', 'akademik'),
(517, '15b87e', 'yang'),
(518, '15b87e', 'semakin'),
(519, '15b87e', 'maju'),
(520, '15b87e', 'di'),
(521, '15b87e', 'smk'),
(522, '15b87e', 'bina'),
(523, '15b87e', 'harapan'),
(524, '15b87e', 'akan'),
(525, '15b87e', 'menambah'),
(526, '15b87e', 'motivasi'),
(527, '15b87e', 'siswa'),
(528, '15b87e', 'untuk'),
(529, '15b87e', 'mendapat'),
(530, '15b87e', 'reward'),
(531, '15b87e', 'reward'),
(532, '15b87e', 'akan'),
(533, '15b87e', 'diberikan'),
(534, '15b87e', 'kepada'),
(535, '15b87e', 'siswa'),
(536, '15b87e', 'berdasarkan'),
(537, '15b87e', 'kriteria-kriteria'),
(538, '15b87e', 'yang'),
(539, '15b87e', 'sudah'),
(540, '15b87e', 'ditetapkan'),
(541, '15b87e', 'oleh'),
(542, '15b87e', 'guru-guru'),
(543, '15b87e', 'terdapat'),
(544, '15b87e', 'empat'),
(545, '15b87e', 'kriteria'),
(546, '15b87e', 'yang'),
(547, '15b87e', 'digunakan'),
(548, '15b87e', 'untuk'),
(549, '15b87e', 'menentukan'),
(550, '15b87e', 'reward'),
(551, '15b87e', 'yaitu'),
(552, '15b87e', 'nilai'),
(553, '15b87e', 'rapot'),
(554, '15b87e', 'absen'),
(555, '15b87e', 'extrakurikuler'),
(556, '15b87e', 'dan'),
(557, '15b87e', 'sikap'),
(558, '15b87e', 'kriteria-kriteria'),
(559, '15b87e', 'tersebut'),
(560, '15b87e', 'kemudian'),
(561, '15b87e', 'diolah'),
(562, '15b87e', 'menggunakan'),
(563, '15b87e', 'aplikasi'),
(564, '15b87e', 'sistem'),
(565, '15b87e', 'pendukung'),
(566, '15b87e', 'keputusan'),
(567, '15b87e', 'berbasis'),
(568, '15b87e', 'android'),
(569, '15b87e', 'aplikasi'),
(570, '15b87e', 'sistem'),
(571, '15b87e', 'pedukung'),
(572, '15b87e', 'keputusan'),
(573, '15b87e', 'digunakan'),
(574, '15b87e', 'untuk'),
(575, '15b87e', 'menentukan'),
(576, '15b87e', 'siswa'),
(577, '15b87e', 'layak'),
(578, '15b87e', 'mendapat'),
(579, '15b87e', 'reward'),
(580, '15b87e', 'yang'),
(581, '15b87e', 'diolah'),
(582, '15b87e', 'menggunakan'),
(583, '15b87e', 'metode'),
(584, '15b87e', 'weighted'),
(585, '15b87e', 'product'),
(586, '15b87e', 'kemudian'),
(587, '15b87e', 'data'),
(588, '15b87e', 'alternatif'),
(589, '15b87e', 'yang'),
(590, '15b87e', 'digunakan'),
(591, '15b87e', 'adalah'),
(592, '15b87e', 'siswa'),
(593, '15b87e', 'smk'),
(594, '15b87e', 'bina'),
(595, '15b87e', 'harapan'),
(596, '15b87e', 'kelas'),
(597, '15b87e', '12'),
(598, '15b87e', 'yang'),
(599, '15b87e', 'berjumlah'),
(600, '15b87e', '35'),
(601, '15b87e', 'siswa'),
(602, '15b87e', 'hasil'),
(603, '15b87e', 'dari'),
(604, '15b87e', 'pengolahan'),
(605, '15b87e', 'sistem'),
(606, '15b87e', 'dan'),
(607, '15b87e', 'manual'),
(608, '15b87e', 'sudah'),
(609, '15b87e', 'sesuai'),
(610, '15b87e', 'dengan'),
(611, '15b87e', 'hasil'),
(612, '15b87e', 'perhitungan'),
(613, '15b87e', 'vektor'),
(614, '15b87e', 'v'),
(615, '15b87e', 'tertinggi'),
(616, '15b87e', 'dimiliki'),
(617, '15b87e', 'oleh'),
(618, '15b87e', 'veni'),
(619, '15b87e', 'nur'),
(620, '15b87e', 'aviani'),
(621, '15b87e', 'dengan'),
(622, '15b87e', 'nilai'),
(623, '15b87e', '003263'),
(624, '15b87e', 'dan'),
(625, '15b87e', 'terendah'),
(626, '15b87e', 'dimiliki'),
(627, '15b87e', 'oleh'),
(628, '15b87e', 'muhammad'),
(629, '15b87e', 'alif'),
(630, '15b87e', 'nur'),
(631, '15b87e', 'i'),
(632, '15b87e', 'dengan'),
(633, '15b87e', 'nilai'),
(634, '15b87e', '001901'),
(635, '15b87e', 'kata'),
(636, '15b87e', 'kunci'),
(637, '15b87e', 'reward'),
(638, '15b87e', 'sistem'),
(639, '15b87e', 'pendukung'),
(640, '15b87e', 'keputusan'),
(641, '15b87e', 'weighted'),
(642, '15b87e', 'product'),
(643, '15b87e', 'android');

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
('15b87e', 15030020, 'SISTEM PENDUKUNG KEPUTUSAN BERBASIS ANDROID UNTUK MENENTUKAN KELAYAKAN SISWA PENERIMA REWARD MENGGUNAKAN METODE WEIGHTED PRODUCT', 'SISTEM PENDUKUNG KEPUTUSAN BERBASIS ANDROID UNTUK MENENTUKAN KELAYAKAN SISWA PENERIMA REWARD MENGGUNAKAN METODE WEIGHTED PRODUCT Novanda Sandiantara 15030020 INTISARI Sekolah Menengah Kejuruan Bina Harapan Sleman memiliki dua jurusan yaitu Teknik Komputer dan Jaringan Serta Teknik Pemboran Minyak. Adanya peningkatan kualitas belajar mengajar baik secara akademik dan non akademik yang semakin maju di SMK Bina Harapan, akan menambah motivasi siswa untuk mendapat reward. Reward akan diberikan kepada siswa berdasarkan kriteria-kriteria yang sudah ditetapkan oleh guru-guru. Terdapat empat kriteria yang digunakan untuk menentukan reward yaitu nilai rapot, absen, extrakurikuler, dan sikap. Kriteria-kriteria tersebut kemudian diolah menggunakan aplikasi sistem pendukung keputusan berbasis Android. Aplikasi sistem pedukung keputusan digunakan untuk menentukan siswa layak mendapat reward yang diolah menggunakan metode Weighted Product. Kemudian data alternatif yang digunakan adalah siswa SMK Bina Harapan kelas 12 yang berjumlah 35 siswa. Hasil dari pengolahan sistem dan manual sudah sesuai dengan hasil perhitungan, vektor V tertinggi dimiliki oleh Veni Nur Aviani dengan nilai 0,03263 dan terendah dimiliki oleh Muhammad Alif Nur I dengan nilai 0,01901. Kata Kunci: Reward, Sistem Pendukung Keputusan, Weighted Product, Android.', 11611144, 10409041),
('9e6bec', 15030013, 'SISTEM PENDUKUNG KEPUTUSAN PRIORITAS PENGAJUAN BEASISWA DIKPORA DIY DAN PPA MENGGUNAKAN METODE MULTI OBJECTIVE OPTIMIZATION ON THE BASIS OF RATIO ANALYSIS (Studi Kasus : Sekolah Tinggi Teknologi Adisutjipto)', 'SISTEM PENDUKUNG KEPUTUSAN PRIORITAS PENGAJUAN BEASISWA DIKPORA DIY DAN PPA MENGGUNAKAN METODE MULTI OBJECTIVE OPTIMIZATION ON THE BASIS OF RATIO ANALYSIS (Studi kasus : Sekolah Tinggi Teknologi Adisutjipto) Sulistyo Nugroho 15030013 INTISARI Penentuan prioritas pengajuan beasiswa Dikpora DIY dan PPA di Sekolah Tinggi Teknologi Adisutjipto masih dilakukan dengan cara manual. Dalam menentukan prioritas pengajuan beasiswa maka perlu membutuhkan kriteria pada setiap beasiswa. Dalam menentukan mahasiswa yang berhak menerima beasiswa tersebut, maka metode Multi Objective On The Basis Of Ratio Analysis merupakan metode yang akan digunakan pada proses penentuan beasiswa Dikpora DIY dan PPA karena metode tersebut merupakan sistem multiobjektif untuk pengoptimalan 2 atau lebih kriteria yang yang saling bertentangan secara bersamaan dengan menerapkan 5 langkah proses perhitungan dari memasukan nilai, membuat matriks keputusan, normalisasi, optimasi dan proses perangkingan diurutkan berdasarkan total nilai MOORA dari yang terbesar. Berdasarkan hasil pengujian dengan menggunakan data pendafar beasiswa Dikpora DIY dan PPA tahun 2019, kesamaan perhitungan sistem pendukung keputusan dengan data kemahasiswaan dalam menentukan kandidat yaitu sebesar 100% pada sistem pendukung keputusan prioritas pengajuan beasiswa Dikpora DIY, sedangkan untuk pengujian pada sistem pendukung keputusan prioritas pengajuan beasiswa PPA didapatkan hasil kesamaan perhitungan sistem pendukung keputusan dengan data kemahasiswaan dalam menentukan kandidat berdasarkan program studi menunjukan kesamaan untuk Teknik Elektro sebesar 100%, Teknik Industri 100%, Informatika 75%, Teknik Mesin 80%, Teknik Dirgantara 50%, dan untuk Aeronautika 50%. Kata Kunci : Prioritas Pengajuan Beasiswa, Sistem Pendukung Keputusan, Dikpora DIY, PPA', 10209011, 11611144);

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
('7ab4b7', 15030013, 'SISTEM PENDUKUNG KEPUTUSAN PRIORITAS PENGAJUAN BEASISWA DIKPORA DIY DAN PPA MENGGUNAKAN METODE MULTI OBJECTIVE OPTIMIZATION ON THE BASIS OF RATIO ANALYSIS (Studi Kasus : Sekolah Tinggi Teknologi Adisu', '\r\nSISTEM PENDUKUNG KEPUTUSAN PRIORITAS PENGAJUAN BEASISWA DIKPORA DIY DAN PPA MENGGUNAKAN METODE MULTI OBJECTIVE OPTIMIZATION ON THE BASIS OF RATIO ANALYSIS (Studi Kasus : Sekolah Tinggi Teknologi Adisutjipto)\r\nPenulis\r\nSULISTYO NUGROHO\r\nPembimbing : Anton Setiawan Honggowibowo, S.Kom., M.T. - Asih Pujiastuti, S.Kom., M.Cs.\r\nABSTRAK :\r\nSISTEM PENDUKUNG KEPUTUSAN PRIORITAS PENGAJUAN BEASISWA DIKPORA DIY DAN PPA MENGGUNAKAN METODE MULTI OBJECTIVE OPTIMIZATION ON THE BASIS OF RATIO ANALYSIS (Studi kasus : Sekolah Tinggi Teknologi Adisutjipto) Sulistyo Nugroho 15030013 INTISARI Penentuan prioritas pengajuan beasiswa Dikpora DIY dan PPA di Sekolah Tinggi Teknologi Adisutjipto masih dilakukan dengan cara manual. Dalam menentukan prioritas pengajuan beasiswa maka perlu membutuhkan kriteria pada setiap beasiswa. Dalam menentukan mahasiswa yang berhak menerima beasiswa tersebut, maka metode Multi Objective On The Basis Of Ratio Analysis merupakan metode yang akan digunakan pada proses penentuan beasiswa Dikpora DIY dan PPA karena metode tersebut merupakan sistem multiobjektif untuk pengoptimalan 2 atau lebih kriteria yang yang saling bertentangan secara bersamaan dengan menerapkan 5 langkah proses perhitungan dari memasukan nilai, membuat matriks keputusan, normalisasi, optimasi dan proses perangkingan diurutkan berdasarkan total nilai MOORA dari yang terbesar. Berdasarkan hasil pengujian dengan menggunakan data pendafar beasiswa Dikpora DIY dan PPA tahun 2019, kesamaan perhitungan sistem pendukung keputusan dengan data kemahasiswaan dalam menentukan kandidat yaitu sebesar 100% pada sistem pendukung keputusan prioritas pengajuan beasiswa Dikpora DIY, sedangkan untuk pengujian pada sistem pendukung keputusan prioritas pengajuan beasiswa PPA didapatkan hasil kesamaan perhitungan sistem pendukung keputusan dengan data kemahasiswaan dalam menentukan kandidat berdasarkan program studi menunjukan kesamaan untuk Teknik Elektro sebesar 100%, Teknik Industri 100%, Informatika 75%, Teknik Mesin 80%, Teknik Dirgantara 50%, dan untuk Aeronautika 50%. Kata Kunci : Prioritas Pengajuan Beasiswa, Sistem Pendukung Keputusan, Dikpora DIY, PPA', 10209011, 11611144),
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
  ADD KEY `no_reg_dokumen` (`no_reg_dokumen`);

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
-- AUTO_INCREMENT untuk tabel `pecah_kata`
--
ALTER TABLE `pecah_kata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=644;

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
  ADD CONSTRAINT `pecah_kata_ibfk_1` FOREIGN KEY (`no_reg_dokumen`) REFERENCES `sample` (`no_reg`) ON DELETE CASCADE ON UPDATE CASCADE;

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
