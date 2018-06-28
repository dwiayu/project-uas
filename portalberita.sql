-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jun 2018 pada 23.38
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalberita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkatan`
--

CREATE TABLE `angkatan` (
  `idAngkatan` int(11) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `tahunJabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `angkatan`
--

INSERT INTO `angkatan` (`idAngkatan`, `angkatan`, `tahunJabatan`) VALUES
(1, 'Angkatan 1', '2011'),
(2, 'Angkatan 2', '2012'),
(5, 'Angkatan 3', '2013'),
(6, 'Angkatan 8', '2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `idBerita` int(11) NOT NULL,
  `judulBerita` varchar(255) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idBerita`, `judulBerita`, `isi`) VALUES
(1, 'Pendaftaran Anggota Baru Komunitas EEPROM', 'Syarat : Mahasiswa aktif POLINEMA, Jurusan Teknik Elektro dan Teknologi Informasi, Bersedia Mengikuti Ujian Akademik dan Non-Akademik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataangkatan`
--

CREATE TABLE `dataangkatan` (
  `idDataAngkatan` int(11) NOT NULL,
  `idAngkatan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `idDivisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataangkatan`
--

INSERT INTO `dataangkatan` (`idDataAngkatan`, `idAngkatan`, `nama`, `idDivisi`) VALUES
(2, 1, 'Agustinus', 1),
(3, 6, 'Dwi Ayu Ning Kinanti', 4),
(5, 1, 'Anan', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `idDivisi` int(11) NOT NULL,
  `namaDivisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`idDivisi`, `namaDivisi`) VALUES
(1, 'Elektrik'),
(2, 'Software'),
(3, 'Mekanik'),
(4, 'Humas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `idKomentar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `universitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`, `jurusan`, `universitas`) VALUES
(3, 'eepromadmin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'informatika', 'polinema'),
(4, 'Dwi ayu', 'dwi', '7aa2602c588c05a93baf10128861aeb9', '', 'informatika', 'polinema'),
(5, 'Dwi ayu', 'dua', 'a319360336c8cac32102f4dffbee4260', '', 'informatika', 'Polinema'),
(6, 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', '', 'a', 'a'),
(8, 'indri', 'indri', '71f7be7b8496f7ece8454b1bcdcd2162', 'user', 'mesin', 'brawijaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idPendaftaran` int(11) NOT NULL,
  `divisi` enum('Software','Mekanik','Elektrik') NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `idLogin` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `idPrestasi` int(11) NOT NULL,
  `idDataAngkatan` int(11) NOT NULL,
  `juara` varchar(5) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tempat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`idAngkatan`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indexes for table `dataangkatan`
--
ALTER TABLE `dataangkatan`
  ADD PRIMARY KEY (`idDataAngkatan`),
  ADD KEY `idAngkatan` (`idAngkatan`),
  ADD KEY `idDivisi` (`idDivisi`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`idDivisi`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idKomentar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idPendaftaran`),
  ADD KEY `idLogin` (`idLogin`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`idPrestasi`),
  ADD KEY `idAngkatan` (`idDataAngkatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `idAngkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dataangkatan`
--
ALTER TABLE `dataangkatan`
  MODIFY `idDataAngkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `idDivisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idKomentar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `idPendaftaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `idPrestasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dataangkatan`
--
ALTER TABLE `dataangkatan`
  ADD CONSTRAINT `dataangkatan_ibfk_1` FOREIGN KEY (`idAngkatan`) REFERENCES `angkatan` (`idAngkatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dataangkatan_ibfk_2` FOREIGN KEY (`idDivisi`) REFERENCES `divisi` (`idDivisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`idLogin`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`idDataAngkatan`) REFERENCES `dataangkatan` (`idDataAngkatan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
