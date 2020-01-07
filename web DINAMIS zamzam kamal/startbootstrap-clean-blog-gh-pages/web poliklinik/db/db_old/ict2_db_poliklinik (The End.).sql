-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 12:29 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict2_db_poliklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `kode_dok` varchar(10) NOT NULL,
  `nama_dok` varchar(50) NOT NULL,
  `alamat_dok` varchar(100) NOT NULL,
  `telp_dok` varchar(12) NOT NULL,
  `kode_poli` varchar(10) NOT NULL,
  `kode_jadwal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`kode_dok`, `nama_dok`, `alamat_dok`, `telp_dok`, `kode_poli`, `kode_jadwal`) VALUES
('DOKT000001', 'Dr. Budi Santoso', 'Ds. Maguan', '0828938', 'POLI000001', 'JDWL000001'),
('DOKT000002', 'Dr.Santuy', 'Bandung', '08989898989', 'POLI000002', 'JDWL000002'),
('DOKT000003', 'Dr. Zo', 'Jakartaa', '0829977188', 'POLI000003', 'JDWL000003'),
('DOKT000004', 'Dr.zazaka', 'palestina', '1111111111', 'POLI000004', 'JDWL000004'),
('DOKT000005', 'Dr.dddude', 'bandung', '08199999999', 'POLI000005', 'JDWL000005'),
('DOKT000006', 'Dr.Salm ', 'cicadas', '0817777777', 'POLI000001', 'JDWL000007');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama_poliklinik` varchar(100) NOT NULL,
  `deskripsi_poliklinik` text NOT NULL,
  `alamat_poliklinik` text NOT NULL,
  `kec_poliklinik` varchar(70) NOT NULL,
  `kab_poliklinik` varchar(70) NOT NULL,
  `prov_poliklinik` varchar(70) NOT NULL,
  `kode_pos_poliklinik` int(6) NOT NULL,
  `telp_poliklinik` varchar(14) NOT NULL,
  `email_poliklinik` varchar(50) NOT NULL,
  `logo_poliklinik` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `nama_poliklinik`, `deskripsi_poliklinik`, `alamat_poliklinik`, `kec_poliklinik`, `kab_poliklinik`, `prov_poliklinik`, `kode_pos_poliklinik`, `telp_poliklinik`, `email_poliklinik`, `logo_poliklinik`) VALUES
