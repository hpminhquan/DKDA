-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 02:52 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlda`
--

-- --------------------------------------------------------

--
-- Table structure for table `doan`
--

CREATE TABLE `doan` (
  `mda` int(11) NOT NULL,
  `tenda` varchar(20) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `mgv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doan_sv`
--

CREATE TABLE `doan_sv` (
  `mda` int(11) NOT NULL,
  `mssv` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `mgv` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `hocham` varchar(20) NOT NULL,
  `hocvi` varchar(20) NOT NULL,
  `cohuu` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `mssv` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `lop` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`mssv`, `hoten`, `lop`, `email`, `sdt`, `user_id`) VALUES
(1101865, 'Đỗ Duy An', 'D14TH01', 'an1101865@student.stu.edu.vn', 1228112867, 1),
(1101867, 'Nguyễn Quốc Bảo', 'D14TH01', 'bao1101867@student.stu.edu.vn', 1248569642, 2),
(1101869, 'Mai Hữu Danh', 'D14TH02', 'danh1101869@student.stu.edu.vn', 1887661857, 3),
(1101872, 'Lê Tấn Đạt', 'D14TH02', 'dat1101872@student.stu.edu.vn', 1698023686, 4),
(1101877, 'Dương Huy Hoàng', 'D14TH03', 'hoang1101877@student.stu.edu.vn', 1633046250, 5),
(1101883, 'Nguyễn Anh Khoa', 'D14TH03', 'khoa1101883@student.stu.edu.vn', 1686376928, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'an1101865', '1'),
(2, 'bao1101867', '1'),
(3, 'danh1101869', '1'),
(4, 'dat1101872', '1'),
(5, 'hoang1101877', '1'),
(6, 'khoa1101883', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doan`
--
ALTER TABLE `doan`
  ADD PRIMARY KEY (`mda`),
  ADD KEY `mgv` (`mgv`);

--
-- Indexes for table `doan_sv`
--
ALTER TABLE `doan_sv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mda` (`mda`),
  ADD KEY `mssv` (`mssv`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`mgv`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`mssv`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doan_sv`
--
ALTER TABLE `doan_sv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `doan`
--
ALTER TABLE `doan`
  ADD CONSTRAINT `doan_ibfk_1` FOREIGN KEY (`mgv`) REFERENCES `giangvien` (`mgv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doan_sv`
--
ALTER TABLE `doan_sv`
  ADD CONSTRAINT `doan_sv_ibfk_1` FOREIGN KEY (`mssv`) REFERENCES `sinhvien` (`mssv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doan_sv_ibfk_2` FOREIGN KEY (`mda`) REFERENCES `doan` (`mda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
