-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 17, 2021 at 06:35 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csp_can`
--

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE `Question` (
  `id` int(11) NOT NULL,
  `topic` varchar(20) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`id`, `topic`, `question`) VALUES
(1, 'Elephant', 'How many legs does this elephant have?'),
(2, 'Ebbinghaus', 'The size of the orange circle becomes...'),
(3, 'Cafe', 'The lines in this picture are...'),
(4, 'Confetti', 'How many different colors are the circles in the back?'),
(5, 'Rice', 'What do you notice about the picture?'),
(6, 'Road', 'The two photos in the picture are...'),
(7, 'Face', 'What do you see in this picture?'),
(8, 'Smile', 'What do you see in this picture?'),
(9, 'Bakery', 'What do you see in this picture?'),
(10, 'Triangle', 'At what point does the triangle end?'),
(11, 'Cube', 'What do you see in this picture?'),
(12, 'Staircase', 'How many different staircases can you spot?'),
(13, 'Vanity', 'What do you see in this picture?');

-- --------------------------------------------------------

--
-- Table structure for table `QuestionOption`
--

CREATE TABLE `QuestionOption` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `qoption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `QuestionOption`
--

INSERT INTO `QuestionOption` (`id`, `qid`, `qoption`) VALUES
(1, 1, '4'),
(2, 1, '5'),
(3, 1, 'I can\'t tell.'),
(4, 1, 'That\'s not an elephant!'),
(5, 2, 'larger'),
(6, 2, 'smaller'),
(7, 2, 'static'),
(8, 2, 'cannot be determined'),
(9, 3, 'curved'),
(10, 3, 'parallel'),
(11, 3, 'perpendicular'),
(12, 3, 'I don\'t know'),
(13, 4, '1'),
(14, 4, '2'),
(15, 4, '3'),
(16, 4, 'They are all the same'),
(17, 5, 'It is pretty.'),
(18, 5, 'The rice is moving.'),
(19, 5, 'The rice is still.'),
(20, 5, 'I don\'t know.'),
(21, 6, 'at different angles'),
(22, 6, 'similar'),
(23, 6, 'the same'),
(24, 6, 'I don\'t know'),
(25, 7, 'a face'),
(26, 7, 'a lot of dots'),
(27, 7, 'craters'),
(28, 7, 'I don\'t know'),
(29, 8, 'birds'),
(30, 8, 'trees'),
(31, 8, 'a smile'),
(32, 8, 'I don\'t know'),
(33, 9, 'bread'),
(34, 9, 'skulls'),
(35, 9, 'a woman'),
(36, 9, 'I don\'t know'),
(37, 10, 'top'),
(38, 10, 'bottom right'),
(39, 10, 'bottom left'),
(40, 10, 'I don\'t know'),
(41, 11, 'many lines'),
(42, 11, 'a triangle'),
(43, 11, 'a cube'),
(44, 11, 'I don\'t know'),
(45, 12, '6'),
(46, 12, '7'),
(47, 12, '8'),
(48, 12, 'I don\'t know'),
(49, 13, 'skull'),
(50, 13, 'black and white'),
(51, 13, '2 women'),
(52, 13, 'I don\'t know');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Question`
--
ALTER TABLE `Question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `QuestionOption`
--
ALTER TABLE `QuestionOption`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
