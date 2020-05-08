-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 09:55 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `surname`, `email`, `password`) VALUES
(1, 'frank', 'mueke', 'frank@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'peter', 'muka', 'peter@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `fix`
--

CREATE TABLE `fix` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `fixtures_id` int(20) NOT NULL,
  `home_team` varchar(255) DEFAULT NULL,
  `away_team` varchar(255) DEFAULT NULL,
  `stadium` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`fixtures_id`, `home_team`, `away_team`, `stadium`, `date`, `time`) VALUES
(1, 'Gor Mahia', 'AFC Leopards', 'Moi International Sports Centre, Kasarani', '2018-12-31', '0000-00-00 00:00:00.000000'),
(2, 'AFC Leopards', 'Kariobangi Sharks', 'Mumias Sports Complex', '2019-02-01', '0000-00-00 00:00:00.000000'),
(3, 'Kimathi all stars', 'Nzoia Sugar', 'Moi Kinoru Stadium', '2019-01-30', '0000-00-00 00:00:00.000000'),
(8, 'Tusker', 'Sofapaka', 'Western Stima', '2019-02-11', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `league_table`
--

CREATE TABLE `league_table` (
  `league_table_id` int(20) NOT NULL,
  `position` int(2) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gplayed` int(2) DEFAULT NULL,
  `wins` int(2) DEFAULT NULL,
  `draws` int(2) DEFAULT NULL,
  `loss` int(2) DEFAULT NULL,
  `gscored` int(2) DEFAULT NULL,
  `gconceded` int(2) DEFAULT NULL,
  `points` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `league_table`
--

INSERT INTO `league_table` (`league_table_id`, `position`, `name`, `gplayed`, `wins`, `draws`, `loss`, `gscored`, `gconceded`, `points`) VALUES
(1, 1, 'Bandari', 13, 9, 2, 2, 20, 10, 29),
(2, 2, 'Mathare United', 14, 8, 3, 3, 18, 12, 27),
(3, 3, 'Gor Mahia', 12, 7, 4, 1, 25, 13, 25),
(4, 4, 'Sofapaka', 14, 7, 2, 5, 26, 15, 23),
(8, 5, 'Tusker', 14, 6, 4, 4, 15, 9, 22),
(9, 6, 'Kariobangi Sharks', 13, 6, 5, 2, 17, 7, 21),
(10, 7, 'Western Stima', 13, 6, 2, 5, 20, 8, 20),
(11, 8, 'Wazito FC', 14, 5, 2, 7, 15, 8, 19),
(12, 9, 'Kakamega Home Boys', 14, 4, 4, 6, 14, 9, 17),
(13, 10, 'Nzoia Sugar', 13, 5, 2, 6, 13, 8, 17),
(14, 11, 'Ulinzi Stars', 14, 5, 2, 7, 19, 13, 17),
(15, 12, 'KCB', 14, 4, 3, 7, 16, 7, 15),
(16, 13, 'Nakumatt', 14, 4, 2, 8, 12, 7, 14),
(17, 14, 'Chemelil Sugar', 13, 2, 7, 0, 4, 8, 13),
(18, 15, 'Zoo Kericho', 14, 3, 3, 8, 6, 10, 12),
(19, 16, 'Vihiga United', 14, 2, 4, 8, 6, 15, 10),
(20, 17, 'AFC Leopards', 13, 2, 4, 7, 8, 20, 10),
(21, 18, 'Mount Kenya United', 14, 1, 6, 7, 4, 23, 9);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `club` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `gscored` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `email`, `password`, `first_name`, `last_name`, `nationality`, `club`, `position`, `gscored`) VALUES
(1, 'kahata@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'paul', 'kahata', 'KE', 'Zoo Kericho', 'CM', '10'),
(2, 'okwemba@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'paul', 'okwemba', 'KE', 'Zoo Kericho', 'CM', '6'),
(3, 'wanyama@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'victor', 'wanyama', 'KE', 'KCB', 'AM', '12'),
(4, 'olunga@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'michael', 'olunga', 'TZ', 'Bandari FC', 'WF', '8'),
(5, 'wanga@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'alan', 'wanga', 'UG', 'AFC Leopards', 'CF', '9'),
(6, 'mutiso@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'innocent', 'mutiso', 'RW', 'Mathare United', 'CM', '5'),
(7, 'maina@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'kamau', 'maina', 'AR', 'Mount Kenya United', 'DM', '2'),
(8, 'arocho@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'fred', 'arocho', 'KE', 'Kariobangi Sharks', 'CF', '11');

-- --------------------------------------------------------

--
-- Table structure for table `referees`
--

CREATE TABLE `referees` (
  `referees_id` int(20) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referees`
--

INSERT INTO `referees` (`referees_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'William', 'Nyaguto', 'williamref@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Thiago', 'Mueni', 'thaigoref@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'Kevin', 'Furaha', 'furaharef@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Keith', 'Salama', 'salamaref@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Harrison', 'Mutuku', 'harrisonref@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `stadium`
--

CREATE TABLE `stadium` (
  `stadium_id` int(20) NOT NULL,
  `team_id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(20) NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `coach` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `stadium` varchar(255) DEFAULT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `home_county` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `name`, `logo`, `coach`, `owner`, `stadium`, `admin`, `email`, `password`, `home_county`) VALUES
(1, 'Gor Mahia', 'gor.png', 'Sebastian Migne', 'Raila Odinga', 'Moi International Sports Centre, Kasarani', 'Sebastian Migne', 'gor@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Kisumu'),
(2, 'Ulinzi Stars', 'ulinzi.png', 'Hassan Wario', 'Kuria Jeshi', 'Nyayo National Stadium', 'Hassan Wario', 'ulinzi@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Nairobi City'),
(3, 'Tusker', 'tusker.jpeg', 'Pombe Magufuli', 'John Pombe', 'Moi Stadium Kisumu', 'Pombe Magufuli', 'tusker@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Kiambu'),
(4, 'AFC Leopards', 'download.jpeg', 'Wafula Peter', 'Oparanya Wasike', 'Bukhungu Stadium', 'Wafula Peter', 'afc@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Kakamega'),
(5, 'Sofapaka', 'sofapaka.jpeg', 'Bhatoto Bha Mungu', 'Eveready', 'Afraha Stadium', 'Bhatoto Bha Mungu', 'sofapaka@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Nakuru'),
(6, 'Nzoia Sugar', 'IMG_5851_2lowres.jpg', 'Kevin Wasike', 'Nzoia Sugar Co.', 'Muhoroni Stadium', 'Kevin Wasike', 'nzoia@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Bungoma'),
(7, 'KCB', 'images (19).jpeg', 'Bob Waweru', 'Njuguna Wakavinye', 'Moi Kinoru Stadium', 'Bob Waweru', 'kcb@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Kajiado'),
(8, 'Kakamega Home Boys', 'kakamega.jpeg', 'Peter Mukavane', 'Martin Wangamati', 'Nairobi City Stadium', 'Peter Mukavane', 'kakamega@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Kakamega'),
(9, 'Bandari FC', 'bandari.jpeg', 'Alex Mwakideu', 'Sultan Joho', 'Kenyatta Stadium', 'Alex Mwakideu', 'bandari@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Mombasa'),
(10, 'Kariobangi Sharks', 'sharks.png', 'Adenga Odinga', 'Mike Sonko', 'Mombasa Municipal Stadium', 'Adenga Odinga', 'sharks@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Murang'),
(11, 'Chemelil Sugar', 'mat1.jpeg', 'Munialo Wekesa', 'Chemilil Sugar Co.', 'Kipchoge Keino Stadium', 'Munialo Wekesa', 'chemilil@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Siaya'),
(12, 'Vihiga United', 'vihiga.jpeg', 'Moses Mluhya', 'Moses Akaranga', 'Mumias Sports Complex', 'Moses Mluhya', 'vihiga@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Vihiga'),
(13, 'Mathare United', 'mathare.jpeg', 'Hassan Ali', 'Sakaja', 'Gusii Stadium', 'Hassan Ali', 'mathare@gamil.com', '25d55ad283aa400af464c76d713c07ad', 'Kiambu'),
(14, 'Zoo Kericho', 'zoo.jpeg', 'Chelangat Brian', 'Ruto William', 'Awendo Green Stadium', 'Chelangat Brian', 'kericho@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Kericho'),
(15, 'Nakumatt', 'nakumatt.jpeg', 'Joseph Kibira', 'Nakumatt Co.', 'Awendo Green Stadium', 'Joseph Kibira', 'nakumatt@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Kirinyaga'),
(16, 'Western Stima', 'stima.jpeg', 'Stima Mburu', 'KPLC', 'Narok Stadium', 'Stima Mburu', 'stima@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Meru'),
(17, 'Wazito FC', 'wazito.png', 'Stephen Mukangai', 'Barma Market', 'Thika Municipal Stadium', 'Stephen Mukangai', 'wazito@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Nairobi City'),
(18, 'Mount Kenya United', 'mtkenya.jpeg', 'Kamau Maina', 'Jimmy Wanjigi', 'Chemelil Sports Complex', 'Kamau Maina', 'mtkenya@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Embu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`fixtures_id`);

--
-- Indexes for table `league_table`
--
ALTER TABLE `league_table`
  ADD PRIMARY KEY (`league_table_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `referees`
--
ALTER TABLE `referees`
  ADD PRIMARY KEY (`referees_id`);

--
-- Indexes for table `stadium`
--
ALTER TABLE `stadium`
  ADD PRIMARY KEY (`stadium_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fixtures`
--
ALTER TABLE `fixtures`
  MODIFY `fixtures_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `league_table`
--
ALTER TABLE `league_table`
  MODIFY `league_table_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `referees`
--
ALTER TABLE `referees`
  MODIFY `referees_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stadium`
--
ALTER TABLE `stadium`
  MODIFY `stadium_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
