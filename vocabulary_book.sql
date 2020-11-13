-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 13, 2020 at 08:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vocabulary_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_list`
--

CREATE TABLE `personal_list` (
  `id` int(11) NOT NULL,
  `sel_word` varchar(255) NOT NULL,
  `sel_pos` varchar(100) NOT NULL,
  `sel_pro` varchar(100) NOT NULL,
  `sel_e` varchar(100) NOT NULL,
  `sel_m` varchar(100) NOT NULL,
  `sel_s` text,
  `my_photo` varchar(100) DEFAULT NULL,
  `mastery` varchar(100) NOT NULL DEFAULT 'NAA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `role` varchar(1) NOT NULL DEFAULT 'U',
  `student` varchar(1) NOT NULL DEFAULT 'N',
  `nationality` varchar(255) NOT NULL,
  `mother_tongue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `passw`, `username`, `role`, `student`, `nationality`, `mother_tongue`) VALUES
(1, 'AA', 'BB', '$2y$10$tHRw8ScE.8eskYOuT2pxn.L98FCor.J.hl64FB7K1XM2POMpYYYoi', 'ab', 'A', 'Y', 'ja', 'japanese'),
(2, 'CC', 'DD', '$2y$10$nbe52UyrnlHqVXGNmp9Bve4Iaa/E5qOhj/kq/P0Y1jlcbv1d9Yo9e', 'cd', 'U', 'N', 'us', 'english'),
(3, 'EE', 'FF', '$2y$10$nAcDc.B9ot3OzI1asy1D6u0OzyBTlHOhtur/eDMvSRT9vjLFHyjj6', 'ef', 'A', 'Y', 'uk', 'english'),
(4, 'GG', 'HH', '$2y$10$yhlLTjdUgK5AJGe3xDJJHuRazJJAJqpQGCSu3tppmykIA0Y1ZImi2', 'gh', 'U', 'N', 'fr', 'french');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `pronunciation` varchar(100) NOT NULL,
  `e_meaning` varchar(255) NOT NULL,
  `m_meaning` varchar(255) NOT NULL,
  `sample` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_list`
--
ALTER TABLE `personal_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_list`
--
ALTER TABLE `personal_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
