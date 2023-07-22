-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2023 pada 04.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spms_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `add_vehicle`
--

CREATE TABLE `add_vehicle` (
  `id` int(11) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `parking_area_no` varchar(200) NOT NULL,
  `vehicle_type` varchar(200) NOT NULL,
  `parking_charge` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `arrival_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `add_vehicle`
--

INSERT INTO `add_vehicle` (`id`, `vehicle_no`, `parking_area_no`, `vehicle_type`, `parking_charge`, `status`, `arrival_time`) VALUES
(37, 'B 7478 HYM', '2', 'Car', '4', '0', '2023-06-30 09:08:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `parking_area_no` varchar(100) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `vehicle_limit` varchar(200) NOT NULL,
  `parking_charge` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `doc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`cat_id`, `parking_area_no`, `vehicle_type`, `vehicle_limit`, `parking_charge`, `status`, `doc`) VALUES
(1, '2', 'Car', '18', '4', '1', '2020-04-19 19:33:44'),
(3, '6', 'Motorcycle', '26', '2', '1', '2021-05-15 19:04:41'),
(4, '2', 'Mini Van', '8', '5', '1', '2021-05-15 20:10:39'),
(5, '7', 'Pickup Van', '11', '5', '1', '2021-05-15 22:21:51'),
(6, '9', 'Minibus', '6', '6', '1', '2021-05-15 22:22:53'),
(7, '1', 'Car Type 101', '5', '7', '1', '2022-07-04 08:46:51'),
(8, '12', 'car', '20', '400', '0', '2023-06-30 09:07:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `add_vehicle`
--
ALTER TABLE `add_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `add_vehicle`
--
ALTER TABLE `add_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
