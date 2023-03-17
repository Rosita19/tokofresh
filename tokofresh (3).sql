-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2021 pada 07.51
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokofresh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pes` varchar(10) NOT NULL,
  `id_pembeli` varchar(10) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `id_br` varchar(10) NOT NULL,
  `nama_br` varchar(50) NOT NULL,
  `harga_br` double NOT NULL,
  `jumlah` int(30) NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pes`, `id_pembeli`, `nama_pembeli`, `id_br`, `nama_br`, `harga_br`, `jumlah`, `total`, `status`, `tgl_pesan`) VALUES
('E001 ', 'U004 ', 'Arvandi', 'B011', 'Jaket Bomber Putih', 90000, 1, 90000, 'Sudah Dibayar', '2021-12-16'),
('E002 ', 'U004 ', 'Arvandi', 'B007', 'Kemeja Hitam polos', 45000, 1, 45000, 'Sudah Dibayar', '2021-12-16');

--
-- Trigger `pesan`
--
DELIMITER $$
CREATE TRIGGER `deleteP` AFTER DELETE ON `pesan` FOR EACH ROW begin
update tb_barang set stok_br = stok_br+old.jumlah where id_br=old.id_br;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `kurangStok` AFTER INSERT ON `pesan` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok_br = stok_br-new.jumlah WHERE
id_br = new.id_br;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateStok` AFTER UPDATE ON `pesan` FOR EACH ROW BEGIN 
UPDATE tb_barang SET stok_br = stok_br+old.jumlah-new.jumlah where id_br=new.id_br;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`) VALUES
('A001', 'Rosita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_br` varchar(10) NOT NULL,
  `nama_br` varchar(100) NOT NULL,
  `harga_br` double NOT NULL,
  `stok_br` int(30) NOT NULL,
  `satuan_br` varchar(15) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `status_br` varchar(5) NOT NULL,
  `gbr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_br`, `nama_br`, `harga_br`, `stok_br`, `satuan_br`, `ket`, `status_br`, `gbr`) VALUES
('B001', 'Kaos Polos Hitam', 40000, 50, 'pcs', 'Menyediakan Kaos Polos Warna Hitam ukuran L', 'New', 'o4.jpg'),
('B002', 'Kaos Polos Biru', 40000, 100, 'pcs', 'Menyediakan kaos polos berwarna biru ukuran L', 'New', 'o3.jpg'),
('B003', 'Rok Pita Hijau Toska ', 60000, 40, 'pcs', 'Menyediakan rok warna hijau toska ukuran All size', 'New', 'r1.jpg'),
('B004', 'Rok Levis ', 100000, 30, 'pcs', 'menyediakan rok levis ukuran all size', 'New', 'r4.jpg'),
('B005', 'Short Dress Biru', 70000, 40, 'pcs', 'menyediakan short dress warna biru ukuran L', 'New', 's4.jpg'),
('B006', 'Short Dress Brukat Pink', 12000, 20, 'pcs', 'menyediakan shord dress brukat warna pink ukuran M', 'New', 's1.jpg'),
('B007', 'Kemeja Hitam polos', 45000, 39, 'pcs', 'menyediakan kemeja berwarna hitam ukuran L', 'New', 'k1.jpg'),
('B008', 'Kemeja Polos Biru', 50000, 30, 'pcs', 'menyediakan kemeja polos warna biru ukuran L', 'New', 'k3.jpg'),
('B009', 'Blouse Blue', 45000, 50, 'pcs', 'menyediakan Blouse warna biru ukuran M', 'New', 'l2.jpg'),
('B010', 'Blouse Pita Abu-abu', 55000, 50, 'pcs', 'hanya menyediakan blouse pita warna abu-abu ukuran L', 'New', 'l1.jpg'),
('B011', 'Jaket Bomber Putih', 90000, 49, 'pcs', 'menyediakan jaket warna putih ukuran XL', 'New', 'j1.jpg'),
('B012', 'Jaket Kemeja Hitam', 85000, 78, 'pcs', 'menyediakan jaket kemeja warna hitam ukuran XL', 'New', 'j3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hak_akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `hak_akses`) VALUES
(16, 'Rosita Dewi Lutfiyah', 'Pembeli', 'Pembeli'),
(17, 'Rosita', 'Admin', 'Admin'),
(18, 'Fiane', 'Pembeli', 'Pembeli'),
(19, 'Defara', 'Pembeli', 'Pembeli'),
(20, 'Arvandi', 'Pembeli', 'Pembeli');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` varchar(10) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kd_pos` int(10) NOT NULL,
  `hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pembeli`, `nama_pembeli`, `email`, `alamat`, `kd_pos`, `hp`) VALUES
('U001 ', 'Rosita Dewi Lutfiyah', 'hiyo@gmail.com', 'Jalan Kenanga No. 14', 61484, 1234567863),
('U002 ', 'Fiane', 'superAdmin@gmail.com', 'Jalan Kenanga No. 14', 61484, 42346753),
('U003 ', 'Defara', 'defara@gmail.com', 'surabaya', 61484, 97546794),
('U004 ', 'Arvandi', 'vandi@gmail.com', 'Bandung', 61484, 812);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setor`
--

CREATE TABLE `tb_setor` (
  `id_st` varchar(10) NOT NULL,
  `tgl_set` date NOT NULL,
  `id_br` varchar(30) NOT NULL,
  `nama_br` varchar(50) NOT NULL,
  `jumlah_set` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `tb_setor`
--
DELIMITER $$
CREATE TRIGGER `deleteStok` AFTER DELETE ON `tb_setor` FOR EACH ROW begin
update tb_barang set stok_br = stok_br-old.jumlah_set where id_br=old.id_br;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambahStok` AFTER INSERT ON `tb_setor` FOR EACH ROW begin
update tb_barang set stok_br = stok_br+new.jumlah_set where id_br=new.id_br;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateSetor` AFTER UPDATE ON `tb_setor` FOR EACH ROW BEGIN 
UPDATE tb_barang SET stok_br = stok_br+new.jumlah_set-old.jumlah_set where id_br=new.id_br;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_tk` varchar(10) NOT NULL,
  `id_pembeli` varchar(10) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `totalseluruh` int(20) NOT NULL,
  `no_rek` int(10) NOT NULL,
  `nama_rek` varchar(50) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `tgl_tr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_tk`, `id_pembeli`, `nama_pembeli`, `alamat`, `totalseluruh`, `no_rek`, `nama_rek`, `bank`, `tgl_tr`) VALUES
(' T001', 'U004 ', 'Arvandi', 'Jalan Kenanga No. 14', 135000, 34568642, 'vandi', 'Mandiri', '2021-12-16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pes`),
  ADD KEY `id_br` (`id_br`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_br`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `tb_setor`
--
ALTER TABLE `tb_setor`
  ADD PRIMARY KEY (`id_st`),
  ADD KEY `id_br` (`id_br`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_tk`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_br`) REFERENCES `tb_barang` (`id_br`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_setor`
--
ALTER TABLE `tb_setor`
  ADD CONSTRAINT `tb_setor_ibfk_1` FOREIGN KEY (`id_br`) REFERENCES `tb_barang` (`id_br`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
