-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 12:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `fullname`, `post_id`, `comment`, `avatar`, `date`) VALUES
(1, 'Onyekwere Ebuka', 'OOriVIU', 'This is very beautiful', 'admin/avatar/Etech.PNG', '2022-02-23 14:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(535) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `thumbnail` varchar(255) NOT NULL,
  `postid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `author`, `category`, `description`, `date`, `thumbnail`, `postid`) VALUES
(1, 'Welcome to the land of the unknown', '', 'Pending', ' WERWEREWR REWer w WWERW rwr rwer rwrrrwer re ', '2022-02-23 02:46:17', 'thumbnail/CHIGURLS (1).png', 'SlRKUIw'),
(2, 'sfsdf dfggfd ', '', 'Arrived', 'asdasdasdasda dsdasdasda dasdasdas dasasd asda dasdas asdasd asdad as', '2022-02-23 01:53:07', 'thumbnail/1.jpg', 'QniETTU'),
(3, 'asdasd dsad asdas das', 'Onyekwere Ebuka', 'Arrived', 'asdasdasdasda dsdasdasda dasdasdas dasasd asda dasdas asdasd asdad as', '2022-02-23 13:56:01', 'thumbnail/CHIGURLS.png', 'OOriVIU');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `address`, `city`, `country`, `thumbnail`, `password`) VALUES
(12, 'Chukwuebuka', 'Onyekwere', 'onyekwereebuka2001@gmail.com', 'New Haven', 'Enugu', 'Nigeria', 'thumbnails/', 'ebuka200'),
(13, 'Chukwuebuka', 'Onyekwere', 'onyekwereebuka210@gmail.com', 'New Haven', 'Enugu', 'Nigeria', 'thumbnails/Etech.PNG', '123'),
(14, 'Chukwuebuka', 'Onyekwere', 'onyekwereebuka2400@gmail.com', 'New Haven', 'Enugu', 'Nigeria', 'thumbnails/Etech.PNG', '123'),
(15, 'Chukwuebuka', 'Onyekwere', 'onyekwereebuka2900@gmail.com', 'New Haven', 'Enugu', 'Nigeria', 'thumbnails/Etech.PNG', '123'),
(16, 'Chukwuebuka', 'Onyekwere', 'onyekwereebuka2000@gmail.com', 'New Haven', 'Enugu', 'Nigeria', 'thumbnails/Etech.PNG', '123'),
(17, 'Chukwuebuka', 'Onyekwere', 'onyekwereebuka21100@gmail.com', 'New Haven', 'Enugu', 'Nigeria', 'thumbnails/Etech.PNG', '123'),
(18, 'Chukwuebuka', 'Onyekwere', 'onyekwereebuka200@gmail.com', 'New Haven', 'Enugu', 'Nigeria', 'avatar/Etech.PNG', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
