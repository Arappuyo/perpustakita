-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 07:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id` int(11) NOT NULL,
  `npm` varchar(200) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `prodi` varchar(75) NOT NULL,
  `kontak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id`, `npm`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`, `kontak`) VALUES
(1, '10120107', 'Evan', 'Jakarta', '2022-10-26', 'l', 'si', '089527512063'),
(2, '10120366', 'Fadhila Mutia', 'Pringsewu', '2001-06-12', 'p', 'si', '085716448291'),
(3, '10120733', 'Muhammad Fauzhan Nasril', 'Jakarta', '2000-01-11', 'l', 'si', '081224300038'),
(4, '10120894', 'Putra Aulia', 'Jakarta', '2001-09-03', 'l', 'si', '081806434885'),
(5, '10120959', 'Rayhan Akbar Ramadhan', 'Jakarta', '2001-11-17', 'l', 'si', '087884595167'),
(6, '10120599', 'mamat', 'Jakarta', '2022-10-08', 'l', 'ti', '087885644141'),
(7, '10120999', 'reza rahardian', 'jonggol', '1999-02-10', 'l', 'si', '085282625626'),
(8, '10120861', 'Nelly Nerisa Ardiyah', 'Jakartra', '2002-12-31', 'p', 'si', '087775473349');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `kategori`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(1, '', '', '', '', '', '', 0, 'rak1', '0000-00-00'),
(2, 'belajar php mudah ', '', 'parman', 'elekmedia', '2013', '1115479873696', 71, 'rak3', '2022-03-02'),
(8, 'merakit pc', '', 'joko permono', 'mediawarna', '2020', '1014562589515', 67, 'rak1', '2019-01-07'),
(9, 'How To Make A Website EASY!?!?!?!?!?!?!?', '', 'elvis', 'jagomed', '2010', '6547891232224', 42, 'rak2', '2022-10-05'),
(10, 'Akuntansi Pengantar 1', '', 'Supardi', 'Galvanis Media', '2019', '9879549879635', 34, 'rak2', '2022-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `npm` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `npm`, `nama`, `kontak`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(27, 'belajar php mudah ', '10120366', 'Fadhila Mutia', '085716448291', '21-10-2022', '28-10-2022', 'kembali'),
(28, 'merakit pc', '10120894', 'Putra Aulia', '	081806434885', '21-10-2022', '04-11-22', 'kembali'),
(29, 'belajar php mudah ', '10120959', 'Rayhan Akbar Ramadhan', '	087884595167', '21-10-2022', '28-10-2022', 'pinjam'),
(30, 'belajar php mudah ', '10120733', 'Muhammad Fauzhan Nasril', '	081224300038', '21-10-2022', '04-11-22', 'pinjam'),
(31, 'belajar php mudah', '10120733', 'Muhammad Fauzhan Nasril', '	081224300038', '1-10-2022', '8-10-2022', 'kembali'),
(32, 'belajar php mudah ', '10120366', 'Fadhila Mutia', '085716448291', '21-10-2022', '28-10-2022', 'kembali'),
(33, 'belajar php mudah ', '10120366', 'Fadhila Mutia', '085716448291', '21-10-2022', '28-10-2022', 'kembali'),
(38, 'Akuntansi Pengantar 1', '10120959', 'Rayhan Akbar Ramadhan', '087884595167', '28-10-2022', '04-11-2022', 'pinjam'),
(40, 'merakit pc', '10120999', 'reza rahardian', '085282625626', '01-11-2022', '08-11-2022', 'kembali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `level` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'rayhan.png'),
(2, 'user', 'user', 'user', 'user', 'login.png'),
(3, 'rayhan', '12345', 'rayhan', 'user', 'rayhan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
