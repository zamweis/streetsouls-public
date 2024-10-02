-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2020 at 07:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streetsouls`
--

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `language`, `content`) VALUES
(1, 'de', 'Sie ist so ein toller Hund'),
(1, 'en', 'Best doggo in this world. I love him'),
(1, 'fr', 'Mignon! Elle est magnifique'),
(1, 'lu', 'Kuck wei süß hatt ass'),
(2, 'de', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(2, 'en', 'Lorem ipsuzm'),
(2, 'fr', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(2, 'lu', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(3, 'de', 'Ganz lieber Hundi. Immer sehr nett'),
(3, 'en', 'Verry nice doggo. Very calm'),
(3, 'fr', 'Il est tellement mignon!!! <3'),
(3, 'lu', 'Gudden Muppi. Ganz brav'),
(4, 'de', 'Sie ist so ein toller Hund'),
(4, 'en', 'Best doggo in this world. I love him'),
(4, 'fr', 'Mignon! Elle est magnifique'),
(4, 'lu', 'Kuck wei süß hatt ass'),
(5, 'de', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(5, 'en', 'Lorem ipsuzm'),
(5, 'fr', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(5, 'lu', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(6, 'de', 'Ganz lieber Hundi. Immer sehr nett'),
(6, 'en', 'Verry nice doggo. Very calm'),
(6, 'fr', 'Il est tellement mignon!!! <3'),
(6, 'lu', 'Gudden Muppi. Ganz brav'),
(7, 'de', 'Sie ist so ein toller Hund'),
(7, 'en', 'Best doggo in this world. I love him'),
(7, 'fr', 'Mignon! Elle est magnifique'),
(7, 'lu', 'Kuck wei süß hatt ass'),
(8, 'de', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(8, 'en', 'Lorem ipsuzm'),
(8, 'fr', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(8, 'lu', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(9, 'de', 'Ganz lieber Hundi. Immer sehr nett'),
(9, 'en', 'Verry nice doggo. Very calm'),
(9, 'fr', 'Il est tellement mignon!!! <3'),
(9, 'lu', 'Gudden Muppi. Ganz brav'),
(10, 'de', 'Sie ist so ein toller Hund'),
(10, 'en', 'Best doggo in this world. I love him'),
(10, 'fr', 'Mignon! Elle est magnifique'),
(10, 'lu', 'Kuck wei süß hatt ass'),
(11, 'de', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(11, 'en', 'Lorem ipsuzm'),
(11, 'fr', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),
(11, 'lu', 'ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `race_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `race_id`, `date`) VALUES
(1, 'Bella', 1, '2020-05-19'),
(2, 'Rufus', 2, '2020-05-19'),
(3, 'Dede', 0, '2020-05-19'),
(4, 'Canna', 2, '2020-05-21'),
(5, 'Maxi', 0, '2020-05-19'),
(6, 'Bella', 1, '2020-05-19'),
(7, 'Rufus', 2, '2020-05-19'),
(8, 'Dede', 0, '2020-05-19'),
(9, 'Canna', 2, '2020-05-21'),
(10, 'Maxi', 0, '2020-05-19'),
(11, 'Canna', 2, '2020-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

CREATE TABLE `race` (
  `id` int(11) NOT NULL,
  `language` varchar(2) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`id`, `language`, `content`) VALUES
(0, 'de', 'Mischling'),
(0, 'en', 'hybrid'),
(0, 'fr', 'hybride'),
(0, 'lu', 'Baschtert'),
(1, 'de', 'Labrador'),
(1, 'en', 'Labrador'),
(1, 'fr', 'Labrador'),
(1, 'lu', 'Labrador'),
(2, 'de', 'Schäferhund'),
(2, 'en', 'German shepherd'),
(2, 'fr', 'Berger allemand'),
(2, 'lu', 'Schäferhond'),
(3, 'de', 'Chihuahua'),
(3, 'en', 'Chihuahua'),
(3, 'fr', 'Chihuahua'),
(3, 'lu', 'Chihuahua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`,`language`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id`,`language`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `race`
--
ALTER TABLE `race`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
