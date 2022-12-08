-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2022 pada 01.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otogarage_2209`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tahun` date NOT NULL,
  `no_plat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `merk`, `tipe`, `tahun`, `no_plat`) VALUES
(12, 'Daihatsu', 'Daihatsu 3', '2022-12-16', ' KB6680EM'),
(14, 'Toyota', 'DFSK', '2022-12-10', 'AV43225');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE `motor` (
  `id_motor` int(11) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tahun` date NOT NULL,
  `no_plat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`id_motor`, `merk`, `tipe`, `tahun`, `no_plat`) VALUES
(83, 'Isuzu', 'BMW1', '2022-12-24', 'AV43225'),
(84, 'Honda', 'BMW1', '2022-12-15', 'AB5293UJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_nohp` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user_nama`, `user_email`, `user_nohp`, `user_password`) VALUES
(1, '', 'admin@gmail.com', '083874723607', 'admin'),
(12, 'ozi', 'ozi@gmail.com', '082320093601', 'Haurgelis123'),
(13, 'dinda', 'dinda@gmail.com', '08228982897', 'komeng'),
(14, 'admin', 'admin@gmail.com', '083874723607', 'admin'),
(15, 'faiz', 'faiz@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