(1, 'Kliknik Santuy Parah', 'Aplikasi Pengelola Data Poliklinik              ', 'Bandung', 'Kiaracondong', 'bandung', 'Jawa Barat', 999777, '081646811924', 'zamzamkamal31@gmail.com', 'klinik satuy parah.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_praktik`
--

CREATE TABLE `tb_jadwal_praktik` (
  `kode_jadwal` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_praktik`
--

INSERT INTO `tb_jadwal_praktik` (`kode_jadwal`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
('JDWL000001', 'Senin', '08:00:00', '11:00:00'),
('JDWL000002', 'Selasa', '08:00:00', '11:00:00'),
('JDWL000003', 'Rabu', '08:00:00', '11:00:00'),
('JDWL000004', 'Kamis', '08:00:00', '11:00:00'),
('JDWL000005', 'Jumat', '08:00:00', '11:00:00'),
('JDWL000006', 'Sabtu', '08:00:00', '11:00:00'),
('JDWL000007', 'Minggu', '16:00:00', '20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_biaya`
--

CREATE TABLE `tb_jenis_biaya` (
  `kode_jenis_biaya` varchar(10) NOT NULL,
  `nama_biaya` varchar(30) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_biaya`
--

INSERT INTO `tb_jenis_biaya` (`kode_jenis_biaya`, `nama_biaya`, `tarif`) VALUES
('BIYA000001', 'Pemeriksaan', 15000),
('BIYA000003', 'Cek Darah', 5000),
('BIYA000004', 'Cek Kolestelor', 30000),
('BIYA000005', 'Konsultasi', 15000),
('BIYA000006', 'Checkup', 50000),
('BIYA000007', 'General Ceckup', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` varchar(60) NOT NULL,
  `type_user` varchar(20) NOT NULL,
  `nip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `type_user`, `nip`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'PGW0000001'),
('coba1', 'e10adc3949ba59abbe56e057f20f883e', 'Pendaftar', 'PGW0000005'),
('coba2', 'e10adc3949ba59abbe56e057f20f883e', 'Kasir', 'PGW0000006'),
('coba3', 'e10adc3949ba59abbe56e057f20f883e', 'Dokter', 'PGW0000007'),
('coba4', 'e10adc3949ba59abbe56e057f20f883e', 'Pendaftar', 'PGW0000008'),
('dokter', 'e10adc3949ba59abbe56e057f20f883e', 'Dokter', 'PGW0000002'),
('kasir', 'e10adc3949ba59abbe56e057f20f883e', 'Kasir', 'PGW0000003'),
('pendaftar', 'e10adc3949ba59abbe56e057f20f883e', 'Pendaftar', 'PGW0000004');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `kode_obat` varchar(10) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga_jual` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`kode_obat`, `nama_obat`, `merk`, `satuan`, `harga_jual`) VALUES
('OBT0000001', 'Anti Alergi', 'Crolag', 'Tablet', 8000),
('OBT0000002', 'Obat untuk migran', 'Ergotamin', 'Kapsul', 9000),
('OBT0000003', 'Antiseptik Alami', 'Etoposid', 'Kapsul', 2000),
('OBT0000004', 'Obat penurun panas', 'Parasetamol', 'Tablet', 4000),
('OBT0000005', 'Penurun tekanan darah tinggi', 'Candesartan 8 mg', 'Strip', 60000),
('OBT0000006', 'Penurun tekanan darah tinggi', 'Amlodipine 10 mg', 'Strip', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `kode_pas` varchar(10) NOT NULL,
  `nama_pas` varchar(50) NOT NULL,
  `alamat_pas` varchar(100) NOT NULL,
  `telp_pas` varchar(12) NOT NULL,
  `tanggal_lahir_pas` date NOT NULL,
  `jenis_kelamin_pas` enum('Pria','Wanita') NOT NULL,
  `tanggal_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`kode_pas`, `nama_pas`, `alamat_pas`, `telp_pas`, `tanggal_lahir_pas`, `jenis_kelamin_pas`, `tanggal_reg`) VALUES
('PAS0000001', 'Suparno', 'Ds. Sawahan', '081873789232', '2016-10-17', 'Pria', '2016-10-24'),
('PAS0000002', 'Ngatinah', 'Ds. Pamotan', '088739409138', '2016-10-18', 'Wanita', '2016-10-24'),
('PAS0000003', 'Berta', 'Ds. Polandak', '063891773661', '2016-10-04', 'Wanita', '2016-10-24'),
('PAS0000004', 'Ronald', 'Ds. Soditan', '081983781938', '2016-10-28', 'Pria', '2016-10-25'),
('PAS0000005', 'Wafa Zainul', 'Ds. Sumberjo', '08962782993', '2016-12-05', 'Pria', '2016-12-09'),
('PAS0000006', 'Sukoco', 'Ds. Mejo', '0899455732', '1975-11-01', 'Pria', '2019-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip` varchar(10) NOT NULL,
  `nama_peg` varchar(50) NOT NULL,
  `alamat_peg` varchar(100) NOT NULL,
  `telp_peg` varchar(12) NOT NULL,
  `jenis_kelamin_peg` enum('Pria','Wanita') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `nama_peg`, `alamat_peg`, `telp_peg`, `jenis_kelamin_peg`) VALUES
('PGW0000001', 'Zamzam Admin', 'Bandung', '022 7218021', 'Pria'),
('PGW0000002', 'Zamzam Dokter', 'Bandung', '081221373113', 'Pria'),
('PGW0000003', 'Zamzam Kasir', 'Bandung', '022 7218021', 'Wanita'),
('PGW0000004', 'Zamzam Pendaftar', 'Bandung', '081221373113', 'Wanita'),
('PGW0000005', 'Nama Coba 1', 'Alamat Coba 1', '022 7218021', 'Wanita'),
('PGW0000006', 'Nama Coba 2', 'Alamat Coba 2', 'Telp-Coba2', 'Pria'),
('PGW0000007', 'Nama Coba 3', 'Alamat Coba 3', 'Telp-Coba3', 'Pria'),
('PGW0000008', 'Nama Coba 4', 'Alamat Coba 4', 'Telp-Coba4', 'Wanita');

--
-- Triggers `tb_pegawai`
--
DELIMITER $$
CREATE TRIGGER `tb_hapus_login` BEFORE DELETE ON `tb_pegawai` FOR EACH ROW DELETE FROM tb_login WHERE nip = OLD.nip
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `kode_pemeriksaan` varchar(10) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `perawatan` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL,
  `berat_badan` int(5) NOT NULL,
  `tensi_diastolik` int(5) NOT NULL,
  `tensi_sistolik` int(5) NOT NULL,
  `no_pendaftaran` int(11) NOT NULL,
  `rincian_pemeriksaan` enum('1','0') NOT NULL,
  `status_pemeriksaan` enum('1','0') NOT NULL,
  `kode_dok` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`kode_pemeriksaan`, `tanggal_pemeriksaan`, `keluhan`, `diagnosa`, `perawatan`, `tindakan`, `berat_badan`, `tensi_diastolik`, `tensi_sistolik`, `no_pendaftaran`, `rincian_pemeriksaan`, `status_pemeriksaan`, `kode_dok`) VALUES
('PRS0000001', '2019-11-29', 'zzz', 'KLM HIRUP', 'a', 'a', 1, 1, 1, 22, '1', '0', 'DOKT000001'),
('PRS0000002', '3333-03-31', '3444', 'santuy', '4ZC', '44ZC', 4, 45, 45, 23, '0', '0', 'DOKT000002'),
('PRS0000003', '3333-03-31', 'zzz', 'butuh', 'zz', 'zz', 232, 55323, 657, 24, '0', '0', 'DOKT000003'),
('PRS0000004', '2019-11-25', 'kurang kasih sayang', 'kesantuyan', 'b', 'b', 43, 353, 353, 25, '1', '0', 'DOKT000004'),
('PRS0000005', '2019-11-21', 'REREEEEZ', 'tR', 'tR', 'tR', 54, 54, 54, 26, '1', '1', 'DOKT000005'),
('PRS0000006', '2019-11-24', 'tttt', 'tttt', 'tttt', 'tttt', 3333, 333, 2222, 27, '1', '1', 'DOKT000006');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `no_pendaftaran` int(11) NOT NULL,
  `tanggal_reg` date NOT NULL,
  `no_urut` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `kode_pas` varchar(10) NOT NULL,
  `kode_jadwal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`no_pendaftaran`, `tanggal_reg`, `no_urut`, `nip`, `kode_pas`, `kode_jadwal`) VALUES
(22, '2017-01-01', 1, 'PGW0000002', 'PAS0000001', 'JDWL000001'),
(23, '2019-11-15', 2, 'PGW0000004', 'PAS0000002', 'JDWL000002'),
(24, '2019-11-30', 3, 'PGW0000004', 'PAS0000003', 'JDWL000003'),
(25, '2019-11-23', 4, 'PGW0000004', 'PAS0000004', 'JDWL000004'),
(26, '2019-11-21', 5, 'PGW0000004', 'PAS0000005', 'JDWL000005'),
(27, '2019-11-24', 6, 'PGW0000004', 'PAS0000006', 'JDWL000006');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `kode_poli` varchar(10) NOT NULL,
  `nama_poli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`kode_poli`, `nama_poli`) VALUES
