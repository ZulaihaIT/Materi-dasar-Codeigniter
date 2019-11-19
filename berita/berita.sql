-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2019 at 08:06 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul`, `kategori`, `deskripsi`, `gambar`) VALUES
(5, 'Web Berita 5', 'Budaya', ' Ketika mendengar nama “Indonesia”, kebanyakan pelancong pasti mengatakan “Bali, right?”. Jika dibandingkan dengan provinsi lain, Bali memang sangat populer karena memiliki keindahan alam yang sungguh menawan. Padahal jika bergeser ke arah Tenggara Indonesia, ada beragam tempat wisata di Nusa Tenggara Timur (NTT) yang tidak kalah bagusnya dengan Bali.\r\n\r\nBaca Eloknya Pantai Tarimbang Sumba Timur Nusa Tenggara Timur\r\n\r\nSelain Labuhan Bajo, Nusa Tenggara Timur juga punya beberapa tempat wisata lain yang katanya mirip surga yang dapat dilihat. Jika kamu berencana liburan ke NTT, 7 tempat wisata di Nusa Tenggara Timur berikut ini wajib masuk dalam bucket list kamu.', '1572576125.png'),
(6, 'Pulau Komodo', 'Ekonomi', 'Pulau Komodo merupakan satu-satunya pulau yang pernah masuk dalam daftar 7 keajaiban dunia. Pulau ini memiliki keindahan alam yang membuatmu akan berkata <i>“wow, amazing!”</i>. Selain mengunjungi tempat penangkaran komodo terbesar di dunia, kamu dapat mengunjungi beragam tempat wisata lainnya, seperti Pink Beach.<br>\r\n\r\nNamun sayang, biaya paket liburan ke Pulau Komodo bisa dibilang cukup mahal. Untuk menghemat biaya, kamu dan teman-temanmu bisa liburan ala backpacker. Untuk mengecek harga tiket pesawat dan hotel, kamu bisa cari di', '1572576374.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
