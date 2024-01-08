-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2016 at 12:13 AM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pensiun`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(20) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `jk`, `email`, `nohp`, `alamat`) VALUES
(1, '12345', 'Ferri Achmad Effindri', 'Laki-Laki', 'vendry7@gmail.com', '082170214400', 'Jl.Berok Raya No 89 Siteba Padang'),
(3, '12346', 'Joni Iskandar', 'Laki-Laki', 'joni@gmail.com', '081993448877', 'Jl. Aru Indah No 21 A');

-- --------------------------------------------------------

--
-- Table structure for table `rb_halaman`
--

CREATE TABLE IF NOT EXISTS `rb_halaman` (
  `judul` varchar(255) NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`halaman`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rb_halaman`
--

INSERT INTO `rb_halaman` (`judul`, `halaman`, `detail`) VALUES
('Selamat Datang Di Halaman Utama Sistem Informasi Data Pensiun', 'home', '<b>Visi dan Misi Dinas Kesehatan Kabupaten Asahan </b><br><br>\r\nAdapun visi dan misi dari Dinas Kesehatan Kisaran adalah sebagai berikut:<br><br>\r\na)	Visi:<br>\r\nTerwujudnya masyarakat Kabupaten Asahan yang sehat mandiri. <br><br>\r\nb)	Misi:<br>\r\n1)	Memberikan pelayanan kesehatan berkualitas kepada masyarakat.<br>\r\n2)	Menyehatkan lingkungan tempat tinggal dan lingkungan tempat beraktifitas.<br>\r\n3)	Menanggulangi penyakit menular dan tidak menular.<br>\r\n4)	Menyehatkan keluarga dan memberdayakan masyarakat dalam bidang kesehatan.<br>\r\n5)	Melaksanakan pengawasan sediaan farmasi dan makanan\r\n<br>');

-- --------------------------------------------------------

--
-- Table structure for table `rb_login`
--

CREATE TABLE IF NOT EXISTS `rb_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'members',
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rb_login`
--

INSERT INTO `rb_login` (`username`, `password`, `nama_lengkap`, `level`, `email`, `nohp`, `alamat`) VALUES
('admin', 'admin', 'Joko Susilo', 'admin', 'admin@gmail.com', '082170214499', 'Jl.Sudirman 21 '),
('kaka', 'kaka', 'Kaka Wijayanto', 'admin', 'kaka@gmail.com', '083170445599', 'Jl. Ahmad Yani'),
('Indah', 'indah', 'Indah Wahyuni', 'admin', 'indah@gmail.com', '081993448877', 'Jl. Batang Hari no 21 A');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan`
--

CREATE TABLE IF NOT EXISTS `tunjangan` (
  `id_tunjangan` int(20) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tnj` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tunjangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tunjangan`
--

INSERT INTO `tunjangan` (`id_tunjangan`, `nip`, `nama`, `jabatan`, `tnj`) VALUES
(1, '12346', 'Ferri Achmad Effindri', 'Kepala Dinas', 'Rp. 5.000.000');
