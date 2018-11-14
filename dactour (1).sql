-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 04:18 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dactour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usernam` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdat`
--

CREATE TABLE `chitietdat` (
  `MaDat` int(11) NOT NULL,
  `MaTour` int(11) NOT NULL,
  `NgayDi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuongKhach` int(11) NOT NULL,
  `capks` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khac` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `MaCom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaTVien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaTour` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDungCom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dactour`
--

CREATE TABLE `dactour` (
  `MaCom` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaTVien` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaTour` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDungCOm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Magl` int(11) NOT NULL,
  `LinkAnh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaitour`
--

CREATE TABLE `loaitour` (
  `MALOAI` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TENLOAI` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `MaPH` int(11) NOT NULL,
  `TenNguoiGui` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmailNguoiGui` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TieuDe` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayGu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MaTVien` int(11) NOT NULL,
  `Username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PassWord` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` varchar(23) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoCMT` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDT` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cauHoiMK` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TraLMK` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTinTu` int(11) NOT NULL,
  `TenTinTuc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AnhTT` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayGiuTT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `MaTour` int(11) NOT NULL,
  `MaLoai` int(11) NOT NULL,
  `TenTour` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TGTour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaTour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDungTour` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `AnhTour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayKhoiHanh` datetime NOT NULL,
  `DiemKhoiHanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayThem` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usernam`);

--
-- Indexes for table `chitietdat`
--
ALTER TABLE `chitietdat`
  ADD PRIMARY KEY (`MaDat`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`MaCom`);

--
-- Indexes for table `dactour`
--
ALTER TABLE `dactour`
  ADD PRIMARY KEY (`MaCom`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Magl`);

--
-- Indexes for table `loaitour`
--
ALTER TABLE `loaitour`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`MaPH`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MaTVien`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTinTu`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`MaTour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
