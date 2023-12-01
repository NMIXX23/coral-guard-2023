-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 09:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coralguard`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_biodiversity`
--

CREATE TABLE `t_biodiversity` (
  `id` int(11) NOT NULL,
  `nama_biodiversity` varchar(100) NOT NULL,
  `foto_biodiversity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_biodiversity`
--

INSERT INTO `t_biodiversity` (`id`, `nama_biodiversity`, `foto_biodiversity`) VALUES
(7, 'Fish', '656030009e793.png'),
(8, 'Coral', '65603435aaeb9.png'),
(9, 'Crustacea', '6560346098641.png'),
(10, 'Seaweed', '656034786110e.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_jenis_bio`
--

CREATE TABLE `t_jenis_bio` (
  `id` int(11) NOT NULL,
  `id_biodiversity` int(11) NOT NULL,
  `nama_jenis_bio` varchar(100) NOT NULL,
  `deskripsi_jenis_bio` text NOT NULL,
  `foto_jenis_bio` varchar(255) DEFAULT 'default.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_jenis_bio`
--

INSERT INTO `t_jenis_bio` (`id`, `id_biodiversity`, `nama_jenis_bio`, `deskripsi_jenis_bio`, `foto_jenis_bio`) VALUES
(7, 4, 'Bandung', '5', '654cc30241546.jpg'),
(8, 5, 'Bandung 2222', '5', '654cc16727dc9.png'),
(9, 5, '2', '2', '654cc3f8de22d.png'),
(10, 4, '22', '22', '654d81ee08726.jpg'),
(11, 7, 'IKAN BLACK TANG', 'Ikan black tang merupakan spesies dari famili Acanthuridae. Ikan ini mempunyai tubuh dengan panjang maksimum 21 cm, badan oval warna coklat kehitaman hitam dan moncong yang menonjol. Pangkal ekor terdapat warna putih. Menempati habitat', '6560309721269.png'),
(12, 7, 'IKAN DAKOCAN', 'Ikan dakocan dengan nama latin Dascyllus aruanus merupakan ikan karang kecil yang biasanya ditemukan di perairan tropis. Ikan dakocan merupakan spesies dari famili Pomacentridae. Ciri-ciri ikan ini memiliki panjang tubuh maksimal 10 cm, warna dasar putih dengan 3 garis hitam, depan mata berwarna putih, ekor berwarna abu-abu', '6560332157498.png'),
(13, 7, 'IKAN JULUNG', 'Ikan julung dengan nama latin fistularia commersonii merupakan spesies dari famili Fituilaridae. Ikan ini mempunyai panjang tubuh maksimal 160 cm, bentuk runcing memanjang, warna hijau di dorsal , keperakan di perut, ekor meruncing panjang. Dua spot biru di punggung.', '65603366882d6.png'),
(14, 7, 'IKAN JANGGOT KUNING', 'sebuah organisasi nirlaba di Indonesia. Tujuannya adalah untuk melibatkan penduduk desa dalam upaya konservasi terumbu karang di sekitar desa mereka; yakni berkomitmen melindungi terumbu karang dari aktivitas penangkapan ikan, dengan', '656033c0ee5b0.png'),
(15, 8, 'CORALINE ALGAE', 'Coraline algae adalah jenis alga yang sering tumbuh pada permukaan terumbu karang, batu, dan substrat lain di lingkungan laut. Mereka merupakan alga merah yang memiliki kalsium karbonat di dinding sel mereka, membuat mereka berperan penting', '6560354000af9.png'),
(16, 8, 'HALIMEDA', 'Halimeda adalah makroalga berjenis alga hijau yang membentuk struktur yang mirip tumbuhan. Mereka memiliki batang bersekat-sekat, daun-daun datar, dan cabang-cabang yang menyerupai daun. Halimeda sering ditemukan di terumbu karang', '65603563d9c3d.png'),
(17, 8, 'ZOANTHUS SOCIATUS', 'Zoanthus sociatus adalah spesies Zoanthids yang sering ditemukan di terumbu karang di berbagai perairan tropis. Mereka memiliki polip berbentuk tabung yang biasanya tersusun dalam kelompok-kelompok yang padat. Salah satu ciri khas', '656035a3d89ff.png'),
(18, 8, 'ACROPORA CERVICORNIS', 'Terumbu ini berbentuk seperti pipa kecil yang ada di dalam laut. koloni terumbu ini dapat berkumpul hingga beberapa meter. Terumbu ini tersusun dari cabang- cabang dan membentuk terumbu karang yang lebat, serta cabang- cabang yang silindris', '65603607b3edb.png'),
(19, 9, 'CALCINUS MINUTUS', 'Calcinus minutus adalah spesies kelomang yang termasuk dalam famili Diogenidae. Ia juga dikenal sebagai kelomang putih kecil atau kelomang berjari oranye. Hewan ini berasal', '656036325162e.png'),
(20, 9, 'STONE CRAB', 'Stone crab dikenal sebagai kepiting batu merupakan kelompok hewan ordo Decapoda dalam famili Xanthidae. Famili Xanthidae memiliki ', '65603674a451f.png'),
(21, 9, 'ALLOGALATHEA ELEGANS', 'Allogalathea elegans adalah spesies lobster kecil yang termasuk dalam famili Galatheidae, genus Allogalathea. Spesies ini', '6560369c2828b.png'),
(22, 9, 'UDANG MANTIS', 'Udang mantis adalah sekelompok krustasea laut yang termasuk dalam ordo Stomatopoda. Mereka memiliki anggota badan tambahan yang dapat digunakan untuk menyerang', '656036b82c82c.png'),
(23, 10, 'GELIDIUM SP.', 'Rumput laut jenis ini merupakan salah satu spesies dari Rhodophyta (rumput laut merah). Warna merah pada rumput laut ini disebabkan oleh pigmen fikoeritrin. Gelidium sp. memiliki panjang kurang lebih 20 cm dan lebar 1,5 mm. Thallusnya berwarna merah, coklat, hijau-coklat', '6560372954154.png'),
(24, 10, 'GRACILARIA VERRUCCOSA', 'Rumput laut jenis ini merupakan salah satu spesies dari Rhodophyta (rumput laut merah). Sama seperti jenis rumput lainnya, G. verrucosa memiliki bentukan yang menyerupai akar, batang, daun, atau buah yang disebut thallus. Ciri-ciri umum G. verrucosa pada bentuk', '6560375e631c2.png'),
(25, 10, 'ACANTOPHORA SPICIFERA', 'Rumput laut jenis Acanthopora sp. merupakan salah satu contoh Rhodophyta (rumput laut merah). Thallus silindris, percabangan bebas, tegak, terdapat duri-duri pendek sekitar thallus yang merupakan karakteristik jenis ini.', '6560379617407.png'),
(26, 10, 'EUCHEUMA COTTONII', 'Rumput laut jenis ini merupakan salah satu spesies dari Rhodophyta (rumput laut merah). E. cottonii dapat dibedakan dari thallusny di mana thallusnya bercabang-cabang berbentuk silindris atau pipih, percabangannya tidak teratur dan kasar', '6560383457cd1.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id`, `kategori`, `foto_kategori`) VALUES
(5, 'Snorkeling', '655f954747058.png'),
(6, 'Scuba', '655f9560afd78.png'),
(7, 'Pantai', '655f956dd3447.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_koleksi`
--

CREATE TABLE `t_koleksi` (
  `id` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tanggal_koleksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_koleksi`
--

INSERT INTO `t_koleksi` (`id`, `id_tempat`, `id_member`, `tanggal_koleksi`) VALUES
(11, 6, 17, '2023-11-15 21:58:57'),
(14, 6, 19, '2023-11-16 03:37:07'),
(15, 5, 20, '2023-11-16 03:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `t_komentar`
--

CREATE TABLE `t_komentar` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_komentar`
--

INSERT INTO `t_komentar` (`id`, `id_post`, `id_member`, `komentar`) VALUES
(1, 4, 9, 'hai aku udah komen nih'),
(3, 4, 10, 'hai aku komen lagi nih'),
(4, 3, 10, 'halooo'),
(5, 2, 12, 'halooo'),
(6, 3, 13, 'haloo saya pengguna baru'),
(7, 5, 18, ' buat yg ingin datang ke sini klian bisa liat spesies ikan warna-warni, penyu, dan bahkan terumbu karang yang masih terjaga kelestariannya lho!!!'),
(8, 5, 18, 'kita juga bisa nyewa sepeda atau cidomo (kuda-kudaan) buat menjelajahi pulau, berkeliling dengan perahu untuk menikmati matahari terbenam yang menakjubkan, atau sekadar bersantai di pantai sambil menikmati angin sepoi-sepoi:) cobain deh guys seru abies!!!');

-- --------------------------------------------------------

--
-- Table structure for table `t_maps`
--

CREATE TABLE `t_maps` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `region` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `latitude` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `longitude` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_create` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `validasi` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `t_maps`
--

INSERT INTO `t_maps` (`id`, `kategori`, `region`, `latitude`, `longitude`, `gambar`, `user_create`, `validasi`) VALUES
(18, 'Baik', 'TN UJUNGKULON - BANTEN', '105.21225004434866', '-6.745060577500976', NULL, '1', 1),
(19, 'Baik', 'TN UJUNGKULON - BANTEN', '105.24708688040094', '-6.7415562803833', NULL, '1', 1),
(20, 'Baik', 'TN UJUNGKULON - BANTEN', '105.42967099219756', '-6.748066552734456', NULL, '1', 1),
(21, 'Sedang', 'TN UJUNGKULON - BANTEN', '105.25966112299966', '-6.758871630847119', NULL, '1', 1),
(22, 'Sedang', 'TN UJUNGKULON - BANTEN', '105.268447749', '-6.734579854', NULL, '1', 1),
(23, 'Sedang', 'TN UJUNGKULON - BANTEN', '105.274825787', '-6.73790362', NULL, '1', 1),
(24, 'Sedang', 'TN UJUNGKULON - BANTEN', '105.439756474', '-6.757666556', NULL, '1', 1),
(25, 'Sedang', 'TN UJUNGKULON - BANTEN', '105.44305369436839', '-6.743272336038268', NULL, '1', 1),
(26, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.439850879', '-5.465844262', NULL, '1', 1),
(27, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.467788485', '-5.415448775', NULL, '1', 1),
(28, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.49026548128077', '-5.423573031371349', NULL, '1', 1),
(29, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.52167436655776', '-5.479728311108945', NULL, '1', 1),
(30, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.56384812324397', '-5.452596906517751', NULL, '1', 1),
(31, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.56509515062979', '-5.45868000961647', NULL, '1', 1),
(32, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.57513600483281', '-5.495478033035866', NULL, '1', 1),
(33, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.55512635241206', '-5.493979203264814', NULL, '1', 1),
(34, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.53172770629143', '-5.503747930328279', NULL, '1', 1),
(35, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.53831152700401', '-5.531068692940518', NULL, '1', 1),
(36, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.53004679718374', '-5.555949110031142', NULL, '1', 1),
(37, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.52878402056191', '-5.570824560062633', NULL, '1', 1),
(38, 'Buruk', 'TN KEPULAUAN SERIBU – DKI', '106.5488279653943', '-5.570886869959274', NULL, '1', 1),
(39, 'Buruk', 'TN KEPULAUAN SERIBU – DKI', '106.55370957773326', '-5.575701718694943', NULL, '1', 1),
(40, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.56488165761637', '-5.567392396757525', NULL, '1', 1),
(41, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.57959037163144', '-5.575491493427176', NULL, '1', 1),
(42, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.59169263995643', '-5.580723442586776', NULL, '1', 1),
(43, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.55611861921851', '-5.598322751455501', NULL, '1', 1),
(44, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.60038091774706', '-5.605244435235575', NULL, '1', 1),
(45, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.59651257007906', '-5.606380842524327', NULL, '1', 1),
(46, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.56615583028582', '-5.608051439002247', NULL, '1', 1),
(47, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.54156965391903', '-5.606767795381539', NULL, '1', 1),
(48, 'Buruk', 'TN KEPULAUAN SERIBU – DKI', '106.57220476966611', '-5.612572088239741', NULL, '1', 1),
(49, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.58019266954932', '-5.620579438959624', NULL, '1', 1),
(50, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.57064735550861', '-5.619040953025459', NULL, '1', 1),
(51, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.55991733352718', '-5.620884939947178', NULL, '1', 1),
(52, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.54763427155444', '-5.618910337239471', NULL, '1', 1),
(53, 'Buruk', 'TN KEPULAUAN SERIBU – DKI', '106.56010242636974', '-5.633143476739336', NULL, '1', 1),
(54, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.57020150412926', '-5.63358730837309', NULL, '1', 1),
(55, 'Buruk', 'TN KEPULAUAN SERIBU – DKI', '106.56497359334477', '-5.644700452979479', NULL, '1', 1),
(56, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.58287604273276', '-5.650958838302891', NULL, '1', 1),
(57, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.56029995121558', '-5.659871252178213', NULL, '1', 1),
(58, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.57786256942263', '-5.671492913116142', NULL, '1', 1),
(59, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.53079325845457', '-5.690631313266764', NULL, '1', 1),
(60, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.53623614355084', '-5.698419223273677', NULL, '1', 1),
(61, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.57116399909758', '-5.724904659567736', NULL, '1', 1),
(62, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.57428455956548', '-5.702481358491351', NULL, '1', 1),
(63, 'Buruk', 'TN KEPULAUAN SERIBU – DKI', '106.60643546034403', '-5.735056407018368', NULL, '1', 1),
(64, 'Sedang', 'TN KEPULAUAN SERIBU – DKI', '106.61238875614283', '-5.751397553188945', NULL, '1', 1),
(65, 'Baik', 'TN KEPULAUAN SERIBU – DKI', '106.59457789539493', '-5.747747485223725', NULL, '1', 1),
(66, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.14763672942738', '-5.805703217965578', NULL, '1', 1),
(67, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.20697606788819', '-5.726483431989648', NULL, '1', 1),
(68, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.20395366717344', '-5.729599146952362', NULL, '1', 1),
(69, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.19549333897959', '-5.743168524755896', NULL, '1', 1),
(70, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.1638994768976', '-5.803366519641734', NULL, '1', 1),
(71, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.16632742905281', '-5.799009785206117', NULL, '1', 1),
(72, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.20534166147564', '-5.820238901794421', NULL, '1', 1),
(73, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.22808475514844', '-5.774403282749654', NULL, '1', 1),
(74, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.22603352691614', '-5.770577704551734', NULL, '1', 1),
(75, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.23402280400435', '-5.774997087635245', NULL, '1', 1),
(76, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.25784146054079', '-5.768196464515741', NULL, '1', 1),
(77, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.26021668008315', '-5.755132757032755', NULL, '1', 1),
(78, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.24393394298414', '-5.899164541724147', NULL, '1', 1),
(79, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.3248504709434', '-5.766676309409461', NULL, '1', 1),
(80, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.34726653093985', '-5.79950418594676', NULL, '1', 1),
(81, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.4172798040379', '-5.742319350786853', NULL, '1', 1),
(82, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.38095256012336', '-5.802998931134991', NULL, '1', 1),
(83, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.37806895070246', '-5.806583675722817', NULL, '1', 1),
(84, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.38196262483956', '-5.831021006812047', NULL, '1', 1),
(85, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.38130873790519', '-5.833181924505254', NULL, '1', 1),
(86, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.43882538068368', '-5.821045084734121', NULL, '1', 1),
(87, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.34604965852627', '-5.891049713164668', NULL, '1', 1),
(88, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.35910359117075', '-5.880880571250588', NULL, '1', 1),
(89, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.40547936884217', '-5.901377298595181', NULL, '1', 1),
(90, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.43159708608025', '-5.898969923930804', NULL, '1', 1),
(91, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.45049088234836', '-5.886905204010704', NULL, '1', 1),
(92, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.46068815632658', '-5.867887581514652', NULL, '1', 1),
(93, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.46631299349939', '-5.863745822280682', NULL, '1', 1),
(94, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.46648815956478', '-5.85723731543585', NULL, '1', 1),
(95, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.47274594976261', '-5.856920771909524', NULL, '1', 1),
(96, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.48867564747967', '-5.833501863247855', NULL, '1', 1),
(97, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.49215856709411', '-5.805122518240469', NULL, '1', 1),
(98, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.51152113886847', '-5.820585353201302', NULL, '1', 1),
(99, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.51123470358402', '-5.808240083264057', NULL, '1', 1),
(100, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.51043460154706', '-5.800164736255849', NULL, '1', 1),
(101, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.5138591666878', '-5.788306919915729', NULL, '1', 1),
(102, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.51873064433242', '-5.784965099064014', NULL, '1', 1),
(103, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.32576683681866', '-5.767393942606601', NULL, '1', 1),
(104, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.43749264423658', '-5.821786396031702', NULL, '1', 1),
(105, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.47489789716579', '-5.856997494706532', NULL, '1', 1),
(106, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.51884146666426', '-5.785077184083361', NULL, '1', 1),
(107, 'Sedang', 'TN KARIMUNJAWA- JAWA TENGAH', '110.51804740754586', '-5.782404496926655', NULL, '1', 1),
(108, 'Baik', 'TN KARIMUNJAWA- JAWA TENGAH', '110.51813188192003', '-5.78284152745542', NULL, '1', 1),
(109, 'Baik', 'TN BALI BARAT – BALI', '114.44178751051491', '-8.136884549425691', NULL, '1', 1),
(110, 'Rendah', 'TN BALI BARAT – BALI', '114.44232141029445', '-8.162986480753531', NULL, '1', 1),
(111, 'Rendah', 'TN BALI BARAT – BALI', '114.44736708364975', '-8.168865787097914', NULL, '1', 1),
(112, 'Rendah', 'TN BALI BARAT – BALI', '114.44682054612726', '-8.21135740048705', NULL, '1', 1),
(113, 'Rendah', 'TN BALI BARAT – BALI', '114.44761767597711', '-8.230677310375517', NULL, '1', 1),
(114, 'Rendah', 'TN BALI BARAT – BALI', '114.46570157962144', '-8.249475052321584', NULL, '1', 1),
(115, 'Buruk', 'TN BALI BARAT – BALI', '114.47943619966357', '-8.095049698795671', NULL, '1', 1),
(116, 'Baik', 'TN BALI BARAT – BALI', '114.49913813679184', '-8.092479880909378', NULL, '1', 1),
(117, 'Sedang', 'TN BALI BARAT – BALI', '114.50370670192308', '-8.096572553839401', NULL, '1', 1),
(118, 'Sedang', 'TN BALI BARAT – BALI', '114.50637169824958', '-8.097238802921032', NULL, '1', 1),
(119, 'Buruk', 'TN BALI BARAT – BALI', '114.5145570441097', '-8.120938234539105', NULL, '1', 1),
(120, 'Baik', 'TN BALI BARAT – BALI', '114.51132097714168', '-8.09114738274611', NULL, '1', 1),
(121, 'Buruk', 'TN BALI BARAT – BALI', '114.52340863905141', '-8.092194345588677', NULL, '1', 1),
(122, 'Buruk', 'TN BALI BARAT – BALI', '114.52824611296636', '-8.096762910719871', NULL, '1', 1),
(123, 'Sedang', 'TN BALI BARAT – BALI', '114.55919573257906', '-8.13464392993269', NULL, '1', 1),
(129, 'Buruk', 'TN WAKATOBI - SULAWESI TENGGARA', '123.86499710435761', '-5.78950632293472', '656015a43fafe.jpg', '27', 1),
(130, 'Baik', 'TN BUNAKEN', '124.80204051112999', '1.7626446514675431', '656056010a2ab.jpg', '30', 0),
(131, 'Baik', 'TN KEPULAUAN TOGEAN - SULAWESI TENGAH', '121.65779620379219', '-0.160587831073277', '6560564a685c2.png', '30', 0),
(132, 'Baik', 'TN WAKATOBI - SULAWESI TENGGARA', '124.2915154896527', '-5.295173298973471', '656056bb352b8.png', '30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_member`
--

CREATE TABLE `t_member` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `actor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_member`
--

INSERT INTO `t_member` (`id`, `user_id`, `first_name`, `last_name`, `address`, `city`, `province`, `actor`) VALUES
(9, 16, 'scuba', 'yasir', '2', 'Bandung', '3', 1),
(10, 17, 'Dian', 'Putri', 'Jalan yang pernah No 23', 'Jakarta', '1', 2),
(11, 18, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 19, 'budiman', 'sinaga', 'disana', 'Jakarta', '1', 2),
(13, 20, 'Cahya', 'Nurani', 'disebelah sana', 'Jakarta', '1', 1),
(14, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 22, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 23, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 24, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 25, 'Nisrina', 'Ishmah', 'Jl. Belimbing RT04/09, No.80, Kelurahan Tugu, Kecamatan Cimanggis, Kota Bandung, Jawa Barat', 'Bandung', '2', 2),
(19, 26, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 27, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 28, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 29, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 30, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_post`
--

CREATE TABLE `t_post` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_post`
--

INSERT INTO `t_post` (`id`, `id_member`, `keywords`, `category`, `image`, `description`) VALUES
(1, 9, 'nisrina', 1, '654913a694617.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 10, 'nisrina', 1, '6549149a8f886.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 10, 'Widia', 2, '6549198d096c9.jpeg', '2'),
(4, 9, 'Rahani', 1, '', '3'),
(5, 25, 'gili', 1, '655ff4799e8f7.jpeg', 'Seneng banget hari ini snorkeling di gili trawangan, terus aku ketemu terumbu karang cantik ini!!!');

-- --------------------------------------------------------

--
-- Table structure for table `t_tempat_adventure`
--

CREATE TABLE `t_tempat_adventure` (
  `id` int(11) NOT NULL,
  `nama_tempat` varchar(150) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `alamat_tempat` text NOT NULL,
  `nomor_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_tempat_adventure`
--

INSERT INTO `t_tempat_adventure` (`id`, `nama_tempat`, `id_kategori`, `foto`, `alamat_tempat`, `nomor_hp`) VALUES
(4, 'Tempat Makmur', 3, '654cc17c5d919.jpeg', 'Bandung', '28328392'),
(5, 'Rahani', 3, '654cc18a006c2.jpg', '2', '085324237299'),
(6, '25', 4, '654d823bf05f3.png', '25', '25'),
(7, 'Trip Karimun', 5, '655f9607d58a6.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075123'),
(8, 'Trip Gilitrawangan', 5, '656039d67a454.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(9, 'Hello', 5, '65603a0cc32da.png', 'Jl. Bumbak Dauh Jl. Pulau Ambon No.4,Kerobokan, Kec. Kuta Utara, Kabupaten Badung,Bali 80361', '(+62)81383449707'),
(10, '', 5, '65603a378f8d2.png', 'Pantai Yenanas, Yenbeser, Kec. Waigeo Sel., Kabupaten Raja Ampat, Papua Bar. 98482', '(+62) 81248813677'),
(11, 'Scuba Go', 6, '65603aa188553.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(12, 'Tulamben Scuba', 6, '65603acb33922.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(13, 'Alpha World Diving', 6, '65603afb5bf3c.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(14, 'Two Fish Divers', 6, '65603b2a118ab.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(15, 'Pantai Marina', 7, '65603b73b4cfc.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(16, 'Pantai Ancol', 7, '65603b9819480.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(17, 'Pantai Sambolo', 7, '65603bbb0c36a.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(18, 'Pantai Bagendur', 7, '65603bdea4c37.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(19, 'Pantai Sadranan', 7, '65603c593562c.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(20, 'Pantai Derawan', 7, '65603c8165b55.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)628114834614'),
(21, 'Blue Marin Dive', 6, '65603cc845570.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(22, 'Bali Diving', 6, '65603cec29e1b.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)85337075869'),
(23, 'Aqua Marine Diving', 5, '65603d45bb29a.png', 'Petitenget St No.2A, Kerobokan Kelod, Kuta, Badung Regency, Bali 80361, Indonesia', '(+62)628114834614'),
(24, 'Papua Diving', 5, '65603d6a2b8f4.png', 'Jl. Pantai Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Bar. 83352', '(+62)628114834614');

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('ADMIN','MEMBER','TEMPAT','PEMILIK TEMPAT') NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `nomor_hp` varchar(30) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id`, `username`, `email`, `password`, `role`, `active`, `nomor_hp`, `photo`) VALUES
(1, 'yasir', 'admin@gmail.com', '$2y$10$w6QUyRIInAMUxfZrFegdjuU3ipJr7jyRTOA/YAMCOhkdofyE2/0iC', 'ADMIN', 1, '23283923829', 'default.jpeg	'),
(16, 'makanan', 'makanan@gmail.com', '$2y$10$nK1WxWC5VGku8UwgdOFywuP0wRzMKDXViSz1yPW.YPw7ZSX3v7nbC', 'MEMBER', 1, '081214707143', 'default.jpeg	'),
(17, 'dian', 'dian@gmail.com', '$2y$10$8LXjbwdEDEC6RWtmmzecEu8OAseyj77yYBr2PdMxC4CZ9GUWglNWK', 'MEMBER', 1, '099263784823', 'photo-profile/user17.png'),
(18, 'userbaru', 'userbaru@gmail.com', '$2y$10$gY2eyQT61yHHik/x1tLJPOSDKMWYXc4BE1cq9238t2FOMZqjHoyJW', 'MEMBER', 1, '072389473294', 'default.jpeg'),
(19, 'budi', 'budiman@gmail.com', '$2y$10$NUsDgfDllowDHcA.mr5CmO7nRWCcYSl62zULUxbivhZbododpiU0y', 'MEMBER', 1, '09238947239', 'default.jpeg'),
(20, 'cahya', 'cahya@gmail.com', '$2y$10$CDvVD.sPSEm3CjbATYihSOwccm3XTD4WB4FU1id3zf054kkZp.pDm', 'MEMBER', 1, '09728942', 'photo-profile/user20.png'),
(21, 'ridho', 'ridho@gmail.com', '$2y$10$O35FnYCGE7D9ET0t4YZLBuKLmg3xJwuf5kd/9nuPn/R.wvAJ7TRjW', 'MEMBER', 1, '18219821', 'default.jpeg'),
(22, 'yasir', 'yasir@gmail.com', '$2y$10$Gn5CdWkcaI.MqeQPz/NGN.IX.558v9eztwTcglu//1nvCAIbtF7Zm', 'MEMBER', 1, '2389238293', 'default.jpeg'),
(23, 'maku', 'manusiakuat@gmail.com', '$2y$10$42ceLJwKzItPzbWFaE3bT.ikZkVIcoI5hr2PC/9Kgxib4fS4oWu9.', 'MEMBER', 1, '081385192333', 'default.jpeg'),
(24, 'nayiyeon', 'nayeon@gmail.com', '$2y$10$ikuafA/uotj/C1hrcoa./OXy7OLw05S81Y.iQ6JF/s8gUY2sfehJi', 'MEMBER', 1, '', 'default.jpeg'),
(25, 'nisrinaishmah', 'nisrinaishmah@gmail.com', '$2y$10$34kVeNy/zHLQ9zr4vkA4/eDjY2rGRIHN6AlgI/x/rb4CO12nfkPJm', 'MEMBER', 1, '081385192476', 'photo-profile/user25.jpeg'),
(26, 'wadi', 'wadiah@gmail.com', '$2y$10$JyNr.97xvDsVBqg7h7WzI.7FIoXz8ufjwhWFTj.R8Ne1VnvyEvJUO', 'MEMBER', 1, '081385192377', 'default.jpeg'),
(27, 'nopiany', 'nopian@gmail.com', '$2y$10$VxWsX.V.9RoVRCSzonrJtuU6KMnu43ROYopeUEci/eTCoTlOpNpk2', 'MEMBER', 1, '08123', 'default.jpeg'),
(28, 'karelsusanti', 'karelsusanti@gmail.com', '$2y$10$JW36Uye1JMMdZMgE7y0hy.5zr2f8a.L/2MN0laKl7nanRaVLqAJOC', 'MEMBER', 1, '081385190000', 'default.jpeg'),
(29, 'nisrinaishmah', 'nisrinaishmah@gmail.com', '$2y$10$kJMp6EYiDqhwAEDEgAC3zO6FsQG/WWWCx08fJED7A/UWuF0eibwIS', 'MEMBER', 1, '081385192476', 'default.jpeg'),
(30, 'nisrinaishmah', 'nishy@gmail.com', '$2y$10$IbJ/TzhWyBpWgFe2Ac1dVepNYUwMN.aRBFHEfzl5RkGgGgvzWpNRa', 'MEMBER', 1, '081385192476', 'default.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_biodiversity`
--
ALTER TABLE `t_biodiversity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jenis_bio`
--
ALTER TABLE `t_jenis_bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_koleksi`
--
ALTER TABLE `t_koleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_komentar`
--
ALTER TABLE `t_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_maps`
--
ALTER TABLE `t_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_member`
--
ALTER TABLE `t_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_post`
--
ALTER TABLE `t_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tempat_adventure`
--
ALTER TABLE `t_tempat_adventure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_biodiversity`
--
ALTER TABLE `t_biodiversity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_jenis_bio`
--
ALTER TABLE `t_jenis_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_koleksi`
--
ALTER TABLE `t_koleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_komentar`
--
ALTER TABLE `t_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_maps`
--
ALTER TABLE `t_maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `t_member`
--
ALTER TABLE `t_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `t_post`
--
ALTER TABLE `t_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_tempat_adventure`
--
ALTER TABLE `t_tempat_adventure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
