-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 09:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `komentar` text NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `ime`, `komentar`, `vreme`, `approved`) VALUES
(5, 'pera', 'novi komentar', '2020-02-16 15:07:57', 1),
(19, 'maja', 'komentarr majin', '2020-02-17 19:16:06', 1),
(20, 'mile', 'super je firma', '2020-02-17 20:55:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `orign` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `orign`) VALUES
(1, 'Tangelo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'Africa'),
(2, 'Grapefruit', ' Nulla posuere sollicitudin aliquam ultrices sagittis orci.', 'South America'),
(3, 'Kumquat', 'Netus et malesuada fames ac turpis egestas. Consectetur a erat nam at lectus urna duis convallis.  ', 'Asia'),
(4, 'Lime', 'Pellentesque habitant morbi tristique senectus et netus et.', 'Africa'),
(5, 'Lemon', 'Sed augue lacus viverra vitae congue eu consequat ac.', 'Europe'),
(6, 'Mandarin', 'Quam elementum pulvinar etiam non quam lacus. Consectetur adipiscing elit ut aliquam.', 'South America'),
(7, 'Papeda', 'Amet nisl purus in mollis nunc sed id. Eget magna fermentum iaculis eu. ', 'Asia'),
(8, 'Orange', 'Urna molestie at elementum eu facilisis sed odio morbi. Fusce ut placerat orci nulla pellentesque. ', 'South America'),
(9, 'Pomelo', 'Dui accumsan sit amet nulla facilisi morbi tempus iaculis urna. ', 'Asia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('Admin','User','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `date`, `status`) VALUES
(1, 'Bogdan ', 'Pavlović', 'bpavlovic', 'bp', '2020-02-15 21:10:13', 'Admin'),
(2, 'Pera', 'Perić', 'ppera', 'ppera', '2020-02-17 20:53:45', 'User'),
(3, 'Lazar', 'Lazić', 'llazic@gmail.com', 'llaza', '2020-02-15 21:00:31', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
