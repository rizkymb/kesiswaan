-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 09:36 AM
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
(4, 10, 6, 7, 6, '2', 0, 0, '2019-05-22', 2, 3, 'Sakit tifus'),
(5, 10, 6, 7, 6, '2', 0, 0, '2019-05-23', 2, 3, 'Sakit TBC'),
(7, 10, 6, 7, 6, '2', 0, 0, '2019-05-24', 2, 3, 'Masih Sakit tifus, malah nambah db'),
(8, 10, 6, 7, 6, '4', 0, 0, '2019-05-25', 1, 3, 'Yee malah mbolos'),
(9, 10, 6, 7, 0, '1', 3, 3, '2019-05-26', 3, 3, 'Mantap'),
(10, 13, 0, 0, 9, '1', 3, 2, '2019-05-23', 3, 4, 'Mantep Kik'),
(11, 8, 4, 5, 0, '1', 1, 1, '2019-05-21', 1, 4, ''),
(12, 11, 7, 8, 0, '1', 1, 1, '2019-05-21', 1, 2, ''),
(13, 14, 8, 9, 0, '1', 2, 2, '2019-05-23', 1, 4, ''),
(14, 15, 0, 0, 10, '1', 1, 1, '2019-05-21', 1, 4, ''),
(15, 17, 0, 0, 12, '1', 1, 1, '2019-05-21', 1, 4, ''),
(16, 9, 5, 6, 0, '2', 0, 0, '2019-05-21', 0, 4, 'Malah Mbolos'),
(17, 12, 0, 0, 8, '1', 1, 1, '2019-05-21', 1, 4, ''),
(18, 13, 0, 0, 9, '1', 4, 4, '2019-05-21', 2, 4, 'Waah.. Mantep Kik'),
(19, 16, 0, 0, 11, '1', 1, 1, '2019-05-21', 1, 4, ''),
(20, 14, 8, 9, 0, '1', 2, 2, '2019-05-21', 1, 4, '');

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
(6, 'I Nengah Suherman', 'Denpasar', '0000-00-00', '32', 'TNI / Polri', '1 - 3 Juta', 'Jl. Wearnes No. 12', '1', '2', 'Panjer', 'Denpasar Selatan', 'Denpasar', 'Bali', '081936669580', '081936669580', 'nyomansuhe@gmail.com', 10),
(7, 'Hidan', 'Desa Yigakure', '0000-00-00', '40', 'Lainnya', 'DI Atas 5 Juta', 'Jl. K.H. Mas Mansyur No.Kav.35', '12', '11', 'Tanahabang', 'Karet Tengsin', 'Jakarta Pusat', 'DKI Jakarta', '1111111', '1111111', 'hidan@gmail.com', 11),
(8, 'Iroh', 'Negara Api', '0000-00-00', '54', 'TNI / Polri', 'Di Atas 5 Juta', 'Jl. S Parman Perum BCALand Kediri Blok D No. 41', '1', '1', 'Abian Tuwung', 'Kediri', 'Tabanan', 'Bali', '0188287', '0188287', 'iroh@email.co', 14);

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
(7, 'Ni Kadek Suherman', 'Denpasar', '0000-00-00', '29', 'Ibu Rumah Tangga', '', 'Jl. Wearnes No. 12', '1', '2', 'Panjer', 'Denpasar Selatan', 'Denpasar', 'Bali', '081292829182', '081292829182', '', 10),
(8, 'Uthgerd Unbroken', 'Whiterun', '0000-00-00', '35', 'Lainnya', '', 'Cloud District No. 4', '1', '1', 'Cloud District', 'Whiterun', 'Imperial', 'Skyrim', '1121212', '12121212', '', 11),
(9, 'GLX-21 War Unit', 'Colorado', '0000-00-00', '12', 'Lainnya', 'DI Atas 5 Juta', 'Jl. S Parman Perum BCALand Kediri Blok D No. 41', '1', '1', 'Abian Tuwung', 'Kediri', 'Tabanan', 'Bali', '1212121', '1211221', 'bot@gmail.com', 14);

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
  `NIS` varchar(20) NOT NULL,
  `TglInput` date NOT NULL,
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

