-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 10:53 AM
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
  `KeteranganAbsen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbabsen`
--

INSERT INTO `tbabsen` (`IdAbsensi`, `IdSantri`, `IdAyah`, `IdIbu`, `IdWali`, `Absen`, `SetorAyat`, `Surat`, `TanggalAbsen`, `JuzSaatIni`, `TargetJuz`, `KeteranganAbsen`) VALUES
(1, 10, 6, 7, 6, '1', 2, 3, '2019-05-20', 2, 3, 'Mantep Kik'),
(2, 10, 6, 7, 6, '1', 2, 3, '2019-05-21', 2, 3, 'Mantep Lagi Kik'),
(3, 10, 6, 7, 6, '1', 2, 3, '2019-05-21', 2, 3, 'Mantep Lagi Kik'),
(4, 10, 6, 7, 6, '2', 0, 0, '2019-05-22', 2, 3, 'Sakit tifus'),
(5, 10, 6, 7, 6, '2', 0, 0, '2019-05-23', 2, 3, 'Sakit TBC'),
(7, 10, 6, 7, 6, '2', 0, 0, '2019-05-24', 2, 3, 'Masih Sakit tifus, malah nambah db'),
(8, 10, 6, 7, 6, '4', 0, 0, '2019-05-25', 1, 3, 'Yee malah mbolos');

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
(4, 'Raiden', 'God Realm', '0000-00-00', '124', 'Lainnya', '1 - 3 Juta', 'Jl. Elder God', '1', '2', 'Shaolin Temple', 'Lin Kuei', 'Jinsei', 'Earthrealm', '12121', '121221', 'raiden@gmail.com', 8),
(5, 'Naruto Uzumaki', 'Konoha', '0000-00-00', '34', 'Lainnya', 'DI Atas 5 Juta', 'Jalan Sunagakure No. 2', '1', '1', 'Konoha', 'Konoha', 'Konoha', 'Konoha', '1111111', '1111111', 'naruto@gmail.com', 9),
(6, 'I Nengah Suherman', 'Denpasar', '0000-00-00', '32', 'TNI / Polri', '1 - 3 Juta', 'Jl. Wearnes No. 12', '1', '2', 'Panjer', 'Denpasar Selatan', 'Denpasar', 'Bali', '081936669580', '081936669580', 'nyomansuhe@gmail.com', 10);

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
(5, 'Hinata Hyuuga', 'Konoha', '0000-00-00', '24', 'Lainnya', '', 'Konoha Barat', '1', '2', 'Desa Daun', 'Konoha Barat', 'Konoha', 'Ninja', '12121', '121212', '', 8),
(6, 'Hinata Hyuuga', 'Konoha', '0000-00-00', '29', 'Ibu Rumah Tangga', '', 'Jalan Sunagakure No. 2', '1', '1', 'Konoha', 'Konoha', 'Konoha', 'Konoha', '1111', '1111', '', 9),
(7, 'Ni Kadek Suherman', 'Denpasar', '0000-00-00', '29', 'Ibu Rumah Tangga', '', 'Jl. Wearnes No. 12', '1', '2', 'Panjer', 'Denpasar Selatan', 'Denpasar', 'Bali', '081292829182', '081292829182', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE `tbkelas` (
  `IdKelas` int(11) NOT NULL,
  `NamaKelas` varchar(50) NOT NULL,
  `TahunKelas` int(11) NOT NULL,
  `KeteranganKelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkelas`
--

INSERT INTO `tbkelas` (`IdKelas`, `NamaKelas`, `TahunKelas`, `KeteranganKelas`) VALUES
(1, 'A', 2019, 'Kelas Keren'),
(2, 'B', 2019, 'Kelas Sombong');

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
  `KebutuhanKhusus` varchar(30) NOT NULL,
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
  `StatusSantri` varchar(30) NOT NULL,
  `IdProgram` int(11) NOT NULL,
  `IdKelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsantri`
--

INSERT INTO `tbsantri` (`IdSantri`, `Nama`, `NamaLengkap`, `JenisKelamin`, `TempatLahir`, `TglLahir`, `AnakKe`, `Dari`, `Bahasa`, `KebutuhanKhusus`, `SekolahTerakhir`, `NamaSekolah`, `AlamatSekolah`, `TinggalDengan`, `NomorKK`, `NamaJalan`, `RT`, `RW`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`, `StatusSantri`, `IdProgram`, `IdKelas`) VALUES
(8, 'Herdi', 'I Kayan Herdiana', 1, 'Singaraja', '2019-05-17', 1, 3, 'Indonesia', 'Tidak Ada', 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum', 'Lainnya', '1212121221', 'Jl. Sudirman', '1', '1', 'Gak Tau', 'Denpasar', 'Denpasar Selatan', 'Denpasar', 'Aman', 1, 1),
(9, 'Agys', 'Agystha Wahyu Handika', 1, 'Banyuwangi', '2019-05-17', 1, 3, 'Sunda', 'Tidak Ada', 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum', 'Orang Tua', '212', 'Dalung, Bali, Denpasar', '1', '1', 'Dalung', 'Badung', 'Badung', 'Denpasar', 'Aman', 1, 2),
(10, 'Suhe', 'I Putu Suherman', 1, 'Singaraja', '2019-05-15', 1, 5, 'Indonesia', 'Indigo', 'Lainnya', 'Universitas Udayana', 'Jl. Pulau Nias No.13, Dauh Puri Klod, Kec. Denpasar Bar., Kota Denpasar, Bali 80113', 'Lainnya', '777', 'Jl. Wearnes No. 12', '1', '2', 'Panjer', 'Denpasar', 'Denpasar Selatan', 'Bali', 'Aman', 2, 2);

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
(5, '', '', '0000-00-00', '', 'Ibu Rumah Tangga', '1 - 3 Juta', '', '', '', '', '', '', '', '', '', '', 9),
(6, '', '', '0000-00-00', '', 'Ibu Rumah Tangga', '1 - 3 Juta', '', '', '', '', '', '', '', '', '', '', 10);

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
-- Indexes for table `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`IdKelas`);

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
  MODIFY `IdAbsensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbayah`
--
ALTER TABLE `tbayah`
  MODIFY `IdAyah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbibu`
--
ALTER TABLE `tbibu`
  MODIFY `IdIbu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbkelas`
--
ALTER TABLE `tbkelas`
  MODIFY `IdKelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbprogram`
--
ALTER TABLE `tbprogram`
  MODIFY `IdProgram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbsantri`
--
ALTER TABLE `tbsantri`
  MODIFY `IdSantri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbwali`
--
ALTER TABLE `tbwali`
  MODIFY `IdWali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
