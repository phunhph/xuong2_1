-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 05:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuong2`
--

-- --------------------------------------------------------

--
-- Table structure for table `ca_hoc`
--

CREATE TABLE `ca_hoc` (
  `id_ca` int(11) NOT NULL,
  `ten_ca` varchar(255) NOT NULL,
  `thoi_gian_bat_dau` time NOT NULL,
  `thoi_gian_ket_thuc` time NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ca_hoc`
--

INSERT INTO `ca_hoc` (`id_ca`, `ten_ca`, `thoi_gian_bat_dau`, `thoi_gian_ket_thuc`, `trang_thai`) VALUES
(2, 'ca1', '07:15:00', '09:15:00', 1),
(3, 'ca2', '09:25:00', '11:25:00', 1),
(4, 'ca3', '12:00:00', '14:00:00', 1),
(5, 'ca4', '14:10:00', '16:10:00', 1),
(6, 'ca5', '16:20:00', '18:20:00', 1),
(7, 'ca6', '18:30:00', '20:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ca_thi`
--

CREATE TABLE `ca_thi` (
  `id_ca_thi` int(11) NOT NULL,
  `ngay_thi` date NOT NULL,
  `id_ca` int(11) NOT NULL,
  `id_ky` int(11) NOT NULL,
  `phong` varchar(100) NOT NULL,
  `lop_hoc` varchar(100) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1,
  `id_de_thi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ca_thi`
--

INSERT INTO `ca_thi` (`id_ca_thi`, `ngay_thi`, `id_ca`, `id_ky`, `phong`, `lop_hoc`, `trang_thai`, `id_de_thi`) VALUES
(1, '2023-11-01', 2, 1, 'P201', 'WD18312', 0, 3),
(2, '2023-12-24', 3, 1, 'P201', 'WD18324', 1, 5),
(3, '2023-12-24', 4, 1, 'P201', 'WD18312', 1, 4),
(4, '2023-12-25', 3, 1, 'P201', 'WD18312', 1, 3),
(5, '2023-12-27', 5, 1, 'P201', 'WD18312', 1, 4),
(6, '2023-12-27', 7, 1, 'P201', 'WD18312', 1, 3),
(7, '2023-12-27', 6, 1, 'P201', 'WD18312', 1, 3),
(8, '2023-11-01', 2, 1, 'P201', 'WD18324', 0, 5),
(9, '2023-12-24', 4, 1, 'P201', 'WD18324', 1, 6),
(10, '2023-12-27', 5, 1, 'P201', 'WD18324', 1, 6),
(11, '2023-12-27', 6, 1, 'P201', 'WD18324', 1, 5),
(12, '2023-12-27', 7, 1, 'P201', 'WD18324', 1, 5),
(13, '2023-11-01', 2, 1, 'P201', 'WD18312', 0, 5),
(14, '2023-11-01', 3, 1, 'P201', 'WD18312', 0, 6),
(15, '2023-11-01', 4, 1, 'P201', 'WD18312', 0, 6),
(16, '2023-11-01', 5, 1, 'P201', 'WD18312', 0, 5),
(17, '2023-11-01', 6, 1, 'P201', 'WD18312', 0, 5),
(18, '2023-11-01', 7, 1, 'P201', 'WD18312', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `de_thi`
--

CREATE TABLE `de_thi` (
  `id_de_thi` int(11) NOT NULL,
  `de_thi` varchar(255) NOT NULL,
  `id_mon_hoc` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `de_thi`
--

INSERT INTO `de_thi` (`id_de_thi`, `de_thi`, `id_mon_hoc`, `trang_thai`) VALUES
(3, 'modles/uploads/Pháp luật dân sự.pdf', 1, 1),
(4, 'modles/uploads/2022-technology_en.pdf', 1, 1),
(5, 'modles/uploads/dethi01.docx', 2, 1),
(6, 'modles/uploads/dethi02.docx', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `giam_thi`
--

CREATE TABLE `giam_thi` (
  `id_giam_thi` int(11) NOT NULL,
  `id_ca_thi` int(11) DEFAULT NULL,
  `id_gv1` int(11) DEFAULT NULL,
  `id_gv2` int(11) DEFAULT NULL,
  `trang_thai` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giam_thi`
--

INSERT INTO `giam_thi` (`id_giam_thi`, `id_ca_thi`, `id_gv1`, `id_gv2`, `trang_thai`) VALUES
(5, 4, 2, 7, 1),
(6, 1, 6, 2, 1),
(7, 2, 7, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `giang_vien`
--

CREATE TABLE `giang_vien` (
  `id_giang_vien` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `ten_giang_vien` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giang_vien`
--

INSERT INTO `giang_vien` (`id_giang_vien`, `account`, `ten_giang_vien`, `email`, `passwords`, `role`, `trang_thai`) VALUES
(1, 'gv1', 'gv1', 'gv1@fpt.edu.vn', 'gv1', 1, 0),
(2, 'us1', 'us1', 'us1@fpt.edu.vn', 'us1', 0, 1),
(3, 'a', 'AB', 'longhh7@fpt.edu.vn', '123', 0, 1),
(6, 'Phú', 'Phunhph', 'phuzb2@gmail.com', '123', 0, 1),
(7, 'Phuu', 'phuhh', 'phunhph33261@fpt.edu.vn', '123', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ky_hoc`
--

CREATE TABLE `ky_hoc` (
  `id_ky` int(11) NOT NULL,
  `ten_ky` varchar(255) NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ky_hoc`
--

INSERT INTO `ky_hoc` (`id_ky`, `ten_ky`, `ngay_bat_dau`, `ngay_ket_thuc`, `trang_thai`) VALUES
(1, 'FA23', '2023-11-01', '2023-12-01', 1),
(2, 'SP23', '2023-02-01', '2023-05-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mon_hoc`
--

CREATE TABLE `mon_hoc` (
  `id_mon_hoc` int(11) NOT NULL,
  `ten_mon_hoc` varchar(255) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mon_hoc`
--

INSERT INTO `mon_hoc` (`id_mon_hoc`, `ten_mon_hoc`, `trang_thai`) VALUES
(1, 'PRO1014', 1),
(2, 'web1014', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ca_hoc`
--
ALTER TABLE `ca_hoc`
  ADD PRIMARY KEY (`id_ca`);

--
-- Indexes for table `ca_thi`
--
ALTER TABLE `ca_thi`
  ADD PRIMARY KEY (`id_ca_thi`),
  ADD KEY `fk_ct_ch` (`id_ca`),
  ADD KEY `fk_ct_ky` (`id_ky`),
  ADD KEY `fk_dt_ct` (`id_de_thi`);

--
-- Indexes for table `de_thi`
--
ALTER TABLE `de_thi`
  ADD PRIMARY KEY (`id_de_thi`),
  ADD KEY `fk_mh_dt` (`id_mon_hoc`);

--
-- Indexes for table `giam_thi`
--
ALTER TABLE `giam_thi`
  ADD PRIMARY KEY (`id_giam_thi`),
  ADD KEY `fk_gv1_gt` (`id_gv1`),
  ADD KEY `fk_gv2_gt` (`id_gv2`),
  ADD KEY `fk_ct_gt` (`id_ca_thi`);

--
-- Indexes for table `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD PRIMARY KEY (`id_giang_vien`);

--
-- Indexes for table `ky_hoc`
--
ALTER TABLE `ky_hoc`
  ADD PRIMARY KEY (`id_ky`);

--
-- Indexes for table `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD PRIMARY KEY (`id_mon_hoc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ca_hoc`
--
ALTER TABLE `ca_hoc`
  MODIFY `id_ca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ca_thi`
--
ALTER TABLE `ca_thi`
  MODIFY `id_ca_thi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `de_thi`
--
ALTER TABLE `de_thi`
  MODIFY `id_de_thi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `giam_thi`
--
ALTER TABLE `giam_thi`
  MODIFY `id_giam_thi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `id_giang_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ky_hoc`
--
ALTER TABLE `ky_hoc`
  MODIFY `id_ky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mon_hoc`
--
ALTER TABLE `mon_hoc`
  MODIFY `id_mon_hoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ca_thi`
--
ALTER TABLE `ca_thi`
  ADD CONSTRAINT `fk_ct_ch` FOREIGN KEY (`id_ca`) REFERENCES `ca_hoc` (`id_ca`),
  ADD CONSTRAINT `fk_ct_ky` FOREIGN KEY (`id_ky`) REFERENCES `ky_hoc` (`id_ky`),
  ADD CONSTRAINT `fk_dt_ct` FOREIGN KEY (`id_de_thi`) REFERENCES `de_thi` (`id_de_thi`);

--
-- Constraints for table `de_thi`
--
ALTER TABLE `de_thi`
  ADD CONSTRAINT `fk_mh_dt` FOREIGN KEY (`id_mon_hoc`) REFERENCES `mon_hoc` (`id_mon_hoc`);

--
-- Constraints for table `giam_thi`
--
ALTER TABLE `giam_thi`
  ADD CONSTRAINT `fk_ct_gt` FOREIGN KEY (`id_ca_thi`) REFERENCES `ca_thi` (`id_ca_thi`),
  ADD CONSTRAINT `fk_gv1_gt` FOREIGN KEY (`id_gv1`) REFERENCES `giang_vien` (`id_giang_vien`),
  ADD CONSTRAINT `fk_gv2_gt` FOREIGN KEY (`id_gv2`) REFERENCES `giang_vien` (`id_giang_vien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
