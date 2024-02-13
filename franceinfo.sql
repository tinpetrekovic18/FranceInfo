-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 02:03 PM
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
-- Database: `franceinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `username`, `lozinka`, `razina`) VALUES
(3, 'Administrator', 'Baze', 'admin1', '$2y$10$Zr.z7XhUshi4uhTT2ad..OCUyMJ7z2.SrJjq6UKxB2Moitno2IHSm', 0),
(4, 'petrekovic', 'petrekovic', 'petrekovic', '$2y$10$iQgvTiO1BANmM57Tge58cehuSJlihnz7HdNqKwCyEX0APzfVehoBy', 0),
(5, 'noviadmin', 'noviadmin', 'noviadmin', '$2y$10$mHziZAoNYqbEYVZbVN4PtOmcjqS9.vRZ/x7Wh4D9sw1KhajeJ/I62', 0),
(6, 'proba12', 'proba12', 'proba12', '$2y$10$KOql78Y6UXL22NDVkpWR8eCIx.zdZaT3BMBaQ1wx1T1eBQUyol0qC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(64) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `slika` varchar(64) NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `naslov`, `sazetak`, `tekst`, `kategorija`, `slika`, `arhiva`) VALUES
(6, 'Lorem ipsum-Promjena', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Facilisis leo vel fringilla est ullamcorper. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. In egestas erat imperdiet sed euismod. Justo donec enim diam vulputate ut pharetra sit amet aliquam. In iaculis nunc sed augue. Lobortis scelerisque fermentum dui faucibus in. Sed enim ut sem viverra aliquet. Amet justo donec enim diam. Nunc id cursus metus aliquam eleifend mi in nulla. Pretium aenean pharetra magna ac.', 'Sport', '1.jpg', 0),
(7, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Facilisis leo vel fringilla est ullamcorper. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. In egestas erat imperdiet sed euismod. Justo donec enim diam vulputate ut pharetra sit amet aliquam. In iaculis nunc sed augue. Lobortis scelerisque fermentum dui faucibus in. Sed enim ut sem viverra aliquet. Amet justo donec enim diam. Nunc id cursus metus aliquam eleifend mi in nulla. Pretium aenean pharetra magna ac.', 'sport', '2.jpg', 0),
(8, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Facilisis leo vel fringilla est ullamcorper. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. In egestas erat imperdiet sed euismod. Justo donec enim diam vulputate ut pharetra sit amet aliquam. In iaculis nunc sed augue. Lobortis scelerisque fermentum dui faucibus in. Sed enim ut sem viverra aliquet. Amet justo donec enim diam. Nunc id cursus metus aliquam eleifend mi in nulla. Pretium aenean pharetra magna ac.', 'sport', '3.jpg', 0),
(9, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Facilisis leo vel fringilla est ullamcorper. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. In egestas erat imperdiet sed euismod. Justo donec enim diam vulputate ut pharetra sit amet aliquam. In iaculis nunc sed augue. Lobortis scelerisque fermentum dui faucibus in. Sed enim ut sem viverra aliquet. Amet justo donec enim diam. Nunc id cursus metus aliquam eleifend mi in nulla. Pretium aenean pharetra magna ac.', 'sport', '4.jpg', 0),
(10, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Facilisis leo vel fringilla est ullamcorper. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. In egestas erat imperdiet sed euismod. Justo donec enim diam vulputate ut pharetra sit amet aliquam. In iaculis nunc sed augue. Lobortis scelerisque fermentum dui faucibus in. Sed enim ut sem viverra aliquet. Amet justo donec enim diam. Nunc id cursus metus aliquam eleifend mi in nulla. Pretium aenean pharetra magna ac.', 'sport', '5.jpg', 0),
(11, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Facilisis leo vel fringilla est ullamcorper. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. In egestas erat imperdiet sed euismod. Justo donec enim diam vulputate ut pharetra sit amet aliquam. In iaculis nunc sed augue. Lobortis scelerisque fermentum dui faucibus in. Sed enim ut sem viverra aliquet. Amet justo donec enim diam. Nunc id cursus metus aliquam eleifend mi in nulla. Pretium aenean pharetra magna ac.', 'politika', '6.jpg', 0),
(12, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Facilisis leo vel fringilla est ullamcorper. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. In egestas erat imperdiet sed euismod. Justo donec enim diam vulputate ut pharetra sit amet aliquam. In iaculis nunc sed augue. Lobortis scelerisque fermentum dui faucibus in. Sed enim ut sem viverra aliquet. Amet justo donec enim diam. Nunc id cursus metus aliquam eleifend mi in nulla. Pretium aenean pharetra magna ac.', 'politika', '7.jpg', 0),
(13, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Facilisis leo vel fringilla est ullamcorper. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. In egestas erat imperdiet sed euismod. Justo donec enim diam vulputate ut pharetra sit amet aliquam. In iaculis nunc sed augue. Lobortis scelerisque fermentum dui faucibus in. Sed enim ut sem viverra aliquet. Amet justo donec enim diam. Nunc id cursus metus aliquam eleifend mi in nulla. Pretium aenean pharetra magna ac.', 'politika', '8.jpg', 0),
(14, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Facilisis leo vel fringilla est ullamcorper. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin. In egestas erat imperdiet sed euismod. Justo donec enim diam vulputate ut pharetra sit amet aliquam. In iaculis nunc sed augue. Lobortis scelerisque fermentum dui faucibus in. Sed enim ut sem viverra aliquet. Amet justo donec enim diam. Nunc id cursus metus aliquam eleifend mi in nulla. Pretium aenean pharetra magna ac.', 'politika', '9.jpg', 0),
(15, 'Nova vijest', 'kratki sadrzaj vijesti', 'tekst vijesti koji ju potpuno opisuje', 'lifestyle', '3.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
