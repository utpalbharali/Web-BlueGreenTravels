-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2019 at 07:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `city` varchar(200) NOT NULL,
  `budget` varchar(200) NOT NULL,
  `standard` varchar(200) NOT NULL,
  `deluxe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`id`, `p_id`, `city`, `budget`, `standard`, `deluxe`) VALUES
(1, 112, 'sdsdsdgsdg', 'sdgdsgsdg', 'sdgdsgdsag', 'sdgdsgdsag'),
(2, 113, 'sdfsdgsdg', 'sdgsdagsd', 'sgsadg', 'sdgsadg'),
(3, 112, 'ssgsd', 'gdsgdsag', 'sgdsagsd', 'sdgsdag'),
(4, 117, 'ssdgsdg', 'sdgsdg', 'sdgsdg', 'sdgsdg'),
(5, 113, '25235', '2223', '5225', '235235');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'india'),
(3, 'international');

-- --------------------------------------------------------

--
-- Table structure for table `exclusions`
--

CREATE TABLE `exclusions` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `exclusions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exclusions`
--

INSERT INTO `exclusions` (`id`, `p_id`, `exclusions`) VALUES
(1, 117, 'sdgsdgsdgsdg'),
(2, 117, 'sdgsdgsadgdsg'),
(3, 117, 'sdgsdgsdagsadg'),
(4, 117, 'sdgsdgdsagsdaggggggggg dsgaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `inclusions`
--

CREATE TABLE `inclusions` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `inclusions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inclusions`
--

INSERT INTO `inclusions` (`id`, `p_id`, `inclusions`) VALUES
(1, 117, 'sgsdgs sdgsdgsd'),
(2, 117, 'sdgaaaaaaaaaaaaa gasdddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `itenary`
--

CREATE TABLE `itenary` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itenary`
--

INSERT INTO `itenary` (`id`, `p_id`, `title`, `description`) VALUES
(1, 113, 'Day 1: Fun Unlimited', 'afsadsadgsg'),
(2, 112, 'Day 3: Loaffasf sfsgag sdsga sdadsgsdag', 'sdgadsgasdgsadgg'),
(3, 112, 'Day 4: sdsdsg sdgsdgsa sdgsdg sdgads', 'ggdsag'),
(4, 117, 'Day 1: fsfsaf fssadg', 'dsgsdagadsgsdgsdgsd  asgagg sdgsdggsadgsdsdgsg'),
(5, 117, 'Day 2: fdsf fsdgsadg', 'sdsgsa asfgsgd gsdg');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `starting_price` int(11) DEFAULT NULL,
  `category` varchar(200) NOT NULL,
  `img_url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `p_name`, `starting_price`, `category`, `img_url`) VALUES
(112, 'Singapore', 4424, 'international', 'europe2.jpg'),
(113, 'Singapore', 4424, 'international', 'europe2.jpg'),
(114, 'Singapore', 4424, 'international', 'europe2.jpg'),
(115, 'europe4', 4124, 'international', 'europe1.jpg'),
(116, 'europe5', 12414, 'international', 'europe1.jpg'),
(117, 'india 1', 441414, 'india', 'india1.jpg'),
(118, 'demo india', 5355, 'india', 'india1.jpg'),
(119, 'demo ', 4235, 'international', 'europe4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `hotel` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `twin_min_2_adults` int(11) NOT NULL,
  `twin_min_4_adults` int(11) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `single` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `p_id`, `hotel`, `start_date`, `end_date`, `twin_min_2_adults`, `twin_min_4_adults`, `extra_bed`, `single`) VALUES
(1, 114, 'fsdfsf', '0000-00-00', '0000-00-00', 24324, 0, 0, 0),
(2, 117, 'affsdfsd', '2019-05-16', '2019-05-24', 2255, 5255, 2523, 25235);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `terms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `exclusions`
--
ALTER TABLE `exclusions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `inclusions`
--
ALTER TABLE `inclusions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `itenary`
--
ALTER TABLE `itenary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exclusions`
--
ALTER TABLE `exclusions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inclusions`
--
ALTER TABLE `inclusions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `itenary`
--
ALTER TABLE `itenary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD CONSTRAINT `accommodation_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exclusions`
--
ALTER TABLE `exclusions`
  ADD CONSTRAINT `exclusions_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inclusions`
--
ALTER TABLE `inclusions`
  ADD CONSTRAINT `inclusions_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `itenary`
--
ALTER TABLE `itenary`
  ADD CONSTRAINT `itenary_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `terms`
--
ALTER TABLE `terms`
  ADD CONSTRAINT `terms_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
