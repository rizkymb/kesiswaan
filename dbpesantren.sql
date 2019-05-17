-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 05:17 AM
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
-- Table structure for table `tbabsen`
--

CREATE TABLE `tbabsen` (
  `IdAbsensi` int(11) NOT NULL,
  `IdSantri` int(11) NOT NULL,
  `IdAyah` int(11) NOT NULL,
  `IdIbu` int(11) NOT NULL,
  `IdWali` int(11) NOT NULL,
  `Absen` varchar(20) NOT NULL,
  `SetorAyat` int(11) NOT NULL,
  `Surat` int(11) NOT NULL,
  `TanggalAbsen` date NOT NULL,
  `JuzSaatIni` int(11) NOT NULL,
  `TargetJuz` int(11) NOT NULL,
  `KeteranganAbsen` text NOT NULL,
  `StatusMurid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `PenghasilanAyah` varchar(30) NOT NULL,
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

--
-- Dumping data for table `tbayah`
--

INSERT INTO `tbayah` (`IdAyah`, `NamaLengkapAyah`, `TempatLahirAyah`, `TanggalLahirAyah`, `UsiaAyah`, `PekerjaanAyah`, `PenghasilanAyah`, `NamaJalanAyah`, `RTAyah`, `RWAyah`, `DesaAyah`, `KecamatanAyah`, `KabupatenAyah`, `ProvinsiAyah`, `NoTelpAyah`, `NoWhatsappAyah`, `EmailAyah`, `IdSantri`) VALUES
(1, 'Haji Lulung', 'Jakarta', '2019-05-17', '54', 'PNS', '1 - 3 Juta ', 'Jl. Jalan Maju Mundur', '01', '02', 'Kalijodo', 'Menteng', 'Jakarta Pusat', 'DKI Jakarta', '081936669580', '081936669580', 'agysawh90@gmail.com', 1),
(2, 'Raiden', 'Denpasar', '0000-00-00', '50', 'Pensiunan', '1 - 3 Juta', 'Jl. Elder God', '1', '2', 'Shaolin Temple', 'Lin Kuei', 'Jinsei', 'Earthrealm', '666', '666', 'Raiden@gmail.com', 1);

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

--
-- Dumping data for table `tbibu`
--

INSERT INTO `tbibu` (`IdIbu`, `NamaLengkapIbu`, `TempatLahirIbu`, `TanggalLahirIbu`, `UsiaIbu`, `PekerjaanIbu`, `PenghasilanIbu`, `NamaJalanIbu`, `RTIbu`, `RWIbu`, `DesaIbu`, `KecamatanIbu`, `KabupatenIbu`, `ProvinsiIbu`, `NoTelpIbu`, `NoWhatsappIbu`, `EmailIbu`, `IdSantri`) VALUES
(1, 'Khotijah Siti', 'Tangerang', '2019-05-17', '17', 'Ibu Rumah Tangga', '1 - 3 Juta', 'Jl. Jalan Maju Mundur', '01', '02', 'Wonosobo', 'Jambi', 'Jambi', 'Jawa Barat', '081728378278', '081728378278', 'siti@gmail.com', 1),
(2, 'Hinata', 'Konoha', '0000-00-00', '34', 'Ibu Rumah Tangga', '', 'Jl. Elder God', '1', '2', 'Desa Daun', 'Konoha Barat', 'Konoha', 'Ninja', '112122112', '3233223', '', 1),
(3, 'Hinata', 'Konoha', '0000-00-00', '34', 'Ibu Rumah Tangga', '', 'Jl. Elder God', '1', '2', 'Desa Daun', 'Konoha Barat', 'Konoha', 'Ninja', '112122112', '3233223', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbprogram`
--

CREATE TABLE `tbprogram` (
  `IdProgram` int(11) NOT NULL,
  `ProgramStudi` varchar(30) NOT NULL,
  `Juz` int(11) NOT NULL,
  `AyatPerhari` int(11) NOT NULL,
  `BulanPerjuz` int(11) NOT NULL,
  `Tahun` int(11) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbprogram`
--

INSERT INTO `tbprogram` (`IdProgram`, `ProgramStudi`, `Juz`, `AyatPerhari`, `BulanPerjuz`, `Tahun`, `Keterangan`) VALUES
(1, 'Paket 1 (4 Juz/Tahun)', 4, 6, 3, 1, 'Paket menghafal ini mendorong siswa supaya bisa menghafal 4 juz dalam 1 tahun'),
(2, 'Paket 2 (3 Juz/Tahun)', 3, 5, 4, 1, 'Paket menghafal ini mendorong siswa supaya bisa menghafal 3 juz dalam 1 tahun'),
(3, 'Paket 3 (2 Juz/Tahun)', 2, 4, 6, 1, 'Paket menghafal ini mendorong siswa supaya bisa menghafal 2 juz dalam 1 tahun');

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
  `AnakKe` int(5) NOT NULL,
  `Dari` int(11) NOT NULL,
  `Bahasa` varchar(40) NOT NULL,
  `KebutuhanKhusus` int(11) NOT NULL,
  `SekolahTerakhir` varchar(20) NOT NULL,
  `NamaSekolah` varchar(50) NOT NULL,
  `AlamatSekolah` text NOT NULL,
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

--
-- Dumping data for table `tbsantri`
--

INSERT INTO `tbsantri` (`IdSantri`, `Nama`, `NamaLengkap`, `JenisKelamin`, `TempatLahir`, `TglLahir`, `AnakKe`, `Dari`, `Bahasa`, `KebutuhanKhusus`, `SekolahTerakhir`, `NamaSekolah`, `AlamatSekolah`, `TinggalDengan`, `NomorKK`, `NamaJalan`, `RT`, `RW`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`, `IdProgram`) VALUES
(1, 'Yozha', 'Yozha Galant', 1, 'Denpasar', '2019-05-17', 2, 0, 'Indonesia', 0, 'SD', 'SD Keren', 'Jl. Jalan ke Jalan', 'Orang Tua', '22323222332', 'Jl. Jalan Maju Mundur', '01', '02', 'Kembang', 'Sumedang', 'Cilacap', 'Jawa Barat', 1),
(2, 'Alvin', 'Alvin Christian', 1, 'Lombok', '2019-05-17', 2, 2, 'Indonesia', 0, 'SD / MI', 'SD Maju Mundur', 'Jl. Tukad CItarum No. 24', 'Orang Tua', '1212121221', 'Jl. Manakaden No 12XXX', '01', '02', 'Panjer', 'Denpasar Selatan', 'Denpasar', '', 1),
(3, 'Alvin', 'Alvin Christian', 1, 'Lombok', '2019-05-17', 2, 2, 'Indonesia', 0, 'SD / MI', 'SD Maju Mundur', 'Jl. Tukad CItarum No. 24', 'Orang Tua', '1212121221', 'Jl. Manakaden No 12XXX', '01', '02', 'Panjer', 'Denpasar Selatan', 'Denpasar', '', 1),
(4, 'Alvin', 'Alvin Christian', 1, 'Lombok', '2019-05-17', 2, 2, 'Indonesia', 0, 'SD / MI', 'SD Maju Mundur', 'Jl. Tukad CItarum No. 24', 'Orang Tua', '1212121221', 'Jl. Manakaden No 12XXX', '01', '02', 'Panjer', 'Denpasar Selatan', 'Denpasar', '', 1),
(5, 'Herdi', 'I Kayan Herdiana', 1, 'Singaraja', '2019-05-01', 1, 20, 'Indonesia', 0, 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum', 'Orang Tua', '2131211212', 'Jl. Jalan Wedhus Sucana', '1', '2', 'Pangkalrejo', 'Jambi', 'Ngawi', '', 2),
(6, 'Herdi', 'I Kayan Herdiana', 1, 'Singaraja', '2019-05-01', 1, 20, 'Indonesia', 0, 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum', 'Orang Tua', '2131211212', 'Jl. Jalan Wedhus Sucana', '1', '2', 'Pangkalrejo', 'Jambi', 'Ngawi', '', 2);

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
-- Dumping data for table `tbwali`
--

INSERT INTO `tbwali` (`IdWali`, `NamaLengkapWali`, `TempatLahirWali`, `TanggalLahirWali`, `UsiaWali`, `PekerjaanWali`, `PenghasilanWali`, `NamaJalanWali`, `RTWali`, `RWWali`, `DesaWali`, `KecamatanWali`, `KabupatenWali`, `ProvinsiWali`, `NoTelpWali`, `NoWhatsappWali`, `EmailWali`, `IdSantri`) VALUES
(1, '', '', '0000-00-00', '', 'Ibu Rumah Tangga', '1 - 3 Juta', '', '', '', '', '', '', '', '', '', '', 1),
(2, '', '', '0000-00-00', '', 'Ibu Rumah Tangga', '1 - 3 Juta', '', '', '', '', '', '', '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbabsen`
--
ALTER TABLE `tbabsen`
  ADD PRIMARY KEY (`IdAbsensi`);

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
-- Indexes for table `tbsantri`
--
ALTER TABLE `tbsantri`
  ADD PRIMARY KEY (`IdSantri`);

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
-- AUTO_INCREMENT for table `tbabsen`
--
ALTER TABLE `tbabsen`
  MODIFY `IdAbsensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbayah`
--
ALTER TABLE `tbayah`
  MODIFY `IdAyah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbibu`
--
ALTER TABLE `tbibu`
  MODIFY `IdIbu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbprogram`
--
ALTER TABLE `tbprogram`
  MODIFY `IdProgram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbsantri`
--
ALTER TABLE `tbsantri`
  MODIFY `IdSantri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbwali`
--
ALTER TABLE `tbwali`
  MODIFY `IdWali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
