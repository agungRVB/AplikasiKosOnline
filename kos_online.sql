-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 03:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kos_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamarkos`
--

CREATE TABLE `kamarkos` (
  `kd_kamar` int(10) NOT NULL,
  `nm_kamar` varchar(100) NOT NULL,
  `harga_kos` varchar(8) NOT NULL,
  `fasilitas` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `stts` enum('1','2','3','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamarkos`
--

INSERT INTO `kamarkos` (`kd_kamar`, `nm_kamar`, `harga_kos`, `fasilitas`, `gambar`, `stts`) VALUES
(2, 'dahlia I', '450000', '                                    kamar mandi dalam                                          ', 'upload_imgkos/8395Contoh-Gambar-Desain-Kamar-Tidur-Kost-Terkini-5.jpg', '3'),
(3, 'Anggrek II', '350000', '                                    Kamar mandi dalam\r\nAc                            ', 'upload_imgkos/41291490486838098-1024x768.jpg', '1'),
(4, 'Anggrek I', '450000', '-kammar luas\r\n-kasur nyaman\r\n-kamar mandi dalam', 'upload_imgkos/180desain-kamar-kost.jpg', '2'),
(5, 'Dahlia II', '350000', '-kamar mandi dalam\r\n-meja\r\n-kursi\r\n-lemari pakaian', 'upload_imgkos/4806desain-kamar-kost-sederhana-tapi-rapi.jpg', '1'),
(6, 'Anggrek III', '350000', ' -kamar mandi dalam\r\n-meja\r\n-kursi\r\n-lemari pakaian            ', 'upload_imgkos/649kos3.jpg', '1'),
(7, 'Dahlia III', '450000', ' -kamar mandi dalam\r\n-meja\r\n-kursi\r\n-lemari pakaian            ', 'upload_imgkos/2053mamikos-kt-minimalis.jpg', '3'),
(8, 'Anggrek IV', '450000', ' -kamar mandi dalam\r\n-meja\r\n-kursi\r\n-lemari pakaian            ', 'upload_imgkos/7163ubah-kamar-kos-yang-berantakan-dengan-cara-ini.jpg', '1'),
(9, 'Dahlia IV', '450000', ' -kamar mandi dalam\r\n-meja\r\n-kursi\r\n-lemari pakaian            ', 'upload_imgkos/45261490486838098-1024x768.jpg', '1'),
(10, 'Dahlia V', '450000', ' -kamar mandi dalam\r\n-meja\r\n-kursi\r\n-lemari pakaian            ', 'upload_imgkos/9297desain-kamar-kost-sederhana-tapi-rapi.jpg', '1'),
(11, 'Anggrek V', '450000', ' -kamar mandi dalam\r\n-meja\r\n-kursi\r\n-lemari pakaian            ', 'upload_imgkos/5507desain-kamar-kost.jpg', '1'),
(12, 'Matahari II', '350000', '-meja\r\n-kursi\r\n-lemari pakaian\r\n', 'upload_imgkos/692kos3.jpg', '1'),
(13, 'Matahari I', '350000', '-meja\r\n-kursi\r\n-lemari pakaian', 'upload_imgkos/5962kos3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menginap`
--

CREATE TABLE `menginap` (
  `kd_inap` int(10) NOT NULL,
  `kd_kamar` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `tgl_menginap` varchar(13) NOT NULL,
  `jatuh_tempo_bayar` varchar(13) NOT NULL,
  `tgl_keluar` varchar(13) NOT NULL,
  `tambahan_biaya` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menginap`
--

INSERT INTO `menginap` (`kd_inap`, `kd_kamar`, `id_pelanggan`, `tgl_menginap`, `jatuh_tempo_bayar`, `tgl_keluar`, `tambahan_biaya`, `keterangan`) VALUES
(1, 3, 2, '11-07-2018', '11-08-2018', '', '20000', 'bawa kipas angin'),
(2, 2, 1, '07-06-2016', '07-07-2018', '10-07-2018', '-', 'keluar pindah'),
(3, 2, 1, '19-07-2018', '19-8-2018', '', '', ''),
(4, 7, 2, '19-07-2018', '19-8-2018', '', '50000', 'Tv, Dispenser');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(25) NOT NULL,
  `nm_pelanggan` varchar(50) NOT NULL,
  `jk_pelanggan` enum('l','p') NOT NULL,
  `nik_pelanggan` varchar(20) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `pekerjaan_pelanggan` varchar(100) NOT NULL,
  `stts` enum('1','2','3','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nm_pelanggan`, `jk_pelanggan`, `nik_pelanggan`, `no_telp`, `alamat_pelanggan`, `pekerjaan_pelanggan`, `stts`) VALUES
(1, 'nurul fadilah', 'p', '3311665968440001', '', 'Jl. hasyim asy''ari N0.1 Semarang', 'mahasiswa', '2'),
(2, 'Reno Setiawan', 'l', '33114499560003', '', 'Jl. Ahmad Yani No.32 Rembang', 'Pengajar', '2'),
(6, 'linggar jati', 'l', '8846541', '', 'khjh', 'jhjkhkjh', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kd_pembayaran` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `kd_inap` int(10) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `atasnama_pengirim` varchar(50) NOT NULL,
  `kd_transfer` varchar(50) NOT NULL,
  `tgl_bayar` varchar(13) NOT NULL,
  `jam_bayar` varchar(10) NOT NULL,
  `tagihan` int(10) NOT NULL,
  `nominal_bayar` int(12) NOT NULL,
  `stts` enum('1','2','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kd_pembayaran`, `id_pelanggan`, `kd_inap`, `no_rekening`, `atasnama_pengirim`, `kd_transfer`, `tgl_bayar`, `jam_bayar`, `tagihan`, `nominal_bayar`, `stts`) VALUES
(1, 1, 2, '02092834985', 'Indra Gunawan', '99001', '11-07-2018', '17.23', 370000, 370000, '1'),
(2, 2, 1, '00012712873', 'Yuliyanto', '77880', '11-07-2018', '17.28', 350000, 350000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `pesankamar`
--

CREATE TABLE `pesankamar` (
  `kd_pesan` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `kd_kamar` int(10) NOT NULL,
  `tgl_pesan` varchar(13) NOT NULL,
  `jam_pesan` varchar(10) NOT NULL,
  `stts` enum('1','2','3','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesankamar`
--

INSERT INTO `pesankamar` (`kd_pesan`, `id_pelanggan`, `kd_kamar`, `tgl_pesan`, `jam_pesan`, `stts`) VALUES
(2, 2, 3, '10-07-2018', '22.42', '3'),
(3, 1, 2, '07-06-2018', '11.20', '2'),
(4, 2, 4, '19-07-2018', '10:56:04', '1'),
(5, 0, 0, '19-07-2018', '10:56:04', '1'),
(6, 0, 0, '19-07-2018', '10:56:04', '1'),
(7, 0, 0, '19-07-2018', '10:56:05', '1'),
(8, 0, 0, '19-07-2018', '10:56:05', '1'),
(9, 0, 0, '19-07-2018', '10:56:05', '1'),
(10, 0, 0, '19-07-2018', '10:56:05', '1'),
(11, 0, 0, '19-07-2018', '10:56:05', '1'),
(12, 0, 0, '19-07-2018', '10:56:05', '1'),
(13, 0, 0, '19-07-2018', '10:56:05', '1'),
(14, 0, 0, '19-07-2018', '10:56:05', '1'),
(15, 0, 0, '19-07-2018', '10:56:06', '1'),
(16, 0, 0, '19-07-2018', '10:56:06', '1'),
(17, 0, 0, '19-07-2018', '10:56:06', '1'),
(18, 0, 0, '19-07-2018', '10:56:06', '1'),
(19, 0, 0, '19-07-2018', '10:56:06', '1'),
(20, 0, 0, '19-07-2018', '10:56:06', '1'),
(21, 0, 0, '19-07-2018', '10:56:06', '1'),
(22, 0, 0, '19-07-2018', '10:56:07', '1'),
(23, 0, 0, '19-07-2018', '10:56:07', '1'),
(24, 0, 0, '19-07-2018', '10:56:07', '1'),
(25, 0, 0, '19-07-2018', '10:56:07', '1'),
(26, 0, 0, '19-07-2018', '10:56:08', '1'),
(27, 0, 0, '19-07-2018', '10:56:08', '1'),
(28, 0, 0, '19-07-2018', '10:56:08', '1'),
(29, 0, 0, '19-07-2018', '10:56:08', '1'),
(30, 0, 0, '19-07-2018', '10:56:08', '1'),
(31, 0, 0, '19-07-2018', '10:56:08', '1'),
(32, 0, 0, '19-07-2018', '10:56:08', '1'),
(33, 0, 0, '19-07-2018', '10:56:08', '1'),
(34, 0, 0, '19-07-2018', '10:56:09', '1'),
(35, 0, 0, '19-07-2018', '10:56:09', '1'),
(36, 0, 0, '19-07-2018', '10:56:09', '1'),
(37, 0, 0, '19-07-2018', '10:56:09', '1'),
(38, 0, 0, '19-07-2018', '10:56:09', '1'),
(39, 0, 0, '19-07-2018', '10:56:10', '1'),
(40, 0, 0, '19-07-2018', '10:56:10', '1'),
(41, 0, 0, '19-07-2018', '10:56:10', '1'),
(42, 0, 0, '19-07-2018', '10:56:10', '1'),
(43, 0, 0, '19-07-2018', '10:56:10', '1'),
(44, 0, 0, '19-07-2018', '10:56:15', '1'),
(45, 0, 0, '19-07-2018', '10:56:15', '1'),
(46, 0, 0, '19-07-2018', '10:56:16', '1'),
(47, 0, 0, '19-07-2018', '10:56:16', '1'),
(48, 0, 0, '19-07-2018', '10:56:16', '1'),
(49, 0, 0, '19-07-2018', '10:56:16', '1'),
(50, 0, 0, '19-07-2018', '10:56:16', '1'),
(51, 0, 0, '19-07-2018', '10:56:17', '1'),
(52, 0, 0, '19-07-2018', '10:56:17', '1'),
(53, 0, 0, '19-07-2018', '10:56:17', '1'),
(54, 0, 0, '19-07-2018', '10:56:17', '1'),
(55, 0, 0, '19-07-2018', '10:56:17', '1'),
(56, 0, 0, '19-07-2018', '10:56:17', '1'),
(57, 0, 0, '19-07-2018', '10:56:18', '1'),
(58, 0, 0, '19-07-2018', '10:56:18', '1'),
(59, 0, 0, '19-07-2018', '10:56:18', '1'),
(60, 0, 0, '19-07-2018', '10:56:18', '1'),
(61, 0, 0, '19-07-2018', '10:56:18', '1'),
(62, 0, 0, '19-07-2018', '10:56:18', '1'),
(63, 0, 0, '19-07-2018', '10:56:18', '1'),
(64, 2, 7, '19-07-2018', '15:15:51', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `sandi` varchar(50) NOT NULL,
  `hak_akses` enum('1','2','3') NOT NULL,
  `stts` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_pelanggan`, `nm_user`, `sandi`, `hak_akses`, `stts`) VALUES
(1, 2, '123', '123', '2', '1'),
(2, 1, 'koko', '123', '2', '1'),
(4, 3, '7777', '7777', '2', '1'),
(5, 0, 'admin', 'admin', '1', '1'),
(6, 0, 'pemilik', 'pemilik', '3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamarkos`
--
ALTER TABLE `kamarkos`
  ADD PRIMARY KEY (`kd_kamar`);

--
-- Indexes for table `menginap`
--
ALTER TABLE `menginap`
  ADD PRIMARY KEY (`kd_inap`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kd_pembayaran`);

--
-- Indexes for table `pesankamar`
--
ALTER TABLE `pesankamar`
  ADD PRIMARY KEY (`kd_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamarkos`
--
ALTER TABLE `kamarkos`
  MODIFY `kd_kamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `menginap`
--
ALTER TABLE `menginap`
  MODIFY `kd_inap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kd_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesankamar`
--
ALTER TABLE `pesankamar`
  MODIFY `kd_pesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