INSERT INTO `tbsantri` (`IdSantri`, `NIS`, `TglInput`, `Nama`, `NamaLengkap`, `JenisKelamin`, `TempatLahir`, `TglLahir`, `AnakKe`, `Dari`, `Bahasa`, `KebutuhanKhusus`, `SekolahTerakhir`, `NamaSekolah`, `AlamatSekolah`, `TinggalDengan`, `NomorKK`, `NamaJalan`, `RT`, `RW`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`, `StatusSantri`, `IdProgram`, `IdKelas`) VALUES
(8, '2019-0002-0001', '2019-05-22', 'Herdi', 'I Kayan Herdiana', 1, 'Singaraja', '2019-05-17', 1, 3, 'Indonesia', 'Tidak Ada', 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum', 'Lainnya', '1212121221', 'Jl. Sudirman', '1', '1', 'Gak Tau', 'Denpasar', 'Denpasar Selatan', 'Denpasar', 'Aman', 1, 1),
(9, '2019-0002-0002', '2019-05-22', 'Agys', 'Agystha Wahyu Handika', 1, 'Banyuwangi', '2019-05-17', 1, 3, 'Sunda', 'Tidak Ada', 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum', 'Orang Tua', '212', 'Dalung, Bali, Denpasar', '1', '1', 'Dalung', 'Badung', 'Badung', 'Denpasar', 'Aman', 1, 2),
(10, '2019-0002-0003', '2019-05-22', 'Suhe', 'I Putu Suherman', 1, 'Singaraja', '2019-05-15', 1, 5, 'Indonesia', 'Indigo', 'Lainnya', 'Universitas Udayana', 'Jl. Pulau Nias No.13, Dauh Puri Klod, Kec. Denpasar Bar., Kota Denpasar, Bali 80113', 'Lainnya', '777', 'Jl. Wearnes No. 12', '1', '2', 'Panjer', 'Denpasar', 'Denpasar Selatan', 'Bali', 'Aman', 2, 2),
(11, '2019-0002-0004', '2019-05-22', 'Awkarin', 'Karin Novilda', 2, 'Jakarta', '2000-01-01', 1, 2, 'Indonesia', 'Autis', 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum', 'Orang Tua', '121122111111', 'Jl. K.H. Mas Mansyur No.Kav.35', '12', '11', 'Tanahabang', 'Jakarta Pusat', 'Karet Tengsin', 'DKI Jakarta', 'Aman', 3, 1),
(12, '2019-0002-0005', '2019-05-22', 'Bolo', 'Bolo the Traveler', 1, 'The Dome', '2019-05-03', 1, 1, 'Indonesia', 'Tidak Ada', 'Lainnya', 'Dome Institute of Shadow Research', 'The Dome, Northern Wing of The Dome Number 30', 'Lainnya', '12122112', 'Hidden Compound ', '1', '1', 'Unknown', 'Unknown', 'Unknown', 'Dynasty', 'Aman', 1, 2),
(13, '2019-0002-0006', '2019-05-22', 'Rizky', 'Rizky Mochtar Buchori', 1, 'Surakarta', '2000-04-10', 3, 3, 'Indonesia', 'Tidak Ada', 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum No.44', 'Orang Tua', '1212121221', 'Jl. Badak Agung No. 4', '1', '2', 'Panjer', 'Denpasar', 'Denpasar Selatan', 'Bali', 'Aman', 1, 2),
(14, '2019-0001-0007', '2019-05-22', 'Diksi', 'I Putu Diksi Erlangga', 1, 'Denpasar', '2000-05-20', 1, 2, 'Indonesia', 'Autis', 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum No.44', 'Orang Tua', '1212121221', 'Jl. S Parman Perum BCALand Kediri Blok D No. 41', '1', '1', 'Abian Tuwung', 'Tabanan', 'Kediri', 'Bali', 'Aman', 1, 1),
(15, '2019-0001-0008', '2019-05-22', 'Husen', 'Muhammad Abdul Husen', 1, 'Malang', '2000-06-06', 2, 3, 'Indonesia', 'Tidak Ada', 'SMA / SMK / MA', 'SMK Negeri 1 Denpasar', 'Jl. Cokroaminoto No.84, Pemecutan Kaja, Kec. Denpasar Utara, Kota Denpasar, Bali 80116', 'Wali', '1212112', 'Jl Danau Tamblingan 162', '1', '1', 'Sanur', 'Denpassar', 'Denpasar Selatan', 'Bali', 'Aman', 1, 1),
(16, '2019-0002-0009', '2019-05-22', 'Mega', 'MegaÂ CahyaÂ Kusuma', 2, 'Banyuwangi', '2019-05-16', 1, 3, 'Indonesia', 'Indigo', 'SMA / SMK / MA', 'SMK PGRI 3 Denpasar', 'TARA, Gg. Dewi Uma No.7, Panjer, Kec. Denpasar Sel., Kota Denpasar, Bali 80235', 'Wali', '1212121221', 'Pondok Karya, Pondok Aren, Banten', '1', '1', 'Pondok karya', 'Banten', 'Serang', 'Jawa Barat', 'Aman', 1, 2),
(17, '2019-0001-0010', '2019-05-22', 'Fanny', 'CahayaÂ FannyÂ Darmadi', 2, 'Pontianak', '2008-02-05', 3, 4, 'Indonesia', 'Tidak Ada', 'SMA / SMK / MA', 'SMK TI Bali  Global', 'Jl. Tukad Citarum No.44', 'Wali', '122121212', 'Jl. Tukad Citarum No.44', '1', '1', 'Panjer', 'Denpasar', 'Denpasar Selatan', 'Bali', 'Aman', 1, 1);

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

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`IdUser`, `Username`, `Password`, `Nama Lengkap`, `Level`, `Status`) VALUES
(1, 'admin', 'admin', 'DIksi Erlangga', 1, 1);

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
(8, 'Master Galen', 'Dynasty', '0000-00-00', '100', 'Guru / Mubaligh', 'DI Atas 5 Juta', 'Jl Gn Kapur 5 No 27', '1', '1', 'Monang Maning', 'Denpasar Barat', 'Denpasar', 'Bali', '23223', '223', '', 12),
(9, 'Jarl Balgruuf', 'Whiterun', '0000-00-00', '34', 'Lainnya', 'DI Atas 5 Juta', 'Whiterun', '1', '2', 'Cloud District', 'Whiterun', 'Skyrim Barat', 'Skyrim', '12111212', '12122', 'balgruufthegreat@mail.com', 13),
(10, 'Master Okada', 'The Dome', '0000-00-00', '30', 'Lainnya', 'DI Atas 5 Juta', 'Jl. Cokroaminoto No.84, Pemecutan Kaja, Kec. Denpasar Utara, Kota Denpasar, Bali 80116', '1', '1', 'Sanur', 'Denpasar Selatan', 'Denpasar', 'Bali', '08121122112', '08121122112', 'okada@mail.com', 15),
(11, 'Gus Eka', 'Edenia', '0000-00-00', '21', 'Guru / Mubaligh', '3 - 5 Juta', 'Pondok Karya, Pondok Aren, Banten', '1', '1', 'Pondok Aren', 'Serang', 'Banten', 'Jawa Barat', '12112', '121212121211', 'ghost_26@gmail.com', 16),
(12, 'DarmaÂ DwiÂ Darmadi', 'Pontianak', '0000-00-00', '34', 'Pegawai Swasta', '3 - 5 Juta', 'Jl. Tukad Citarum No.44', '1', '1', 'Panjer', 'Denpasar Selatan', 'Denpasar', 'Bali', '121121212', '121122121', 'darmodi@gmail.com', 17);

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
  MODIFY `IdAbsensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbayah`
--
ALTER TABLE `tbayah`
  MODIFY `IdAyah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbibu`
--
ALTER TABLE `tbibu`
  MODIFY `IdIbu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `IdSantri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbwali`
--
ALTER TABLE `tbwali`
  MODIFY `IdWali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
