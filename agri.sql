-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 04:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `buycrop`
--

CREATE TABLE `buycrop` (
  `cropid` int(11) NOT NULL,
  `cropname` varchar(50) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `bid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buycrop`
--

INSERT INTO `buycrop` (`cropid`, `cropname`, `imagename`, `description`, `quantity`, `city`, `state`, `bid`) VALUES
(3, 'apple', 'apple.jpg', 'i want best quality apples....', '50 kg', 'Nanded', 'Maharashtra', 1),
(5, 'wheat', 'World-demand-for-wheat-is-constantly-growing.-Image-via-Shutterstock.com_.jpg', 'i want buy good quality wheats...', '1000 kg', 'Nanded', 'Maharashtra', 3),
(6, 'corn', 'corn_bn.jpg', 'i want to buy sweet corn,', '10 dozons', 'Nanded', 'Maharashtra', 3);

-- --------------------------------------------------------

--
-- Table structure for table `postcomplaint`
--

CREATE TABLE `postcomplaint` (
  `cid` int(11) NOT NULL,
  `complaint` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postcomplaint`
--

INSERT INTO `postcomplaint` (`cid`, `complaint`) VALUES
(1, 'hkiuhjloj'),
(2, ' fxxx'),
(3, 'dfnvjnhjaz'),
(4, ',nvkjnvmvmvvv'),
(5, 'site is not working properly.....'),
(6, 'fvxdx'),
(7, 'uggiygkbkh.sjccc'),
(8, 'site is not working properly...'),
(9, 'site is not working properly...'),
(10, 'jhgjghgjhgjghjg'),
(11, 'problem with site..');

-- --------------------------------------------------------

--
-- Table structure for table `sellcrop`
--

CREATE TABLE `sellcrop` (
  `cropid` int(11) NOT NULL,
  `CropName` varchar(100) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Rupees` int(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellcrop`
--

INSERT INTO `sellcrop` (`cropid`, `CropName`, `Picture`, `Description`, `Quantity`, `Rupees`, `City`, `State`, `fid`) VALUES
(38, 'corn', 'corn_bn.jpg', 'we are ready to sell sweet corn..', '50 dozons', 900, 'Nanded', 'Maharashtra', 3),
(36, 'lemon', 'stp-1_1.png', 'we want to sell our juicy lemons..at minimum cost', '10 dozons', 3000, 'Nanded', 'Maharashtra', 5),
(37, 'watermelon', 'stp-2.png', 'we want to sell very tasty watermelons...\r\ndirect from farm', '60 kg', 11000, 'Nanded', 'Maharashtra', 5),
(35, 'mango', 'mango-620x350_620x350_61491816587.jpg', 'we are providing good quality mangos...', '40 kg', 6000, 'Nanded', 'Maharashtra', 3),
(34, 'pineapple', 'stp-3_1.png', 'i want to sell my pineapplesss... in minimumrate...anyone intrested can contact me..', '50 dozons', 8000, 'Nanded', 'Maharashtra', 3);

-- --------------------------------------------------------

--
-- Table structure for table `shopinfo`
--

CREATE TABLE `shopinfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopinfo`
--

INSERT INTO `shopinfo` (`id`, `fname`, `lname`, `email`, `cno`, `location`, `pwd`) VALUES
(1, 'hkihi', 'hkuhku', 'satish@gmail.com', '9874563210', 'kuj', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'shree fertkl', 'ljlkjl', 'sir@gmail.com', '9874563210', 'kjjhbjbjm', '250cf8b51c773f3f8dc8b4be867a9a02'),
(3, 'shree fertilizers', 'sudhir', 'sudhir@gmail.com', '9130657721', 'shree nager,Nanded', '2a8a71ea11949a7d0be56f23111df151'),
(4, 'kisan fertilizers', 'sambhaji sirsat', 'sambha@gmail.com', '9876541230', 'pawdewadi naka,Nanded', 'c7d171fe4e0a02bc47217e81cd0487bc'),
(5, 'ubi', 'jkn', 'sambha@gmail.com', '9874561230', 'njn', '250cf8b51c773f3f8dc8b4be867a9a02');

-- --------------------------------------------------------

--
-- Table structure for table `shopperadpost`
--

CREATE TABLE `shopperadpost` (
  `adid` int(10) NOT NULL,
  `fertilizername` varchar(30) NOT NULL,
  `fimage` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `Ruppes` varchar(30) NOT NULL,
  `sid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopperadpost`
--

INSERT INTO `shopperadpost` (`adid`, `fertilizername`, `fimage`, `description`, `Ruppes`, `sid`) VALUES
(4, 'organics', '10212386.jpg', 'organic fertilizers for vegetables and tomato....', '3000', 3),
(5, 'Miracle Gro', 'Miracle-Gro.JPG', 'fertilizer for all purpose plant food...', '2000', 3),
(6, 'Black Gold', 'images.jpg', 'black gold for tomato and vegatables...', '1000', 4),
(7, 'Shake n Feed', 'miracle-gro-plant-flower-fertilizer-104829-64_1000.jpg', 'miracle Gro Shake n feed fertilizer at low price....', '500', 4),
(9, 'Dr.Earth', 'img_6753.jpg', 'Dr. Earth fertlizer availables...', '2000', 4);

-- --------------------------------------------------------

--
-- Table structure for table `supplierinfo`
--

CREATE TABLE `supplierinfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `location` varchar(30) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplierinfo`
--

INSERT INTO `supplierinfo` (`id`, `fname`, `lname`, `email`, `cno`, `location`, `pwd`) VALUES
(1, 'shubham', 'shetwad', 'shubham@gmail.com', '9130657721', 'Nanded', '3b6beb51e76816e632a40d440eab0097'),
(2, 'akshay', 'vanje', 'akki@gmail.com', '9830657721', 'Nanded', '2de1b2d6a6738df78c5f9733853bd170'),
(3, 'manoj', 'shivankhedkar', 'manoj@gmail.com', '8975364605', 'Nanded', '5e81f9859d223ea420aca993c647b839'),
(5, 'sajugjuy', 'jnkhhkn', 's@gmail.com', '9885641122', 'bjbjh', '250cf8b51c773f3f8dc8b4be867a9a02');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `location` varchar(30) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `fname`, `lname`, `email`, `cno`, `location`, `pwd`) VALUES
(6, 'swapnil', 'wagh', 'swapnil@gmail.com', '7588848369', 'Nanded', 'd6151329693e3f2ad5c210807890510e'),
(3, 'sudhir', 'shingewad', 'sudhir@gmail.com', '9130657721', 'nanded', '2a8a71ea11949a7d0be56f23111df151'),
(9, 'parj', 'patil', 'praj@gmail.com', '9852125652', 'Nanded', 'd47a2c786c715b27784b851085652173'),
(8, 'swapnil', 'shrimangle', 'swapnilsg@mail.com', '7276865189', 'Nanded', 'b39a5005f03f16e882a911cd34f86043'),
(5, 'shubham', 'shetwad', 'shubham@gmail.com', '9130657722', 'Nanded', '3b6beb51e76816e632a40d440eab0097'),
(10, 'satish', 'shingewad', 'satish@gmail.com', '9850752245', 'Nanded', 'b8377b23bb86899405d2455cc6da3556'),
(11, 'swanand', 'boinwad', 'swa@gmail.com', '9632581472', 'Nanded', '3eab44526e5b52fcb8cf8160706e577f'),
(12, 'deshmukh', 'sir', 'sir@gmail.com', '9876542310', 'Nanded', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'hkiu', 'khkhk', 'k@gmail.com', '3214567890', 'bj', '412566367c67448b599d1b7666f8ccfc'),
(14, 'rgs', 's', 'rs8620@gmail.com', '1234567897', 'old kautha', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buycrop`
--
ALTER TABLE `buycrop`
  ADD PRIMARY KEY (`cropid`);

--
-- Indexes for table `postcomplaint`
--
ALTER TABLE `postcomplaint`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `sellcrop`
--
ALTER TABLE `sellcrop`
  ADD PRIMARY KEY (`cropid`);

--
-- Indexes for table `shopinfo`
--
ALTER TABLE `shopinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopperadpost`
--
ALTER TABLE `shopperadpost`
  ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `supplierinfo`
--
ALTER TABLE `supplierinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cno` (`cno`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cno` (`cno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buycrop`
--
ALTER TABLE `buycrop`
  MODIFY `cropid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `postcomplaint`
--
ALTER TABLE `postcomplaint`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sellcrop`
--
ALTER TABLE `sellcrop`
  MODIFY `cropid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `shopinfo`
--
ALTER TABLE `shopinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shopperadpost`
--
ALTER TABLE `shopperadpost`
  MODIFY `adid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplierinfo`
--
ALTER TABLE `supplierinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
