-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2015 at 07:37 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodtrace`
--

-- --------------------------------------------------------

--
-- Table structure for table `aftap`
--

CREATE TABLE IF NOT EXISTS `aftap` (
  `id_aftap` int(11) NOT NULL AUTO_INCREMENT,
  `no_aftap` varchar(30) DEFAULT NULL,
  `nomor_donor` varchar(30) DEFAULT NULL,
  `id_kantung` int(11) DEFAULT NULL,
  `jenis_kantung` varchar(30) DEFAULT NULL,
  `asal_darah` varchar(50) DEFAULT NULL,
  `tanggal_aftap` date DEFAULT NULL,
  `waktu_aftap` time DEFAULT NULL,
  `petugas_aftap` varchar(50) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_aftap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `aftap`
--

INSERT INTO `aftap` (`id_aftap`, `no_aftap`, `nomor_donor`, `id_kantung`, `jenis_kantung`, `asal_darah`, `tanggal_aftap`, `waktu_aftap`, `petugas_aftap`, `keterangan`) VALUES
(1, NULL, NULL, 1302818, NULL, 'Dalam Gedung', NULL, '09:00:00', 'Arifah', NULL),
(6, '12920150002', '101201500001', 14045, 'Single', 'UTD', '2015-09-02', '12:34:00', 'Afif', 'sukses');

-- --------------------------------------------------------

--
-- Table structure for table `detail_faktur`
--

CREATE TABLE IF NOT EXISTS `detail_faktur` (
  `id_detailfaktur` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_faktur` varchar(30) DEFAULT NULL,
  `id_kantung` varchar(30) DEFAULT NULL,
  `id_donor` varchar(30) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_detailfaktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `detail_faktur`
--

