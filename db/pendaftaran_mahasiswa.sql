-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.22-log - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk pendaftaran_mahasiswa
CREATE DATABASE IF NOT EXISTS `pendaftaran_mahasiswa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pendaftaran_mahasiswa`;

-- membuang struktur untuk table pendaftaran_mahasiswa.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `no_pendaftaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `prodi` int(1) DEFAULT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `sekolah_asal` int(1) DEFAULT NULL,
  PRIMARY KEY (`no_pendaftaan`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel pendaftaran_mahasiswa.mahasiswa: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`no_pendaftaan`, `nama`, `alamat`, `prodi`, `jenis_kelamin`, `tanggal_lahir`, `sekolah_asal`) VALUES
	(1, 'Endra Setiawan', 'Jl. Wonosari', 1, 1, '2019-07-20', 1),
	(2, 'Marcelino Tegar', 'Wonosobo', 2, 1, '2019-07-20', 2),
	(3, 'Sarwan Hamid', 'Bantul', 1, 1, '2019-07-20', 3),
	(4, 'Gisti Wulandari', 'Klaten', 2, 2, '2019-07-20', 1),
	(5, 'Eek', 'adf', 2, 1, '2019-07-11', 3),
	(6, 'Jaya Banget', 'd', 2, 1, '2019-07-18', 3),
	(7, 'Endra Setiawan', 'Jl. Wonosari Km 8.5, Gandu Baru, Berbah (Barat Yamaha SBR)', 1, 1, '2019-07-09', 1),
	(8, '1', '1', 1, 2, '2019-07-10', 1);
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
