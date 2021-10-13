-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2021 pada 15.39
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id_rs`, `nama_rs`, `alamat`, `kecamatan`, `latitude`, `longitude`, `keterangan`) VALUES
(1, 'RS Mitra Bangsa', 'Jl. Kolonel Sugiyono No.75, Ngagul, Winong, Kec. Pati, Kabupaten Pati, Jawa Tengah 59113', 'pati', '-6.7504232', '111.0326249', '+62295382555'),
(2, 'Klinik Pratama Mega Sehat', 'Jl. Kol. Sunandar No.3, Puri, Winong, Kec. Pati, Kabupaten Pati, Jawa Tengah 59113', 'pati', '-6.7550259', '111.0261447', '+62295381558'),
(3, 'RS Keluarga Sehat', 'Sawah, Dadirejo, Kec. Margorejo, Kabupaten Pati, Jawa Tengah 59163', 'pati', '-6.7550259', '111.0178749', '-'),
(4, 'RSU Fastabiq Sehat PKU Muhammadiyah', 'Jl. Raya Pati - Tayu No.Km 3, Runting, Tambaharjo, Kec. Pati, Kabupaten Pati, Jawa Tengah 59119', 'tayu', '-6.7290407', '111.0493747', '-'),
(5, 'Rumah Sakit Khusus (RSK) THT Bina Waluya', 'JL. Dr. Susanto, No. 113, Pati, Kaborongan, Pati Lor, Kec. Pati, Kabupaten Pati, Jawa Tengah 50119', 'pati', '-6.7384169', '111.0396758', '-'),
(6, 'Rumah Sakit Marga Husada', 'Jl. Panglima Sudirman No.77 A, Ngarus, Kec. Pati, Kabupaten Pati, Jawa Tengah 59112', 'pati', '-6.7547022', '111.0263222', '+62295383261'),
(7, 'Klinik Pratama Mega Sehat', 'Jl. Kol. Sunandar No.3, Puri, Winong, Kec. Pati, Kabupaten Pati, Jawa Tengah 59113', 'pati', '-6.7513354', '111.0273093', '+62295381558');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500'),
(2, 'dina', 'dina', 'dina@gmailcom', 'f0158fd971a3fc0f3280102408897337');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
