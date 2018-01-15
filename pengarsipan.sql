-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jan 2018 pada 05.56
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengarsipan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `nomer_agenda` int(11) NOT NULL,
  `nomer_arsip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `desposisi`
--

CREATE TABLE `desposisi` (
  `tgl_surat` int(11) NOT NULL,
  `asal_surat` varchar(200) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `diterima_tgl` date NOT NULL,
  `kode_agenda` int(200) NOT NULL,
  `pemberi_desposisi` varchar(200) NOT NULL,
  `terusan` varchar(200) NOT NULL,
  `untuk` varchar(200) NOT NULL,
  `isi_desposisi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_agenda`
--

CREATE TABLE `kode_agenda` (
  `no_agenda` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_wilayah`
--

CREATE TABLE `kode_wilayah` (
  `kode` int(11) NOT NULL,
  `wilayah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_urut` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kode_agenda` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `kepada` varchar(200) NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `pengelola` varchar(200) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `no_urut` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kode_agenda` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `dari` varchar(200) NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `pengelola` varchar(200) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('superadmin','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`nomer_agenda`);

--
-- Indexes for table `desposisi`
--
ALTER TABLE `desposisi`
  ADD PRIMARY KEY (`kode_agenda`);

--
-- Indexes for table `kode_agenda`
--
ALTER TABLE `kode_agenda`
  ADD PRIMARY KEY (`no_agenda`);

--
-- Indexes for table `kode_wilayah`
--
ALTER TABLE `kode_wilayah`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `nomer_agenda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `desposisi`
--
ALTER TABLE `desposisi`
  MODIFY `kode_agenda` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kode_agenda`
--
ALTER TABLE `kode_agenda`
  MODIFY `no_agenda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kode_wilayah`
--
ALTER TABLE `kode_wilayah`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
