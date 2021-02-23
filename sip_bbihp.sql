-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 03:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip_bbihp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_available`
--

CREATE TABLE `tbl_job_available` (
  `id_job` int(11) NOT NULL,
  `job` varchar(1000) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `deadline` varchar(100) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `employe` varchar(128) NOT NULL,
  `progress` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_available`
--

INSERT INTO `tbl_job_available` (`id_job`, `job`, `date_created`, `deadline`, `info`, `nip`, `employe`, `progress`, `status`) VALUES
(1, 'membuat aplikasi monitoring pegawai', '21-02-2021', '24-02-2021', 'untuk lebih jelasnya silahkan menghadap di ruangan saya', '222', '123', 100, 2),
(2, 'buat gambar bangunan 8 lt', '21-02-2021', '22-02-2021', 'besok lusa harus di persentasikan', '111', '456', 100, 2),
(3, 'Membuat tampilan baru situs website bbihp', '21-02-2021', '27-02-2021', '-', '111', '123', 50, 0),
(4, 'membuat prototype door lock', '21-02-2021', '22-02-2021', 'seceptanya', '222', '222', 100, 1),
(5, 'membuat sistem palang otomatis bbihp', '21-02-2021', '12-03-2021', '-', '222', '123', 100, 2),
(6, 'Membuat Aplikasi SIP', '21-02-2021', '01-03-2021', 'segera', '198009202002121003', '123', 30, 1),
(7, 'Menyelesaikan Smart Office', '21-02-2021', '22-02-2021', '@Hasbi : Segera !', '198009202002121003', '198009202002121003', 0, 0),
(8, 'Menyelesaikan Website', '21-02-2021', '22-02-2021', '@Rudolf : Update Pelanggan', '198009202002121003', '222', 10, 2),
(9, 'rapat', '21-02-2021', '22-02-2021', 'siapkan bahan persentasi', '123', '123', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id`, `nip`, `level`) VALUES
(1, '789', 'Koordinator ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(11) NOT NULL,
  `from_nip` varchar(128) NOT NULL,
  `to_nip` varchar(128) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `from_nip`, `to_nip`, `message`, `date_created`) VALUES
(1, '123', '456', 'adakah?', '0'),
(2, '456', '123', 'adakannnnn', '0'),
(3, '789', '123', 'woiiii dimanako', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myjob`
--

CREATE TABLE `tbl_myjob` (
  `id` int(11) NOT NULL,
  `job` varchar(1000) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `progress` varchar(3) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_myjob`
--

INSERT INTO `tbl_myjob` (`id`, `job`, `nip`, `progress`, `status`) VALUES
(1, 'Pembuatan Dashboard BARU', '123', '50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `berita` varchar(1000) NOT NULL,
  `time_berita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `nip`, `berita`, `time_berita`) VALUES
(5, '456', 'dwadawd', '08-02-2021 . 04:16'),
(6, '456', 'dkawdkaw', '08-02-2021 . 11:22'),
(7, '111', 'harap dikerjakan tugasnya dengan baik', '21-02-2021 . 11:19'),
(8, '222', 'tes tes', '21-02-2021 . 03:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id` int(11) NOT NULL,
  `from_nip` varchar(128) NOT NULL,
  `to_nip` varchar(128) NOT NULL,
  `notif` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `head` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nip`, `name`, `birthday`, `address`, `email`, `image`, `password`, `role_id`, `is_active`, `head`) VALUES
(1, '123', 'Syahrir Sobirin Mahyuddin', 'Majene, 05-07-1998', 'Jl. Yonggang No. 11, Tulu Kab. Majene Kec. Banggae Timur', 'admin@gmail.com', 'syahrir.jpg', '$2y$10$0I39WStkoaubQo/9SAi8peiZMQzxJYhtbHA9aJY/3dTTFUyW4Bfqu', 4, 1, '222'),
(2, '456', 'Muh Husnul Zainuddin', 'Makassar, 01-01-1998', 'Jl. Palantikan 2', 'husnul@gmail.com', 'husnul.jpg', '$2y$10$qSaG4.tIY2WBMCfktbEnBO9Xu09yAwYHICPyiPqAl9bSaIKa7Dwvi', 4, 1, '222'),
(3, '222', 'M. Mukhlis Afriyanto', 'Palembang, 16-04-1980', 'Jl. Manggala Dalam 2 Blok 7 No. 30 - Makassar', 'mukhlis@gmail.com', 'mukhlis.jpg', '$2y$10$ZIcHkRkXnJOWoZjmWYKnoepuADFfDl2woKEWA7M5cjdCcadoUZe2K', 2, 1, '777'),
(5, '789', 'Rudolf', '0', '', 'rudolf@gmail.com', 'rudolf.jpg', '$2y$10$kIMjJtnk0NHRnm95xfGuBOh.Du0KJYMmAioe1lJjajRlVVvYycy.G', 4, 1, '222'),
(7, '999', 'Hasbi Ahsani', 'Makassar, 16-02-2021', 'Antang Raya', 'hasbi@gmail.com', 'hasbi.jpg', '$2y$10$ZNUvb1zfZnbjgGz/RhDCX.jMBDqhycoOgEark0ck3YF9v4Bquc3J2', 4, 1, '222'),
(9, '888', 'Khairul', 'Makassar, 23-02-2021', 'Sudiang', 'khairul@gmail.com', 'default.jpg', '$2y$10$yxJ2xgnh.4MpvqpZ.kZ/YuMTOctjbSWy/OKmr7QhjywN1uJQO76Se', 4, 1, '222'),
(10, '777', 'Wisnu Tirta P', 'Bandung, 06-06-1980', 'Jl. Faisal 12 No. 38 Makassar', 'wisnu@gmail.com', 'wisnu.jpg', '$2y$10$GyIkc1BrFNI2r0fXGVtZsOC.tqbM/EgNdZrX62kNh5nnrCnT2b4x2', 1, 1, ''),
(12, '198009202002121003', 'Erwin Adinata', 'Kendari, 20-09-1980', 'Makassar', 'ea.bbihp@gmail.com', 'default.jpg', '$2y$10$7vxd3eL9W8GusfqhQ5ydKuD/4sUT9PpyU8gVkU1foVzOTcx7BIkPq', 3, 1, '222');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `role`) VALUES
(1, 'Kepala Balai'),
(2, 'Koordinator'),
(3, 'Sub Koordinator'),
(4, 'Staff'),
(5, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_job_available`
--
ALTER TABLE `tbl_job_available`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_myjob`
--
ALTER TABLE `tbl_myjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_job_available`
--
ALTER TABLE `tbl_job_available`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_myjob`
--
ALTER TABLE `tbl_myjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