('POLI000001', 'Poli Mata'),
('POLI000002', 'Poli Gigi'),
('POLI000003', 'Poli Umum'),
('POLI000004', 'Poli Bedah'),
('POLI000005', 'Poli Tulang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekam_medis_biaya`
--

CREATE TABLE `tb_rekam_medis_biaya` (
  `id_rekam_medis_biaya` int(10) NOT NULL,
  `kode_pemeriksaan` varchar(10) NOT NULL,
  `kode_jenis_biaya` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekam_medis_biaya`
--

INSERT INTO `tb_rekam_medis_biaya` (`id_rekam_medis_biaya`, `kode_pemeriksaan`, `kode_jenis_biaya`) VALUES
(13, 'PRS0000001', 'BIYA000001'),
(35, 'PRS0000003', 'BIYA000004'),
(40, 'PRS0000003', 'BIYA000003'),
(41, 'PRS0000001', 'BIYA000006'),
(43, 'PRS0000003', 'BIYA000005'),
(45, 'PRS0000001', 'BIYA000004'),
(47, 'PRS0000004', 'BIYA000004'),
(48, 'PRS0000002', 'BIYA000003'),
(49, 'PRS0000002', 'BIYA000003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekam_medis_obat`
--

CREATE TABLE `tb_rekam_medis_obat` (
  `id_rekam_medis_obat` int(10) NOT NULL,
  `kode_pemeriksaan_obat` varchar(11) NOT NULL,
  `kode_obat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekam_medis_obat`
--

INSERT INTO `tb_rekam_medis_obat` (`id_rekam_medis_obat`, `kode_pemeriksaan_obat`, `kode_obat`) VALUES
(16, 'PRS0000001', 'OBT0000001'),
(17, 'PRS0000001', 'OBT0000003'),
(18, 'PRS0000003', 'OBT0000004'),
(19, 'PRS0000003', 'OBT0000003'),
(20, 'PRS0000001', 'OBT0000006'),
(21, 'PRS0000003', 'OBT0000001'),
(23, 'PRS0000004', 'OBT0000003');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekam_medis_resep`
--

CREATE TABLE `tb_rekam_medis_resep` (
  `id_rekam_medis_resep` int(10) NOT NULL,
  `kode_pemeriksaan_resep` varchar(11) NOT NULL,
  `kode_resep` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekam_medis_resep`
--

INSERT INTO `tb_rekam_medis_resep` (`id_rekam_medis_resep`, `kode_pemeriksaan_resep`, `kode_resep`) VALUES
(2, 'PRS0000001', 'RESP000001'),
(4, 'PRS0000003', 'RESP000002'),
(6, 'PRS0000006', 'RESP000003'),
(7, 'PRS0000006', 'RESP000003'),
(8, 'PRS0000006', 'RESP000004'),
(9, 'PRS0000001', 'RESP000003'),
(10, 'PRS0000001', 'RESP000003'),
(13, 'PRS0000004', 'RESP000001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resep`
--

CREATE TABLE `tb_resep` (
  `kode_resep` varchar(10) NOT NULL,
  `dosis` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resep`
--

INSERT INTO `tb_resep` (`kode_resep`, `dosis`, `jumlah`) VALUES
('RESP000001', '2 x 1 / Hari', 12),
('RESP000002', '2 x 1 / Hari', 18),
('RESP000003', '2 x 1 / Hari', 12),
('RESP000004', '1 X 1 / Hari', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rincian_jenis_biaya`
--

CREATE TABLE `tb_rincian_jenis_biaya` (
  `kode_rincian_biaya` int(11) NOT NULL,
  `no_pendaftaran` int(11) NOT NULL,
  `kode_jenis_biaya` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rincian_resep`
--

CREATE TABLE `tb_rincian_resep` (
  `kode_rincian_resep` int(11) NOT NULL,
  `kode_resep` varchar(10) NOT NULL,
  `kode_obat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`kode_dok`),
  ADD KEY `kode_poli` (`kode_poli`),
  ADD KEY `kode_jadwal` (`kode_jadwal`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tb_jadwal_praktik`
--
ALTER TABLE `tb_jadwal_praktik`
  ADD PRIMARY KEY (`kode_jadwal`);

--
-- Indexes for table `tb_jenis_biaya`
--
ALTER TABLE `tb_jenis_biaya`
  ADD PRIMARY KEY (`kode_jenis_biaya`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`),
  ADD KEY `nip_3` (`nip`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`kode_pas`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`kode_pemeriksaan`),
  ADD KEY `no_pendaftaran` (`no_pendaftaran`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`),
  ADD KEY `nip` (`nip`,`kode_pas`,`kode_jadwal`),
  ADD KEY `kode_jadwal` (`kode_jadwal`),
  ADD KEY `kode_pas` (`kode_pas`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`kode_poli`);

--
-- Indexes for table `tb_rekam_medis_biaya`
--
ALTER TABLE `tb_rekam_medis_biaya`
  ADD PRIMARY KEY (`id_rekam_medis_biaya`),
  ADD KEY `kode_pemeriksaan` (`kode_pemeriksaan`),
  ADD KEY `kode_jenis_biaya` (`kode_jenis_biaya`);

--
-- Indexes for table `tb_rekam_medis_obat`
--
ALTER TABLE `tb_rekam_medis_obat`
  ADD PRIMARY KEY (`id_rekam_medis_obat`),
  ADD KEY `kode_pemeriksaan_obat` (`kode_pemeriksaan_obat`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- Indexes for table `tb_rekam_medis_resep`
--
ALTER TABLE `tb_rekam_medis_resep`
  ADD PRIMARY KEY (`id_rekam_medis_resep`),
  ADD KEY `kode_pemeriksaan_resep` (`kode_pemeriksaan_resep`),
  ADD KEY `kode_resep` (`kode_resep`);

--
-- Indexes for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD PRIMARY KEY (`kode_resep`);

--
-- Indexes for table `tb_rincian_jenis_biaya`
--
ALTER TABLE `tb_rincian_jenis_biaya`
  ADD PRIMARY KEY (`kode_rincian_biaya`),
  ADD KEY `no_pendaftaran` (`no_pendaftaran`,`kode_jenis_biaya`),
  ADD KEY `kode_jenis_biaya` (`kode_jenis_biaya`);

--
-- Indexes for table `tb_rincian_resep`
--
ALTER TABLE `tb_rincian_resep`
  ADD PRIMARY KEY (`kode_rincian_resep`),
  ADD KEY `kode_resep` (`kode_resep`,`kode_obat`),
  ADD KEY `kode_obat` (`kode_obat`),
  ADD KEY `kode_resep_2` (`kode_resep`,`kode_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tb_rekam_medis_biaya`
--
ALTER TABLE `tb_rekam_medis_biaya`
  MODIFY `id_rekam_medis_biaya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tb_rekam_medis_obat`
--
ALTER TABLE `tb_rekam_medis_obat`
  MODIFY `id_rekam_medis_obat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_rekam_medis_resep`
--
ALTER TABLE `tb_rekam_medis_resep`
  MODIFY `id_rekam_medis_resep` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_rincian_jenis_biaya`
--
ALTER TABLE `tb_rincian_jenis_biaya`
  MODIFY `kode_rincian_biaya` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_rincian_resep`
--
ALTER TABLE `tb_rincian_resep`
  MODIFY `kode_rincian_resep` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD CONSTRAINT `tb_dokter_ibfk_2` FOREIGN KEY (`kode_jadwal`) REFERENCES `tb_jadwal_praktik` (`kode_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_dokter_ibfk_3` FOREIGN KEY (`kode_poli`) REFERENCES `tb_poliklinik` (`kode_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `tb_login_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_pegawai` (`nip`);

--
-- Constraints for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD CONSTRAINT `fk_no_pendaftaran` FOREIGN KEY (`no_pendaftaran`) REFERENCES `tb_pendaftaran` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `tb_pendaftaran_ibfk_3` FOREIGN KEY (`kode_jadwal`) REFERENCES `tb_jadwal_praktik` (`kode_jadwal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_ibfk_5` FOREIGN KEY (`nip`) REFERENCES `tb_pegawai` (`nip`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_ibfk_6` FOREIGN KEY (`kode_pas`) REFERENCES `tb_pasien` (`kode_pas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rekam_medis_biaya`
--
ALTER TABLE `tb_rekam_medis_biaya`
  ADD CONSTRAINT `fk_medis_biaya_jenis_biaya` FOREIGN KEY (`kode_jenis_biaya`) REFERENCES `tb_jenis_biaya` (`kode_jenis_biaya`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_medis_biaya_pemeriksaan` FOREIGN KEY (`kode_pemeriksaan`) REFERENCES `tb_pemeriksaan` (`kode_pemeriksaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rekam_medis_obat`
--
ALTER TABLE `tb_rekam_medis_obat`
  ADD CONSTRAINT `fk_medis_obat_obat` FOREIGN KEY (`kode_obat`) REFERENCES `tb_obat` (`kode_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_medis_obat_pemeriksaan` FOREIGN KEY (`kode_pemeriksaan_obat`) REFERENCES `tb_pemeriksaan` (`kode_pemeriksaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rekam_medis_resep`
--
ALTER TABLE `tb_rekam_medis_resep`
  ADD CONSTRAINT `fk_medis_resep_pemeriksaan` FOREIGN KEY (`kode_pemeriksaan_resep`) REFERENCES `tb_pemeriksaan` (`kode_pemeriksaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_medis_resep_resep` FOREIGN KEY (`kode_resep`) REFERENCES `tb_resep` (`kode_resep`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rincian_jenis_biaya`
--
ALTER TABLE `tb_rincian_jenis_biaya`
  ADD CONSTRAINT `tb_rincian_jenis_biaya_ibfk_2` FOREIGN KEY (`kode_jenis_biaya`) REFERENCES `tb_jenis_biaya` (`kode_jenis_biaya`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rincian_jenis_biaya_ibfk_3` FOREIGN KEY (`no_pendaftaran`) REFERENCES `tb_pendaftaran` (`no_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rincian_resep`
--
ALTER TABLE `tb_rincian_resep`
  ADD CONSTRAINT `tb_rincian_resep_ibfk_1` FOREIGN KEY (`kode_obat`) REFERENCES `tb_obat` (`kode_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rincian_resep_ibfk_2` FOREIGN KEY (`kode_resep`) REFERENCES `tb_resep` (`kode_resep`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
