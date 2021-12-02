-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 06:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwebmutiara`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran_siswa`
--

CREATE TABLE `pelanggaran_siswa` (
  `id_pelanggaran` int(11) NOT NULL,
  `NIS` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jenis_pelanggaran` text NOT NULL,
  `poin` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggaran_siswa`
--

INSERT INTO `pelanggaran_siswa` (`id_pelanggaran`, `NIS`, `nama_siswa`, `jenis_pelanggaran`, `poin`, `keterangan`, `tanggal`) VALUES
(1, 891738, 'Bariq', 'terlambat', 5, 'ksalj fklasjfkl', '2021-11-30'),
(2, 1910, 'Almira Van Fadhilla', 'terlambat', 10, 'sa fsa asf ', '2021-12-16'),
(3, 891738, 'Bariq', 'terlambat', 19, 'sa asfasfas', '2021-12-15'),
(4, 891738, 'Bariq', 'terlambat', 100, 'saf', '2021-12-14'),
(5, 891738, 'Bariq', 'terlambat', 100, ' sa fa fasf ', '2021-12-08');

--
-- Triggers `pelanggaran_siswa`
--
DELIMITER $$
CREATE TRIGGER `delete_pelanggaran` AFTER DELETE ON `pelanggaran_siswa` FOR EACH ROW BEGIN
UPDATE siswa
SET total_poin = total_poin - OLD.poin
WHERE
siswa.NIS = OLD.NIS;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_pelanggaran` AFTER INSERT ON `pelanggaran_siswa` FOR EACH ROW BEGIN
UPDATE siswa
SET total_poin = total_poin + NEW.poin
WHERE
siswa.NIS = NEW.NIS;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_poin` AFTER UPDATE ON `pelanggaran_siswa` FOR EACH ROW BEGIN
UPDATE siswa
SET total_poin = total_poin - OLD.poin + NEW.poin
WHERE
siswa.NIS = NEW.NIS;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
