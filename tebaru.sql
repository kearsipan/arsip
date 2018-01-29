-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2018 pada 03.04
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
  `id_despos` int(11) NOT NULL,
  `id_masuk` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `asal_surat` varchar(200) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `perihal` varchar(225) NOT NULL,
  `diterima_tgl` date NOT NULL,
  `kode_agenda` varchar(225) NOT NULL,
  `pemberi_despos` varchar(200) NOT NULL,
  `untuk` varchar(200) NOT NULL,
  `isi_desposisi` varchar(200) NOT NULL,
  `terusan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desposisi`
--

INSERT INTO `desposisi` (`id_despos`, `id_masuk`, `tgl_surat`, `asal_surat`, `no_surat`, `perihal`, `diterima_tgl`, `kode_agenda`, `pemberi_despos`, `untuk`, `isi_desposisi`, `terusan`) VALUES
(3, 0, '2018-01-06', 'jogoyudan', '445/00', 'surat cinta abiku <3', '2018-01-07', '6566.99', 'nadiyatiq', 'cintaku abiku', 'aku mencintaimu abihhhh', 'Lainnya'),
(4, 0, '2018-01-04', 'selokgondang', '443.00', 'penerimaan', '2018-01-02', '876/99', 'jojon', 'Dilaksanakan', 'arsipkan', 'WK2');

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
  `id_keluar` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kode_agenda` varchar(225) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `kepada` varchar(200) NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `pengelola` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_keluar`, `tgl_surat`, `kode_agenda`, `no_surat`, `kepada`, `perihal`, `pengelola`) VALUES
(2, '2018-01-03', '0987', '876/456', 'abi', 'surat', 'nadia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_masuk` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kode_agenda` varchar(11) NOT NULL,
  `no_surat` varchar(11) NOT NULL,
  `dari` varchar(200) NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `pengelola` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_masuk`, `tgl_surat`, `kode_agenda`, `no_surat`, `dari`, `perihal`, `pengelola`) VALUES
(4, '2018-01-17', '567', '123/099', 'bellaa', 'rapat', 'nadia'),
(5, '2018-01-12', '32/09', '99.09/99', 'nadiahhh', 'ijik', 'iki'),
(6, '2018-01-19', '123.000', '99/876', 'ninik', 'nunuk', 'mamahhh'),
(7, '2018-01-31', '765/88', '765.88', 'mumunn', 'mmimmin', 'kiki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('superadmin','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

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
  ADD PRIMARY KEY (`id_despos`);

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
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_masuk`);

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
  MODIFY `id_despos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
