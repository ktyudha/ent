-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 09:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `portalweb`
--

CREATE TABLE `portalweb` (
  `id` int(255) NOT NULL,
  `tagline` varchar(50) NOT NULL,
  `category` varchar(10) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portalweb`
--

INSERT INTO `portalweb` (`id`, `tagline`, `category`, `content`, `resume`, `date`, `image_url`) VALUES
(12, 'Tiga Buku yang Wajib Dibaca Saat Masa Kuliah', 'lifestyle', '<p>&nbsp; &nbsp; &nbsp;Oleh : Mark Manson</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;Penerbit :&nbsp;PT. Gramedia Widiasarana Indonesia</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;Buku Sebuah Seni untuk Bersikap Bodo Amat sangat cocok untuk pembaca yang sedang mencari makna hidup atau yang merasa sedang berada dalam titik terendah kehidupan. Mark Manson menuangkan gagasan dan argumentasinya dengan lugas dan terstruktur. Tidak lupa dipertegas dengan cerita-cerita tentang pengalaman hidupnya dan menambahkan sejumlah kisah nyata dari beberapa tokoh, seperti Charles Bukowski, Dave Mustaine, dan William James. Melalui bukunya ini, Mark ingin membuka pikiran pembaca bahwa kunci kehidupan yang baik memang bukan tentang memedulikan lebih banyak hal, melainkan tentang memperdulikan hal sederhana.</p>\r\n', 'Masa Kuliah merupakan waktu yang  tepat untuk mengeksplorasi banyak hal, termasuk untuk menambah wawasan. Tidak hanya dalam kegiatan belajar mengajar, tetapi membaca buku juga dapat meningkatkan pengetahuan', 1662864800, 'uploads/sebuah-seni-untuk-bersikap-bodo-amat.jpg'),
(13, 'Perkembangan Smartphone Dari masa ke masa', 'teknologi', '<p><img alt=\"\" src=\"/portalberita/uploads/infografis.png\" style=\"height:717px; width:500px\" /></p>\r\n', 'Smartphone kini menjadi barang yang inklusif dan dimiliki banyak orang. Namun demikian, tidak seperti televisi maupun alat elektronik lainnya, ponsel pintar mengalami perkembangan yang signifikan dari masa ke masa', 1662870160, 'uploads/perkembangan-smartphone-dari-masa-ke-masa.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(22, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500'),
(23, 'yudha', 'yudha@eventsuroboyo.com', '8ea08b838ecd36615e845ff35501e8c8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portalweb`
--
ALTER TABLE `portalweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portalweb`
--
ALTER TABLE `portalweb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
