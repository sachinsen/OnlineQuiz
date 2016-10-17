-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2015 at 03:18 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mocktest`
--

-- --------------------------------------------------------

--
-- Table structure for table `aptitude`
--

CREATE TABLE IF NOT EXISTS `aptitude` (
  `d` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aptitude`
--

INSERT INTO `aptitude` (`d`) VALUES
('bhondu'),
('none'),
('rent'),
('us'),
('lining');

-- --------------------------------------------------------

--
-- Table structure for table `reasoning`
--

CREATE TABLE IF NOT EXISTS `reasoning` (
  `qno` int(2) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reasoning`
--

INSERT INTO `reasoning` (`qno`, `ques`, `a`, `b`, `c`, `d`, `correct`) VALUES
(1, 'find the h.c.f of 2^3*3^2*7^4*5,2^2*3^5*5^2*7^3,2^3*5^3*7^2', '980', '990', '1000', '1010', '980'),
(2, 'an article was sold for Rs. y after giving a discount of x%.  Then its list price is  ?', '100y/(100-x)', '100y/(1-x)', '100y/(1-x/100)', 'none of these', '100y/(100-x)'),
(3, 'a trades man marks his goods 30% above the c.p . if he allows a discount of 25/4% then his gain percent is ', '168/8', '22', '95/4', 'none of these', '168/8'),
(4, '50, 62.5, 56.25, ?, 63.2813, 79.1016', '60.5675', '63.3124', '69.5468', '70.3125', '70.3125'),
(5, 'The price of raw materials has gone up by 15%, labour cost has also increased from 25% of the cost of raw material to 30% of the cost of raw material. By how much percentage should there be a reduction in raw materials so as to keep the cost same.', '17%', '24%', '28%\r\n', 'can not be determined', '17%'),
(0, '', '', '', '', '', ''),
(6, 'There are two quantities of oil, with the masses differing by 2 kg. The same quantity of the heat, equal to 96 Kcal, was imparted to each mass, and the larger mass of the oil was found to be 4 degrees cooler than the smaller mass. Find the mass of oil in ', '4 and 8', '6 and 8', '2 and 9', '4 and 9', '6 and 8'),
(7, 'Each of A, B, C need a certain unique time to do a certain work. C needs one hour less than A to complete the work. Working together, they require 30 minutes to complete 50% of the job. The work also gets completed if A and B start working together and A ', '16%', '33.33%', '50%', '66.66%', '50%'),
(8, 'An object begins moving at time moment t=0 and 4s after the beginning of the motion, attains the acceleration of 3m/(s^2). Find the speed of the object 6s after the beginning of motion if it is known that the speed of the body varies accordingly to the la', '22 m/s', '10 m/s', '30 m/s', '15 m/s', '10 m/s'),
(9, 'A motorboat move from point A to point B and back again, both points being located on the river bank. If the speed of the boat in still water is doubled than the trip from A to B and back again would take 20% of the time that the motorboat usually spends ', '(3/2)^(1/2)', '{3^(1/2)}/3', '2/3', '3/2', '(3/2)^(1/2)'),
(10, 'A solid is in the form of a right circular cylinder with a hemisphere at one end and a cone at the other end  their common diameter is 3.5 cm and the heights of conical and cylindrical portions are respectively 6 and 10 cm. Find the volume of the solid.', '117 square cm', '234 square cm', '58.5 square cm', '121 square cm', '121 square cm'),
(11, '1, 3, 22, 78, 211, ?', '364', '390', '465', '495', '465'),
(12, 'The sides AB, BC, CA of a triangle ABC have 3, 4, 5 interior points respectively on them. The total number of triangles that can be constructed by using these points as vertices are.', '210', '212', '205', '190', '205'),
(13, 'A Library  has 20 copies of CAGE; 12 copies each of RAGE Part1 and Part2 ; 5 copies of Part1, Part2, and Part3 and single copy of SAGE, DAGE and MAGE. In how many ways can these books be distributed ?', '62!/(20!)(12!)(5!)', '62!', '62!/(37^3)', '62!/(20!)(12!^2)(5!^3)', '62!/(20!)(12!^2)(5!^3)'),
(14, 'A number is chosen at random from the numbers 10 to 99. By seeing the number, a man will sing if the product of the digits is 12. If he chooses three numbers with replacement, then the probability that he will sing at least once is:', '1-{(43/45)^3}', '(43/45)^3', '1-{(48*86)/(90^3)}', '48*86/(90^3)', '1-{(43/45)^3}'),
(15, 'A right elliptical cylinder full of petrol has its widest elliptical side 2.4 meter and the shortest 1.6 meter. Its height is 7 meter. Find the time required to empty half the tank through a hose of diameter  4 cm if the rate of flow of petrol is 120 m/mi', '60 min', '70 min', '75 min', '90 min', '70 min');

-- --------------------------------------------------------

--
-- Table structure for table `technical`
--

CREATE TABLE IF NOT EXISTS `technical` (
  `qno` int(2) NOT NULL,
  `ques` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `correct` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `sno` int(3) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `count_user` int(255) NOT NULL DEFAULT '0',
  `check_user` tinyint(1) NOT NULL DEFAULT '0',
  `test_1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`sno`, `uname`, `password`, `count_user`, `check_user`, `test_1`) VALUES
(1, 'rohit', 'rohit', 224, 1, 0),
(2, 'badde', 'badde', 25, 1, 0),
(3, 'rahul', 'rahul', 4, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
