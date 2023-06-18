-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 08.52
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(5) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Rice Cooker ', 'Penanak Nasi', 'Kebutuhan Rumah Tangga', 1500000, 10, 'rice11.jpg'),
(2, 'Baju anak ', 'Bahan premuim import', 'Pakaian Anak', 65000, 19, 'anak11.jpg'),
(5, 'Dress hitam', 'dress hitam', 'Pakaian Wanita dan Pria', 85000, 17, 'dress_hitam.jpg'),
(6, 'Camara Video Galería', 'Camara Video Galería', 'Elektronik', 13500000, 10, 'E-Camara_Video_Galería.jpg'),
(7, 'Headset wirelles', 'headset wirelles', 'Elektronik', 1500000, 3, 'E-headset1.jpg'),
(20, 'Jam tangan', 'anti air', 'elektronik', 240000, 15, 'Ejam.jpg'),
(21, 'Laptop samsung', 'Core i5', 'Eletronik', 20000000, 7, 'E-laptop samsung.jpg'),
(22, 'Laptop Hp', 'intel core i3', 'Elektronik', 8999999, 5, 'E-laptop.jpg'),
(23, 'Kemeja crop', 'Kemeja crop', 'Pakaian Wanita dan Pria', 250000, 7, 'Kemeja crop.jpg'),
(24, 'Kemeja Kantor wanita', 'Kemeja Kantor wanita', 'Pakaian Wanita dan Pria', 300000, 15, 'Kemeja Kantor wanita.jpg'),
(25, 'Kemeja wanita ala korea', 'Kemeja wanita ala korea', 'Pakaian Wanita dan Pria', 500000, 9, 'Kemeja wanita ala korea.jpg'),
(26, 'Kemeja Kotak Wanita', 'kemeja_kotak_wanita', 'Pakaian Wanita dan Pria', 430000, 10, 'kemeja_kotak_wanita.jpg'),
(27, 'Setelan Wanita', 'Setelan Wanita', 'Pakaian Wanita dan Pria', 550000, 4, 'Setelan Wanita.jpg'),
(28, 'Setelan Pria korean Style', 'bahan import ', 'Pakaian Wanita dan Pria', 435000, 10, 'setelan_pria.jpg'),
(29, 'conclear', 'golden rose', 'Kecantikan', 115000, 18, '11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Anastasya', 'jalan kaki', '2023-06-17 00:15:06', '2023-06-18 00:15:06'),
(3, 'SUSI', 'sd', '2023-06-17 00:29:43', '2023-06-18 00:29:43'),
(4, 'budi', 'jalan kaki', '2023-06-17 00:30:32', '2023-06-18 00:30:32'),
(5, 'Saya test trigger', 'jalan', '2023-06-18 02:20:49', '2023-06-19 02:20:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Kemeja Crop ', 1, 95000, ''),
(2, 1, 2, 'Kemeja Pria', 1, 78000, ''),
(3, 1, 5, 'Catok Rambut', 1, 125000, ''),
(4, 3, 3, 'Catok Rambut', 1, 115000, ''),
(5, 4, 4, 'Baju Anak ', 1, 55000, ''),
(6, 5, 1, 'Rice Cooker ', 1, 1500000, ''),
(7, 6, 23, 'Kemeja crop', 1, 250000, ''),
(8, 6, 5, 'Dress hitam', 1, 85000, ''),
(9, 7, 1, 'Rice Cooker ', 1, 1500000, ''),
(10, 7, 2, 'Baju anak ', 1, 65000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin123', 1),
(2, 'user', 'user', 'user123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
