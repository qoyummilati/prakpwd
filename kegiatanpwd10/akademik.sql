-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2021 pada 11.00
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `khs`
--

CREATE TABLE `khs` (
  `NIM` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kodeMK` varchar(5) NOT NULL,
  `nama_mk` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `khs`
--

INSERT INTO `khs` (`NIM`, `nama`, `kodeMK`, `nama_mk`, `nilai`) VALUES
('MHS01', 'Siti Aminah', 'A001', 'Pemrograman Web Dinamis', '90'),
('MHS02', 'Rita', 'A002', 'Pemrograman Mobile', '95'),
('MHS03', 'Amirudin', 'A003', 'Keamanan Komputer', '92'),
('MHS04', 'Siti Maryam', 'A004', 'Forensik Digital', '91'),
('MHS05', 'Andika', 'A005', 'Sistem Pendukung Keputusan', '89'),
('MHS06', 'Risa', 'A006', 'Teori Bahasa Otomata', '96'),
('MHS07', 'Riko', 'A007', 'Interaksi Manusia dan Komputer', '90'),
('MHS08', 'Adisa', 'A008', 'Pemrograman Web Dinamis', '90'),
('MHS09', 'Putra', 'A009', 'Pemrograman Mobile', '80'),
('MHS10', 'Gita', 'A010', 'Keamanan Komputer', '92'),
('MHS11', 'Veby', 'A011', 'Forensik Digital', '91'),
('MHS12', 'Ivan', 'A012', 'Sistem Pendukung Keputusan', '89'),
('MHS13', 'Sadam', 'A013', 'Teori Bahasa Otomata', '81'),
('MHS14', 'Zaky', 'A014', 'Interaksi Manusia dan Komputer', '88'),
('MHS15', 'Olivia', 'A015', 'Pemrograman Web Dinamis', '90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jkel` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgllhr` date DEFAULT NULL,
  `universitas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jkel`, `alamat`, `tgllhr`, `universitas`) VALUES
('MHS01', 'Siti Aminah', 'P', 'SOLO', '1995-10-01', 'UAD'),
('MHS02', 'Rita', 'P', 'SOLO', '1999-01-01', 'UGM'),
('MHS03', 'Amirudin', 'L', 'SEMARANG', '1998-08-11', 'UAD'),
('MHS04', 'Siti Maryam', 'P', 'JAKARTA', '1995-04-15', 'UMY'),
('MHS05', 'Andika', 'L', 'KALTIM', '2000-11-12', 'UII'),
('MHS06', 'Risa', 'L', 'KALTIM', '2001-12-12', 'UNY'),
('MHS07', 'Riko', 'L', 'JOGJA', '2002-02-13', 'UNY'),
('MHS08', 'Adisa', 'L', 'LAMPUNG', '1999-11-14', 'UAD'),
('MHS09', 'Putra', 'L', 'BALI', '2000-08-12', 'UGM'),
('MHS10', 'Gita', 'P', 'JABAR', '2001-12-01', 'UAD'),
('MHS11', 'Veby', 'P', 'RIAU', '0000-00-00', 'UAD'),
('MHS12', 'Ivan', 'L', 'JATIM', '2001-01-01', 'UII'),
('MHS13', 'Sadam', 'L', 'JAMBI', '1999-03-03', 'UMY'),
('MHS14', 'Zaky', 'L', 'MALUKU', '2002-06-03', 'UNY'),
('MHS15', 'Olivia', 'P', 'PAPUA', '2003-07-09', 'UGM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode`, `nama`, `sks`, `sem`) VALUES
('A001', 'Rita', 24, 5),
('A002', 'Andika', 20, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `level` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `password`, `nama_lengkap`, `email`, `level`) VALUES
('qoyum', '12345', 'qoyum milati tri rejeki', 'qoyyummilqti17.22@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `kodeMK` (`kodeMK`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
