-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 11:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `SchoolName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`SchoolName`, `username`, `comment`, `date`) VALUES
('acho', 'ivan', 'jksmd', '2021-06-22 22:28:53'),
('QR', 'ivan', 'lksdnmgl', '2021-06-22 22:28:53'),
('QR', 'ivan', 'sdg', '2021-06-22 22:28:53'),
('test', 'ivan', 'mnogo gotino daskalo', '2021-06-22 22:28:53'),
('test', 'ivan', 'naj dobroto daskalo', '2021-06-22 22:28:53'),
('QR', 'ivan', 'pojksdpgojspdgjspdgjipidjjjjjjpsdiojgiosdjgiosdjgioasdjhguio[sdhguoasdhguoasdhguioasdhgouasdhgoughouadfghodfuaghoadfuighoadfughodfughodughosdfghaodghao[ghaosdghaosduighaiosdghais0oasd0iohaiosdasdioghaosdihgaosdighaosdhgaosdighoasdghuosdhgoasdfuhgoasdughasodghasdoughasdoughoasduighauohguasdhgsudghasdughasdoughasduoghasdughsdughsdughsdoghsdoghosudhgosdghosdghasodughosdghosdighoasdgsd', '2021-06-22 22:28:53'),
('QR', 'ivan', 'lsdjmg', '2021-06-22 22:28:53'),
('acho', 'ivan', 'pksdmg', '2021-06-22 22:28:53'),
('1 оу', 'krasi', 'Много добро училище', '2021-06-23 21:16:11'),
('1 оу', 'acho', 'iosdjgipo', '2021-06-24 10:19:55'),
('2 су', 'acho', 'ksdf', '2021-06-24 10:31:30'),
('пг по телекомуникации', 'krasi', 'mn gotino', '2021-06-24 11:19:52'),
('пг по телекомуникации', 'krasi', 'ali ', '2021-06-24 11:19:59'),
('Васил Левски', 'venci', 'ucili6tr', '2021-06-24 11:56:13'),
('Васил Левски', 'venci', 'kjhjkhjvhbjkbvjmk', '2021-06-24 11:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `rateduser`
--

CREATE TABLE `rateduser` (
  `username` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rateduser`
--

INSERT INTO `rateduser` (`username`, `school`) VALUES
('krasi', ''),
('acho', ''),
('Alex', ''),
('Alex', '1 оу'),
('Alex', '2 су'),
('venci', 'Васил Левски'),
('venci', '1 оу');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `SchoolType` varchar(100) NOT NULL,
  `sub1` varchar(100) NOT NULL,
  `sub2` varchar(100) NOT NULL,
  `sub3` varchar(100) NOT NULL,
  `sub4` varchar(100) NOT NULL,
  `sub5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `city`, `SchoolType`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`) VALUES
(4, 'acho', 'Sofia', 'SOU', '182,4,3,13,122,', '176,14,2,17,104,', '177,4,16,7,107,', '176,9,3,19,104,', '180,4,5,6,113,'),
(5, 'gpch', 'Sofia', 'SOU', '1,3,0,2,4,', '1,2,1,4,2,', '1,3,1,1,4,', '1,2,1,4,2,', '1,3,0,2,4,'),
(6, 'tues', 'Sofia', 'SOU', '1,0,1,0,1,', '0,1,1,1,0,', '0,0,3,0,0,', '0,1,1,1,0,', '1,0,1,0,1,'),
(7, 'uktc', 'Sofia', 'SOU', '0,0,0,0,1,', '0,0,0,0,1,', '0,0,0,0,1,', '0,0,0,0,1,', '0,0,0,0,1,'),
(8, 'unss', 'Sofia', 'SOU', '2,0,0,1,1,', '1,1,1,1,0,', '1,0,2,1,0,', '1,1,0,1,1,', '2,0,0,1,1,'),
(9, 'aleko konstantinov', 'Sofia', 'SOU', '1,0,0,0,1,', '0,1,0,1,0,', '0,0,2,0,0,', '0,1,0,1,0,', '1,0,0,0,1,'),
(10, 'adrian', 'Sofia', 'SOU', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(11, 'джон атанасов', 'Sofia', 'SOU', '0,0,0,0,1,', '0,0,0,1,0,', '0,0,0,0,1,', '0,0,0,1,0,', '0,0,0,0,1,'),
(12, 'QR', 'Sofia', 'SOU', '0,0,0,0,7,', '0,0,0,1,6,', '0,0,1,0,6,', '0,0,0,1,6,', '0,0,0,0,7,'),
(13, 'test', 'Sofia', 'SOU', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(14, '', 'Varna', 'Sou', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(15, 'kika', 'Varna', 'Sou', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(16, 'milan', 'Plovdiv', 'professional', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(17, '2 су', 'София', 'су', '0,0,0,0,3,', '0,0,0,0,3,', '0,0,0,0,3,', '0,0,0,0,3,', '0,0,0,0,3,'),
(18, '98 ну', 'София', 'ну', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(19, 'Иван Вазов', 'Бургас', 'су', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(20, '1 оу', 'Варна', 'оу', '0,1,1,1,3,', '0,1,2,2,1,', '0,0,1,3,2,', '1,1,1,1,2,', '0,1,2,1,2,'),
(21, 'димчо дебелянов', 'Варна', 'су', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(22, 'Васил Левски', 'Варна', 'ну', '0,0,0,0,1,', '0,0,0,0,1,', '0,0,0,0,1,', '0,0,0,0,1,', '1,0,0,0,0,'),
(23, 'професионална техническа гимназия', 'Варна', 'пг', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(24, 'антон страшимиров', 'Бургас', 'оу', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,'),
(25, 'пг по телекомуникации', 'София', 'пг', '0,0,0,1,0,', '0,0,0,0,1,', '0,0,0,0,1,', '0,0,0,0,1,', '0,0,0,0,1,'),
(26, 'пг по транспорт', 'Бургас', 'пг', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,', '0,0,0,0,0,');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `admin`, `date`) VALUES
(1, 308973766208, 'achko', '1234', '', '2021-06-07 21:19:46'),
(2, 582107, 'adrian', '1234', '', '2021-06-14 20:08:55'),
(3, 5719735531920477753, 'ivan', '12345', 'not admin', '2021-06-21 19:31:04'),
(4, 10481106043, 'krasi', '12345', 'admin', '2021-06-21 19:33:57'),
(5, 9268635141, 'peter', '12345', 'adminadmin', '2021-06-21 19:52:57'),
(8, 4095296066943, 'ivan12', '12345', 'admin', '2021-06-21 19:57:02'),
(9, 186573969293966516, 'kristiqn', '9876', 'admin', '2021-06-21 19:58:21'),
(10, 6237591466, 'torko', '12345678', 'admin', '2021-06-21 20:05:39'),
(11, 803164962999124, 'acho', '1234', 'not admin', '2021-06-24 10:19:18'),
(12, 759256244, 'Alex', '1234', 'not admin', '2021-06-24 11:26:21'),
(13, 27941990367009, 'venci', '1234', 'not admin', '2021-06-24 11:54:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
