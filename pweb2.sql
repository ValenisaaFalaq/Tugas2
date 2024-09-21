-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2024 at 12:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `nim`, `nama`, `alamat`, `email`, `no_telp`) VALUES
(1, '230302094', 'Valenisaa Falaq Hendratmoko', 'Jl. Mt Haryono no 86', 'valenisaaf@gmail.com', '081326654551'),
(2, '230302095', 'Vigo Dewandra Hendratmoko', 'Jl. Semangka no.90', 'vigo@gmail.com', '0897192837'),
(3, '230203096', 'Laksmi Dewanti', 'Jl. Cendrawasih 1', 'LaksmiD@gmail.com', '080808080808');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_perbaikan`
--

CREATE TABLE `nilai_perbaikan` (
  `perbaikan_id` int NOT NULL,
  `tgl_perbaikan` date NOT NULL,
  `keteragan` varchar(255) NOT NULL,
  `mahasiswa_id` int NOT NULL,
  `matkul_id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `semester_id` int NOT NULL,
  `nilai_id` int NOT NULL,
  `dosen_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nilai_perbaikan`
--

INSERT INTO `nilai_perbaikan` (`perbaikan_id`, `tgl_perbaikan`, `keteragan`, `mahasiswa_id`, `matkul_id`, `semester_id`, `nilai_id`, `dosen_id`) VALUES
(2, '2024-09-01', 'Nilai UTS remidi', 1, 'MK001', 2, 50, 1),
(3, '2024-09-02', 'Nilai UAS remidi', 1, 'MK002', 2, 34, 2),
(4, '2024-09-03', 'Nilai Matematika Remidi', 3, 'MK001', 2, 23, 1),
(5, '2024-09-05', 'Remidi Matdis', 3, 'MK003', 3, 33, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `nilai_perbaikan`
--
ALTER TABLE `nilai_perbaikan`
  ADD PRIMARY KEY (`perbaikan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mahasiswa_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai_perbaikan`
--
ALTER TABLE `nilai_perbaikan`
  MODIFY `perbaikan_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