INSERT INTO `detail_faktur` (`id_detailfaktur`, `nomor_faktur`, `id_kantung`, `id_donor`, `jenis`) VALUES
(1, '23920150002', '14045', '101201500001', 'Single'),
(2, '23920150002', '14045', '101201500001', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `detail_permintaan`
--

CREATE TABLE IF NOT EXISTS `detail_permintaan` (
  `id_detailminta` int(11) NOT NULL AUTO_INCREMENT,
  `noform` varchar(30) NOT NULL,
  `jenisreq` varchar(30) NOT NULL,
  `goldarreq` varchar(30) NOT NULL,
  `jumlahreq` int(11) NOT NULL,
  PRIMARY KEY (`id_detailminta`),
  KEY `nomorform` (`noform`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `detail_permintaan`
--

INSERT INTO `detail_permintaan` (`id_detailminta`, `noform`, `jenisreq`, `goldarreq`, `jumlahreq`) VALUES
(4, '98765', 'Washed Red Cells', 'AB', 2),
(5, '98765', 'Fresh Plasma', 'O', 4),
(6, '98765', 'Whole Blood', 'AB', 2),
(7, '12345', 'Whole Blood', 'A', 2),
(8, '12345', 'Fresh Plasma', 'O', 6),
(9, '12345', 'Trombocyte Coencentrate', 'B', 4),
(10, '12345', 'Washed Red Cells', 'A', 2),
(11, '103785729001', 'Washed Red Cells', 'AB', 3),
(12, '103785729001', 'Plasma', 'A', 2),
(13, '103785729001', 'Washed Red Cells', 'O', 6);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `id_donor` int(11) NOT NULL,
  `nomor_donor` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `agama` varchar(7) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `rhesus` varchar(9) DEFAULT NULL,
  `noid` varchar(20) NOT NULL,
  `jenid` varchar(10) NOT NULL,
  `jml_donor` int(11) DEFAULT NULL,
  `terakhir_donor` date DEFAULT NULL,
  PRIMARY KEY (`nomor_donor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id_donor`, `nomor_donor`, `nama`, `jenis_kelamin`, `agama`, `tanggal_lahir`, `tempat_lahir`, `pekerjaan`, `alamat`, `kodepos`, `wilayah`, `golongan_darah`, `rhesus`, `noid`, `jenid`, `jml_donor`, `terakhir_donor`) VALUES
(1, '101201500001', 'Budi Doremi', 'Laki-laki', 'Islam', '2015-05-18', 'Surabaya', 'Pegawai', 'Keputih', '60111', 'Surabaya', 'A', 'Negatif', '123445678', 'KTP', 4, '2015-09-01'),
(2, '101201500002', 'Riko', 'Laki-laki', 'Islam', '2015-08-05', 'Bantul', 'Pelajar', 'Keputih', '60111', 'Surabaya', 'A', NULL, '12345678', 'SIM', 2, '2015-03-16'),
(3, '101201500003', 'Jono', 'Laki-laki', 'Islam', '2015-08-12', 'Jogja', 'Pelajar', 'Surabaya', '60111', 'Surabaya', 'B', NULL, '67891234', 'SIM', 5, '2015-03-10'),
(4, '101201500004', 'Anggeriko', 'Laki-laki', 'Islam', '2015-08-06', 'Bantul', 'Pelajar', 'Keputih', '60111', 'Surabaya', 'A', NULL, '89883746', 'SIM', 2, '2015-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE IF NOT EXISTS `faktur` (
  `id_faktur` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_faktur` varchar(30) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `waktu_kirim` time DEFAULT NULL,
  `asal_darah` varchar(30) DEFAULT NULL,
  `petugas_kirim` varchar(50) DEFAULT NULL,
  `waktu_prod` time DEFAULT NULL,
  `petugasprod` varchar(50) DEFAULT NULL,
  `waktu_imltd` time DEFAULT NULL,
  `petugas_imltd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_faktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`id_faktur`, `nomor_faktur`, `tgl_kirim`, `waktu_kirim`, `asal_darah`, `petugas_kirim`, `waktu_prod`, `petugasprod`, `waktu_imltd`, `petugas_imltd`) VALUES
(1, NULL, NULL, '11:56:00', NULL, 'Indah', '12:00:00', 'Kholil', '12:00:00', 'Mei P'),
(2, '23920150002', '2015-09-03', '10:29:00', 'UTD Sidoarjo', 'Afif', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kantung`
--

CREATE TABLE IF NOT EXISTS `kantung` (
  `id_kantung` varchar(30) NOT NULL,
  `nomor_donor` varchar(30) NOT NULL,
  `id_faktur` varchar(30) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `petugas_imltd` varchar(50) NOT NULL,
  `tanggal_aftap` date DEFAULT NULL,
  `waktu_aftap` time DEFAULT NULL,
  `tanggal_periksa` date DEFAULT NULL,
  `waktu_periksa` time NOT NULL,
  `hiv` varchar(30) DEFAULT NULL,
  `sifilis` varchar(30) DEFAULT NULL,
  `hepatitis` varchar(30) DEFAULT NULL,
  `hcv` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kantung`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantung`
--

INSERT INTO `kantung` (`id_kantung`, `nomor_donor`, `id_faktur`, `jenis`, `petugas_imltd`, `tanggal_aftap`, `waktu_aftap`, `tanggal_periksa`, `waktu_periksa`, `hiv`, `sifilis`, `hepatitis`, `hcv`) VALUES
('1', '1', '1', 'Plasma', 'Arifah', NULL, NULL, NULL, '08:00:00', '0', '0', '0', '0'),
('14045', '101201500001', '', 'Single', 'Riko', '2015-09-02', '12:34:00', '2015-09-03', '12:29:00', 'Negatif', 'Negatif', 'Negatif', 'Negatif');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE IF NOT EXISTS `mitra` (
  `id_mitra` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp_mitra` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mitra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama`, `alamat`, `telp_mitra`) VALUES
(1, 'Mitra Darah', 'Sidoarjo', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_daftar` int(11) NOT NULL AUTO_INCREMENT,
  `no_pendaftaran` varchar(50) DEFAULT NULL,
  `nomor_donor` varchar(30) DEFAULT NULL,
  `tanggaldaftar` date DEFAULT NULL,
  `waktudaftar` time DEFAULT NULL,
  `rhesus` varchar(50) DEFAULT NULL,
  `hb` int(11) DEFAULT NULL,
  `bb` int(11) DEFAULT NULL,
  `tensi` varchar(50) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `petugas` varchar(50) DEFAULT NULL,
  `hasil` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `no_pendaftaran`, `nomor_donor`, `tanggaldaftar`, `waktudaftar`, `rhesus`, `hb`, `bb`, `tensi`, `volume`, `petugas`, `hasil`) VALUES
(1, '1011920150001', '101201500001', '2015-09-01', '08:49:00', 'Positif', 13, 68, '120/80', 500, 'Dudin', 'Lolos'),
(2, '1011920150002', '101201500001', '2015-09-01', '12:00:00', 'Positif', 13, 57, '120/80', 500, 'Fifi', 'Lolos');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(50) NOT NULL,
  `pass_pengguna` varchar(50) NOT NULL,
  `akses` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2006 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `pass_pengguna`, `akses`, `lokasi`) VALUES
(2000, 'Petugas Administrasi', 'admin', 1, 'UTD'),
(2001, 'Dokter Pemeriksa', 'dokter', 2, 'UTD'),
(2002, 'AFTAP', 'aftap', 3, 'UTD'),
(2003, 'IMLTD', 'imltd', 4, 'UTD'),
(2004, 'Produksi', 'produksi', 5, 'UTD'),
(2005, 'Bank UTD', 'utd', 6, 'UTD');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE IF NOT EXISTS `permintaan` (
  `noform` varchar(30) NOT NULL,
  `tglpermintaan` date NOT NULL,
  `koders` varchar(5) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `petugas` varchar(30) NOT NULL,
  PRIMARY KEY (`noform`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`noform`, `tglpermintaan`, `koders`, `tujuan`, `petugas`) VALUES
('103785729001', '2015-08-29', '103', 'PMI Jawa Timur', '0'),
('12345', '2015-08-29', '103', 'PMI', '0'),
('98765', '2015-08-28', '1234', 'rw', '0');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE IF NOT EXISTS `produksi` (
  `id_produksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kantung` int(11) NOT NULL,
  `sscc` varchar(50) NOT NULL,
  `jenis_komponen` varchar(50) NOT NULL,
  `waktu_produksi` date NOT NULL,
  `waktu_kadaluarsa` date NOT NULL,
  `petugas_produksi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_produksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id_produksi`, `id_kantung`, `sscc`, `jenis_komponen`, `waktu_produksi`, `waktu_kadaluarsa`, `petugas_produksi`) VALUES
(1, 1, '12345', 'Whole Blood', '2015-08-12', '2015-08-28', 'Arifah'),
(2, 2, '9876', 'Plasma', '2015-08-29', '2015-09-30', 'Riko'),
(3, 3, '9876', 'Whole Blood', '2015-08-29', '2015-08-25', 'Riki');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `sscc` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `waktu_kirimship` date DEFAULT NULL,
  `waktu_terimaship` date DEFAULT NULL,
  `petugas_kirimship` varchar(50) DEFAULT NULL,
  `petugas_terimaship` varchar(50) DEFAULT NULL,
  `suhu_kirim` int(11) DEFAULT NULL,
  `suhu_terima` int(11) DEFAULT NULL,
  `kode_tujuan` int(11) DEFAULT NULL,
  `kode_supplier` int(11) DEFAULT NULL,
  PRIMARY KEY (`sscc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`sscc`, `status`, `waktu_kirimship`, `waktu_terimaship`, `petugas_kirimship`, `petugas_terimaship`, `suhu_kirim`, `suhu_terima`, `kode_tujuan`, `kode_supplier`) VALUES
(9876, 'Baik', '2015-08-29', NULL, 'Riki', NULL, 23, NULL, 104, NULL),
(12345, 'Baik', '2015-08-22', '2015-08-24', 'Arina', 'Arifah', 20, 20, 111, 222);

-- --------------------------------------------------------

--
-- Table structure for table `transfusi`
--

CREATE TABLE IF NOT EXISTS `transfusi` (
  `id_transfusi` int(11) NOT NULL AUTO_INCREMENT,
  `id_produksi` int(11) NOT NULL,
  `rumahsakit` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `tgl_lahirpasien` date NOT NULL,
  `jenkel_pasien` varchar(50) NOT NULL,
  `goldarpasien` varchar(50) NOT NULL,
  `mulaitransfusi` time NOT NULL,
  `selesaitransfusi` time NOT NULL,
  `macamtransfusi` varchar(50) NOT NULL,
  `reaksi` varchar(50) NOT NULL,
  `kualitasdarah` varchar(50) NOT NULL,
  PRIMARY KEY (`id_transfusi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transfusi`
--

INSERT INTO `transfusi` (`id_transfusi`, `id_produksi`, `rumahsakit`, `bagian`, `kelas`, `namapasien`, `no_identitas`, `tgl_lahirpasien`, `jenkel_pasien`, `goldarpasien`, `mulaitransfusi`, `selesaitransfusi`, `macamtransfusi`, `reaksi`, `kualitasdarah`) VALUES
(1, 1, 'RSU Sidoarjo', 'UGD', 'VIP', 'Fadli', '12345', '2014-10-13', 'Laki-laki', 'A', '08:00:00', '08:30:00', 'Normal', 'Normal', 'Baik');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_permintaan`
--
ALTER TABLE `detail_permintaan`
  ADD CONSTRAINT `detail_permintaan_ibfk_1` FOREIGN KEY (`noform`) REFERENCES `permintaan` (`noform`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
