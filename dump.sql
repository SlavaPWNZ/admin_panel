-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных newdb
CREATE DATABASE IF NOT EXISTS `newdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `newdb`;

-- Дамп структуры для таблица newdb.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `header` text NOT NULL,
  `body` text NOT NULL,
  `body2` text NOT NULL,
  `date_create` datetime DEFAULT NULL,
  `date_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы newdb.pages: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
REPLACE INTO `pages` (`id`, `title`, `header`, `body`, `body2`, `date_create`, `date_edit`) VALUES
	(6, 'qwe', '', '', '', '2018-08-19 16:38:28', '2018-08-19 20:38:53'),
	(10, 'NewPage', '', '', '', '2018-08-19 21:26:18', '2018-08-19 21:26:18'),
	(14, 'NewPage21', '12', '', '', '2018-08-19 21:28:51', '2018-08-19 21:52:45'),
	(15, 'NewPage', '', '', '', '2018-08-19 22:10:03', '2018-08-19 22:10:03');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
