-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 05:54 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`username`, `password`) VALUES
('wildan', 'wildan');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `no` int(3) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Posisi` varchar(30) NOT NULL,
  `Kelompok_umur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`no`, `Nama`, `Posisi`, `Kelompok_umur`) VALUES
(10, 'Awan Raharjo', 'Goalkeeper', 10),
(11, 'Andy Nugroho', 'Centre Back', 9),
(12, 'Ricky', 'Left Back', 9),
(13, 'Muhammad Arfan', 'Defensive Midfield', 10),
(14, 'Ilham Armaiyn', 'Left Winger', 9),
(15, 'Alfan Maulana', 'Right Winger', 7),
(16, 'Septian David', 'Attacking Midfield', 8),
(17, 'Muhammad Zahwan', 'Centre Forward', 10),
(18, 'Febrian Rizky', 'Right Winger', 8),
(19, 'Rizkyawan', 'Centre Midfield', 9),
(20, 'Irfan Muhamad', 'Centre Forward', 9);

-- --------------------------------------------------------

--
-- Table structure for table `registerr`
--

CREATE TABLE `registerr` (
  `no` int(3) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `no_sim` int(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `berkas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerr`
--

INSERT INTO `registerr` (`no`, `nama_ortu`, `no_sim`, `alamat`, `no_hp`, `email`, `nama_anak`, `tanggal_lahir`, `berkas`) VALUES
(19, 'wildan', 2147483647, 'jl pendidikan', 2147483647, 'wildan_idam@yahoo.com', 'sad', '2018-08-14', 'selesai'),
(20, 'Nurachman', 2147483647, 'kp.tambun 004/005 tambun selatan', 2147483647, 'nurachman@gmail.com', 'taufik', '2013-09-11', 'belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `registerr`
--
ALTER TABLE `registerr`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `registerr`
--
ALTER TABLE `registerr`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
