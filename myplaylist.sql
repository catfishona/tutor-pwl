-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 03:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myplaylist`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id_artist` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id_artist`, `name`, `image`, `birth_date`) VALUES
(1, 'The Weeknd', '1.jpg', '1990-02-16'),
(2, 'NewJeans', '2.jpg', '2022-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id_music` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `id_artist` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id_music`, `title`, `duration`, `id_artist`) VALUES
(1, 'Blinding Lights', 262, 1),
(2, 'Save Your Tears', 281, 1),
(3, 'Ditto', 245, 2),
(4, 'Hype boy', 225, 2),
(5, 'OMG', 267, 2);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` varchar(100) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `title`, `description`) VALUES
('1', 'Playlist Pertama', 'Playlist ini pertama kali dibuat sekarang');

-- --------------------------------------------------------

--
-- Table structure for table `playlisthasmusic`
--

CREATE TABLE `playlisthasmusic` (
  `id_playlist` varchar(100) NOT NULL,
  `id_music` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlisthasmusic`
--

INSERT INTO `playlisthasmusic` (`id_playlist`, `id_music`) VALUES
('1', 1),
('1', 2),
('1', 4),
('1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'a0bb28c06d64bf126af4a521581b7ffb'),
('user', 'a0bb28c06d64bf126af4a521581b7ffb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id_artist`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id_music`),
  ADD KEY `artist` (`id_artist`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`);

--
-- Indexes for table `playlisthasmusic`
--
ALTER TABLE `playlisthasmusic`
  ADD PRIMARY KEY (`id_playlist`,`id_music`),
  ADD KEY `id_music` (`id_music`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`id_artist`) REFERENCES `artist` (`id_artist`);

--
-- Constraints for table `playlisthasmusic`
--
ALTER TABLE `playlisthasmusic`
  ADD CONSTRAINT `playlisthasmusic_ibfk_1` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id_playlist`),
  ADD CONSTRAINT `playlisthasmusic_ibfk_2` FOREIGN KEY (`id_music`) REFERENCES `music` (`id_music`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
