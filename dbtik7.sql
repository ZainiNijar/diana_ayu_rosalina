-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 17 Nov 2022 pada 09.40
-- Versi server: 5.7.34
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtik7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `kd_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_icdx`
--

CREATE TABLE `tb_icdx` (
  `kd_icdx` int(11) NOT NULL,
  `nama_icdx` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `nomor_rm` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`nomor_rm`, `nama_pasien`, `alamat`, `kelamin`, `pekerjaan`, `umur`) VALUES
(232, 'test', 'test alamat', 'L', ' PNS', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periksa`
--

CREATE TABLE `tb_periksa` (
  `ID` int(11) NOT NULL,
  `nomor_rm` int(11) NOT NULL,
  `kd_dokter` int(11) NOT NULL,
  `kd_icdx` int(11) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `jenis_rawat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indeks untuk tabel `tb_icdx`
--
ALTER TABLE `tb_icdx`
  ADD PRIMARY KEY (`kd_icdx`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`nomor_rm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `kd_dokter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_icdx`
--
ALTER TABLE `tb_icdx`
  MODIFY `kd_icdx` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `nomor_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
