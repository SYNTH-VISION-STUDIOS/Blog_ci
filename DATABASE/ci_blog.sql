-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2025 at 11:17 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsigniter-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `album_name` varchar(100) NOT NULL,
  `album_seo` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `album_name`, `album_seo`, `photo`, `is_active`) VALUES
(17, 'Album 1', 'album-1', 'album-1-1581343722711.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `photo`) VALUES
(5, 'Home', '7985a36a3ace23be336cf6c2c154c44b.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `slug`, `is_active`) VALUES
(6, 'Informasi', 'Informasi', 'Y'),
(7, 'Edukasi', 'Edukasi', 'Y'),
(8, 'Berita', 'Berita', 'Y'),
(9, 'Makanan', 'Makanan', 'Y'),
(10, 'Travel', 'Travel', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_name`, `description`) VALUES
(1, '', '.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `gallery_name` varchar(100) NOT NULL,
  `gallery_seo` varchar(100) NOT NULL,
  `information` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `id_album`, `gallery_name`, `gallery_seo`, `information`, `photo`, `is_active`) VALUES
(9, 17, 'Galeri 2', 'galeri-2', 'LIfe is Strange', 'galeri-2-15815614412.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `id` int(11) NOT NULL,
  `web_name` varchar(255) NOT NULL,
  `web_address` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`id`, `web_name`, `web_address`, `meta_description`, `meta_keyword`, `photo`) VALUES
(1, 'Web-Genius@gmail.com', 'Web-Genius@gmail.com', 'Latest realsourcecodes Today, the Latest Most Complete rea sourcecodes Berita, ...', 'realsourcecodes.com', '72ebc471fc8b3d409798f84179046f47.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 'Setting Web', '', 'fas fa-fw fa-cog', 'Y'),
(2, 'Menu Setting', '', 'fas fa-fw fa-sliders-h', 'Y'),
(3, 'Article Management', '', 'fas fa-fw fa-newspaper', 'Y'),
(4, 'Media', '', 'fas fa-fw fa-photo-video', 'Y'),
(5, 'Visit Site', 'home', 'fas fa-fw fa-home', 'Y'),
(6, 'Logout', 'auth/logout', 'fa fa-power-off', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `featured` char(1) NOT NULL,
  `choice` char(1) NOT NULL,
  `thread` char(1) NOT NULL,
  `id_category` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `is_active` char(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `title`, `seo_title`, `content`, `featured`, `choice`, `thread`, `id_category`, `photo`, `is_active`, `date`) VALUES
(98, 'Harga Cabai Melonjak', 'harga-cabai-melonjak', 'Pada 25 Juli 2024, harga cabai rawit di Daerah Istimewa Yogyakarta mengalami lonjakan signifikan, mencapai Rp 70 ribu per kilogram.', 'Y', 'Y', 'Y', 6, 'b375caa3b15b8cd1fdda0ddb46fb281a.jpg', 'Y', '2025-02-20'),
(103, 'Liburan yang bermanfaat', 'liburan-yang-bermanfaat', '<p><font color=\"#ff00ff\">liburan kali </font><span xss=\"removed\">ini</span> kita <b><u xss=\"removed\">belajar</u></b> membuat sebuah website dengan belajar di awal menggunakan html cssdan sedikit JS, kemudian di hari setelahanya kita belajar framework ci 3, memang kesanya jadil  CI3. namun ya untuk  pemula sangatlah oke untuk di pelajari karena mudah</p>', 'Y', 'N', 'N', 6, '0da3d966d9fe3d6db415c1af4b89a5c3.jpg', 'Y', '2025-02-22'),
(104, 'Edukasi', 'edukasi', '<h3 data-start=\"136\" data-end=\"164\"><strong data-start=\"140\" data-end=\"162\">Slogan atau Motto:</strong></h3><p data-start=\"165\" data-end=\"335\">???? <em data-start=\"168\" data-end=\"214\">\"Belajar Tanpa Batas, Berkarya Tanpa Henti!\"</em><br data-start=\"214\" data-end=\"217\">???? <em data-start=\"220\" data-end=\"265\">\"Menyebarkan Ilmu, Mencerahkan Masa Depan!\"</em><br data-start=\"265\" data-end=\"268\">???? <em data-start=\"271\" data-end=\"333\">\"Dari Kata Menjadi Wawasan, Dari Wawasan Menjadi Perubahan!\"</em></p><h3 data-start=\"337\" data-end=\"380\"><strong data-start=\"341\" data-end=\"378\">Kata-Kata Motivasi untuk Pembaca:</strong></h3><p data-start=\"381\" data-end=\"708\">???? <em data-start=\"384\" data-end=\"459\">\"Setiap hari adalah kesempatan baru untuk belajar sesuatu yang berharga.\"</em><br data-start=\"459\" data-end=\"462\">???? <em data-start=\"465\" data-end=\"549\">\"Pendidikan bukan hanya di sekolah, tetapi di setiap pengalaman yang kita jalani.\"</em><br data-start=\"549\" data-end=\"552\">???? <em data-start=\"555\" data-end=\"618\">\"Ilmu yang dibagikan adalah ilmu yang akan terus berkembang.\"</em><br data-start=\"618\" data-end=\"621\">???? <em data-start=\"624\" data-end=\"706\">\"Jangan takut untuk belajar hal baru, karena setiap ahli pernah menjadi pemula.\"</em></p><h3 data-start=\"710\" data-end=\"763\"><strong data-start=\"714\" data-end=\"761\">Kata-Kata Inspiratif untuk Blogger Edukasi:</strong></h3><p data-start=\"764\" data-end=\"1133\">?? <em data-start=\"767\" data-end=\"851\">\"Menulis bukan hanya berbagi kata, tapi juga membangun pemikiran yang lebih baik.\"</em><br data-start=\"851\" data-end=\"854\">???? <em data-start=\"857\" data-end=\"933\">\"Dengan satu artikel, kita bisa menginspirasi banyak orang untuk berubah.\"</em><br data-start=\"933\" data-end=\"936\">???? <em data-start=\"939\" data-end=\"1036\">\"Menjadi blogger edukasi berarti menjadi jembatan ilmu bagi mereka yang haus akan pengetahuan.\"</em><br data-start=\"1036\" data-end=\"1039\">???? <em data-start=\"1042\" data-end=\"1131\">\"Setiap tulisan adalah jejak yang akan dikenang dan membawa manfaat bagi banyak orang.\"</em></p>', 'Y', 'Y', 'Y', 7, '6b865d061b6313a9b114922594581875.jpeg', 'Y', '2025-02-20'),
(105, 'Dunia di Ambang Perubahan: Tren Berita Terhangat Hari Ini', 'dunia-di-ambang-perubahan-tren-berita-terhangat-hari-ini', '<p data-start=\"74\" data-end=\"331\">Di era digital yang serba cepat ini, informasi berkembang dengan dinamis. Berbagai peristiwa dari berbagai penjuru dunia terus bergulir, membawa dampak besar bagi masyarakat global. Berikut adalah rangkuman berita terkini yang patut Anda ketahui hari ini.</p><h3 data-start=\"333\" data-end=\"387\"><strong data-start=\"337\" data-end=\"385\">1. Teknologi AI Semakin Mendominasi Industri</strong></h3><p data-start=\"388\" data-end=\"722\">Kecerdasan buatan (AI) kini bukan lagi sekadar konsep futuristik. Berbagai perusahaan teknologi raksasa berlomba-lomba mengembangkan AI untuk berbagai kebutuhan, mulai dari otomasi pekerjaan hingga inovasi dalam dunia medis. Namun, di balik kemajuan ini, muncul kekhawatiran mengenai etika dan dampaknya terhadap lapangan pekerjaan.</p><h3 data-start=\"724\" data-end=\"790\"><strong data-start=\"728\" data-end=\"788\">2. Krisis Iklim: Gelombang Panas Melanda Berbagai Negara</strong></h3><p data-start=\"791\" data-end=\"1066\">Perubahan iklim semakin terasa nyata. Beberapa negara di Eropa dan Asia mengalami suhu ekstrem yang memecahkan rekor. Para ilmuwan memperingatkan bahwa jika tidak ada langkah serius dalam mengurangi emisi karbon, dampaknya akan semakin parah dalam beberapa tahun mendatang.</p><h3 data-start=\"1068\" data-end=\"1129\"><strong data-start=\"1072\" data-end=\"1127\">3. Politik Global: Ketegangan Internasional Memanas</strong></h3><p data-start=\"1130\" data-end=\"1367\">Hubungan diplomatik antarnegara kembali menjadi sorotan. Ketegangan di beberapa wilayah meningkat akibat konflik kepentingan politik dan ekonomi. Para pemimpin dunia kini dihadapkan pada tantangan besar untuk menjaga stabilitas global.</p><h3 data-start=\"1369\" data-end=\"1424\"><strong data-start=\"1373\" data-end=\"1422\">4. Tren Ekonomi: Pasar Finansial Berfluktuasi</strong></h3><p data-start=\"1425\" data-end=\"1660\">Pasar saham dan mata uang kripto mengalami fluktuasi signifikan akibat kebijakan moneter yang dikeluarkan oleh bank sentral berbagai negara. Para investor disarankan untuk tetap waspada dalam menghadapi ketidakpastian ekonomi global.</p><h3 data-start=\"1662\" data-end=\"1682\"><strong data-start=\"1666\" data-end=\"1680\">Kesimpulan</strong></h3><p data-start=\"1683\" data-end=\"1911\">Dunia terus bergerak, dan kita perlu tetap waspada terhadap perkembangan yang terjadi. Dengan membaca berita terpercaya, kita bisa lebih siap menghadapi tantangan di masa depan. Tetap ikuti update terbaru hanya di [Nama Blog]!</p>', 'Y', 'Y', 'N', 8, 'cec4ca01feee15332fb704f398721108.jpeg', 'Y', '2025-02-20'),
(106, 'Menjelajahi Kelezatan: Mengapa Makanan Lebih dari Sekadar Rasa', 'menjelajahi-kelezatan-mengapa-makanan-lebih-dari-sekadar-rasa', '<p data-start=\"70\" data-end=\"321\">Makanan bukan sekadar kebutuhan untuk bertahan hidup, tetapi juga seni, budaya, dan pengalaman yang membawa kebahagiaan. Setiap hidangan memiliki cerita, setiap rasa menyimpan kenangan, dan setiap gigitan bisa membawa kita ke berbagai belahan dunia.</p><h3 data-start=\"323\" data-end=\"366\"><strong data-start=\"327\" data-end=\"364\">Makanan sebagai Penghubung Budaya</strong></h3><p data-start=\"367\" data-end=\"670\">Dari nasi goreng khas Indonesia hingga ramen Jepang, setiap makanan mencerminkan identitas dan tradisi suatu daerah. Melalui makanan, kita bisa mengenal budaya lain tanpa harus bepergian jauh. Rasa khas dari rempah-rempah dan cara memasak yang unik membuat setiap sajian menjadi sesuatu yang istimewa.</p><h3 data-start=\"672\" data-end=\"713\"><strong data-start=\"676\" data-end=\"711\">Kenikmatan dalam Setiap Gigitan</strong></h3><p data-start=\"714\" data-end=\"1010\">Ada alasan mengapa makanan bisa memberikan kebahagiaan. Kombinasi rasa, tekstur, dan aroma membangkitkan berbagai emosi. Sebuah hidangan yang lezat bisa membawa kita kembali ke masa kecil, mengingatkan momen kebersamaan dengan keluarga, atau bahkan menghadirkan rasa nyaman di tengah kesibukan.</p><h3 data-start=\"1012\" data-end=\"1057\"><strong data-start=\"1016\" data-end=\"1055\">Tren Kuliner yang Selalu Berkembang</strong></h3><p data-start=\"1058\" data-end=\"1285\">Dunia kuliner terus berkembang, menghadirkan tren makanan yang menarik untuk dicoba. Dari makanan sehat seperti smoothie bowl hingga kreasi fusion yang menggabungkan berbagai budaya, selalu ada hal baru yang menggugah selera.</p><h3 data-start=\"1287\" data-end=\"1307\"><strong data-start=\"1291\" data-end=\"1305\">Kesimpulan</strong></h3><p data-start=\"1308\" data-end=\"1559\">Makanan lebih dari sekadar kebutuhan—ia adalah bagian dari kehidupan yang menyatukan, menginspirasi, dan memberikan kenikmatan. Jadi, jangan ragu untuk menjelajahi berbagai cita rasa dan menikmati setiap pengalaman kuliner dengan sepenuh hati! ?????????</p>', 'Y', 'Y', 'N', 9, 'bdc5e2f043526992c5317466b187249e.png', 'Y', '2025-02-20'),
(107, 'Menjelajah Dunia: Lebih dari Sekadar Perjalanan', 'menjelajah-dunia-lebih-dari-sekadar-perjalanan', '<p data-start=\"55\" data-end=\"419\">Dunia ini terlalu luas untuk hanya diam di satu tempat. Setiap sudutnya menyimpan cerita, setiap jalannya menawarkan petualangan, dan setiap tempat memiliki keindahan yang menunggu untuk ditemukan. Bagi seorang traveler sejati, perjalanan bukan hanya tentang destinasi, tetapi juga tentang pengalaman, pembelajaran, dan kenangan yang tercipta di sepanjang jalan.</p><h3 data-start=\"421\" data-end=\"461\"><strong data-start=\"425\" data-end=\"459\">Mengapa Traveling Itu Berarti?</strong></h3><p data-start=\"462\" data-end=\"825\">Banyak orang bermimpi untuk menjelajah dunia, tetapi tidak semua orang berani melangkah keluar dari zona nyaman. Traveling bukan hanya tentang bersenang-senang atau mengambil foto indah untuk media sosial. Lebih dari itu, perjalanan mengajarkan kita tentang keberagaman budaya, cara hidup yang berbeda, dan bahkan memberi kita perspektif baru tentang kehidupan.</p><p data-start=\"827\" data-end=\"1053\">Ketika mengunjungi tempat baru, kita belajar memahami bagaimana orang lain hidup, berbicara, dan berpikir. Kita juga menemukan keunikan dalam perbedaan serta menyadari bahwa dunia ini lebih luas dari apa yang kita bayangkan.</p><h3 data-start=\"1055\" data-end=\"1094\"><strong data-start=\"1059\" data-end=\"1092\">Petualangan di Setiap Langkah</strong></h3><p data-start=\"1095\" data-end=\"1414\">Salah satu hal terbaik tentang traveling adalah kejutan yang tidak terduga. Mungkin kita akan menemukan warung kecil dengan makanan terenak yang tidak pernah ada dalam rekomendasi wisata, bertemu dengan orang asing yang akhirnya menjadi sahabat, atau bahkan mengalami kejadian yang mengubah cara kita memandang dunia.</p><p data-start=\"1416\" data-end=\"1724\">Setiap perjalanan memiliki tantangannya sendiri. Bisa jadi kita tersesat di kota yang tidak dikenal, menghadapi hambatan bahasa, atau harus menyesuaikan diri dengan budaya yang berbeda. Namun, justru dari tantangan-tantangan inilah kita belajar menjadi lebih mandiri, fleksibel, dan terbuka terhadap dunia.</p><h3 data-start=\"1726\" data-end=\"1764\"><strong data-start=\"1730\" data-end=\"1762\">Lebih dari Sekadar Destinasi</strong></h3><p data-start=\"1765\" data-end=\"2066\">Sering kali, orang hanya fokus pada tujuan akhir tanpa benar-benar menikmati perjalanan itu sendiri. Padahal, keindahan sejati dari traveling adalah prosesnya—naik kereta yang melintasi pegunungan, menikmati senja di tepi pantai, atau sekadar berbicara dengan penduduk setempat yang penuh keramahan.</p><p data-start=\"2068\" data-end=\"2239\">Dalam perjalanan, kita belajar untuk hidup di saat ini, menikmati setiap detik, dan menghargai momen-momen kecil yang sering kali terabaikan dalam kehidupan sehari-hari.</p><h3 data-start=\"2241\" data-end=\"2261\"><strong data-start=\"2245\" data-end=\"2259\">Kesimpulan</strong></h3><p data-start=\"2262\" data-end=\"2485\">Traveling bukan hanya tentang pergi ke tempat baru, tetapi juga tentang bagaimana kita tumbuh dan berkembang sebagai individu. Setiap perjalanan membawa pelajaran, kenangan, dan cerita yang akan selalu melekat dalam hati.</p><p data-start=\"2487\" data-end=\"2670\">Jadi, kemasi tasmu, buka peta, dan biarkan langkahmu membawa ke tempat-tempat yang belum pernah kamu bayangkan sebelumnya. Karena dunia ini terlalu indah untuk tidak dijelajahi. ?????</p>', 'Y', 'Y', 'Y', 10, '1a5d4b711e8f120f38757c0dc2ade839.jpg', 'Y', '2025-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `sub_url` varchar(50) NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `id_menu`, `sub_title`, `sub_url`, `is_active`) VALUES
(1, 1, 'Web Identity', 'admin/identity', 'Y'),
(2, 1, 'Contact', 'admin/contact', 'Y'),
(3, 2, 'Main Menu', 'admin/menu', 'Y'),
(4, 2, 'Sub Menu', 'admin/submenu', 'Y'),
(5, 3, 'Category', 'admin/category', 'Y'),
(6, 3, 'Add Post', 'admin/posting', 'Y'),
(7, 4, 'Album', 'admin/album', 'N'),
(8, 4, 'Photo Gallery', 'admin/gallery', 'N'),
(10, 4, 'Banner', 'admin/banner', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$QUM2OeQCZclQqJIhZKKMt.Aq8dA3Y7eIzjtXsyr.xuE0kDjfj8SLS', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1740305025, 1, 'Will', 'Williams', 'CodeAstro', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(37, 1, 1),
(38, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `identity`
--
ALTER TABLE `identity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
