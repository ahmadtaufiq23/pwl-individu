-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2019 pada 12.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(13, '161240000494', 'AHMAD TAUFIQ', 'LAKI-LAKI', 'SINANGGUL', '0895603059560'),
(14, '161240000495', 'MUHAMMAD ABDUL AZIZ', 'LAKI-LAKI', 'SINANGGUL', '089669498082'),
(15, '161240000492', 'IRVANDI', 'LAKI-LAKI', 'SINANGGUL', '081390225162'),
(16, '161240000566', 'SYAHRUL AMY', 'LAKI-LAKI', 'SINANGGUL', '082225020222'),
(17, '161240000502', 'EDY SAPUTRA', 'LAKI-LAKI', 'KARANGANYAR', '085641813333'),
(18, '161240000510', 'NUR SYAHLAN ASROWI', 'LAKI-LAKI', 'DEMAK', '081293554882'),
(19, '161240000485', 'MUHAMMAD KHOIRUL FAQIH', 'LAKI-LAKI', 'SEMAT', '0813456272528'),
(20, '161240000484', 'MUSTOFA KAMAL FASHA', 'LAKI-LAKI', 'BATEALIT', '0895522337373'),
(21, '161240000490', 'RIZKI EFENDI', 'LAKI-LAKI', 'NGELING', '085225117742'),
(22, '161240000477', 'DIMAS CORNELLYA AGATTA', 'LAKI-LAKI', 'KEPUK', '081225436278'),
(23, '161240000499', 'MUH CAHYO SAPUTRA', 'LAKI-LAKI', 'BULUNGAN', '081345628252');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
