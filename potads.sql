-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2022 pada 15.54
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `potads`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` varchar(50) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `bobot`) VALUES
('G001', 'Otot-otot lemah', 0),
('G002', 'Mata Sipit', 0),
('G003', 'Sendi Hyperflexible (Sangat Lentur)', 0),
('G004', 'Tangan Pendek', 0),
('G005', 'Telapak Kaki Besar Dengan Jempol Pendek', 0),
('G006', 'Bentuk Hidung Agak Lebar, Pesek.', 0),
('G007', 'Rongga Mulut Sempit', 0),
('G008', 'Kecendrungan Memiliki Penyakit Bawaan', 0),
('G009', 'Kepala Bagian Belakang Agak Datar', 0),
('G010', 'Dikandung saat ibu berumur diatas 30 tahun ', 0),
('G011', 'Berat Badan Saat Lahir Rendah', 0),
('G012', 'Lidah Pecah-Pecah', 0),
('G013', 'Telapak Tangan Lenar dan Hanya Terdapat Satu Garis Tangan', 0),
('G015', 'Leher Pendek', 0),
('G016', 'Ukuran Kepala Lebih Besar', 0),
('G017', 'Rambut Bertekstur Lemas Dan Lurus', 0),
('G018', 'Tungkai Tangan/Kaki Kecil Dengan Jari-Jari Pendek', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_ayah` text DEFAULT NULL,
  `nama_ibu` text DEFAULT NULL,
  `nomor_hp` text DEFAULT NULL,
  `jenis_kelamin` text DEFAULT NULL,
  `kota_domisili` text DEFAULT NULL,
  `nama_pasien` text DEFAULT NULL,
  `tanggal_lahir` text DEFAULT NULL,
  `umur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_ayah`, `nama_ibu`, `nomor_hp`, `jenis_kelamin`, `kota_domisili`, `nama_pasien`, `tanggal_lahir`, `umur`) VALUES
(2, 'Thomas Shelby', 'Nunung', '0888', 'Laki-Laki', 'Roma', 'Andi', '2022-10-14', '7'),
(3, 'zz', 'zz', 'zz', 'Laki-Laki', 'zz', 'zz', '2022-10-31', 'zz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(50) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `nilai`) VALUES
('P001', 'Trisomi 21', 0),
('P002', 'Translokasi', 0),
('P003', 'Mosaik', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tipe` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `tipe`, `nama`, `foto_profil`) VALUES
(1, 'admin@potads.com', 'admin', 1, 'admin', 'none.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
