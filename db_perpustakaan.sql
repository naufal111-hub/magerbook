-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 02:10 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `keterangan`) VALUES
(1, 'admin'),
(2, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pengarang` varchar(20) NOT NULL,
  `halaman` int(11) NOT NULL,
  `thn_terbit` date NOT NULL,
  `gambar` longblob NOT NULL,
  `link/path` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login_user`
--

CREATE TABLE `tb_login_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(11) NOT NULL,
  `id_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login_user`
--

INSERT INTO `tb_login_user` (`id_user`, `nama_user`, `username`, `password`, `id_akses`) VALUES
(1, 'imel', 'ih', '1', 1),
(2, 'viqih', 'uh', '3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_login_user`
--
ALTER TABLE `tb_login_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_akses` (`id_akses`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login_user`
--
ALTER TABLE `tb_login_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `tb_peminjaman` (`id_buku`),
  ADD CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Constraints for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD CONSTRAINT `tb_kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_buku` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_login_user`
--
ALTER TABLE `tb_login_user`
  ADD CONSTRAINT `tb_login_user_ibfk_2` FOREIGN KEY (`id_akses`) REFERENCES `tb_akses` (`id_akses`);

--
-- Constraints for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`id_status`),
  ADD CONSTRAINT `tb_peminjaman_ibfk_3` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`),
  ADD CONSTRAINT `tb_peminjaman_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tb_login_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
