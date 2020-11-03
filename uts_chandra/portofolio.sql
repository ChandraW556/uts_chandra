-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 02:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `gambar`, `judul`, `isi`) VALUES
(1, '22.jpg', 'Perkenalan diri ', 'Halo Perkenalkan Nama Saya Adalah Chandra Wijaya , Kalian Bisa Memanggil Saya chan atau Fadil , Saya Anak Kedua Dari Ketiga Saudara.Saya Lahir pada Bulan Agustus tanggal 07 di tahun 2000 bertempat di Tangerang Selatan Dimana Ciputat Adalah tempat Kelahiran Saya.Saya Memiliki Hobby Terhadap Cyber Security Dimana Bagaimana Cara Users Untuk melindungi\r\ndata2 pribadi nya Dan Memiliki Ketertarikan Dengan Budaya Jejepangan Apalagi Dalam Segi Entertainment Yaitu Anime , Visual Novel Dan Vtuber Yang Menurut Saya Sedang Naik Daun Nya');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `pesan`) VALUES
(1, 'chandra', 'cw62753@gmail.com', 'Tolong lah programmer nya suruh istirahat kasihan dia jadi babu mulu '),
(9, 'alif', 'alipd123@gmail.com', 'ya dan tidak'),
(10, 'barry', 'barry124@gmail.com', 'aduh bunda kok kagak masuk2 database nya yah wkwkwk'),
(11, 'alif', 'alif123@gmail.com', 'asasaswd');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keahlian` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `nama`, `keahlian`) VALUES
(1, 'Web Developer ', 'Web developer adalah seorang programmer yang membuat program dan aplikasi untuk world wide web. Seorang web developer tahu bagaimana cara membuat website dari nol, membuat kode custom jika memang Anda membutuhkan fitur khusus di website Anda, mengembangka'),
(2, 'Cyber Security ', ' Cyber Security menawarkan gelar khusus dalam jaminan keamanan dunia maya dengan membekali mahasiswa dengan keahlian teknis yang dibutuhkan untuk memasuki persaingan cyber.'),
(3, 'Mobile App Development', 'Pengembangan aplikasi seluler mirip dengan pengembangan aplikasi Web yang bermula dari pengembangan perangkat lunak yang lebih tradisional. Namun, satu perbedaan penting adalah bahwa aplikasi seluler (aplikasi) sering ditulis secara khusus untuk memanfaatkan fitur unik yang ditawarkan oleh perangkat seluler tertentu.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
