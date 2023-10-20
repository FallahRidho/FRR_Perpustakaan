-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 02:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelatihan_ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_bk` varchar(20) NOT NULL,
  `judul_bk` varchar(50) NOT NULL,
  `pengarang_bk` varchar(50) NOT NULL,
  `penerbit_bk` varchar(50) NOT NULL,
  `tahun_bk` varchar(4) NOT NULL,
  `genre_bk` varchar(20) NOT NULL,
  `jumlah_bk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_bk`, `judul_bk`, `pengarang_bk`, `penerbit_bk`, `tahun_bk`, `genre_bk`, `jumlah_bk`) VALUES
('1001', 'why', 'rido', 'frr media', '2019', 'Buku SD', 2),
('1003', 'Pemrograman WEB 2', 'Priyanto Hidayatullah', 'Bentang Pustaka', '2015', 'Pelajaran', 11),
('1004', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2005', 'Novel', 13),
('CB090510', 'Cash Flow Is KING', 'Robert Adhi', '-', '0000', 'U 920.02ADH t', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `nama_siswa` varchar(50) NOT NULL,
  `nis` int(30) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`nama_siswa`, `nis`, `alamat_siswa`, `jenis_kelamin`, `kelas`, `tanggal`) VALUES
('Fallah Ridho Ramadhan', 12345, 'Depok', 'laki-laki', '1sd', '2023-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_alumni` int(20) NOT NULL,
  `nis` int(20) NOT NULL,
  `nama_alumni` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `hibah_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `nis`, `nama_alumni`, `tempat_lahir`, `tgl_lahir`, `jk`, `kelas`, `hibah_buku`) VALUES
(1, 12345, 'ilham', 'Jakarta', '1998-10-12', 'L', 'smk', 'Seni Budaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(20) NOT NULL,
  `no_registrasi` int(30) NOT NULL,
  `nis` int(20) NOT NULL,
  `nama_anggota` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `no_registrasi`, `nis`, `nama_anggota`, `tempat_lahir`, `tgl_lahir`, `jk`, `kelas`, `tgl_daftar`) VALUES
(2, 231231, 1234, 'udin lagi bae', 'Jakarta', '1982-07-12', 'L', 'smk', '2023-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `nis_transaksi` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_pinjam` varchar(50) NOT NULL,
  `tgl_kembali` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_buku`, `nis_transaksi`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(13, 1003, 1, 1, '20-06-2023', '27-06-2023', 'kembali'),
(14, 1007, 1, 1, '20-06-2023', '04-07-2023', 'kembali'),
(15, 0, 2, 2, '20-06-2023', '27-06-2023', 'kembali'),
(16, 0, 2, 2, '20-06-2023', '27-06-2023', 'pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'fallah', 'fallah', 'fallah', 'admin'),
(2, 'ridho', 'ridho', 'ridho', 'petugas'),
(3, 'ramadhan', 'ramadhan', 'ramadhan', 'pimpinan'),
(4, 'Ilham', '123.123.2012', 'ilham', 'admin'),
(5, 'Dedi Iskandar', '111.222.333', 'dedi', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_bk`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
