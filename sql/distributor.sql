-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jan 2019 pada 17.12
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distributor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_akomodasi`
--

CREATE TABLE IF NOT EXISTS `detail_akomodasi` (
  `no_detail_akomodasi` int(5) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `cash` int(100) NOT NULL,
  `bon` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_setoran`
--

CREATE TABLE IF NOT EXISTS `detail_setoran` (
  `no_nota_setoran` int(5) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `cash` int(100) NOT NULL,
  `bon` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `no_nota_penjualan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komisi`
--

CREATE TABLE IF NOT EXISTS `komisi` (
  `kode` int(5) NOT NULL,
  `jumlah_hari` int(5) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `persen` decimal(5,0) NOT NULL,
  `total` int(100) NOT NULL,
  `kd_pegawai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `kd_pegawai` int(5) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `kode` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `persen_komisi` float NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `no_ktp` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`kode`, `nama`, `alamat`, `persen_komisi`, `no_tlp`, `no_ktp`) VALUES
(2, 'fff', 'ffff', 55.55, '123', '123'),
(3, 'cek afan', 'as', 88.88, '098123', '9824');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `kode` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`kode`, `nama`, `alamat`, `no_tlp`) VALUES
(6, 'Rudi jaya motors', 'jakal 1565', '089817056'),
(9, 'sz', 'sz', '21'),
(10, 'cek afan', 'gentan', '081335305569');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_pelanggan`
--

CREATE TABLE IF NOT EXISTS `pembelian_pelanggan` (
  `kode` int(5) NOT NULL,
  `no_nota` int(5) NOT NULL,
  `kd_barang` int(5) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `harga_barang` int(100) NOT NULL,
  `total_harga` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `kode` int(5) NOT NULL,
  `ttl_peminjaman` int(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kd_pegawai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `kode` int(5) NOT NULL,
  `kd_pegawai` int(5) NOT NULL,
  `kd_toko` int(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `kode` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`kode`, `nama`, `jenis`) VALUES
(2, 'xasd', 'ddx'),
(3, 'dddd', 'ss'),
(4, 'cek afan', 'cek barang afan'),
(6, 'rudi', 'rudi'),
(7, 'rudi', 'mur obeng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `return_barang`
--

CREATE TABLE IF NOT EXISTS `return_barang` (
  `kode` int(5) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `no_nota` varchar(50) NOT NULL,
  `kd_toko` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `kd_pegawai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `return_penjualan`
--

CREATE TABLE IF NOT EXISTS `return_penjualan` (
  `kode` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(100) NOT NULL,
  `kd_product` int(5) NOT NULL,
  `kd_pegawai` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `return_penjualan`
--

INSERT INTO `return_penjualan` (`kode`, `tanggal`, `jumlah`, `kd_product`, `kd_pegawai`) VALUES
(1, '2018-11-08', 1, 2, 2),
(2, '2018-11-09', 3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setoran`
--

CREATE TABLE IF NOT EXISTS `setoran` (
  `kode` int(5) NOT NULL,
  `ttl_kekurangan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_keluar`
--

CREATE TABLE IF NOT EXISTS `stok_keluar` (
  `kode` int(5) NOT NULL,
  `kd_barang` int(5) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `kd_pegawai` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_keluar`
--

INSERT INTO `stok_keluar` (`kode`, `kd_barang`, `jumlah`, `harga`, `tgl_keluar`, `kd_pegawai`) VALUES
(1, 2, 2, 9000, '2018-11-08', 2),
(2, 2, 7, 123, '2018-11-09', 2),
(3, 4, 5, 8000, '2018-12-20', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_masuk`
--

CREATE TABLE IF NOT EXISTS `stok_masuk` (
  `kode` int(5) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kd_product` int(5) NOT NULL,
  `kd_pegawai` int(5) NOT NULL,
  `kd_supplier` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_masuk`
--

INSERT INTO `stok_masuk` (`kode`, `jumlah`, `harga`, `tgl_masuk`, `kd_product`, `kd_pegawai`, `kd_supplier`) VALUES
(1, 3, 3000, '2018-11-05', 2, 2, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `kode` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`kode`, `nama`, `alamat`, `no_tlp`) VALUES
(18, 'afang', 'bagusg', '1234'),
(25, 'bbb', 'mmm', '111'),
(26, '1', 'gg', '55'),
(27, 'sdfs', 'sd', '234'),
(28, 'sdfs', 'sd', '34'),
(30, 'sdf', 'sdf', '23'),
(31, 'xcv', 'sdf', '32'),
(32, 'sdf', 'fgd', '123'),
(33, 'afan cek', 'gentang', '081335305569');

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_stok`
--
CREATE TABLE IF NOT EXISTS `total_stok` (
`kd_barang` int(5)
,`nama_barang` varchar(50)
,`ttl_stok_masuk` decimal(65,0)
,`ttl_stok_keluar` decimal(65,0)
,`ttl_return_penjualan` decimal(65,0)
,`stok_tersedia` decimal(65,0)
,`tanggal` date
);

-- --------------------------------------------------------

--
-- Struktur untuk view `total_stok`
--
DROP TABLE IF EXISTS `total_stok`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_stok` AS select `p`.`kode` AS `kd_barang`,`p`.`nama` AS `nama_barang`,(select sum(`stok_masuk`.`jumlah`) from `stok_masuk` where ((`stok_masuk`.`tgl_masuk` = `sm`.`tgl_masuk`) and (`stok_masuk`.`kd_product` = `p`.`kode`))) AS `ttl_stok_masuk`,(select sum(`stok_keluar`.`jumlah`) from `stok_keluar` where ((`stok_keluar`.`tgl_keluar` = `sm`.`tgl_masuk`) and (`stok_keluar`.`kd_barang` = `p`.`kode`))) AS `ttl_stok_keluar`,(select sum(`return_penjualan`.`jumlah`) from `return_penjualan` where ((`sk`.`kd_barang` = `p`.`kode`) and (`return_penjualan`.`tanggal` = `sm`.`tgl_masuk`))) AS `ttl_return_penjualan`,(((select sum(`stok_masuk`.`jumlah`) from `stok_masuk` where ((`stok_masuk`.`tgl_masuk` = `sm`.`tgl_masuk`) and (`stok_masuk`.`kd_product` = `p`.`kode`))) - (select sum(`stok_keluar`.`jumlah`) from `stok_keluar` where ((`stok_keluar`.`tgl_keluar` = `sm`.`tgl_masuk`) and (`stok_keluar`.`kd_barang` = `p`.`kode`)))) + (select sum(`return_penjualan`.`jumlah`) from `return_penjualan` where ((`sk`.`kd_barang` = `p`.`kode`) and (`return_penjualan`.`tanggal` = `sm`.`tgl_masuk`)))) AS `stok_tersedia`,`sm`.`tgl_masuk` AS `tanggal` from (((`product` `p` join `stok_masuk` `sm` on((`sm`.`kd_product` = `p`.`kode`))) join `stok_keluar` `sk` on(((`sk`.`kd_barang` = `p`.`kode`) and (`sk`.`tgl_keluar` = `sm`.`tgl_masuk`)))) join `return_penjualan` `rp` on(((`rp`.`kd_product` = `p`.`kode`) and (`rp`.`tanggal` = `sm`.`tgl_masuk`)))) group by `sm`.`tgl_masuk`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_akomodasi`
--
ALTER TABLE `detail_akomodasi`
  ADD KEY `no_detail_akomodasi` (`no_detail_akomodasi`) USING BTREE;

--
-- Indexes for table `detail_setoran`
--
ALTER TABLE `detail_setoran`
  ADD KEY `no_nota_setoran` (`no_nota_setoran`) USING BTREE,
  ADD KEY `no_nota_penjualan` (`no_nota_penjualan`) USING BTREE;

--
-- Indexes for table `komisi`
--
ALTER TABLE `komisi`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kd_pegawai` (`kd_pegawai`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_pegawai` (`kd_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pembelian_pelanggan`
--
ALTER TABLE `pembelian_pelanggan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no_nota` (`no_nota`) USING BTREE,
  ADD KEY `kd_barang` (`kd_barang`) USING BTREE;

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kd_pegawai` (`kd_pegawai`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kd_pegawai` (`kd_pegawai`) USING BTREE,
  ADD KEY `kd_toko` (`kd_toko`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `return_barang`
--
ALTER TABLE `return_barang`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kd_toko` (`kd_toko`),
  ADD KEY `kd_pegawai` (`kd_pegawai`);

--
-- Indexes for table `return_penjualan`
--
ALTER TABLE `return_penjualan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kd_product` (`kd_product`),
  ADD KEY `kd_pegawai` (`kd_pegawai`);

--
-- Indexes for table `setoran`
--
ALTER TABLE `setoran`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `stok_keluar`
--
ALTER TABLE `stok_keluar`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kd_barang` (`kd_barang`) USING BTREE,
  ADD KEY `kd_pegawai` (`kd_pegawai`) USING BTREE;

--
-- Indexes for table `stok_masuk`
--
ALTER TABLE `stok_masuk`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kd_product` (`kd_product`) USING BTREE,
  ADD KEY `kd_pegawai` (`kd_pegawai`) USING BTREE,
  ADD KEY `kd_supplier` (`kd_supplier`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komisi`
--
ALTER TABLE `komisi`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pembelian_pelanggan`
--
ALTER TABLE `pembelian_pelanggan`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `return_barang`
--
ALTER TABLE `return_barang`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `return_penjualan`
--
ALTER TABLE `return_penjualan`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `setoran`
--
ALTER TABLE `setoran`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stok_keluar`
--
ALTER TABLE `stok_keluar`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stok_masuk`
--
ALTER TABLE `stok_masuk`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_akomodasi`
--
ALTER TABLE `detail_akomodasi`
  ADD CONSTRAINT `FK_detail_akomodasi_ke_setoran_kode` FOREIGN KEY (`no_detail_akomodasi`) REFERENCES `setoran` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_setoran`
--
ALTER TABLE `detail_setoran`
  ADD CONSTRAINT `FK_no_nota_ke_penjualan_kode` FOREIGN KEY (`no_nota_penjualan`) REFERENCES `penjualan` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_no_nota_ke_setoran_kode` FOREIGN KEY (`no_nota_setoran`) REFERENCES `setoran` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komisi`
--
ALTER TABLE `komisi`
  ADD CONSTRAINT `komisi_ibfk_1` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kode`);

--
-- Ketidakleluasaan untuk tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fklogin_kd_pegawai` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian_pelanggan`
--
ALTER TABLE `pembelian_pelanggan`
  ADD CONSTRAINT `pembelian_pelanggan_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `product` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_pelanggan_ibfk_2` FOREIGN KEY (`no_nota`) REFERENCES `penjualan` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kode`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`kd_toko`) REFERENCES `pelanggan` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `return_barang`
--
ALTER TABLE `return_barang`
  ADD CONSTRAINT `FK_return_barang_ke_pegawai_kode` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_return_barang_ke_pelanggan_kode` FOREIGN KEY (`kd_toko`) REFERENCES `pelanggan` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `return_penjualan`
--
ALTER TABLE `return_penjualan`
  ADD CONSTRAINT `FK_kd_pegawai_ke_pegawai_kode` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_kd_product_ke_product_kode` FOREIGN KEY (`kd_product`) REFERENCES `product` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stok_keluar`
--
ALTER TABLE `stok_keluar`
  ADD CONSTRAINT `stok_keluar_ibfk_1` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stok_keluar_ibfk_2` FOREIGN KEY (`kd_barang`) REFERENCES `product` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stok_masuk`
--
ALTER TABLE `stok_masuk`
  ADD CONSTRAINT `FK_kd_supplier_ke_supplier_kode` FOREIGN KEY (`kd_supplier`) REFERENCES `supplier` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stok_masuk_ibfk_1` FOREIGN KEY (`kd_product`) REFERENCES `product` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stok_masuk_ibfk_2` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
