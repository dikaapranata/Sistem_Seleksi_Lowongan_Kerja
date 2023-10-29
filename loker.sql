-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 07:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loker`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_lokers`
--

CREATE TABLE `apply_lokers` (
  `idapply` bigint(20) UNSIGNED NOT NULL,
  `user_noktp` varchar(255) NOT NULL,
  `loker_idloker` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_lokers`
--

INSERT INTO `apply_lokers` (`idapply`, `user_noktp`, `loker_idloker`, `created_at`, `updated_at`) VALUES
(1, '123456789', 'rebecca-collins', '2023-10-23 09:34:11', '2023-10-23 09:34:11'),
(3, '123456789', 'shad-kohler', '2023-10-23 09:34:33', '2023-10-23 09:34:33'),
(5, '123456', 'marcelino-fritsch-i', '2023-10-25 21:00:42', '2023-10-25 21:00:42'),
(6, '123456', 'prof-zetta-mclaughlin', '2023-10-25 21:08:50', '2023-10-25 21:08:50'),
(7, '123456', 'maria-wuckert-i', '2023-10-25 21:09:00', '2023-10-25 21:09:00'),
(8, '123456789', 'scarlett-armstrong', '2023-10-28 09:49:07', '2023-10-28 09:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_noktp` varchar(255) NOT NULL,
  `loker_idloker` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_noktp`, `loker_idloker`, `created_at`, `updated_at`) VALUES
(1, '123456789', 'rebecca-collins', '2023-10-23 09:34:09', '2023-10-23 09:34:09'),
(2, '123456789', 'scarlett-armstrong', '2023-10-23 09:34:21', '2023-10-23 09:34:21'),
(3, '123456789', 'fern-dare', '2023-10-23 09:34:29', '2023-10-23 09:34:29'),
(4, '123456789', 'shad-kohler', '2023-10-23 09:34:32', '2023-10-23 09:34:32'),
(5, '123456789', 'rashad-swaniawski', '2023-10-23 09:35:05', '2023-10-23 09:35:05'),
(6, '123456789', 'mrs-carolanne-lueilwitz', '2023-10-23 10:26:35', '2023-10-23 10:26:35'),
(8, '123456', 'kylie-dare', '2023-10-25 21:13:30', '2023-10-25 21:13:30'),
(9, '123456', 'lyla-wyman', '2023-10-25 21:13:50', '2023-10-25 21:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `lokers`
--

CREATE TABLE `lokers` (
  `idloker` varchar(255) NOT NULL,
  `idperusahaan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `usia_min` int(11) NOT NULL,
  `usia_max` int(11) NOT NULL,
  `gaji_min` int(11) NOT NULL,
  `gaji_max` int(11) NOT NULL,
  `nama_cp` varchar(255) NOT NULL,
  `email_cp` varchar(255) NOT NULL,
  `no_telp_cp` varchar(255) NOT NULL,
  `tgl_update` date NOT NULL,
  `tgl_aktif` date NOT NULL,
  `tgl_tutup` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokers`
--

INSERT INTO `lokers` (`idloker`, `idperusahaan`, `nama`, `tipe`, `pendidikan`, `usia_min`, `usia_max`, `gaji_min`, `gaji_max`, `nama_cp`, `email_cp`, `no_telp_cp`, `tgl_update`, `tgl_aktif`, `tgl_tutup`, `status`, `created_at`, `updated_at`) VALUES
('alana-murazik', 'Fletcher Schuster', 'Alana Murazik', 'hybrid', 'S2', 19, 38, 9490182, 71180736, 'Riley Ledner', 'donnelly.tierra@brekke.com', '1-904-908-7838', '2023-10-23', '2024-09-23', '1977-02-19', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('allison-murray', 'Earline Schroeder', 'Allison Murray', 'offline', 'S3', 17, 44, 1960874, 12621757, 'Danny Zboncak', 'dietrich.nikko@bruen.net', '830.908.1164', '2023-10-23', '2024-08-01', '2018-07-18', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('amelie-glover', 'Leilani Kunze', 'Amelie Glover', 'hybrid', 'S2', 17, 35, 8471413, 40955770, 'Mrs. Kenyatta Bruen', 'abigayle17@kohler.net', '+1-347-314-0527', '2023-10-23', '2024-01-27', '1975-06-04', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('anika-mcdermott', 'Mohammed Roob V', 'Anika McDermott', 'remote', 'D4', 20, 46, 4610354, 65786820, 'Jeffery Luettgen', 'lula30@gmail.com', '+1.531.933.9598', '2023-10-23', '2024-08-28', '2007-12-08', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('antwon-dietrich-md', 'Kyler Brekke', 'Antwon Dietrich MD', 'remote', 'D4', 18, 42, 3675930, 87508687, 'Kirstin Sawayn', 'keyshawn59@hotmail.com', '234.375.5210', '2023-10-23', '2024-02-21', '2002-06-02', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('arlie-blanda', 'Precious Hirthe Sr.', 'Arlie Blanda', 'hybrid', 'S1', 17, 42, 5257337, 30098922, 'Jacklyn Funk', 'hoppe.edmund@yahoo.com', '1-740-942-0083', '2023-10-23', '2024-02-17', '1972-12-31', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('audrey-lakin', 'Edmond Purdy PhD', 'Audrey Lakin', 'remote', 'D1', 17, 48, 9226705, 20181112, 'Prof. Daphnee Pollich', 'herzog.randall@stehr.com', '302-258-1724', '2023-10-23', '2023-11-05', '2022-07-20', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('augustine-nitzsche', 'Eliane Romaguera', 'Augustine Nitzsche', 'remote', 'S3', 19, 32, 1557534, 26421530, 'Carolanne Braun', 'jyundt@hotmail.com', '+1-540-962-4641', '2023-10-23', '2023-11-24', '1975-06-22', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('bennett-barton-dds', 'Jayne Walsh', 'Bennett Barton DDS', 'offline', 'D4', 20, 36, 7464847, 31219395, 'Dr. Cole Torp', 'charles48@simonis.com', '(443) 914-3588', '2023-10-23', '2024-01-24', '2015-04-11', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('brant-little', 'Unique Wilderman', 'Brant Little', 'hybrid', 'D4', 19, 38, 2221993, 47576760, 'Delaney Kuhic Sr.', 'ida48@yundt.com', '+15347255942', '2023-10-23', '2024-01-30', '2022-12-10', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('brooke-marks', 'Mrs. Graciela Zulauf', 'Brooke Marks', 'hybrid', 'S2', 18, 39, 4141576, 64615546, 'Austyn Cummerata', 'rippin.eve@eichmann.com', '+14788908009', '2023-10-23', '2024-08-27', '1974-10-16', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('cale-williamson', 'Devan Erdman', 'Cale Williamson', 'remote', 'S2', 20, 39, 4461425, 32014920, 'Jayda Torp', 'jay32@schumm.com', '283-562-1268', '2023-10-23', '2024-05-10', '1986-07-10', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('camilla-rempel', 'Mrs. Celine Shanahan', 'Camilla Rempel', 'remote', 'D1', 19, 44, 8031818, 84155587, 'Brant Legros', 'kian.senger@hotmail.com', '+1.321.826.1967', '2023-10-23', '2024-10-14', '2017-09-07', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('chad-boehm', 'Vernie Wiegand', 'Chad Boehm', 'offline', 'SMA', 18, 32, 1091499, 36483438, 'Beulah Pollich DVM', 'xschmidt@gmail.com', '+1-276-687-5986', '2023-10-23', '2023-12-02', '1983-10-12', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('chris-kirlin', 'Pattie Deckow', 'Chris Kirlin', 'hybrid', 'D1', 20, 47, 5167972, 38664709, 'Mrs. Haven Ferry V', 'vschmitt@hamill.com', '(479) 574-2572', '2023-10-23', '2024-01-08', '2006-03-20', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('chyna-kovacek', 'Josie Rohan', 'Chyna Kovacek', 'remote', 'S3', 18, 45, 3105404, 73272205, 'Dr. Antonio Rutherford V', 'leola.rau@yahoo.com', '470-901-0853', '2023-10-23', '2024-05-14', '2018-08-23', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('daniella-schiller', 'Janet Casper', 'Daniella Schiller', 'hybrid', 'S1', 20, 30, 4380653, 51205663, 'Beaulah Kerluke', 'pparker@anderson.com', '+1-878-497-2283', '2023-10-23', '2024-09-04', '1977-09-21', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dayton-lubowitz-iii', 'Ramon Torphy', 'Dayton Lubowitz III', 'remote', 'SMA', 19, 45, 6258135, 51795042, 'Brice Brakus PhD', 'kutch.rosario@kling.info', '631-955-0594', '2023-10-23', '2024-08-20', '2017-01-01', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('deonte-marvin-jr', 'Florencio Kulas', 'Deonte Marvin Jr.', 'offline', 'D4', 17, 36, 8239212, 67480677, 'Nettie Bahringer', 'garett.murphy@hickle.net', '+1-419-302-6735', '2023-10-23', '2024-01-20', '1991-05-13', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('devan-okon', 'Kenneth Armstrong', 'Devan O\'Kon', 'remote', 'D1', 18, 31, 7594011, 89002432, 'Lucie Bode V', 'goldner.dalton@gmail.com', '406-449-6536', '2023-10-23', '2024-09-18', '1995-07-06', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dorris-beer-dvm', 'Ericka Pagac', 'Dorris Beer DVM', 'offline', 'D4', 18, 34, 1555047, 45683214, 'Estefania Zulauf', 'morissette.dangelo@bogan.info', '878.208.6738', '2023-10-23', '2024-06-28', '1984-04-10', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dr-bridie-dietrich', 'Bradford Kiehn', 'Dr. Bridie Dietrich', 'offline', 'SMA', 17, 30, 4031363, 19397685, 'Demond Lakin DDS', 'orion.parisian@mueller.org', '+1-770-505-8880', '2023-10-23', '2024-02-22', '1981-02-13', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dr-bryon-schaden', 'Malika McCullough', 'Dr. Bryon Schaden', 'remote', 'S2', 18, 30, 3973596, 34600103, 'Carlie Dicki', 'xsimonis@yahoo.com', '308.506.0430', '2023-10-23', '2024-03-06', '1974-10-17', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dr-carissa-daniel-iv', 'Dr. Tad King MD', 'Dr. Carissa Daniel IV', 'hybrid', 'D2', 17, 31, 7532725, 88810781, 'Anais Mueller', 'hazel.schuster@marks.com', '239-430-3322', '2023-10-23', '2024-05-15', '2022-09-10', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dr-denis-mueller', 'Amanda Russel', 'Dr. Denis Mueller', 'remote', 'S3', 19, 38, 9596972, 43715148, 'Nicolas Lubowitz', 'carley93@nikolaus.com', '1-541-903-5376', '2023-10-23', '2023-12-03', '1971-06-04', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dr-elyse-greenholt', 'Kariane Quitzon', 'Dr. Elyse Greenholt', 'offline', 'D3', 18, 35, 8164124, 22294653, 'Dr. Gayle Gislason II', 'volkman.miracle@hotmail.com', '+1.248.200.7239', '2023-10-23', '2023-10-23', '2005-07-29', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dr-gussie-shields-i', 'Dr. Anahi Grant IV', 'Dr. Gussie Shields I', 'hybrid', 'D2', 18, 39, 9566863, 61452898, 'Mr. Raven Breitenberg', 'bethany56@yahoo.com', '503.584.2029', '2023-10-23', '2024-09-22', '1986-12-16', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dr-mellie-howe', 'Dr. Lynn Senger V', 'Dr. Mellie Howe', 'offline', 'S2', 18, 30, 7853906, 35755526, 'Cornell Kerluke', 'plebsack@langosh.com', '+19865584600', '2023-10-23', '2024-07-06', '1971-03-23', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dr-miles-lebsack', 'Dr. Arvid Schroeder PhD', 'Dr. Miles Lebsack', 'remote', 'SMA', 18, 32, 1787862, 46303307, 'Dr. Annetta DuBuque', 'hirthe.rae@altenwerth.com', '(734) 260-5285', '2023-10-23', '2023-10-21', '1986-03-03', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('dusty-purdy-dds', 'Jeanie Olson', 'Dusty Purdy DDS', 'offline', 'S3', 19, 34, 7453644, 49083521, 'Mark Haag', 'murphy.stoltenberg@gmail.com', '+1-682-790-2276', '2023-10-23', '2024-04-09', '2003-10-02', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('easter-hermann', 'Fermin Weimann', 'Easter Hermann', 'hybrid', 'D1', 20, 34, 8835919, 70906425, 'Annabell O\'Conner', 'mertz.kathryn@yahoo.com', '+1-878-398-3219', '2023-10-23', '2024-07-20', '1978-12-30', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('edgar-homenick-dvm', 'Dr. Bobbie Nikolaus', 'Edgar Homenick DVM', 'hybrid', 'D4', 18, 44, 7000446, 46320493, 'Meggie Zboncak', 'lborer@yahoo.com', '(845) 773-9091', '2023-10-23', '2024-01-30', '1975-04-11', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('elliott-will', 'Asa Grady', 'Elliott Will', 'hybrid', 'D3', 17, 33, 4405544, 72710623, 'Miss Vella Jones PhD', 'nona.kautzer@yahoo.com', '(534) 903-6171', '2023-10-23', '2023-10-20', '1983-07-10', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('elza-hermiston', 'Rebekah Anderson I', 'Elza Hermiston', 'remote', 'D2', 18, 40, 6767950, 20132444, 'Obie Stracke', 'peter.stiedemann@gmail.com', '281-626-9867', '2023-10-23', '2024-01-24', '1995-08-11', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('enoch-goyette', 'Dewitt McCullough', 'Enoch Goyette', 'hybrid', 'SMA', 19, 44, 6863074, 72310719, 'Orland Mayer', 'hermiston.cara@ward.com', '401.273.4341', '2023-10-23', '2024-09-06', '2005-08-31', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('fern-dare', 'Prof. Christophe Luettgen I', 'Fern Dare', 'remote', 'S1', 18, 39, 2827386, 49615617, 'Jamaal Altenwerth', 'brody.mccullough@effertz.com', '(361) 957-2073', '2023-10-23', '2024-01-09', '1995-05-07', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('frederic-kirlin-iii', 'Noelia Yost Jr.', 'Frederic Kirlin III', 'remote', 'D3', 17, 50, 1080144, 81981687, 'Mrs. Autumn Miller', 'jazlyn.pacocha@reynolds.com', '(956) 357-7166', '2023-10-23', '2024-09-08', '2008-10-20', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('garett-okeefe', 'Keara Keebler', 'Garett O\'Keefe', 'hybrid', 'S1', 17, 39, 9662975, 53108358, 'Mrs. Marian Kozey', 'sauer.eugenia@streich.com', '+1-443-601-8816', '2023-10-23', '2024-09-11', '2016-06-28', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('gene-mraz', 'Luis Abernathy', 'Gene Mraz', 'remote', 'S2', 17, 50, 5418806, 27929815, 'Lourdes Kassulke', 'ottis20@dicki.info', '+1 (864) 775-9657', '2023-10-23', '2024-09-17', '2004-03-09', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('green-hilpert-md', 'Furman Jaskolski', 'Green Hilpert MD', 'hybrid', 'D2', 17, 37, 8267445, 14750871, 'Prof. Jamil Ullrich Sr.', 'rafaela32@yahoo.com', '1-938-269-4449', '2023-10-23', '2024-04-28', '1994-09-22', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('henriette-hoeger', 'Elvie Schultz', 'Henriette Hoeger', 'hybrid', 'SMA', 19, 32, 2218854, 18572338, 'Dedric Sawayn V', 'zboncak.amir@hotmail.com', '+1.302.853.7121', '2023-10-23', '2024-05-18', '1989-01-18', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('hettie-vonrueden', 'Prof. Assunta Schmeler', 'Hettie VonRueden', 'remote', 'SMA', 20, 45, 8406042, 98453240, 'Daniela VonRueden', 'mbeatty@spinka.net', '+1 (458) 477-5987', '2023-10-23', '2024-01-26', '2001-10-01', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('jacques-jakubowski', 'Haylie Adams', 'Jacques Jakubowski', 'hybrid', 'S2', 19, 33, 2392481, 59510092, 'Haven Murazik MD', 'nsipes@yahoo.com', '+1.870.623.3758', '2023-10-23', '2024-01-20', '2016-10-23', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('jayson-baumbach', 'Mrs. Alisa Waelchi', 'Jayson Baumbach', 'remote', 'D3', 18, 32, 7862548, 76746489, 'Dr. Tyrique Daugherty', 'zhartmann@stracke.com', '+1 (484) 429-0346', '2023-10-23', '2024-03-31', '2015-08-28', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('jerel-thompson', 'Dr. Rowan Goyette', 'Jerel Thompson', 'remote', 'D1', 19, 38, 3633683, 25636216, 'Michelle Yundt', 'rosalia78@gmail.com', '+1-423-949-0123', '2023-10-23', '2024-04-12', '1989-12-29', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('jovanny-herman', 'Billie Effertz Jr.', 'Jovanny Herman', 'offline', 'S2', 19, 45, 3306888, 56211823, 'Moshe Okuneva', 'xnitzsche@gmail.com', '+1.904.621.6330', '2023-10-23', '2024-06-23', '2019-08-05', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('joyce-cronin', 'Ernie Gislason', 'Joyce Cronin', 'remote', 'D3', 19, 45, 9028529, 92002593, 'Carmine Torphy', 'rosenbaum.kendra@leannon.com', '+1.661.333.0933', '2023-10-23', '2024-02-03', '2008-01-16', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('katelyn-reinger-jr', 'Tate Schulist', 'Katelyn Reinger Jr.', 'remote', 'S2', 17, 35, 4257493, 46734851, 'Marcos Streich', 'marjorie.bogan@gmail.com', '(920) 665-9847', '2023-10-23', '2024-04-23', '1983-06-18', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('kaylin-schinner', 'Angus Abshire PhD', 'Kaylin Schinner', 'offline', 'S3', 20, 47, 4953726, 71040132, 'Clifton O\'Hara PhD', 'laverne97@nitzsche.info', '650-463-1623', '2023-10-23', '2024-08-24', '1979-02-08', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('kelton-rath-iii', 'Mr. Johnson Hegmann', 'Kelton Rath III', 'hybrid', 'SMA', 18, 41, 9070841, 38398538, 'Helene McClure Jr.', 'zula77@gmail.com', '+1-646-667-0259', '2023-10-23', '2024-04-24', '2001-05-04', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('krystina-green', 'Federico Schulist MD', 'Krystina Green', 'hybrid', 'D1', 20, 33, 8652889, 71377240, 'Walton Casper V', 'sporer.kyla@veum.biz', '(478) 203-6807', '2023-10-23', '2024-05-18', '2013-05-30', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('kylie-dare', 'Shania Thiel', 'Kylie Dare', 'hybrid', 'S2', 17, 41, 8647925, 90718658, 'Janessa Wisoky', 'heller.helga@rutherford.com', '848-672-1107', '2023-10-23', '2023-10-29', '1983-08-07', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('laron-gleason', 'Miss Bonita Kessler MD', 'Laron Gleason', 'remote', 'S3', 19, 30, 4995562, 32667147, 'Brenda Little', 'hickle.malvina@yahoo.com', '+1.520.273.1697', '2023-10-23', '2024-03-22', '1982-02-02', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('lawson-abernathy', 'Mckenna Hagenes', 'Lawson Abernathy', 'remote', 'D2', 19, 38, 7625434, 77582257, 'Prof. Nia Dibbert', 'bethel.muller@gmail.com', '+1.562.615.8646', '2023-10-23', '2024-09-30', '2001-02-07', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('leonie-mccullough-phd', 'Dayton Ortiz', 'Leonie McCullough PhD', 'offline', 'SMA', 19, 49, 8769834, 50160403, 'Yoshiko Vandervort IV', 'elinor36@shields.com', '1-678-215-5976', '2023-10-23', '2024-07-12', '2005-01-23', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('lexie-crooks', 'Gabe Mosciski', 'Lexie Crooks', 'offline', 'S1', 20, 39, 1552756, 99872736, 'Destin Tremblay', 'kenneth64@price.net', '351-633-8916', '2023-10-23', '2024-04-22', '2018-07-28', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('lily-reilly', 'Prof. Sister Reilly', 'Lily Reilly', 'remote', 'S1', 17, 47, 5081113, 86892332, 'Prof. Sedrick Lubowitz', 'afahey@pfeffer.com', '1-845-529-8620', '2023-10-23', '2024-09-11', '1990-12-01', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('lorenza-wunsch', 'Prof. Kristy Kshlerin', 'Lorenza Wunsch', 'offline', 'D1', 18, 44, 9176353, 28120695, 'Dr. Lavada Morar III', 'bfadel@kerluke.com', '+1-415-210-2737', '2023-10-23', '2024-04-29', '1975-05-24', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('lyla-wyman', 'Tyrique Rutherford', 'Lyla Wyman', 'offline', 'D3', 20, 30, 3427084, 19978041, 'Tara Hamill', 'grant.camylle@beatty.com', '239-736-7204', '2023-10-23', '2023-11-06', '2000-01-13', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('maiya-abernathy', 'Royal Hartmann', 'Maiya Abernathy', 'hybrid', 'D4', 19, 41, 6843706, 13234540, 'Mr. Benny Ward I', 'ooconnell@nitzsche.info', '216-374-5438', '2023-10-23', '2024-05-03', '1978-01-29', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('manuela-gutmann-i', 'Titus Collier', 'Manuela Gutmann I', 'hybrid', 'D4', 20, 43, 5100916, 67316279, 'Juwan Graham', 'growe@yahoo.com', '520.248.4627', '2023-10-23', '2024-01-04', '1991-07-16', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('marcel-maggio', 'Amelia Howe MD', 'Marcel Maggio', 'offline', 'D2', 17, 36, 5677730, 81641695, 'Miss Kyla Mueller III', 'funk.delmer@johnston.org', '458.463.5741', '2023-10-23', '2024-05-09', '1971-11-10', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('marcelino-fritsch-i', 'Mr. Travon Kerluke PhD', 'Marcelino Fritsch I', 'hybrid', 'D2', 20, 31, 1821285, 92866543, 'Daren O\'Keefe', 'tito95@gmail.com', '+1 (662) 961-5230', '2023-10-23', '2023-11-13', '1993-08-17', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('maria-wuckert-i', 'Ephraim Beer', 'Maria Wuckert I', 'remote', 'D2', 19, 45, 6728800, 64421883, 'Germaine Williamson I', 'qwolff@hotmail.com', '1-424-393-4909', '2023-10-23', '2023-12-12', '1973-09-15', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('martina-littel', 'Dayton Marks', 'Martina Littel', 'hybrid', 'D4', 17, 39, 8131127, 21142735, 'Marta Gerlach', 'borer.shad@yahoo.com', '678-521-4168', '2023-10-23', '2024-07-01', '2004-01-30', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('meaghan-dietrich', 'Calista Hagenes DVM', 'Meaghan Dietrich', 'offline', 'D3', 19, 30, 7234473, 72236324, 'Norberto Orn', 'nikolaus.murl@lakin.com', '1-954-416-1334', '2023-10-23', '2024-04-28', '1985-07-26', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('miss-alia-haag', 'Stella Purdy', 'Miss Alia Haag', 'offline', 'S3', 18, 38, 4129868, 74762598, 'Daphney Abbott', 'scotty.jacobs@hotmail.com', '+1-469-203-4979', '2023-10-23', '2024-10-16', '1989-02-05', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('miss-olga-oconnell-sr', 'Ms. Rachelle Emmerich', 'Miss Olga O\'Connell Sr.', 'offline', 'D4', 19, 43, 5901098, 21176421, 'Laura Will', 'claudine99@renner.com', '+1 (361) 632-3282', '2023-10-23', '2024-07-27', '2003-10-24', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('modesto-fay-ii', 'Chelsey Bruen', 'Modesto Fay II', 'remote', 'D2', 18, 30, 6552725, 68673899, 'Hassie West III', 'nader.sabina@yahoo.com', '1-828-268-0436', '2023-10-23', '2024-03-09', '1973-10-04', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('mr-alexis-bradtke-dvm', 'Dr. Asia Lang', 'Mr. Alexis Bradtke DVM', 'remote', 'D2', 17, 41, 4424078, 59093803, 'Prof. Leone Dooley', 'lakin.vito@wiza.com', '630-553-7119', '2023-10-23', '2024-05-14', '1984-02-16', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('mr-billy-oconner-md', 'Malika Auer', 'Mr. Billy O\'Conner MD', 'offline', 'S3', 19, 50, 9751270, 23531022, 'Zachariah Connelly', 'phomenick@considine.com', '+1.940.356.1652', '2023-10-23', '2024-01-12', '1987-08-24', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('mr-magnus-weber-dvm', 'Prof. Erick Heathcote Sr.', 'Mr. Magnus Weber DVM', 'remote', 'D2', 17, 45, 7914972, 80445322, 'Rhiannon Shanahan', 'schmitt.alberta@gmail.com', '+1-302-242-8737', '2023-10-23', '2024-04-13', '2010-04-06', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('mr-mckenzie-rempel', 'Dr. Karl Walter II', 'Mr. Mckenzie Rempel', 'remote', 'S3', 19, 49, 8313960, 44228257, 'Miss Joanne Rosenbaum IV', 'reyes11@macejkovic.com', '276-357-5597', '2023-10-23', '2023-10-25', '2000-07-06', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('mrs-carolanne-lueilwitz', 'Yasmin Hirthe', 'Mrs. Carolanne Lueilwitz', 'offline', 'SMA', 20, 50, 4177381, 34127439, 'Ryann Ritchie', 'lhowe@gmail.com', '(720) 976-8753', '2023-10-23', '2023-10-31', '2002-05-13', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('mrs-joannie-bosco', 'Delpha Boyer I', 'Mrs. Joannie Bosco', 'offline', 'SMA', 20, 30, 9707522, 55453791, 'Denis Pagac Sr.', 'eschultz@gmail.com', '+1.909.672.7048', '2023-10-23', '2024-03-30', '2022-02-24', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('ms-jacky-farrell', 'Pearline Olson', 'Ms. Jacky Farrell', 'remote', 'S3', 17, 49, 1041580, 39363621, 'Al Ferry', 'hyatt.megane@moen.com', '1-330-975-4114', '2023-10-23', '2024-07-24', '2020-01-21', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('ms-kayli-hills-iv', 'Amparo Schiller', 'Ms. Kayli Hills IV', 'hybrid', 'D1', 19, 33, 3575766, 78260100, 'Sherwood Stokes', 'deja.kunze@hotmail.com', '216.932.3563', '2023-10-23', '2023-12-24', '1994-04-01', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('mustafa-mann', 'Pauline Corwin', 'Mustafa Mann', 'hybrid', 'S1', 20, 35, 2870383, 79621169, 'Cindy Oberbrunner', 'fritsch.shana@considine.net', '+14174948146', '2023-10-23', '2024-09-18', '1973-05-08', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('nels-lesch', 'Matilda O\'Hara', 'Nels Lesch', 'remote', 'D4', 18, 36, 9677889, 97919812, 'Hilton Hermann', 'emiliano.runolfsson@grant.com', '+1-316-336-8139', '2023-10-23', '2024-08-08', '1979-10-27', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('patience-barton', 'Jacky Yundt', 'Patience Barton', 'remote', 'D1', 17, 31, 3968878, 30362950, 'Ransom Howell', 'charlie78@weissnat.com', '480.731.0714', '2023-10-23', '2023-11-21', '1995-07-24', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('pauline-kilback', 'Dr. Audrey Emmerich II', 'Pauline Kilback', 'hybrid', 'S1', 19, 38, 3213453, 74426594, 'Natalie Friesen Jr.', 'kub.bridget@yahoo.com', '+1 (430) 944-6350', '2023-10-23', '2024-05-25', '1974-08-27', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('prof-gisselle-mccullough', 'Aubree Ullrich', 'Prof. Gisselle McCullough', 'remote', 'D4', 19, 34, 1937917, 28633497, 'Vicenta Bins', 'emmie60@hotmail.com', '830-886-7823', '2023-10-23', '2023-12-05', '2019-12-01', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('prof-helena-paucek', 'Frances O\'Hara Jr.', 'Prof. Helena Paucek', 'remote', 'D4', 17, 46, 7226155, 71294435, 'Mr. Mateo Kuhn', 'tstoltenberg@hotmail.com', '(520) 877-7109', '2023-10-23', '2024-04-07', '2010-05-27', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('prof-jordi-watsica', 'Dr. Verdie McCullough Sr.', 'Prof. Jordi Watsica', 'remote', 'D3', 19, 31, 2101609, 73278943, 'Alejandra Daniel', 'ymacejkovic@macejkovic.com', '608.563.0180', '2023-10-23', '2024-09-11', '1981-04-24', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('prof-nichole-grant-iii', 'Genoveva Koss', 'Prof. Nichole Grant III', 'hybrid', 'SMA', 18, 33, 9597636, 26154219, 'Dr. Zakary Emard Sr.', 'moshe.russel@bode.com', '224.771.6478', '2023-10-23', '2024-05-14', '2020-12-01', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('prof-virginia-greenholt', 'Ms. Kyla Ebert V', 'Prof. Virginia Greenholt', 'offline', 'SMA', 19, 50, 2447882, 54090450, 'Jany Durgan MD', 'jeremie.gusikowski@yahoo.com', '+1-769-985-5787', '2023-10-23', '2024-03-15', '1978-09-09', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('prof-zetta-mclaughlin', 'Mr. Nikko O\'Connell', 'Prof. Zetta McLaughlin', 'offline', 'D2', 18, 50, 3870186, 94757935, 'Miss Else Koss', 'yfunk@stroman.org', '+18305483178', '2023-10-23', '2023-12-10', '1981-04-07', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('quinton-borer', 'Dayana Hickle', 'Quinton Borer', 'hybrid', 'D3', 20, 32, 2510239, 19285951, 'Jazmin Daugherty', 'trantow.erica@yahoo.com', '+1.540.750.4220', '2023-10-23', '2024-08-08', '2017-08-22', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('rashad-swaniawski', 'Dr. Matt Borer', 'Rashad Swaniawski', 'remote', 'D3', 18, 49, 2227718, 15945954, 'Mrs. Miracle Olson DDS', 'qkovacek@lehner.com', '(747) 918-2661', '2023-10-23', '2023-11-15', '2016-02-02', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('rebecca-collins', 'Coty Cole PhD', 'Rebecca Collins', 'offline', 'S1', 17, 35, 6900619, 49344977, 'Berniece McLaughlin', 'nmertz@heathcote.com', '+1.445.401.3863', '2023-10-23', '2023-10-24', '2002-07-26', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('rowan-rolfson', 'Rodrick Nitzsche', 'Rowan Rolfson', 'offline', 'S3', 19, 37, 5863124, 47334319, 'Ferne Purdy PhD', 'ferry.cali@yahoo.com', '+1.435.806.2153', '2023-10-23', '2023-11-08', '1984-07-26', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('samantha-satterfield', 'Leatha McClure', 'Samantha Satterfield', 'offline', 'D1', 18, 40, 3442283, 53654159, 'Charity Cummings', 'keeling.baby@gmail.com', '+1-307-307-1959', '2023-10-23', '2024-05-11', '1973-10-28', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('scarlett-armstrong', 'Elvera Ryan', 'Scarlett Armstrong', 'remote', 'S1', 18, 44, 4688338, 29445541, 'Mrs. Clotilde Wisoky', 'korn@howe.com', '(323) 508-0224', '2023-10-23', '2023-10-31', '1974-05-22', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('shad-kohler', 'Kathlyn Wehner', 'Shad Kohler', 'hybrid', 'S1', 20, 47, 4122996, 89272582, 'Fannie Hintz', 'toy.johnpaul@yahoo.com', '+1 (657) 224-5606', '2023-10-23', '2024-02-13', '2008-03-18', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('thurman-breitenberg', 'Vickie Rippin', 'Thurman Breitenberg', 'offline', 'S3', 18, 50, 2113225, 82627120, 'Alexandro Rowe', 'aschaefer@wehner.com', '1-281-221-9594', '2023-10-23', '2024-05-21', '2021-10-11', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('trace-hudson-phd', 'Fiona Rogahn', 'Trace Hudson PhD', 'offline', 'SMA', 18, 50, 9698741, 88874255, 'Amparo Paucek', 'aflatley@cole.com', '1-351-442-8691', '2023-10-23', '2023-11-18', '2022-10-29', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('ulices-upton', 'Mr. Gaetano Weimann PhD', 'Ulices Upton', 'remote', 'D3', 19, 49, 5405654, 24557507, 'Litzy Wehner', 'ramona18@balistreri.com', '1-952-266-9215', '2023-10-23', '2024-04-11', '1983-11-27', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('victor-heaney-md', 'Kendra Thiel', 'Victor Heaney MD', 'remote', 'S1', 17, 31, 3918424, 83766031, 'Billie Roberts', 'metz.flavio@gmail.com', '(930) 325-1112', '2023-10-23', '2024-08-13', '1998-04-27', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('wellington-simonis', 'Jordon Greenfelder DVM', 'Wellington Simonis', 'offline', 'D4', 18, 48, 9868574, 32660878, 'Christa Koelpin', 'jamison55@watsica.com', '1-731-888-6054', '2023-10-23', '2023-12-28', '1972-04-24', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27'),
('westley-yundt', 'Kaylin Baumbach', 'Westley Yundt', 'offline', 'D1', 18, 46, 4521646, 89200668, 'Delaney Orn', 'sierra.kessler@williamson.com', '+13043517334', '2023-10-23', '2024-06-03', '1982-11-09', 1, '2023-10-23 09:29:27', '2023-10-23 09:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(81, '2014_10_12_000000_create_users_table', 1),
(82, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(83, '2019_08_19_000000_create_failed_jobs_table', 1),
(84, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(85, '2023_10_11_090606_create_pencakers_table', 1),
(86, '2023_10_11_113937_create_lokers_table', 1),
(87, '2023_10_13_105754_create_likes_table', 1),
(88, '2023_10_14_160551_create_apply_lokers_table', 1),
(89, '2023_10_16_171625_create_tahapans_table', 1),
(90, '2023_10_16_173654_create_tahapan_applies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pencakers`
--

CREATE TABLE `pencakers` (
  `noktp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kota` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `tgl_daftar` date NOT NULL,
  `file_ktp` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahapans`
--

CREATE TABLE `tahapans` (
  `idtahapan` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahapans`
--

INSERT INTO `tahapans` (`idtahapan`, `nama`) VALUES
(1, 'Menunggu Seleksi Administrasi'),
(2, 'Lulus Seleksi Administrasi'),
(3, 'Lulus Seleksi Wawancara');

-- --------------------------------------------------------

--
-- Table structure for table `tahapan_applies`
--

CREATE TABLE `tahapan_applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idapply` bigint(20) UNSIGNED NOT NULL,
  `idtahapan` bigint(20) UNSIGNED NOT NULL,
  `nilai` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahapan_applies`
--

INSERT INTO `tahapan_applies` (`id`, `idapply`, `idtahapan`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 0, '2023-10-23 09:34:11', '2023-10-23 09:34:11'),
(3, 3, 3, 1, '2023-10-23 09:34:33', '2023-10-23 09:34:33'),
(5, 5, 1, 1, '2023-10-25 21:00:42', '2023-10-25 21:00:42'),
(6, 6, 3, 1, '2023-10-25 21:08:50', '2023-10-25 21:08:50'),
(7, 7, 3, 0, '2023-10-25 21:09:00', '2023-10-25 21:09:00'),
(8, 8, 1, 1, '2023-10-28 09:49:07', '2023-10-28 09:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `noktp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kota` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `tgl_daftar` date NOT NULL,
  `file_ktp` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`noktp`, `nama`, `password`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `kota`, `email`, `pendidikan`, `no_telp`, `foto`, `tgl_daftar`, `file_ktp`, `created_at`, `updated_at`) VALUES
('123456', 'Faiqq', '$2y$10$pYg..B6csyZnxMSXhioPMOsQnSdYVGd1PYnoKyEJKEkH6vN7utrBS', 1, 'semarang', '2000-06-13', 'semarang', 'faiq@gmail.com', 'D2', '08215544658', 'foto-pencaker/18q9jDLV5h5yAmiA2hoO5lRLDGmqOAcYbzXZ2kBX.png', '2023-10-26', 'file-ktp/iYCYed0NUybSY3YXhvSCT1V3bFnwYQA5XRjAdjQL.png', '2023-10-25 20:58:32', '2023-10-25 21:01:37'),
('123456789', 'Varrel', '$2y$10$JKX6mBYmLWKt911JyJTj9.mdbEZj8m0JZQ2q9EyPCn50GIVVHRmc6', 1, 'Jakrta', '2003-01-01', 'Jakarta', 'varrel@gmail.com', 'S1', '098765678987', 'foto-pencaker/TP01KVCNwtCKZunPFnLzILb4u1PMXOJ1H1o8HNAS.png', '2023-10-23', 'file-ktp/Yz6T0E5bg5iZHhE2SQzm6TNzG5ZKxMzWqVr4fif1.png', '2023-10-23 09:33:12', '2023-10-23 10:16:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_lokers`
--
ALTER TABLE `apply_lokers`
  ADD PRIMARY KEY (`idapply`),
  ADD KEY `apply_lokers_user_noktp_foreign` (`user_noktp`),
  ADD KEY `apply_lokers_loker_idloker_foreign` (`loker_idloker`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_noktp_foreign` (`user_noktp`),
  ADD KEY `likes_loker_idloker_foreign` (`loker_idloker`);

--
-- Indexes for table `lokers`
--
ALTER TABLE `lokers`
  ADD PRIMARY KEY (`idloker`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pencakers`
--
ALTER TABLE `pencakers`
  ADD PRIMARY KEY (`noktp`),
  ADD UNIQUE KEY `pencakers_email_unique` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tahapans`
--
ALTER TABLE `tahapans`
  ADD PRIMARY KEY (`idtahapan`);

--
-- Indexes for table `tahapan_applies`
--
ALTER TABLE `tahapan_applies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahapan_applies_idapply_foreign` (`idapply`),
  ADD KEY `tahapan_applies_idtahapan_foreign` (`idtahapan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`noktp`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_lokers`
--
ALTER TABLE `apply_lokers`
  MODIFY `idapply` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahapans`
--
ALTER TABLE `tahapans`
  MODIFY `idtahapan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tahapan_applies`
--
ALTER TABLE `tahapan_applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_lokers`
--
ALTER TABLE `apply_lokers`
  ADD CONSTRAINT `apply_lokers_loker_idloker_foreign` FOREIGN KEY (`loker_idloker`) REFERENCES `lokers` (`idloker`) ON DELETE CASCADE,
  ADD CONSTRAINT `apply_lokers_user_noktp_foreign` FOREIGN KEY (`user_noktp`) REFERENCES `users` (`noktp`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_loker_idloker_foreign` FOREIGN KEY (`loker_idloker`) REFERENCES `lokers` (`idloker`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_noktp_foreign` FOREIGN KEY (`user_noktp`) REFERENCES `users` (`noktp`) ON DELETE CASCADE;

--
-- Constraints for table `tahapan_applies`
--
ALTER TABLE `tahapan_applies`
  ADD CONSTRAINT `tahapan_applies_idapply_foreign` FOREIGN KEY (`idapply`) REFERENCES `apply_lokers` (`idapply`) ON DELETE CASCADE,
  ADD CONSTRAINT `tahapan_applies_idtahapan_foreign` FOREIGN KEY (`idtahapan`) REFERENCES `tahapans` (`idtahapan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
