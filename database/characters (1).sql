-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2017 at 02:47 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starwars`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `movie` text NOT NULL,
  `description` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `movie`, `description`, `date`) VALUES
(14, 'Shmi Skywalker', 'episode-one', 'White, middle-aged human female from Tatooine. Medium height.', '02-07-2017'),
(15, 'Greedo', 'episode-four', 'Rodian male with rough green skin and large protruding eyes', '02-07-2017'),
(16, 'Mon Mothma', 'episode-six', 'White, middle-aged woman with blonde pixie cut. Tall stature and long neck.', '02-07-2017'),
(17, 'Captain Phasma', 'episode-seven', 'Tall female clad in armor, species unknown.', '02-07-2017'),
(18, 'Boba Fett', 'episode-six', 'Human male, tan-skinned, brunette, usually clad in armor and helmet', '02-07-2017'),
(19, 'Bail Organa', 'episode-two', 'Human male, tan skinned with dark features, middle-aged.', '02-07-2017'),
(20, 'Watto', 'episode-one', 'Toydarian male with large teeth and an elephant-like snout. Bluish/grey skin with yellow eyes and a yellow belly.', '02-07-2017'),
(21, 'Wicket W. Warrick', 'episode-six', 'Male Ewok with brown fluffy fur and a scrunched face', '02-07-2017'),
(22, 'Oola', 'episode-six', 'A Twi\\''lek female with light green skin and red lips', '02-07-2017'),
(23, 'Zam Wesell', 'episode-two', 'Female Clawdite with shape-shifting abilities to become a human woman.', '02-07-2017'),
(24, 'Jar Jar Binks', 'episode-one', 'Gungon with high-pitched, annoying presence', '02-07-2017'),
(25, 'Maz Kanata', 'episode-seven', 'Thousand-year old female, species unknown', '02-07-2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
