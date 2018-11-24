-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2018 at 04:33 PM
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
  `id` int(10) UNSIGNED NOT NULL,
  `csv_id` int(11) NOT NULL,
  `thoigian` text NOT NULL,
  `coquan_id` int(11) NOT NULL,
  `vitri` varchar(255) NOT NULL,
  `mucluong` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `congtac`
--

INSERT INTO `congtac` (`id`, `csv_id`, `thoigian`, `coquan_id`, `vitri`, `mucluong`, `updated_at`) VALUES
(1, 1, '2018', 1, 'fresher', '100', '2018-11-15 05:35:12'),
(3, 2, '1/2018-7/2018', 3, 'manager', '10000', '2018-11-15 11:29:31'),
(4, 2, '7/2018-nay', 1, 'manager', '10000', '2018-11-15 13:28:03'),
(5, 4, '12/2017-6/2018', 1, 'fresher', '1500', '2018-11-22 13:26:27'),
(6, 2, '2017', 2, 'senior', '1200', '2018-11-18 03:26:46'),
(7, 1, '6/2018-nay', 2, 'senior', '2000', '2018-11-19 11:52:18'),
(8, 3, '2017', 3, 'fresher', '500', '2018-11-19 12:01:24'),
(9, 3, '2018', 5, 'senior', '1600', '2018-11-19 12:01:54'),
(10, 5, '3/2017-3/2018', 6, 'fresher', '500', '2018-11-22 13:23:39'),
(11, 5, '5/2018-nay', 2, 'senior', '3500', '2018-11-19 12:29:37'),
(12, 4, '2018', 7, 'fresher', '3050', '2018-11-22 13:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `coquan`
--

CREATE TABLE `coquan` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `diachi` text NOT NULL,
  `loaihinh` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coquan`
--

INSERT INTO `coquan` (`id`, `ten`, `diachi`, `loaihinh`, `updated_at`) VALUES
(1, 'FPT', 'Ha Noi', 'Tu nhan', '2018-11-20 03:27:44'),
(2, 'Viettel', 'Ha Noi', 'Nha nuoc', '2018-11-20 03:27:44'),
(3, 'Samsung', 'Ha Noi', 'Nuoc ngoai', '2018-11-20 03:27:44'),
(4, 'Ominext', 'Japan', 'Tu nhan', '2018-11-20 03:27:44'),
(5, 'CMC Telecom', 'Ha Noi', 'Tu nhan', '2018-11-20 03:27:44'),
(6, 'Infore', 'Ha Noi', 'Tu nhan', '2018-11-20 03:27:44'),
(7, 'Google', 'America', 'Nuoc ngoai', '2018-11-20 03:27:44'),
(8, 'Facebook', 'USA', 'Nuoc ngoai', '2018-11-20 03:27:44');

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
  `khoahoc_id` int(11) NOT NULL,
  `lop_id` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csv`
--

INSERT INTO `csv` (`id`, `hoten`, `ngaysinh`, `quequan`, `sdt`, `email`, `user_id`, `khoahoc_id`, `lop_id`, `updated_at`) VALUES
(1, 'Hoang Quy', '1998-03-23', 'Phu Tho', 327058007, 'demo2@gmail.com', 3, 1, 1, '2018-11-15 05:32:54'),
(2, 'Dam Tien Thanh', '1998-11-13', 'Ha Noi', 326372633, 'demo3@gmail.com', 4, 1, 1, '2018-11-16 10:07:38'),
(3, 'Pham Duy Linh', '1998-03-18', 'Vinh Phuc', 321234567, 'demo5@gmail.com', 9, 1, 1, '2018-11-15 05:33:54'),
(4, 'Nguyen Khanh Linh', '1998-10-20', 'Hai Phong', 327654321, 'demo8@gmail.com', 12, 1, 1, '2018-11-20 09:29:14'),
(5, 'Nguyen Minh Quang', '1998-04-14', 'Vinh Phuc', 112345678, 'demo9@gmail.com', 13, 2, 4, '2018-11-19 00:16:09'),
(6, 'Nguyen Phuong Linh', '1998-11-06', 'Hai Phong', 123456789, '123@gmail.com', 14, 2, 5, '2018-11-19 01:09:12'),
(9, 'Nguyen Minh Tien', '1998-09-15', 'Hung Yen', 123456789, 'admin@gmail.com', 11, 2, 5, '2018-11-21 01:19:18');

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
-- Table structure for table `khaosat`
--

CREATE TABLE `khaosat` (
  `cauhoi` text NOT NULL,
  `cautraloi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khaosat`
--

INSERT INTO `khaosat` (`cauhoi`, `cautraloi`) VALUES
('Cong viec hien tai cua ban co dung voi dinh huong cua ban khong?', 'Co'),
('Ban co hai long voi cong viec hien tai khong?', 'Co'),
('Ban co thich cong viec hien tai khong?', 'Co');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id` int(11) NOT NULL,
  `tenkhoahoc` varchar(255) NOT NULL,
  `ghichu` mediumtext,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `tenkhoahoc`, `ghichu`, `updated_at`) VALUES
(1, 'K59', '2014-2018', '2018-11-21 13:47:45'),
(2, 'K60', '2015-2019', '2018-11-21 13:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `lichsu`
--

CREATE TABLE `lichsu` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `function_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lichsu`
--

INSERT INTO `lichsu` (`id`, `user_id`, `function_id`, `time`, `action`) VALUES
(1, 9, 1, '2018-11-15 03:34:19', 'Them thong tin ca nhan'),
(2, 9, 1, '2018-11-15 05:12:16', 'Them thong tin ca nhan'),
(3, 9, 2, '2018-11-15 05:33:54', 'Cap nhat thong tin ca nhan'),
(4, 4, 1, '2018-11-15 11:29:59', 'Them noi cong tac'),
(5, 4, 2, '2018-11-15 13:23:29', 'Sua noi cong tac'),
(6, 4, 2, '2018-11-15 13:24:00', 'Sua noi cong tac'),
(7, 4, 2, '2018-11-15 13:28:03', 'Sua noi cong tac'),
(8, 12, 1, '2018-11-15 15:58:47', 'dang ki tai khoan thanh cong'),
(9, 12, 1, '2018-11-15 15:59:57', 'Them thong tin ca nhan'),
(10, 12, 1, '2018-11-15 16:07:42', 'Them noi cong tac'),
(11, 4, 2, '2018-11-15 16:12:39', 'Sua noi cong tac'),
(12, 4, 2, '2018-11-16 08:27:25', 'Cap nhat thong tin ca nhan'),
(13, 4, 2, '2018-11-16 08:27:32', 'Cap nhat thong tin ca nhan'),
(14, 4, 2, '2018-11-16 08:27:34', 'Cap nhat thong tin ca nhan'),
(15, 4, 2, '2018-11-16 08:27:36', 'Cap nhat thong tin ca nhan'),
(16, 4, 2, '2018-11-16 08:27:37', 'Cap nhat thong tin ca nhan'),
(17, 4, 2, '2018-11-16 08:27:38', 'Cap nhat thong tin ca nhan'),
(18, 4, 2, '2018-11-16 08:27:39', 'Cap nhat thong tin ca nhan'),
(19, 4, 2, '2018-11-16 08:27:39', 'Cap nhat thong tin ca nhan'),
(20, 4, 2, '2018-11-16 08:27:40', 'Cap nhat thong tin ca nhan'),
(21, 4, 2, '2018-11-16 08:27:40', 'Cap nhat thong tin ca nhan'),
(22, 4, 2, '2018-11-16 08:27:40', 'Cap nhat thong tin ca nhan'),
(23, 4, 2, '2018-11-16 08:27:40', 'Cap nhat thong tin ca nhan'),
(24, 4, 2, '2018-11-16 08:27:41', 'Cap nhat thong tin ca nhan'),
(25, 4, 2, '2018-11-16 08:27:41', 'Cap nhat thong tin ca nhan'),
(26, 4, 2, '2018-11-16 08:27:41', 'Cap nhat thong tin ca nhan'),
(27, 4, 2, '2018-11-16 08:27:41', 'Cap nhat thong tin ca nhan'),
(28, 4, 2, '2018-11-16 08:27:49', 'Cap nhat thong tin ca nhan'),
(29, 4, 2, '2018-11-16 08:33:30', 'Cap nhat thong tin ca nhan'),
(30, 4, 2, '2018-11-16 08:33:32', 'Cap nhat thong tin ca nhan'),
(31, 4, 2, '2018-11-16 08:33:32', 'Cap nhat thong tin ca nhan'),
(32, 4, 2, '2018-11-16 08:33:33', 'Cap nhat thong tin ca nhan'),
(33, 4, 2, '2018-11-16 08:33:33', 'Cap nhat thong tin ca nhan'),
(34, 4, 2, '2018-11-16 08:33:33', 'Cap nhat thong tin ca nhan'),
(35, 4, 2, '2018-11-16 08:33:35', 'Cap nhat thong tin ca nhan'),
(36, 4, 2, '2018-11-16 08:33:36', 'Cap nhat thong tin ca nhan'),
(37, 4, 2, '2018-11-16 08:33:42', 'Cap nhat thong tin ca nhan'),
(38, 4, 2, '2018-11-16 08:33:44', 'Cap nhat thong tin ca nhan'),
(39, 4, 2, '2018-11-16 08:33:49', 'Cap nhat thong tin ca nhan'),
(40, 4, 2, '2018-11-16 08:33:49', 'Cap nhat thong tin ca nhan'),
(41, 4, 2, '2018-11-16 08:34:00', 'Cap nhat thong tin ca nhan'),
(42, 4, 2, '2018-11-16 08:35:35', 'Cap nhat thong tin ca nhan'),
(43, 4, 2, '2018-11-16 08:35:37', 'Cap nhat thong tin ca nhan'),
(44, 4, 2, '2018-11-16 10:07:05', 'Cap nhat thong tin ca nhan'),
(45, 4, 2, '2018-11-16 10:07:38', 'Cap nhat thong tin ca nhan'),
(46, 4, 1, '2018-11-17 15:57:58', 'Them co quan moi'),
(47, 4, 3, '2018-11-17 16:03:29', 'Xoa noi cong tac'),
(48, 4, 1, '2018-11-17 16:07:23', 'Them noi cong tac'),
(49, 4, 2, '2018-11-17 16:08:04', 'Sua noi cong tac'),
(50, 4, 2, '2018-11-18 03:18:12', 'Doi mat khau'),
(51, 4, 2, '2018-11-18 03:19:15', 'Doi mat khau'),
(52, 4, 2, '2018-11-18 03:26:03', 'Doi mat khau'),
(53, 4, 2, '2018-11-18 03:26:46', 'Sua noi cong tac'),
(54, 4, 1, '2018-11-18 10:40:30', 'Them co quan moi'),
(55, 4, 2, '2018-11-18 10:41:58', 'Doi mat khau'),
(56, 4, 1, '2018-11-18 13:39:43', 'Tra loi cau hoi khao sat'),
(57, 4, 1, '2018-11-18 13:40:16', 'Tra loi cau hoi khao sat'),
(58, 13, 1, '2018-11-19 00:14:53', 'Dang ki tai khoan thanh cong'),
(59, 13, 1, '2018-11-19 00:16:09', 'Them thong tin ca nhan'),
(60, 14, 1, '2018-11-19 00:53:15', 'Dang ki tai khoan thanh cong'),
(61, 14, 1, '2018-11-19 00:57:34', 'Them thong tin ca nhan'),
(62, 14, 2, '2018-11-19 01:00:46', 'Cap nhat thong tin ca nhan'),
(63, 14, 2, '2018-11-19 01:02:03', 'Cap nhat thong tin ca nhan'),
(64, 14, 2, '2018-11-19 01:09:12', 'Cap nhat thong tin ca nhan'),
(65, 14, 1, '2018-11-19 01:10:14', 'Them co quan moi'),
(66, 3, 1, '2018-11-19 11:52:18', 'Them noi cong tac'),
(67, 9, 1, '2018-11-19 12:01:24', 'Them noi cong tac'),
(68, 9, 1, '2018-11-19 12:01:54', 'Them noi cong tac'),
(69, 13, 1, '2018-11-19 12:29:10', 'Them noi cong tac'),
(70, 13, 1, '2018-11-19 12:29:37', 'Them noi cong tac'),
(71, 1, 1, '2018-11-20 09:10:25', 'Sua thong tin sinh vien cho tai khoan co id: 12'),
(72, 1, 1, '2018-11-20 09:28:51', 'Sua thong tin sinh vien cho tai khoan co id: 12'),
(73, 1, 1, '2018-11-20 09:29:14', 'Sua thong tin sinh vien cho tai khoan co id: 12'),
(74, 1, 1, '2018-11-20 10:50:08', 'Them thong tin sinh vien'),
(75, 1, 1, '2018-11-21 00:28:35', 'Xoa thong tin cua sinh vien'),
(76, 1, 1, '2018-11-21 01:14:14', 'Them tai khoan moi'),
(77, 1, 1, '2018-11-21 01:14:44', 'Them tai khoan moi'),
(78, 1, 1, '2018-11-21 01:15:49', 'Them thong tin sinh vien'),
(79, 1, 1, '2018-11-21 01:16:26', 'Them thong tin sinh vien'),
(80, 1, 3, '2018-11-21 01:18:34', 'Xoa tai khoan nguoi dung'),
(81, 1, 2, '2018-11-21 01:19:19', 'Sua thong tin sinh vien cho tai khoan co id: 11'),
(82, 1, 1, '2018-11-22 04:30:14', 'Them co quan moi'),
(83, 1, 2, '2018-11-22 04:31:42', 'Sua thong tin co quan'),
(84, 1, 3, '2018-11-22 04:32:06', 'Xoa co quan'),
(85, 1, 3, '2018-11-22 12:54:47', 'Xoa toan bo thong bao'),
(86, 1, 2, '2018-11-22 13:23:39', 'Sua thong tin noi cong tac'),
(87, 1, 1, '2018-11-22 13:26:02', 'Them khoa noi cong tac moi'),
(88, 1, 2, '2018-11-22 13:26:27', 'Sua thong tin noi cong tac');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenlop` varchar(255) NOT NULL,
  `khoahoc_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`id`, `tenlop`, `khoahoc_id`, `updated_at`) VALUES
(1, 'K59CC', 1, '2018-11-20 03:28:51'),
(2, 'K59CB', 1, '2018-11-20 03:28:51'),
(3, 'K59CD', 1, '2018-11-20 03:28:51'),
(4, 'K60CB', 2, '2018-11-20 03:28:51'),
(5, 'K60CC', 2, '2018-11-20 03:28:51'),
(6, 'K60CD', 2, '2018-11-20 03:28:51');

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
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `id` int(10) UNSIGNED NOT NULL,
  `thongtin` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_lv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `user_lv`) VALUES
(1, 'Nguyen Minh Tien', 'admin@gmail.com', '12345678', 'LwCj1gbMz8VcCyaixVM5LlRE6bI6d0ZViNiosmnoN1JX16jtZTYQTYkOaP0C', '2018-11-11 12:40:37', '2018-11-22 13:32:30', 1),
(2, 'demo1', 'demo1@gmail.com', '12345678', 'FevN5xguDkY5aFJHTTMZCv0kkuzU6ArxhisvigL3u67HoQMoR7CZ63NTq0E5', '2018-11-11 12:41:50', '2018-11-19 14:45:32', 2),
(3, 'demo2', 'demo2@gmail.com', '12345678', '8aIOiRc2UjKkEoCun4q95yuv5whVpMoaY7IhQiaL1Y8ydUNgspPiFEarlAj6', '2018-11-11 17:00:00', '2018-11-19 14:46:56', 2),
(4, 'Dam Tien Thanh', 'demo3@gmail.com', '12345678', 'sD4hlnNEflSWrNe5Z2qWd8e81Wd1TDOEG8nF6XBVnyundT6FBmbHkcIIdZCb', '2018-11-11 17:00:00', '2018-11-22 13:20:48', 2),
(9, 'Pham Duy Linh', 'demo5@gmail.com', '12345678', 'HSFM5wtaIghCeBLNDEXpXq8nmyxUgrkKZCqdR5vgFDYfxXzMhr3rk2a5AySq', '2018-11-11 17:00:00', '2018-11-19 14:47:07', 2),
(10, 'demo6', 'demo6@gmail.com', '12345678', NULL, '2018-11-14 09:28:44', '2018-11-19 09:14:37', 2),
(11, 'Nguyen Minh Tien', 'admin@gmail.com', '12345678', '4LEnzbL0S75FDH6CwYhdpAbTk1Ine5pK8fxYwweNs00d12yV9poMC5l62TpN', '2018-11-14 13:04:55', '2018-11-21 01:19:19', 2),
(12, 'Nguyen Khanh Linh', 'demo8@gmail.com', '12345678', 'BYbHVRu6oxnN1H2byncJbFYz2EIpp5voMQKPG062GlDJ3gF4M0Wxx3M7pZ6S', '2018-11-15 15:58:47', '2018-11-20 09:29:14', 2),
(13, 'Nguyen Minh Quang', 'demo9@gmail.com', '12345678', 'DBMR8z2qMXRgCvFpnp41PKSnj2TsxqB6OtMoUtLeeoNIkaRIlVvZXxwUbYPX', '2018-11-19 00:14:53', '2018-11-19 12:35:41', 2),
(14, 'Nguyen Phuong Linh', '123@gmail.com', '12345678', '3ffO1VbV3WRkb2bTGoVulm8ypJhTuL6mwpZTOSEuMfdDIt8jFHlB2UMZHmi9', '2018-11-19 00:53:15', '2018-11-19 09:13:54', 2);

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
  ADD PRIMARY KEY (`id`),
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
  ADD KEY `fk_csv_khoahoc` (`khoahoc_id`),
  ADD KEY `fk_csv_lop` (`lop_id`);

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
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lop_khoahoc` (`khoahoc_id`);

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
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `congtac`
--
ALTER TABLE `congtac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coquan`
--
ALTER TABLE `coquan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `csv`
--
ALTER TABLE `csv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lichsu`
--
ALTER TABLE `lichsu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `congtac`
--
ALTER TABLE `congtac`
  ADD CONSTRAINT `fk_congtac_coquan` FOREIGN KEY (`coquan_id`) REFERENCES `coquan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_congtac_csv` FOREIGN KEY (`csv_id`) REFERENCES `csv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `csv`
--
ALTER TABLE `csv`
  ADD CONSTRAINT `fk_csv_khoahoc` FOREIGN KEY (`khoahoc_id`) REFERENCES `khoahoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_csv_lop` FOREIGN KEY (`lop_id`) REFERENCES `lop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_csv_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lichsu`
--
ALTER TABLE `lichsu`
  ADD CONSTRAINT `fk_lichsu_function` FOREIGN KEY (`function_id`) REFERENCES `function` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lichsu_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `fk_lop_khoahoc` FOREIGN KEY (`khoahoc_id`) REFERENCES `khoahoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_function`
--
ALTER TABLE `role_function`
  ADD CONSTRAINT `fk_role_function` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_role_function_2` FOREIGN KEY (`function_id`) REFERENCES `function` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `fk_role_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
