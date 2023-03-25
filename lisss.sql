-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2021 pada 04.37
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listrik_0016_03`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kodetarif` int(11) NOT NULL,
  `nometer` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `username`, `password`, `alamat`, `kodetarif`, `nometer`) VALUES
(27, 'pou', '1111111', 'aaaa', 4, 1212),
(33, 'azzzz', '111', 'J;L. H. RAUSIN', 6, 11111111),
(34, 'azzhzzz', '111', 'J;L. H. RAUSIN', 5, 1222222),
(37, 'nissa', '', 'J;L. H. RAUSIN', 5, 222222),
(38, 'nissa', '', 'J;L. H. RAUSIN', 5, 222222),
(39, 'nissa and Thoriq', '111', 'J;L. H. RAUSIN', 6, 13),
(41, 'admin', '123', 'J;L. H. RAUSIN', 5, 131);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idbayar` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`idbayar`, `idpelanggan`, `tanggal`, `biaya`) VALUES
(18, 21, '2021-03-06', 42500),
(19, 21, '2021-03-27', 22500),
(20, 21, '2021-03-06', 2500),
(21, 21, '2021-03-06', 2500),
(22, 21, '2021-03-06', 22500),
(23, 21, '2021-03-13', 22500),
(24, 21, '2021-03-20', 2500),
(25, 21, '2021-03-14', 2500),
(26, 21, '0000-00-00', 22500),
(34, 22, '2021-03-08', 2500),
(35, 21, '0000-00-00', 2500),
(36, 21, '0000-00-00', 2500),
(37, 22, '2021-03-11', 2500),
(38, 21, '2021-03-18', 0),
(39, 21, '2021-03-18', 0),
(40, 21, '2021-03-18', 2500),
(41, 21, '2021-03-18', 22500),
(42, 21, '2021-03-18', 50000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `level` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `level`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'petugas', 'petugas', '1234'),
(6, 'petugas', 'ini olaf', '111'),
(10, 'Petugas', 'dssd', 'dsadasda'),
(11, 'petugas', 'Nissa', '1233'),
(13, 'Admin', 'nissa and Thoriq', '111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `idtagihan` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlahmeter` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`idtagihan`, `idpelanggan`, `tanggal`, `jumlahmeter`, `status`) VALUES
(30, 38, '2021-03-29', 2222, 'sudah'),
(31, 39, '2021-03-29', 1111, 'belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif`
--

CREATE TABLE `tarif` (
  `kodetarif` int(11) NOT NULL,
  `daya` varchar(100) NOT NULL,
  `tarifperkwh` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tarif`
--

INSERT INTO `tarif` (`kodetarif`, `daya`, `tarifperkwh`) VALUES
(4, '250220w', 150200213),
(5, '3000w', 20000),
(6, '21332444', 2444444),
(10, '11111w', 313131313);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`),
  ADD KEY `kodetarif` (`kodetarif`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idbayar`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`idtagihan`),
  ADD KEY `idpelanggan` (`idpelanggan`);

--
-- Indeks untuk tabel `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`kodetarif`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idbayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `idtagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tarif`
--
ALTER TABLE `tarif`
  MODIFY `kodetarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`kodetarif`) REFERENCES `tarif` (`kodetarif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
