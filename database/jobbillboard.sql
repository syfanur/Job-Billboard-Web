-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 03:28 AM
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
-- Database: `jobbillboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(200) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nama`, `comment`) VALUES
(1, 'sip', 'heheh\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `image`, `user`, `message`) VALUES
(1, 'images/profil3.jpg', 'Cipa', 'Hehehehe'),
(2, 'images/profil2.jpg', 'Syfa', 'Huhuhuhuhuhuhu'),
(3, '', 'SYF', 'helo'),
(4, '', 'Baekyung', 'halllooooo');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id` int(200) NOT NULL,
  `icon` varchar(200) DEFAULT NULL,
  `notif` varchar(200) DEFAULT NULL,
  `waktu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`id`, `icon`, `notif`, `waktu`) VALUES
(1, 'fa fa-envelope bg-green', 'You have 6 messages', '3 minutes ago');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(200) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `deadline` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `poster` varchar(200) DEFAULT NULL,
  `kategori` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `deadline`, `description`, `poster`, `kategori`) VALUES
(1, 'Projek Aplikasi Industri menggunakan Java SE', '17 Agustus 2019', 'Dibuka pendaftaran projek pembuatan aplikasi industri menggunakan JAVA SE. Sebuah proyek dalam organisasi manapun, diperlukan kolaborasi dan kerjasama antar departemen untuk mencapai satu tujuan yang didefinisikan dengan baik dan jelas. Manajemen Proyek (Project Management) ini sangat penting dalam produksi barang dan jasa. Mulai dari sebuah ide hingga pada akhirnya menghasilkan suatu produk ataupun jasa, setiap langkah atau tahap dapat dikategorikan sebagai proyek individu. Setiap Proyek memerlukan Manajer Proyek yang bertanggung jawab dalam mengelola segala aspek pada sebuah proyek mulai dari merencanakan, mengorganisasikan, mengarahkan dan  mengendalikan proyek tersebut hingga selesai sesuai dengan anggaran, jangka waktu dan kualitas hasil yang ditetapkan. ', 'project1.png', 'Project1'),
(2, 'Projek Web Dashboard Instagram menggunakan Laravel', '13 Desember 2019', 'Dibuka pendaftaran projek pembuatan Dashboard Instagram menggunakan Laravel. Sebuah proyek dalam organisasi manapun, diperlukan kolaborasi dan kerjasama antar departemen untuk mencapai satu tujuan yang didefinisikan dengan baik dan jelas. Manajemen Proyek (Project Management) ini sangat penting dalam produksi barang dan jasa. Mulai dari sebuah ide hingga pada akhirnya menghasilkan suatu produk ataupun jasa, setiap langkah atau tahap dapat dikategorikan sebagai proyek individu. Setiap Proyek memerlukan Manajer Proyek yang bertanggung jawab dalam mengelola segala aspek pada sebuah proyek mulai dari merencanakan, mengorganisasikan, mengarahkan dan  mengendalikan proyek tersebut hingga selesai sesuai dengan anggaran, jangka waktu dan kualitas hasil yang ditetapkan.', 'project2.png', 'Project1'),
(3, 'Pendaftaran Asisten Mobile Application Development 2019', '27 November 2019', 'Hallo semuaa..\r\nRekruitasi asistan praktikum Android sudah dibuka!!!\r\nTunggu apa lagi, daftarkan diri kamu di link yang tertera diatas..\r\n\r\nUntuk form syarat dan ketentuan dapat dilihat di link http://recruitment.intgr.id/. \r\n\r\n\r\n\r\nBest Regards,\r\nEAD Laboratory', 'asprak1.jpg', 'Asisten1'),
(4, 'Lowongan Tutor Mata Kuliah Kalkulus 1B', '11 Desember 2019', 'Dibuka pendaftaran Tutor Mata Kuliah Kalkulus 1B. Untuk info selanjutnya hubungi kontak 08765315823', 'tutor1.jpg', 'Tutor1'),
(5, 'Projek pembuatan fitur cart menggunakan CRUD PHP', '30 Desember 2019', 'Dibuka pendaftaran projek pembuatan fitur card menggunakan CRUD PHP. Sebuah proyek dalam organisasi manapun, diperlukan kolaborasi dan kerjasama antar departemen untuk mencapai satu tujuan yang didefinisikan dengan baik dan jelas. Manajemen Proyek (Project Management) ini sangat penting dalam produksi barang dan jasa. Mulai dari sebuah ide hingga pada akhirnya menghasilkan suatu produk ataupun jasa, setiap langkah atau tahap dapat dikategorikan sebagai proyek individu. Setiap Proyek memerlukan Manajer Proyek yang bertanggung jawab dalam mengelola segala aspek pada sebuah proyek mulai dari merencanakan, mengorganisasikan, mengarahkan dan  mengendalikan proyek tersebut hingga selesai sesuai dengan anggaran, jangka waktu dan kualitas hasil yang ditetapkan.', 'project3.png', 'Project1'),
(6, 'Projek Pembuatan Poster Anti Korupsi', '26 Desember 2019', 'Dibuka pendaftaran project pembuatan poster. Sebuah proyek dalam organisasi manapun, diperlukan kolaborasi dan kerjasama antar departemen untuk mencapai satu tujuan yang didefinisikan dengan baik dan jelas. Manajemen Proyek (Project Management) ini sangat penting dalam produksi barang dan jasa. Mulai dari sebuah ide hingga pada akhirnya menghasilkan suatu produk ataupun jasa, setiap langkah atau tahap dapat dikategorikan sebagai proyek individu. Setiap Proyek memerlukan Manajer Proyek yang bertanggung jawab dalam mengelola segala aspek pada sebuah proyek mulai dari merencanakan, mengorganisasikan, mengarahkan dan  mengendalikan proyek tersebut hingga selesai sesuai dengan anggaran, jangka waktu dan kualitas hasil yang ditetapkan.', 'project4.jpg', 'Project1'),
(7, 'Projek Web Dashboard Menggunakan bahasa Phyton', '25 Desember 2019', 'Dibuka pendaftaran projek pembuatan web dashboard. Sebuah proyek dalam organisasi manapun, diperlukan kolaborasi dan kerjasama antar departemen untuk mencapai satu tujuan yang didefinisikan dengan baik dan jelas. Manajemen Proyek (Project Management) ini sangat penting dalam produksi barang dan jasa. Mulai dari sebuah ide hingga pada akhirnya menghasilkan suatu produk ataupun jasa, setiap langkah atau tahap dapat dikategorikan sebagai proyek individu. Setiap Proyek memerlukan Manajer Proyek yang bertanggung jawab dalam mengelola segala aspek pada sebuah proyek mulai dari merencanakan, mengorganisasikan, mengarahkan dan  mengendalikan proyek tersebut hingga selesai sesuai dengan anggaran, jangka waktu dan kualitas hasil yang ditetapkan.', 'project5.png', 'Project1'),
(8, 'Membuat aplikasi perhitungan kalkulator menggunakan C++', '17 Desember 2019', 'Dibuka pendaftaran projek pembuatan aplikasi perhitungan kalkulator. Sebuah proyek dalam organisasi manapun, diperlukan kolaborasi dan kerjasama antar departemen untuk mencapai satu tujuan yang didefinisikan dengan baik dan jelas. Manajemen Proyek (Project Management) ini sangat penting dalam produksi barang dan jasa. Mulai dari sebuah ide hingga pada akhirnya menghasilkan suatu produk ataupun jasa, setiap langkah atau tahap dapat dikategorikan sebagai proyek individu. Setiap Proyek memerlukan Manajer Proyek yang bertanggung jawab dalam mengelola segala aspek pada sebuah proyek mulai dari merencanakan, mengorganisasikan, mengarahkan dan  mengendalikan proyek tersebut hingga selesai sesuai dengan anggaran, jangka waktu dan kualitas hasil yang ditetapkan.', 'project6.jpg', 'Project1'),
(9, 'Lowongan Front End Engineer dengan Javascript', '21 Desember 2019', 'Dibuka pendaftaran menjadi front end engineer. Sebuah proyek dalam organisasi manapun, diperlukan kolaborasi dan kerjasama antar departemen untuk mencapai satu tujuan yang didefinisikan dengan baik dan jelas. Manajemen Proyek (Project Management) ini sangat penting dalam produksi barang dan jasa. Mulai dari sebuah ide hingga pada akhirnya menghasilkan suatu produk ataupun jasa, setiap langkah atau tahap dapat dikategorikan sebagai proyek individu. Setiap Proyek memerlukan Manajer Proyek yang bertanggung jawab dalam mengelola segala aspek pada sebuah proyek mulai dari merencanakan, mengorganisasikan, mengarahkan dan  mengendalikan proyek tersebut hingga selesai sesuai dengan anggaran, jangka waktu dan kualitas hasil yang ditetapkan.', 'project7.png', 'Project1'),
(10, 'Git Hub Troubleshooting and Security Project', '1 September 2019', 'Dibuka pendaftaran troubleshooting Git Hub. Sebuah proyek dalam organisasi manapun, diperlukan kolaborasi dan kerjasama antar departemen untuk mencapai satu tujuan yang didefinisikan dengan baik dan jelas. Manajemen Proyek (Project Management) ini sangat penting dalam produksi barang dan jasa. Mulai dari sebuah ide hingga pada akhirnya menghasilkan suatu produk ataupun jasa, setiap langkah atau tahap dapat dikategorikan sebagai proyek individu. Setiap Proyek memerlukan Manajer Proyek yang bertanggung jawab dalam mengelola segala aspek pada sebuah proyek mulai dari merencanakan, mengorganisasikan, mengarahkan dan  mengendalikan proyek tersebut hingga selesai sesuai dengan anggaran, jangka waktu dan kualitas hasil yang ditetapkan.', 'project8.png', 'Project1'),
(12, 'Big Data Management Internship', '8 Januari 2020', 'Mengelola fungsi data acquisition & integration (meliputi data operations management dan meta-data management), \r\n							mengelola data mart management & data mining untuk memberikan informasi bagi para penggu...', 'showcase2.jpg', 'Trending'),
(14, 'Pendaftaran Asisten Rekayasa Proses Bisnis 2019', '10 Januari 2020', 'Hallo semuaa..\r\nRekruitasi asistan Rekayasa Proses Bisnis sudah dibuka!!!\r\nTunggu apa lagi, daftarkan diri kamu di link yang tertera diatas..\r\n\r\nUntuk form syarat dan ketentuan dapat dilihat di link http://recruitment.intgr.id/. \r\n\r\n\r\n\r\nBest Regards,\r\nBPAD Laboratory', 'asprak2.png', 'Asisten1'),
(15, 'Pendaftaran Asisten Manajemen Jaringan Komputer 2019', '28 September 2019', 'Hallo semuaa..\r\nRekruitasi asistan praktikum Manajemen Jaringan Komputer sudah dibuka!!!\r\nTunggu apa lagi, daftarkan diri kamu di link yang tertera diatas..\r\n\r\nUntuk form syarat dan ketentuan dapat dilihat di link http://recruitment.intgr.id/. \r\n\r\n\r\n\r\nBest Regards,\r\nSISJAR Laboratory', 'asprak3.jpg', 'Asisten1'),
(16, 'Pendaftaran Asisten Basis Data 2019', '7 November 2019', 'Hallo semuaa..\r\nRekruitasi asistan praktikum Basis Data sudah dibuka!!!\r\nTunggu apa lagi, daftarkan diri kamu di link yang tertera diatas..\r\n\r\nUntuk form syarat dan ketentuan dapat dilihat di link http://recruitment.intgr.id/. \r\n\r\n\r\n\r\nBest Regards,\r\nDASPRO Laboratory', 'asprak4.png', 'Asisten1'),
(17, 'Pendaftaran Asisten Supply Chain Management 2019', '3 Desember 2019', 'Hallo semuaa..\r\nRekruitasi asisten praktikum Pengembangan Produk sudah dibuka!!!\r\nTunggu apa lagi, daftarkan diri kamu di link yang tertera diatas..\r\n\r\nUntuk form syarat dan ketentuan dapat dilihat di link http://recruitment.intgr.id/. \r\n\r\n\r\n\r\nBest Regards,\r\nAPK&E Laboratory', 'asprak6.jpg', 'Asisten1'),
(18, 'Pendaftaran Asisten Tekno Ekonomi 2019', '18 Desember 2019', 'Hallo semuaa.. Rekruitasi asisten praktikum Tekno Ekonomi 2019 sudah dibuka!!! Tunggu apa lagi, daftarkan diri kamu di link yang tertera diatas..  Untuk form syarat dan ketentuan dapat dilihat di link http://recruitment.intgr.id/.     Best Regards, Tekmi Laboratory', 'asprak7.jpg', 'Asisten1'),
(19, 'Pendaftaran Asisten Pengembangan Produk 2019', '8 Februari 2020', NULL, 'asprak8.jpeg', 'Asisten1'),
(20, 'Dibutuhkan segera tutor mata kuliah Statistika Industri', '23 September 2019', 'Dibuka pendaftaran tutor statin. untuk info lebih lanjut hubungi 097437193139', 'tutor2.jpg', 'Tutor1'),
(22, 'Project PKM', '14 November 2019', 'project PKM-GT', '2NNDTLVKBCNOLM26OYRTCUQLQI.jpg', 'PKM');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(200) NOT NULL,
  `todo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `todo`) VALUES
(1, 'Maintenance Sistem'),
(2, 'Update Fitur'),
(3, 'Usability Testing untuk User'),
(4, 'Login Session'),
(5, 'Menambah fitur Feedback aplikasi'),
(6, 'Update lowongan job');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `Avatar` varchar(200) DEFAULT NULL,
  `About` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `status`, `Avatar`, `About`) VALUES
(4, 'syfanur31@gmail.com', 'syfa', '12345', 'student', 'project8.png', 'Saya seorang mahasiswa Telkom University'),
(10, 'akun123@gmail.com', 'Lathifah', '12345', 'admin', NULL, NULL),
(11, 'syfanurlathifah@yahoo.com', 'Nur', '123', 'student', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
