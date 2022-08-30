-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2022 pada 08.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_bandrol` decimal(10,0) NOT NULL,
  `diskon_pct` decimal(10,0) DEFAULT NULL,
  `diskon_nilai` decimal(10,0) DEFAULT NULL,
  `harga_diskon` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `qty`, `harga_bandrol`, `diskon_pct`, `diskon_nilai`, `harga_diskon`, `total`) VALUES
(1, 'A001', 'Barang A', 1, '200000', '0', '0', '200000', '200000'),
(3, 'A102', 'Barang C', 2, '125000', '20', '25000', '100000', '200000'),
(4, 'A301', 'Barang D', 3, '300000', '0', '0', '300000', '900000'),
(5, 'B221', 'Barang E', 2, '300000', '0', '0', '300000', '600000'),
(11, '1111', '111', 111, '111', '111', '111', '111', '1111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_transaksi`
--

CREATE TABLE `daftar_transaksi` (
  `id` int(11) NOT NULL,
  `no_transaksi` text NOT NULL,
  `tanggal` date NOT NULL,
  `nama_customer` text NOT NULL,
  `jumlah_barang` text NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `diskon` decimal(10,0) DEFAULT NULL,
  `ongkir` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_transaksi`
--

INSERT INTO `daftar_transaksi` (`id`, `no_transaksi`, `tanggal`, `nama_customer`, `jumlah_barang`, `sub_total`, `diskon`, `ongkir`, `total`) VALUES
(1, '202101-0001', '2021-01-01', 'cust a', '7', '250000', '5000', NULL, '245000'),
(2, '202101-0002', '2021-01-01', 'Cust B', '5', '600000', NULL, '15000', '615000'),
(3, '202101-0003', '2021-01-02', 'Cust A', '1', '125000', NULL, NULL, '125000'),
(4, '202101-0004', '2021-01-02', 'Cust C', '3', '320000', NULL, NULL, '320000'),
(5, '202101-0005', '2021-01-03', 'Cust D', '2', '560000', NULL, NULL, '560000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_customer`
--

CREATE TABLE `m_customer` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_customer`
--

INSERT INTO `m_customer` (`id`, `tanggal`, `kode`, `nama`, `telp`) VALUES
(1, '2022-08-30', '0121', 'ada1', '01821');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sales`
--

CREATE TABLE `t_sales` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `cust_id` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `diskon` decimal(10,0) NOT NULL,
  `ongkir` decimal(10,0) NOT NULL,
  `total_bayar` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_sales`
--

INSERT INTO `t_sales` (`id`, `kode`, `tgl`, `cust_id`, `subtotal`, `diskon`, `ongkir`, `total_bayar`) VALUES
(2, '0121', '2022-08-30', 111000, '1100', '11', '11000', '11000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_transaksi`
--
ALTER TABLE `daftar_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_sales`
--
ALTER TABLE `t_sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_sales`
--
ALTER TABLE `t_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
