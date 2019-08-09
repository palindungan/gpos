-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2019 pada 21.32
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bentuk_perhiasan`
--

CREATE TABLE `bentuk_perhiasan` (
  `id_bentuk` char(3) NOT NULL,
  `id_user_b` char(4) NOT NULL,
  `nm_bentuk` varchar(20) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_emas`
--

CREATE TABLE `daftar_emas` (
  `id_emas` char(15) NOT NULL,
  `id_user` char(8) NOT NULL,
  `id_bentuk` char(3) NOT NULL,
  `barcode` varchar(15) NOT NULL,
  `kadar` int(2) NOT NULL,
  `berat` float NOT NULL,
  `hrg_emas` int(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalur_pembayaran`
--

CREATE TABLE `jalur_pembayaran` (
  `id_jalur` char(3) NOT NULL,
  `nm_jalur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jalur_pembayaran`
--

INSERT INTO `jalur_pembayaran` (`id_jalur`, `nm_jalur`) VALUES
('J01', 'uh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE `level_user` (
  `id_level` char(3) NOT NULL,
  `nm_level` varchar(20) NOT NULL,
  `jml_max` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_license`
--

CREATE TABLE `paket_license` (
  `id_paket` char(3) NOT NULL,
  `nm_paket` varchar(50) NOT NULL,
  `hrg_paket` int(10) NOT NULL,
  `jml_hari_license` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko_emas`
--

CREATE TABLE `toko_emas` (
  `id_toko` char(4) NOT NULL,
  `nm_toko` varchar(50) NOT NULL,
  `almt_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` char(8) NOT NULL,
  `id_toko` char(4) NOT NULL,
  `id_level` char(3) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `jenkel` enum('pria','wanita') NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `tgl_regist` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_last_log_in` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_backend`
--

CREATE TABLE `user_backend` (
  `id_user_b` char(4) NOT NULL,
  `nm_user_b` varchar(50) NOT NULL,
  `jenkel` enum('pria','wanita') NOT NULL,
  `almt_user_b` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email_user_b` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `tgl_regist` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_last_log_in` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_backend`
--

INSERT INTO `user_backend` (`id_user_b`, `nm_user_b`, `jenkel`, `almt_user_b`, `no_hp`, `email_user_b`, `username`, `password`, `tgl_regist`, `tgl_last_log_in`) VALUES
('U-01', 'kika', 'pria', '123', '08816007580', '123@gmail.com', '123', '$2y$10$DnzQDBhE9yWS2SCj3jBVL.OD8NVZo6eARaEcRxlTQ1Z3RlTb1NgVa', '2019-08-08 19:32:38', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bentuk_perhiasan`
--
ALTER TABLE `bentuk_perhiasan`
  ADD PRIMARY KEY (`id_bentuk`);

--
-- Indeks untuk tabel `daftar_emas`
--
ALTER TABLE `daftar_emas`
  ADD PRIMARY KEY (`id_emas`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `id_user` (`id_user`,`id_bentuk`);

--
-- Indeks untuk tabel `jalur_pembayaran`
--
ALTER TABLE `jalur_pembayaran`
  ADD PRIMARY KEY (`id_jalur`);

--
-- Indeks untuk tabel `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `paket_license`
--
ALTER TABLE `paket_license`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `toko_emas`
--
ALTER TABLE `toko_emas`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_backend`
--
ALTER TABLE `user_backend`
  ADD PRIMARY KEY (`id_user_b`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
