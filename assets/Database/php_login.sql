-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.18-1 - (Debian)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for phplogin
CREATE DATABASE IF NOT EXISTS `phplogin` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `phplogin`;

-- Dumping structure for table phplogin.users
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `confirm` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`email`),
  UNIQUE KEY `Index 2` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
