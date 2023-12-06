-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 03:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(18, 'Blouse orlinaaaa', '• Blouse detail batik print klasik untuk kesan timeless• Warna biru• Kerah bulat tinggi• Unlined• Regular fit• Resleting belakang• Material katun tidak transparan, ringan dan tidak stretch', 'Batik Wanita', 245000, 7, 'Picture1.png'),
(19, 'Blouse Batik Jatiyawan', '- Bahan 100% katun\r\n- Terdapat Furing didalamnya\r\n- Resleting depan\r\n- Tidak transparan & tidak stretch\r\n- Jahitan Kuat dan Profesional\r\n- Desaind batik bermotif (menyambung)\r\n', 'Batik Wanita', 215000, 9, 'Picture2.png'),
(20, 'Blouse Batik Talenta', '- Blouse batik print bergaya classy untuk tampilan yang smart\r\n- Warna hijau\r\n- Kerah mandarin\r\n- Unlined\r\n- Regular fit\r\n- Kancing depan\r\n- 2 kantong samping\r\n- Material katun tidak transparan, ringan, dan tidak stretch\r\n- Tinggi model 173cm, lingkar dada 83cm, mengenakan ukuran S\r\n', 'Batik Wanita', 185000, 9, 'Picture3.png'),
(21, 'Blouse Batik Hadinata Abimanyu', '- Batik Print\r\n- Material 100% Katun Primis 40S , Ringan , Tidak melar dan Tidak Menerawang\r\n- Kerah A simetris\r\n- Resleting Belakang\r\n- Tanpa Furing\r\n- Lengan 3/4\r\n- Warna Cream\r\n- Model menggunakan size S TB 170 – 172\r\n', 'Batik Wanita', 175000, 8, 'Picture4.png'),
(22, 'Blouse Batik Mega Chito', '- Bahan 100% katun\r\n- Terdapat Furing didalamnya\r\n- Resleting depan\r\n- Tidak transparan & tidak stretch\r\n- Jahitan Kuat dan Profesional\r\n- Desaind batik bermotif (menyambung)\r\n- Foto asli milik toko kami, dilarang mengambil tanpa se-izin kami\r\n', 'Batik Wanita', 185000, 9, 'Picture5.png'),
(23, 'Kemeja Batik Unique Motives', '- Item Type : Shirt\r\n- Gender : Man\r\n- Material : Cotton\r\n- Occasion : Formal, Cassual\r\n- Long Sleeve\r\n- Front Button Opening\r\n- Batik Motives\r\n- Traditional Shirt\r\n- Include Hard Box Exclusive Hamlin\r\n', 'Batik Pria', 205000, 8, 'Picture6.png'),
(24, 'Kemeja Batik Ranawijaya', '- Kemeja desain klasik dengan aksen batik print yang elegan\r\n- Warna dasar navy\r\n- 1 kantong depan\r\n- Detail kerah\r\n- Slim fit\r\n- Kancing depan\r\n- Material katun tidak transparan, ringan, dan tidak stretch\r\n- Tinggi model 185cm, mengenakan ukuran M\r\n', 'Batik Pria', 215000, 10, 'Picture7.png'),
(25, 'Kemeja Batik Mahesa', '- Kemeja batik print bergaya modern classic dengan motif statementable\r\n- Warna merah\r\n- Lengan panjang\r\n- Kerah kaku (gagah stylish)\r\n- Kancing depan tertutup rapi\r\n- Lengan kancing hidup (1 kancing)\r\n- Potongan bawah baju oval (modis)\r\n- Motif jahitan menyambung dengan rapi\r\n- Bahan katun polgan\r\n- 1 kantong depan (tidak merusak desaind batik)\r\n- Material katun tidak transparan, ringan, dan tidak stretch\r\n- Jahitan professional standart internasional (pundak, bawah ketiak, perut, lengan) terukur rapi\r\n- Ukuran setiap produk berbeda, lihat detail ukuran sebelum membeli\r\n- Tinggi model 184cm, lingkar dada 97cm, mengenakan ukuran M\r\n', 'Batik Pria', 150000, 9, 'Picture8.png'),
(26, 'Kemeja Batik Hadinata', '- Batik Print\r\n- Material 100% Katun Primis 40S , Ringan , Tidak melar dan Tidak Menerawang\r\n- Cutting Reguler Fit\r\n- Forward Point Collar ( Kerah Kemeja)\r\n- Hidden Button\r\n- Lengan Panjang\r\n- Tanpa Furing\r\n- Warna Coklat\r\n- Model menggunakan size M TB 182\r\n', 'Batik Pria', 175000, 9, 'Picture9.png'),
(27, 'Akmal', 'Dijual saja yaa', 'Batik Wanita', 100000, 1, 'akml.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `Alamat` varchar(60) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `pengiriman` varchar(55) NOT NULL,
  `pembayaran` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `no_tlp`, `Alamat`, `tgl_pesan`, `batas_bayar`, `pengiriman`, `pembayaran`) VALUES
(9, 'Silalahihihihi', '089624972475', 'Jl. Mangkudunya', '2023-10-31 09:01:36', '2023-11-01 09:01:36', 'Next Day', 'Dana - 08634563067'),
(10, 'Yosi', '0891267854357', 'Cimawate', '2023-11-02 20:36:03', '2023-11-03 20:36:03', 'Reguler', 'Dana-08634563067');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(30) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(15, 9, 23, 'Kemeja Batik Unique Motives', 1, 205000, ''),
(16, 9, 25, 'Kemeja Batik Mahesa', 1, 150000, ''),
(17, 9, 21, 'Blouse Batik Hadinata Abimanyu', 1, 175000, ''),
(18, 10, 18, 'Blouse orlinaaaa', 2, 245000, ''),
(19, 10, 23, 'Kemeja Batik Unique Motives', 1, 205000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'User', 'user', '123', 2),
(3, 'junto', 'junto', '123', 2),
(4, 'Akmal', 'akml', '1234', 2),
(5, 'Tiara', 'tiara', '123', 2),
(6, 'Yosi Nurkhofifah', 'yosi', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
