-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2022 pada 05.34
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
  `bobot` float NOT NULL,
  `p01` int(5) NOT NULL,
  `p02` int(5) NOT NULL,
  `p03` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `bobot`, `p01`, `p02`, `p03`) VALUES
('G001', 'Otot-otot lemah', 0.65, 1, 1, 1),
('G002', 'Mata Sipit', 0.78, 1, 1, 1),
('G003', 'Sendi Hyperflexible (Sangat Lentur)', 0.6, 1, 1, 1),
('G004', 'Tangan Pendek', 0.38, 1, 1, 1),
('G005', 'Telapak Kaki Besar Dengan Jempol Pendek', 0.21, 1, 1, 1),
('G006', 'Bentuk Hidung Agak Lebar, Pesek.', 0.75, 1, 1, 1),
('G007', 'Rongga Mulut Sempit', 0.36, 1, 1, 1),
('G008', 'Kecendrungan Memiliki Penyakit Bawaan', 0.54, 1, 0, 0),
('G009', 'Kepala Bagian Belakang Agak Datar', 0.49, 1, 0, 0),
('G010', 'Dikandung saat ibu berumur diatas 30 tahun ', 0.56, 1, 0, 0),
('G011', 'Berat Badan Saat Lahir Rendah', 0.29, 1, 1, 0),
('G012', 'Lidah Pecah-Pecah', 0.05, 0, 0, 1),
('G013', 'Telapak Tangan Lenar dan Hanya Terdapat Satu Garis Tangan', 0.44, 1, 0, 1),
('G014', 'Leher Pendek', 0.65, 0, 0, 1),
('G015', 'Ukuran Kepala Lebih Besar', 0.06, 1, 0, 0),
('G016', 'Rambut Bertekstur Lemas Dan Lurus', 0.69, 1, 1, 1),
('G017', 'Tungkai Tangan/Kaki Kecil Dengan Jari-Jari Pendek', 0.43, 0, 1, 0);

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
  `umur` text DEFAULT NULL,
  `hasil_konsultasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `kode_penyakit` varchar(250) NOT NULL,
  `nama_penyakit` varchar(250) NOT NULL,
  `deskripsi_penyakit` text NOT NULL,
  `solusi_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengetahuan`
--

INSERT INTO `pengetahuan` (`kode_penyakit`, `nama_penyakit`, `deskripsi_penyakit`, `solusi_penyakit`) VALUES
('P01', 'Trisomi 21', 'Sindrom Down juga disebut sebagai Trisomi 21. Salinan ekstra ini mengubah cara tubuh dan otak bayi berkembang, yang dapat menyebabkan tantangan mental dan fisik bagi bayi.', 'Dengan melakukan Fisioterapi. Dengan begitu, penderita Down Syndrome dapat melatih tubuhnya agar dapat melakukan aktivitas secara normal.'),
('P02', 'Translokasi', 'Sindrom tipe translokasi menyumbang sekitar 3 persen hingga 4 persen anak-anak dengan down syndrome. Menurut National Down Syndrome Society pada tipe translokasi, ada bagian dari kromosom 21 yang melekat ke kromosom lain, biasanya kromosom 14.', 'Pengobatan Down syndrome bertujuan untuk mengatasi kondisi yang menyertainya dan membantu penderita dalam beraktivitas. Metode pengobatannya dapat berupa terapi atau pemberian obat-obatan.\r\n\r\nSindrom Down tidak dapat dicegah. Namun, konseling genetik dapat memberitahu Anda seberapa besar kemungkinan memiliki anak dengan kondisi ini.\r\n\r\nPemeriksaan genetik disarankan bagi orang yang memiliki keluarga dengan Down syndrome atau merencanakan kehamilan berikutnya setelah sebelumnya memiliki anak yang menderita kelainan ini.'),
('P03', 'Mosaik', 'Pada down syndrome mosaik, beberapa sel memiliki tiga salinan kromosom 21, tetapi yang lain tetap berpasangan biasa.  Diketahui, down syndrome mosaic ini merupakan tipe yang paling langka dan menyumbang 1 sampai 2 persen kasus.', 'Pengobatan Down syndrome bertujuan untuk mengatasi kondisi yang menyertainya dan membantu penderita dalam beraktivitas. Metode pengobatannya dapat berupa terapi atau pemberian obat-obatan.\r\n\r\nSindrom Down tidak dapat dicegah. Namun, konseling genetik dapat memberitahu Anda seberapa besar kemungkinan memiliki anak dengan kondisi ini.\r\n\r\nPemeriksaan genetik disarankan bagi orang yang memiliki keluarga dengan Down syndrome atau merencanakan kehamilan berikutnya setelah sebelumnya memiliki anak yang menderita kelainan ini.'),
('P01P02P03', 'Trisomi 21, Translokasi, Mosaik', 'Sindrom Down juga disebut sebagai Trisomi 21. Salinan ekstra ini mengubah cara tubuh dan otak bayi berkembang, yang dapat menyebabkan tantangan mental dan fisik bagi bayi.\r\n<br><br>\r\n\r\nSindrom tipe translokasi menyumbang sekitar 3 persen hingga 4 persen anak-anak dengan down syndrome. Menurut National Down Syndrome Society pada tipe translokasi, ada bagian dari kromosom 21 yang melekat ke kromosom lain, biasanya kromosom 14.\r\n<br><br>\r\n\r\nPada down syndrome mosaik, beberapa sel memiliki tiga salinan kromosom 21, tetapi yang lain tetap berpasangan biasa.  Diketahui, down syndrome mosaic ini merupakan tipe yang paling langka dan menyumbang 1 sampai 2 persen kasus.', 'Pengobatan Down syndrome bertujuan untuk mengatasi kondisi yang menyertainya dan membantu penderita dalam beraktivitas. Metode pengobatannya dapat berupa terapi atau pemberian obat-obatan.\r\n\r\nSindrom Down tidak dapat dicegah. Namun, konseling genetik dapat memberitahu Anda seberapa besar kemungkinan memiliki anak dengan kondisi ini.\r\n\r\nPemeriksaan genetik disarankan bagi orang yang memiliki keluarga dengan Down syndrome atau merencanakan kehamilan berikutnya setelah sebelumnya memiliki anak yang menderita kelainan ini.'),
('000', 'Kemungkinan semua penyakit', 'makan teratur, jaga kesehatan, dan sering berolahraga', 'makan teratur, jaga kesehatan, dan sering berolahraga'),
('P1P2', 'Trisomi 21, Translokasi', 'Trisomi 21 merupakan jenis Down syndrome yang paling sering terjadi. Pada jenis ini, setiap sel tubuh memiliki salinan ekstra kromosom 21.', 'Pengobatan Down syndrome bertujuan untuk mengatasi kondisi yang menyertainya dan membantu penderita dalam beraktivitas. Metode pengobatannya dapat berupa terapi atau pemberian obat-obatan. Adapun terapi yang bisa dilakukan adalah : terapi fisik, terapi bicara, terapi kerja, dan terapu okupasi'),
('P1P3', 'Trisomi 21, Mosaik', 'Pada jenis ini, salinan ekstra dari kromosom 21 hanya menempel di beberapa sel sehingga ciri-ciri Down syndrome pada penderita jenis mosaik tidak terlalu terlihat jelas seperti pada trisomi 21.', 'Pengobatan Down syndrome bertujuan untuk mengatasi kondisi yang menyertainya dan membantu penderita dalam beraktivitas. Metode pengobatannya dapat berupa terapi atau pemberian obat-obatan. Adapun terapi yang bisa dilakukan adalah : terapi fisik, terapi bicara, terapi kerja, dan terapu okupasi'),
('P2P3', 'Translokasi, Mosaik', 'Pada jenis ini, salinan ekstra dari kromosom 21 menempel di kromosom lain. sindrom Down jenis translokasi dapat diturunkan dari orang tua ke anak', 'Pengobatan Down syndrome bertujuan untuk mengatasi kondisi yang menyertainya dan membantu penderita dalam beraktivitas. Metode pengobatannya dapat berupa terapi atau pemberian obat-obatan. Adapun terapi yang bisa dilakukan adalah : terapi fisik, terapi bicara, terapi kerja, dan terapu okupasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` varchar(50) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `nilai` float NOT NULL,
  `deskripsi_penyakit` text NOT NULL,
  `solusi_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `nilai`, `deskripsi_penyakit`, `solusi_penyakit`) VALUES
('P01', 'Trisomi 21', 0, 'Sindrom Down juga disebut sebagai Trisomi 21. Salinan ekstra ini mengubah cara tubuh dan otak bayi berkembang, yang dapat menyebabkan tantangan mental dan fisik bagi bayi.', 'Dengan melakukan Fisioterapi. Dengan begitu, penderita Down Syndrome dapat melatih tubuhnya agar dapat melakukan aktivitas secara normal.'),
('P02', 'Translokasi', 0, 'Sindrom tipe translokasi menyumbang sekitar 3 persen hingga 4 persen anak-anak dengan down syndrome. Menurut National Down Syndrome Society pada tipe translokasi, ada bagian dari kromosom 21 yang melekat ke kromosom lain, biasanya kromosom 14.', 'Pengobatan Down syndrome bertujuan untuk mengatasi kondisi yang menyertainya dan membantu penderita dalam beraktivitas. Metode pengobatannya dapat berupa terapi atau pemberian obat-obatan.\r\n\r\nSindrom Down tidak dapat dicegah. Namun, konseling genetik dapat memberitahu Anda seberapa besar kemungkinan memiliki anak dengan kondisi ini.\r\n\r\nPemeriksaan genetik disarankan bagi orang yang memiliki keluarga dengan Down syndrome atau merencanakan kehamilan berikutnya setelah sebelumnya memiliki anak yang menderita kelainan ini.'),
('P03', 'Mosaik', 0, 'Pada down syndrome mosaik, beberapa sel memiliki tiga salinan kromosom 21, tetapi yang lain tetap berpasangan biasa.  Diketahui, down syndrome mosaic ini merupakan tipe yang paling langka dan menyumbang 1 sampai 2 persen kasus.', 'Pengobatan Down syndrome bertujuan untuk mengatasi kondisi yang menyertainya dan membantu penderita dalam beraktivitas. Metode pengobatannya dapat berupa terapi atau pemberian obat-obatan.Sindrom Down tidak dapat dicegah. Namun, konseling genetik dapat memberitahu Anda seberapa besar kemungkinan memiliki anak dengan kondisi ini.Pemeriksaan genetik disarankan bagi orang yang memiliki keluarga dengan Down syndrome atau merencanakan kehamilan berikutnya setelah sebelumnya memiliki anak yang menderita kelainan ini.');

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
(1, 'admin@potads.com', 'admin', 1, 'admin', 'none.jpg'),
(18, 'admin@mabar.com', 'admin', 1, 'team', 'none.jpg');

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
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
