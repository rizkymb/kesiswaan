-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 07:33 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpesantren`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbayah`
--

CREATE TABLE `tbayah` (
  `IdAyah` int(11) NOT NULL,
  `NamaLengkapAyah` varchar(50) NOT NULL,
  `TempatLahirAyah` varchar(40) NOT NULL,
  `TanggalLahirAyah` date NOT NULL,
  `UsiaAyah` varchar(15) NOT NULL,
  `PekerjaanAyah` varchar(50) NOT NULL,
  `Penghasilan` varchar(30) NOT NULL,
  `NamaJalanAyah` text NOT NULL,
  `RTAyah` varchar(50) NOT NULL,
  `RWAyah` varchar(50) NOT NULL,
  `DesaAyah` varchar(50) NOT NULL,
  `KecamatanAyah` varchar(50) NOT NULL,
  `KabupatenAyah` varchar(50) NOT NULL,
  `ProvinsiAyah` varchar(50) NOT NULL,
  `NoTelpAyah` varchar(15) NOT NULL,
  `NoWhatsappAyah` varchar(15) NOT NULL,
  `EmailAyah` varchar(30) NOT NULL,
  `IdSantri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbibu`
--

CREATE TABLE `tbibu` (
  `IdIbu` int(11) NOT NULL,
  `NamaLengkapIbu` varchar(50) NOT NULL,
  `TempatLahirIbu` varchar(40) NOT NULL,
  `TanggalLahirIbu` date NOT NULL,
  `UsiaIbu` varchar(15) NOT NULL,
  `PekerjaanIbu` varchar(50) NOT NULL,
  `PenghasilanIbu` varchar(30) NOT NULL,
  `NamaJalanIbu` text NOT NULL,
  `RTIbu` varchar(50) NOT NULL,
  `RWIbu` varchar(50) NOT NULL,
  `DesaIbu` varchar(50) NOT NULL,
  `KecamatanIbu` varchar(50) NOT NULL,
  `KabupatenIbu` varchar(50) NOT NULL,
  `ProvinsiIbu` varchar(50) NOT NULL,
  `NoTelpIbu` varchar(15) NOT NULL,
  `NoWhatsappIbu` varchar(15) NOT NULL,
  `EmailIbu` varchar(30) NOT NULL,
  `IdSantri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbprogram`
--

CREATE TABLE `tbprogram` (
  `IdProgram` int(11) NOT NULL,
  `ProgramStudi` varchar(30) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbsantri`
--

CREATE TABLE `tbsantri` (
  `IdSantri` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `NamaLengkap` varchar(100) NOT NULL,
  `JenisKelamin` int(2) NOT NULL,
  `TempatLahir` varchar(40) NOT NULL,
  `TglLahir` date NOT NULL,
  `AnakKe` varchar(5) NOT NULL,
  `Bahasa` varchar(40) NOT NULL,
  `KebutuhanKhusus` int(11) NOT NULL,
  `Mondok` int(11) NOT NULL,
  `SekolahTerakhir` varchar(20) NOT NULL,
  `TinggalDengan` varchar(30) NOT NULL,
  `NomorKK` varchar(50) NOT NULL,
  `NamaJalan` text NOT NULL,
  `RT` varchar(50) NOT NULL,
  `RW` varchar(50) NOT NULL,
  `Desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(100) NOT NULL,
  `Kabupaten` varchar(100) NOT NULL,
  `Provinsi` varchar(100) NOT NULL,
  `IdProgram` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `IdUser` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Nama Lengkap` varchar(50) NOT NULL,
  `Level` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbwali`
--

CREATE TABLE `tbwali` (
  `IdWali` int(11) NOT NULL,
  `NamaLengkapWali` varchar(50) NOT NULL,
  `TempatLahirWali` varchar(40) NOT NULL,
  `TanggalLahirWali` date NOT NULL,
  `UsiaWali` varchar(15) NOT NULL,
  `PekerjaanWali` varchar(50) NOT NULL,
  `PenghasilanWali` varchar(30) NOT NULL,
  `NamaJalanWali` text NOT NULL,
  `RTWali` varchar(50) NOT NULL,
  `RWWali` varchar(50) NOT NULL,
  `DesaWali` varchar(50) NOT NULL,
  `KecamatanWali` varchar(50) NOT NULL,
  `KabupatenWali` varchar(50) NOT NULL,
  `ProvinsiWali` varchar(50) NOT NULL,
  `NoTelpWali` varchar(15) NOT NULL,
  `NoWhatsappWali` varchar(15) NOT NULL,
  `EmailWali` varchar(30) NOT NULL,
  `IdSantri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbayah`
--
ALTER TABLE `tbayah`
  ADD PRIMARY KEY (`IdAyah`);

--
-- Indexes for table `tbibu`
--
ALTER TABLE `tbibu`
  ADD PRIMARY KEY (`IdIbu`);

--
-- Indexes for table `tbprogram`
--
ALTER TABLE `tbprogram`
  ADD PRIMARY KEY (`IdProgram`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`IdUser`);

--
-- Indexes for table `tbwali`
--
ALTER TABLE `tbwali`
  ADD PRIMARY KEY (`IdWali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbayah`
--
ALTER TABLE `tbayah`
  MODIFY `IdAyah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbibu`
--
ALTER TABLE `tbibu`
  MODIFY `IdIbu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbprogram`
--
ALTER TABLE `tbprogram`
  MODIFY `IdProgram` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbwali`
--
ALTER TABLE `tbwali`
  MODIFY `IdWali` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;