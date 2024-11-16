-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 04:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_pfswd`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `gambar_blog` varchar(255) NOT NULL,
  `judul_blog` varchar(255) NOT NULL,
  `penulis_blog` varchar(50) NOT NULL,
  `tanggal_blog` date NOT NULL,
  `deskripsi_blog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `gambar_blog`, `judul_blog`, `penulis_blog`, `tanggal_blog`, `deskripsi_blog`) VALUES
(1, 'https://i.imgur.com/kZvwlkD.jpeg', 'Know Your Animal\'s Pet Needs', 'Qwerty', '2024-10-13', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi iure quia porro eos. Eos, facilis doloribus ratione iusto optio adipisci tenetur veritatis ipsam vero in suscipit deleniti praesentium ullam. Animi aspernatur perferendis vitae nemo sol'),
(2, 'https://i.imgur.com/iz2pGir.jpeg', 'Top Animal Care Tips', 'Saitama', '2024-11-14', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure dolor eum maxime cum facilis id omnis sapiente nobis. Obcaecati expedita quasi non dolorem accusantium fugit voluptatum eligendi nisi laborum quaerat! Vitae iusto impedit dolor delectus quod c'),
(3, 'https://i.imgur.com/kZvwlkD.jpeg', 'TESTESTES', 'Boboiboy', '2024-09-17', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ex mollitia eaque dolorum a eos error suscipit? Inventore ipsam corporis sapiente nobis quo, deserunt libero magni dolor voluptatibus. Sequi, laudantium.Quaerat, quibusdam doloremque? Minus ');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `gambar_layanan` varchar(255) NOT NULL,
  `deskripsi_layanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `gambar_layanan`, `deskripsi_layanan`) VALUES
(1, 'https://i2.wp.com/jendela360.com/info/wp-content/uploads/2021/04/bigstock-139397831-e1619757255582.jpg', 'Konsultasi kesehatan hewan, vaksinasi, perawatan medis, grooming, dan penjualan kebutuhan hewan peliharaan.'),
(2, 'https://www.kamogroup.id/wp-content/uploads/2022/08/klinik-hewan-bogor.jpg', 'Mengecek setiap bagian tubuh seperti mata, telinga, hidung, tangan, kaki, bulu, jantung, hati, dan semua organ lainnya.'),
(3, 'https://rumahsakithewanjakarta.com/img/facilities/large/1215984906.png', 'Memberikan rawat inap serta mengecek kondisi hewan setiap 2-3 jam, hingga akhirnya diberi keputusan untuk pulang.'),
(4, 'https://www.kamogroup.id/wp-content/uploads/2022/08/klinik-hewan-bogor.jpg', 'Mengecek setiap bagian tubuh seperti mata, telinga, hidung, tangan, kaki, bulu, jantung, hati, dan semua organ lainnya.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
