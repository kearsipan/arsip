-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Feb 2018 pada 02.38
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_agenda`
--

CREATE TABLE `kode_agenda` (
  `id` int(11) NOT NULL,
  `no_agenda` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kode_agenda`
--

INSERT INTO `kode_agenda` (`id`, `no_agenda`, `keterangan`) VALUES
(1, '001', 'kepolisian'),
(2, '002', 'pendidikan'),
(3, '003', 'sekolah'),
(4, '004', 'sekolah kejuruan'),
(5, '005', 'kegiatan SEK / PT'),
(6, '006', 'KEPEGAWAIAN'),
(7, '007', 'KEUANGAN'),
(8, '008', 'PENUNJUKAN'),
(9, '009', 'TIM / PENGADAAN'),
(10, '010', 'SPK / KONTRAK'),
(11, '011', 'KEARSIPAN'),
(12, '012', 'SURAT PENGANTAR'),
(13, '013', 'SPT ( SPPD )'),
(14, '014', 'PEMBERHENTIAN'),
(15, '015', 'BANTUAN DANA'),
(16, '016', 'PELELANGAN'),
(17, '017', 'UJIAN / IJAZAH');

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
(2, '2018-01-03', '0987', '876/456', 'abi', 'surat', 'nadia'),
(3, '2018-02-15', '003', '123.098.99', 'SMA 1 Lumajang', 'Rapat', 'Hilmi');

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
  `pengelola` varchar(200) NOT NULL,
  `tgl_terima` date NOT NULL,
  `isi_desposisi` varchar(200) NOT NULL,
  `di_teruskan` varchar(200) NOT NULL,
  `untuk` varchar(200) NOT NULL,
  `arsip` varchar(200) NOT NULL,
  `disposisi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_masuk`, `tgl_surat`, `kode_agenda`, `no_surat`, `dari`, `perihal`, `pengelola`, `tgl_terima`, `isi_desposisi`, `di_teruskan`, `untuk`, `arsip`, `disposisi`) VALUES
(1, '2018-02-05', '001', '933/STIE/XI', 'Widya Gama', 'Ucapan terimakasih', 'nadiyatiq', '0000-00-00', '', '', '', '1', ''),
(2, '2018-02-10', '004', '098/XI/2018', 'Pertanian', 'pemberian dana', 'Helmi Ustadi', '0000-00-00', '', '', '', '1', ''),
(3, '2018-02-14', '002', '675/VII/201', 'SMKN 2 Lumajang', 'lomba antar sekolah', 'Bella', '0000-00-00', '', '', '', '1', ''),
(4, '2018-02-02', '003', '097/III/23/', 'PLN', 'pemadaman', 'Miskum', '0000-00-00', '', '', '', '1', ''),
(5, '2018-02-02', '002', '43/099/2016', 'kepolisian', 'pendaftaran akpol', 'Siti Syarofah Dinda Solehah', '0000-00-00', '', '', '', '1', ''),
(8, '2018-02-09', '007', '887/2/2019', 'perpajakan', 'selamat', 'iin', '0000-00-00', '', '', '', '1', ''),
(9, '2018-02-24', '005', '08/999/7003', 'saya', 'saya', 'saya', '0000-00-00', '', '', '', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_despos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kode_agenda`
--
ALTER TABLE `kode_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
