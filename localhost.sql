-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2018 at 01:20 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuusinhvien`
--
DROP DATABASE IF EXISTS `cuusinhvien`;
CREATE DATABASE IF NOT EXISTS `cuusinhvien` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cuusinhvien`;

-- --------------------------------------------------------

--
-- Table structure for table `congtac`
--

CREATE TABLE `congtac` (
  `csv_id` int(11) NOT NULL,
  `thoigian` text NOT NULL,
  `coquan_id` int(11) NOT NULL,
  `vitri` varchar(255) NOT NULL,
  `mucluong` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `congtac`
--

INSERT INTO `congtac` (`csv_id`, `thoigian`, `coquan_id`, `vitri`, `mucluong`) VALUES
(1, '2018', 1, 'fresher', '100'),
(2, '2017', 2, 'senior', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `coquan`
--

CREATE TABLE `coquan` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `diachi` text NOT NULL,
  `loaihinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coquan`
--

INSERT INTO `coquan` (`id`, `ten`, `diachi`, `loaihinh`) VALUES
(1, 'FPT', 'Ha Noi', 'Ngoai nha nuoc'),
(2, 'Viettel', 'Ha Noi', 'Nha nuoc'),
(3, 'Samsung', 'Ha Noi', 'Nuoc ngoai');

-- --------------------------------------------------------

--
-- Table structure for table `csv`
--

CREATE TABLE `csv` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `khoahoc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csv`
--

INSERT INTO `csv` (`id`, `hoten`, `ngaysinh`, `quequan`, `sdt`, `email`, `user_id`, `khoahoc_id`) VALUES
(1, 'Hoang Quy', '1998-03-23', 'Phu Tho', 327058007, 'demo2@gmail.com', 3, 59),
(2, 'Dam Thanh', '1998-11-13', 'Ha Noi', 326372633, 'demo3@gmail.com', 4, 60);

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE `function` (
  `id` int(11) NOT NULL,
  `function_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`id`, `function_name`) VALUES
(1, 'them'),
(2, 'sua'),
(3, 'xoa'),
(4, 'xem thong ke');

-- --------------------------------------------------------

--
-- Table structure for table `huyen`
--

CREATE TABLE `huyen` (
  `id` int(11) NOT NULL,
  `tinh_id` int(11) NOT NULL,
  `tenhuyen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `huyen`
--

INSERT INTO `huyen` (`id`, `tinh_id`, `tenhuyen`) VALUES
(1, 1, 'Quan Ba Dinh'),
(2, 1, 'Quan Hoan Kiem');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id` int(11) NOT NULL,
  `tenkhoahoc` varchar(255) NOT NULL,
  `ghichu` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `tenkhoahoc`, `ghichu`) VALUES
(59, 'K59', '2014-2018'),
(60, 'K60', '2015-2019');

-- --------------------------------------------------------

--
-- Table structure for table `lichsu`
--

CREATE TABLE `lichsu` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `function_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'giang vien'),
(3, 'cuu sinh vien');

-- --------------------------------------------------------

--
-- Table structure for table `role_function`
--

CREATE TABLE `role_function` (
  `role_id` int(11) NOT NULL,
  `function_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_function`
--

INSERT INTO `role_function` (`role_id`, `function_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tinh`
--

CREATE TABLE `tinh` (
  `id` int(11) NOT NULL,
  `tentinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinh`
--

INSERT INTO `tinh` (`id`, `tentinh`) VALUES
(1, 'Ha Noi'),
(2, 'Ho Chi Minh'),
(3, 'Hai Phong'),
(15, 'Phu Tho');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` mediumtext NOT NULL,
  `user_lv` int(11) NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `user_lv`, `update_time`, `create_time`) VALUES
(1, 'admin@gmail.com', '12345678', 1, '2018-11-10 13:53:47', '0000-00-00 00:00:00'),
(2, 'demo1@gmail.com', '12345678', 2, '2018-11-10 13:54:22', '0000-00-00 00:00:00'),
(3, 'demo2@gmail.com', '12345678', 3, '2018-11-10 13:54:48', '0000-00-00 00:00:00'),
(4, 'demo3@gmail.com', '12345678', 3, '2018-11-10 14:22:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '12345678', NULL, '2018-11-11 12:40:37', '2018-11-11 12:40:37'),
(2, 'demo1', 'demo1@gmail.com', NULL, '12345678', NULL, NULL, NULL),
(3, 'demo2', 'demo2@gmail.com', NULL, '12345678', 'HBnEbnQd9wqegS83AYWMnq3mB3Cd45stGp3G1vmhWf6ZEOvlygIokuHqDr7w', NULL, '2018-11-12 11:08:08'),
(4, 'demo3', 'demo3@gmail.com', NULL, '12345678', '07HlxUpVtjEqNT1REbeAwt7yHOmPOtMdteh9DMQ14x7MMUP389cqfooKIHhU', NULL, '2018-11-13 02:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `congtac`
--
ALTER TABLE `congtac`
  ADD KEY `fk_congtac_csv` (`csv_id`),
  ADD KEY `fk_congtac_coquan` (`coquan_id`);

--
-- Indexes for table `coquan`
--
ALTER TABLE `coquan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csv`
--
ALTER TABLE `csv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_csv_user` (`user_id`),
  ADD KEY `fk_csv_khoahoc` (`khoahoc_id`);

--
-- Indexes for table `function`
--
ALTER TABLE `function`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lichsu`
--
ALTER TABLE `lichsu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lichsu_user` (`user_id`),
  ADD KEY `fk_lichsu_function` (`function_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_function`
--
ALTER TABLE `role_function`
  ADD KEY `fk_role_function` (`role_id`),
  ADD KEY `fk_role_function_2` (`function_id`);

--
-- Indexes for table `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD KEY `fk_user_role` (`role_id`),
  ADD KEY `fk_role_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coquan`
--
ALTER TABLE `coquan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `csv`
--
ALTER TABLE `csv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `function`
--
ALTER TABLE `function`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `huyen`
--
ALTER TABLE `huyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `lichsu`
--
ALTER TABLE `lichsu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `congtac`
--
ALTER TABLE `congtac`
  ADD CONSTRAINT `fk_congtac_coquan` FOREIGN KEY (`coquan_id`) REFERENCES `coquan` (`id`),
  ADD CONSTRAINT `fk_congtac_csv` FOREIGN KEY (`csv_id`) REFERENCES `csv` (`id`);

--
-- Constraints for table `csv`
--
ALTER TABLE `csv`
  ADD CONSTRAINT `fk_csv_khoahoc` FOREIGN KEY (`khoahoc_id`) REFERENCES `khoahoc` (`id`),
  ADD CONSTRAINT `fk_csv_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `lichsu`
--
ALTER TABLE `lichsu`
  ADD CONSTRAINT `fk_lichsu_function` FOREIGN KEY (`function_id`) REFERENCES `function` (`id`),
  ADD CONSTRAINT `fk_lichsu_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `role_function`
--
ALTER TABLE `role_function`
  ADD CONSTRAINT `fk_role_function` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `fk_role_function_2` FOREIGN KEY (`function_id`) REFERENCES `function` (`id`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `fk_role_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
