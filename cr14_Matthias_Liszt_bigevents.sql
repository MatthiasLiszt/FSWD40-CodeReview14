-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2018 at 02:43 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr14_Matthias_Liszt_bigevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `startdate`, `enddate`, `description`, `image`, `capacity`, `email`, `phonenumber`, `address`, `url`, `type`) VALUES
(2, 'The Magic Flute', '2018-07-01', '2018-07-07', 'an opera for little children', 'kinderzauberfloete.jpg', 333, 'flute@nowhere.com', '+345325432', 'Laudongasse 36, 1080 Wien', 'www.magicflute.com', 'theater'),
(3, 'Afrikatage', '2018-07-30', '2018-07-31', 'an open air festival on the Danube island', 'afrikatage.jpg', 201, 'afrika@nowhere.com', '+23345325432', 'Donauinsel, 1200 Wien', 'www.afrikatage.de', 'music'),
(4, 'Judas Priest Concert', '2018-08-13', '2018-08-13', 'the famous band plays life at Vienna Stadthalle', 'judaspriest.jpg', 201, 'judas@nowhere.com', '+98345325432', 'Stadthalle, 1080 Wien', 'www.judaspriest.com', 'music'),
(5, 'Kino unter Sternen', '2018-07-02', '2018-08-31', 'a great open air cinema at Vienna\'s famous park near the center', 'kinountersternen.jpg', 201, 'kino@nowhere.com', '+42345325432', 'Karlsplatz, 1040 Wien', 'www.kinountersternen.at', 'movie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
