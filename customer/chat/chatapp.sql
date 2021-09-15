-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 05:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 721926613, 1197434654, 'Hello'),
(2, 1197434654, 721926613, 'Hi'),
(3, 721926613, 1197434654, 'Where are you?'),
(4, 1197434654, 721926613, 'I am nearby'),
(5, 721926613, 1197434654, 'Where exactly'),
(6, 1197434654, 721926613, 'Near the market. ill soon arrive, just wait by the park fountain'),
(7, 721926613, 1197434654, 'OK. Just be fast ok'),
(8, 1197434654, 721926613, 'Sure thing. I can see you ahead'),
(9, 721926613, 1197434654, 'Good. I can see you too'),
(10, 1197434654, 103458714, 'YO'),
(11, 103458714, 1197434654, 'What up?'),
(12, 103458714, 1197434654, 'What are you doing?'),
(13, 103458714, 1197434654, 'How\'s the Fam?'),
(14, 1197434654, 103458714, 'They\'re doing ok'),
(15, 1197434654, 103458714, 'I\'m just watching some TV'),
(16, 103458714, 1197434654, 'Cool man.'),
(17, 103458714, 1197434654, 'Mind if i come over?'),
(18, 1197434654, 103458714, 'No problem'),
(19, 1197434654, 103458714, 'Just call before you get here'),
(20, 1197434654, 103458714, 'ok?'),
(21, 103458714, 1197434654, 'Ok'),
(22, 103458714, 1197434654, 'Actually, is a text ok?'),
(23, 103458714, 1197434654, 'Low on Credit...'),
(24, 103458714, 1197434654, 'Ok?'),
(25, 1197434654, 103458714, 'Sure'),
(26, 103458714, 1197434654, 'Thanks'),
(27, 103458714, 1197434654, 'will do'),
(28, 103458714, 1197434654, 'I\'m here now'),
(29, 1197434654, 103458714, 'Nice'),
(30, 1197434654, 103458714, 'Be right out'),
(31, 103458714, 1197434654, 'Ok'),
(32, 1197434654, 103458714, 'Het you left your earphones here.'),
(33, 103458714, 1197434654, 'Keep it. Bought a new one already'),
(34, 1197434654, 103458714, 'K'),
(35, 1197434654, 103458714, 'You bought it fast though'),
(36, 103458714, 1197434654, 'decided to buy a new one and i noticed you didnt have one'),
(37, 1197434654, 103458714, 'cool. Thanks fam'),
(38, 1197434654, 103458714, 'How\'s Juanita though?'),
(39, 103458714, 1197434654, 'She\'s fine. Wanna talk to her?'),
(40, 1197434654, 103458714, 'Nah bro, maybe later'),
(41, 103458714, 1197434654, 'Cool, she says hi though'),
(42, 1197434654, 103458714, 'i say hi too.'),
(43, 1197434654, 103458714, 'wanna meet up for a movie sometime? I\'ll bring Kesha and you bring Juanita'),
(44, 103458714, 1197434654, 'Sounds good, when we doing that'),
(45, 103458714, 1197434654, 'And what of Kakizaki?'),
(46, 703884474, 1197434654, 'Welcome'),
(47, 703884474, 1197434654, 'Glad you could join us.'),
(48, 1197434654, 721926613, 'What\'s up?'),
(49, 721926613, 1197434654, 'Nothing much, Just taking a walk'),
(50, 1197434654, 721926613, 'Wanna grab a coffee?'),
(51, 1197434654, 721926613, 'I know a good cafe.'),
(52, 721926613, 1197434654, 'Send me the address'),
(53, 1197434654, 721926613, 'k'),
(54, 1197434654, 721926613, 'https://g.page/PianoClubResto-PH?share'),
(55, 1197434654, 721926613, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.700138535234!2d7.0063054561615195!3d4.821460386634146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cd18a6fbff07%3A0xb5fe4f6650131fff!2sPiano%20Club%20Restaurant!5e0!3m2!1sen!2sng!4v1629039950682!5m2!1sen!2sng\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>'),
(56, 721926613, 1197434654, 'Seen'),
(57, 1197434654, 721926613, 'You still coming?'),
(58, 721926613, 1197434654, 'imma ask Damian and Randy if they wanna come'),
(59, 721926613, 1197434654, 'that cool'),
(60, 721926613, 1197434654, '?'),
(61, 1197434654, 721926613, 'k'),
(62, 1197434654, 721926613, 'sure thing'),
(63, 1197434654, 721926613, 'ain\'t no problem'),
(64, 1197434654, 721926613, 'want me to bring Mikey?'),
(65, 721926613, 1197434654, 'Great idea man'),
(66, 721926613, 1197434654, 'Great idea man'),
(67, 1197434654, 721926613, 'no need to say it twice man'),
(68, 721926613, 1197434654, 'Hahaha'),
(69, 721926613, 1197434654, 'They both coming so imma head out'),
(70, 1197434654, 721926613, 'Aight'),
(71, 1197434654, 721926613, 'see you there'),
(72, 721926613, 1197434654, 'yh'),
(73, 721926613, 1197434654, 'SYS'),
(74, 1151624875, 1440469706, 'Hey Dude'),
(75, 1151624875, 1440469706, 'What\'s Up?');
(75, 1440469706, 1151624875, 'Nothing much');
(75, 1440469706, 1151624875, 'WBU?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1197434654, 'Prince', 'Obosizake', 'Princedk@heromail.com', '07b0280df820d4b8120e213f1adf8194', '162902320785alo0wcfeb61.png', 'Offline now'),
(2, 721926613, 'Jonathan', 'Kent', 'superman@jl.com', '8473549af4d5372cc79ad382eec94a5c', '1629023303d8hsw1vdfeb61.png', 'Offline now'),
(3, 103458714, 'Randy', 'Orton', 'wwe@wrest.com', 'f81fe250c66aad887e2086f79364f2a8', '162902371000005114.jpg', 'Offline now'),
(4, 703884474, 'Damian', 'Wayne', 'batman@gotham.com', '117435e3b2814530781147e2363a1fa6', '1629024084EF6VGumXYAEm7pn.jpg', 'Offline now'),
(5, 1440469706, 'Drake', 'Cole', 'drake@cole.com', 'f94470686a73d0c2bc3a68e1193cef4e', '1629041786128887_adapted_800x1280~2.jpg', 'Offline now'),
(6, 1151624875, 'Sammie', 'Jay', 'sammie@jay.com', '1154bba54e99f29e3af4a324bef04066', '1629042129Andrew Minghee Kim on Twitter.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
