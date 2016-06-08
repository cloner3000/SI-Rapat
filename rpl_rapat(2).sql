-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 12:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl_rapat`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_undangan_rapat`
--

CREATE TABLE `detail_undangan_rapat` (
  `id_undangan_rapat` int(20) NOT NULL,
  `id_user` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_date` date NOT NULL,
  `total_events` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_date`, `total_events`) VALUES
('2016-06-06', 1),
('2016-06-07', 3),
('2016-06-08', 6),
('2016-06-09', 1),
('2016-06-10', 1),
('2016-06-11', 1),
('2016-06-13', 1),
('2016-06-14', 1),
('2016-06-15', 1),
('2016-06-16', 2),
('2016-06-17', 2),
('2016-06-18', 1),
('2016-06-19', 1),
('2016-06-20', 1),
('2016-06-21', 1),
('2016-06-22', 1),
('2016-06-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_detail`
--

CREATE TABLE `event_detail` (
  `idevent` int(20) NOT NULL,
  `event` varchar(500) NOT NULL,
  `event_date` date NOT NULL,
  `event_start` time NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_detail`
--

INSERT INTO `event_detail` (`idevent`, `event`, `event_date`, `event_start`, `id_user`) VALUES
(1, 'a', '2016-06-16', '18:18:00', 0),
(2, 'c', '2016-06-16', '18:00:00', 0),
(6, 'sxc', '2016-06-15', '19:19:00', 0),
(8, 'd', '2016-06-17', '19:00:00', 0),
(9, 'event dari dosen', '2016-06-18', '18:00:00', 0),
(10, 'ini event dari kajur', '2016-06-19', '19:00:00', 0),
(11, 'Rapat Akademik', '2016-06-13', '13:00:00', 0),
(14, '12345678', '2016-06-14', '02:00:00', 0),
(20, 'sdds', '2016-06-08', '03:00:00', 12345678),
(21, 'asdwe', '2016-06-08', '05:00:00', 12345678),
(22, 'rapat akademik', '2016-06-07', '15:00:00', 12345678),
(23, 'adfadf', '2016-06-09', '08:00:00', 12345678),
(24, 'rapat akademik', '2016-06-10', '12:00:00', 12345678),
(25, 'asss', '2016-06-07', '02:00:00', 12345678),
(26, 'rapat kurikulum', '2016-06-11', '16:00:00', 12345678),
(27, 'f', '2016-06-08', '19:00:00', 2147483647),
(28, 's', '2016-06-08', '02:00:00', 2147483647),
(29, 'ini coba', '2016-06-20', '09:00:00', 12345678),
(30, 'rapat kurikulum', '2016-06-06', '04:00:00', 12345678),
(31, 'rapat coba', '2016-06-21', '09:00:00', 2147483647),
(32, 'gv', '2016-06-08', '02:00:00', 12345678),
(33, 'testing', '2016-06-22', '09:00:00', 2147483647),
(34, 'event', '2016-06-08', '07:00:00', 12345678),
(35, 'cobaaa', '2016-06-23', '07:00:00', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `event_rapat`
--

CREATE TABLE `event_rapat` (
  `id_event_rapat` int(20) NOT NULL,
  `event_date` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `status` enum('OK','Batal','Done') NOT NULL,
  `role_user` varchar(20) NOT NULL,
  `idevent` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_rapat`
--

INSERT INTO `event_rapat` (`id_event_rapat`, `event_date`, `judul`, `status`, `role_user`, `idevent`) VALUES
(2, '2016-06-15', '', 'OK', '0', 0),
(3, '2016-06-05', 'test judul ', 'Batal', '0', 0),
(4, '2016-06-03', 'rapat kurikulum', 'OK', 'Admin', 0),
(5, '2016-06-13', 'ini testing admin', 'OK', 'Admin', 0),
(6, '2016-06-01', 'testing role user berhasil', 'OK', '1', 0),
(7, '2016-06-18', 'test role user', 'Batal', '1', 0),
(8, '2016-06-10', 'fadfad', 'OK', 'Admin', 0),
(9, '2016-06-23', 'rapat kurikulum', 'Batal', 'Ketua Jurusan', 0),
(10, '2016-06-09', 'rtgrwewaa', 'OK', 'Ketua Jurusan', 0),
(11, '2016-06-09', 'asderf', 'OK', 'Ketua Jurusan', 0),
(12, '2016-06-14', 'qwerty', 'OK', 'Ketua Jurusan', 0),
(13, '2016-06-22', 'ini kajur', 'Batal', 'Ketua Jurusan', 0),
(14, '0000-00-00', 'rapat coba', 'OK', 'Admin', 0),
(15, '0000-00-00', 'rapat coba1', 'OK', 'Admin', 0),
(16, '0000-00-00', 'testttt', 'OK', 'Admin', 0),
(17, '0000-00-00', 'testttt', 'OK', 'Admin', 0),
(18, '0000-00-00', 'testttt', 'OK', 'Admin', 0),
(19, '2016-06-09', 'jadwal rapat 1', 'OK', 'Admin', 0),
(20, '0000-00-00', 'rapattesting', 'OK', 'Admin', 0),
(21, '0000-00-00', 'rapattesting', 'OK', 'Admin', 0),
(22, '0000-00-00', 'rapattesting', 'OK', 'Admin', 0),
(23, '0000-00-00', 'testttttttt', 'OK', 'Admin', 0),
(24, '0000-00-00', 'testttttttt', 'OK', 'Admin', 0),
(25, '0000-00-00', 'rapatfix', 'OK', 'Admin', 0),
(26, '0000-00-00', 'rapatfix', 'OK', 'Admin', 0),
(27, '0000-00-00', 'rapatfix', 'OK', 'Admin', 0),
(28, '0000-00-00', 'testttt', 'OK', 'Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `peserta_rapat`
--

CREATE TABLE `peserta_rapat` (
  `id_user` bigint(100) NOT NULL,
  `id_rapat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rapat`
--

CREATE TABLE `rapat` (
  `id_rapat` int(20) NOT NULL,
  `tanggal_rapat` date NOT NULL,
  `jam_mulai_rapat` time NOT NULL,
  `jam_selesai_rapat` time NOT NULL,
  `judul` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `hasil_rapat` varchar(1000) NOT NULL,
  `jenis_hasil_rapat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapat`
--

INSERT INTO `rapat` (`id_rapat`, `tanggal_rapat`, `jam_mulai_rapat`, `jam_selesai_rapat`, `judul`, `slug`, `hasil_rapat`, `jenis_hasil_rapat`) VALUES
(9, '2016-06-05', '00:00:00', '00:00:00', 'fasdfafadsff', 'fasdfafadsff', '<p>ffafdadfafdfafa<strong>fafdf</strong></p>', 'Draft'),
(10, '2016-06-05', '00:00:00', '00:00:00', 'ini judul', 'ini-judul', '<p>ini isi</p>', 'Publish'),
(11, '2016-06-05', '00:00:00', '00:00:00', 'Rapat Akademik', 'rapat-akademik', '<p>inilekdjfaldkfjiefladkfjoaidf</p>\r\n<p>jflkdajfijelf</p>\r\n<p>kjfdaijeflkad</p>\r\n<p>jfdlkafjijflka</p>', 'Publish'),
(12, '2016-06-05', '00:00:00', '00:00:00', 'tambah satu lagi', 'tambah-satu-lagi', '<p>apapun hasilnya ini hanya uci coba</p>', 'Publish'),
(13, '2016-06-05', '00:00:00', '00:00:00', 'tambah satu lagi - coba diupdate', 'tambah-satu-lagi-coba-diupdate', '<p>apapun hasilnya ini hanya uci coba&nbsp;</p>\r\n<p>berhasil gak?</p>', 'Publish'),
(23, '2016-06-08', '04:05:00', '05:06:00', 'faf - testing edit', 'faf-testing-edit', '<p>faf - bisa ndk yo</p>', 'Publish'),
(25, '0000-00-00', '11:00:00', '12:00:00', 'rapat cobaa', 'rapat-cobaa', '<p>abcd</p>', 'Publish'),
(26, '2016-06-15', '03:00:00', '04:00:00', 'test - edit', 'test-edit', '<p>lkjaflkdsf</p>', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(20) NOT NULL,
  `jenis_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `jenis_role`) VALUES
(1, 'admin'),
(2, 'ketua jurusan'),
(3, 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `undangan_rapat`
--

CREATE TABLE `undangan_rapat` (
  `id_undangan_rapat` int(20) NOT NULL,
  `nomor_undangan` int(50) NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `kepada` varchar(250) NOT NULL,
  `id_event_rapat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undangan_rapat`
--

INSERT INTO `undangan_rapat` (`id_undangan_rapat`, `nomor_undangan`, `perihal`, `kepada`, `id_event_rapat`) VALUES
(1, 34, 'jflakjf', 'fjlakjf', 234),
(2, 12, 'asdfg', 'fadfa', 12),
(3, 34, 'ljkfklajf', 'nfakljdflk', 34),
(4, 33, 'rapat', 'hadi', 33),
(5, 34, 'Perihal', 'Prof Surya', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(100) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `id_role` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password`, `email`, `jenis_kelamin`, `no_hp`, `id_role`) VALUES
(12345678, 'admin', '12345678', '', '', '', 1),
(196001011985031000, 'Prof. Dr. Surya Afnarius, Ph.D', '196001011985031000', '', 'Laki-laki', '081210232425', 3),
(196409141995121001, 'Ir. Darwison, MT', '196409141995121001', '', 'Laki-laki', '081363334871', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_undangan_rapat`
--
ALTER TABLE `detail_undangan_rapat`
  ADD PRIMARY KEY (`id_undangan_rapat`),
  ADD KEY `id_undangan_rapat` (`id_undangan_rapat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_date`);

--
-- Indexes for table `event_detail`
--
ALTER TABLE `event_detail`
  ADD PRIMARY KEY (`idevent`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `event_rapat`
--
ALTER TABLE `event_rapat`
  ADD PRIMARY KEY (`id_event_rapat`);

--
-- Indexes for table `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id_rapat`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `undangan_rapat`
--
ALTER TABLE `undangan_rapat`
  ADD PRIMARY KEY (`id_undangan_rapat`),
  ADD KEY `id_rapat` (`id_event_rapat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_detail`
--
ALTER TABLE `event_detail`
  MODIFY `idevent` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `event_rapat`
--
ALTER TABLE `event_rapat`
  MODIFY `id_event_rapat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id_rapat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `undangan_rapat`
--
ALTER TABLE `undangan_rapat`
  MODIFY `id_undangan_rapat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
