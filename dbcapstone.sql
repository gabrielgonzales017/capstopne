-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 02:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcapstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `price_id` int(11) NOT NULL,
  `place` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`price_id`, `place`, `price`) VALUES
(1, 'Matilde Hall (Max Capacity-250 pax) ', 28000),
(2, 'Cristina Hall (Max Capacity-200 pax) ', 26500),
(3, 'Reservation Fee', 10000),
(4, 'LED Wall / Step Board', 3000),
(5, 'Mobile Cocktail Bar / Hard Liquor / Beer', 2000),
(6, 'Rehearsal with aircon', 2000),
(7, 'Rehearsal without aircon', 500),
(8, 'Venue for Event pictorial', 2000),
(9, 'Washing of dirty plates/utensils (Strictly no washing of plates/utensils before the event)', 500),
(10, 'Lights and Sounds ', 500),
(11, 'Photobooth', 500),
(12, 'Food Cart', 300),
(13, 'Air Compressor', 300),
(14, 'IWATA use during Set Up/4hrs', 500);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `number` text NOT NULL,
  `comments` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`id`, `number`, `comments`, `date`) VALUES
(1, '223423423', 'dfsdfsdfsd', '2017-03-15'),
(2, '223423423', 'dfsdfsdfsd', '2017-03-15'),
(3, '2147483647', 'fdgfdgdf', '2017-03-15'),
(4, '2147483647', 'gab', '2017-03-15'),
(5, '2147483647', 'gab123', '2017-03-15'),
(6, '2147483647', 'gab123222', '2017-03-15'),
(7, '2147483647', 'gabsample 123 commnet', '2017-03-15'),
(8, '2147483647', 'gab123213\r\n', '2017-03-15'),
(9, '09352690887', 'try123', '2017-03-15'),
(10, '6390352690887', 'how much is your coffee?\r\n', '2017-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbltext`
--

CREATE TABLE `tbltext` (
  `price_id` int(11) NOT NULL,
  `Description` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltext`
--

INSERT INTO `tbltext` (`price_id`, `Description`, `name`) VALUES
(1, 'Company Name:', '\r\nOne Grand Pavilion Events Place'),
(2, 'Header:', 'Welcome'),
(3, 'Footer :', 'A event place where your good memories starts...'),
(4, 'Caption:', 'One Grand Pavilion is the premiere events place in Malolos, Bulacan. From hosting small, intimate gatherings to big birthday and wedding celebrations, One Grand Pavilion is the go-to place for all your party venue needs.'),
(5, 'Address:', 'Blas Ople Diversion Road, Bulihan Malolos 3000 '),
(6, 'Email Address:', 'onegrandpavilion@yahoo.com'),
(7, 'Contact Number :', '(044) 794-3193 / (044) 896-0387 / \r\n09778159377 / 09224465930/ \r\n09228480728 / 09178435441 '),
(8, 'Rates:', '\r\n\r\nCLIENTS BOND of Php 5,000 is FULLY REFUNDABLE on the 1st working day after the event. \r\n\r\nCATERERS BOND of Php 5,000 is FULLY REFUNDABLE on the 1st working day after the event. \r\n\r\n'),
(9, 'Corkage:', 'OTHER FEES CORKAGE'),
(10, 'About:', 'One Grand Pavilion is the premiere events place in Malolos, Bulacan. \r\nFrom hosting small, intimate gatherings to big birthday and wedding celebrations,\r\n One Grand Pavilion is the go-to place for all your party venue needs.\r\n'),
(11, 'Facebook Page:', 'https://www.facebook.com/onegrandpavilion/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amenities`
--

CREATE TABLE `tbl_amenities` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_amenities`
--

INSERT INTO `tbl_amenities` (`userID`, `title`, `caption`, `img`) VALUES
(2, 'Tiffany ', 'Tiffany Chairs', '364040.jpg'),
(3, 'Tiffany', 'sample', '425776.jpg'),
(4, 'Tiffany', 'sample', '595925.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amenities1`
--

CREATE TABLE `tbl_amenities1` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_amenities1`
--

INSERT INTO `tbl_amenities1` (`userID`, `title`, `caption`, `img`) VALUES
(5, 'Curtains', 'dsds', '984696.jpg'),
(6, 'Curtain', 'red', '597998.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amenities2`
--

CREATE TABLE `tbl_amenities2` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_amenities2`
--

INSERT INTO `tbl_amenities2` (`userID`, `title`, `caption`, `img`) VALUES
(5, 'Plates', 'Plates', '986129.jpg'),
(6, '...', '...', '800828.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amenities3`
--

CREATE TABLE `tbl_amenities3` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_amenities3`
--

INSERT INTO `tbl_amenities3` (`userID`, `title`, `caption`, `img`) VALUES
(1, 'carpet', 'ddds', '488519.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amenities4`
--

CREATE TABLE `tbl_amenities4` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_amenities4`
--

INSERT INTO `tbl_amenities4` (`userID`, `title`, `caption`, `img`) VALUES
(1, 'dfghjkkkkkkkkkkkkkkk jjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'Wedding\r\njhdjf\r\nkndfkbfk\r\nnsnnnnnnnnnnnnnnnnnnnnnn\r\nnjsndsjds', '971617.jpg'),
(2, 'sample', 'sample', '951770.jpg'),
(3, 'sample', 'sample', '618881.jpg'),
(4, 'sample', 'sample', '84016.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `title`, `caption`, `img`) VALUES
(2, ' Michael & Laiza\'s Wedding', 'Michael & Laiza\'s Wedding ', '637997.jpg'),
(3, 'Wedding Anniversary', 'Joseph & Clarizza\'s Celebration of Love', '287974.jpg'),
(4, 'Mark & Julie', 'Mark & Julie\'s Wedding', '735434.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users1`
--

CREATE TABLE `tbl_users1` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users1`
--

INSERT INTO `tbl_users1` (`userID`, `title`, `caption`, `img`) VALUES
(1, 'Ethan\'s 1st Birthday', 'Ethan\'s 1st Birthday â€” at One Grand Pavilion Events Place.', '864790.jpg'),
(2, '7th Birthday Party', '- Our first event at our newly-constructed CRISTINA HALL: Melo\'s Star Wars themed 7th Birthday Partyâ€” at One Grand Pavilion Events Place.', '248921.jpg'),
(5, '1st Birthday at Matilde Hall ', 'Our first event: Oona\'s Alice in Wonderland-themed 1st Birthday at Matilde Hall â€” at One Grand Pavilion Events Place.', '657539.jpg'),
(7, '60th Birthday ', 'Eddie Tapang\'s 60th Birthday â€” at One Grand Pavilion Events Place.', '901832.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users2`
--

CREATE TABLE `tbl_users2` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users2`
--

INSERT INTO `tbl_users2` (`userID`, `title`, `caption`, `img`) VALUES
(6, 'Zachary & Vincent Baptismal', '#One Grand Pavilion\r\n#Zachary & Vincent Baptismal\r\n#September 24,2016\r\n', '833053.jpg'),
(5, 'KC\'s Baptismal Day ', 'KC\'s Baptismal Day â€” at One Grand Pavilion Events Place.', '828755.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users3`
--

CREATE TABLE `tbl_users3` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users3`
--

INSERT INTO `tbl_users3` (`userID`, `title`, `caption`, `img`) VALUES
(1, 'sample', 'sample', '95449.jpg'),
(2, 'sample', 'sample', '444038.jpg'),
(3, 'sample', 'sample', '758970.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users4`
--

CREATE TABLE `tbl_users4` (
  `userID` int(11) NOT NULL,
  `title` text NOT NULL,
  `caption` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users4`
--

INSERT INTO `tbl_users4` (`userID`, `title`, `caption`, `img`) VALUES
(1, 'sample', 'sample', '154563.jpg'),
(3, 'sample', 'sample', '384649.jpg'),
(5, 'Gabi ng Parangal', 'Integrated Bar', '695069.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltext`
--
ALTER TABLE `tbltext`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_amenities1`
--
ALTER TABLE `tbl_amenities1`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_amenities2`
--
ALTER TABLE `tbl_amenities2`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_amenities3`
--
ALTER TABLE `tbl_amenities3`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_amenities4`
--
ALTER TABLE `tbl_amenities4`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_users1`
--
ALTER TABLE `tbl_users1`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_users2`
--
ALTER TABLE `tbl_users2`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_users3`
--
ALTER TABLE `tbl_users3`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_users4`
--
ALTER TABLE `tbl_users4`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbltext`
--
ALTER TABLE `tbltext`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_amenities1`
--
ALTER TABLE `tbl_amenities1`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_amenities2`
--
ALTER TABLE `tbl_amenities2`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_amenities3`
--
ALTER TABLE `tbl_amenities3`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_amenities4`
--
ALTER TABLE `tbl_amenities4`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_users1`
--
ALTER TABLE `tbl_users1`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_users2`
--
ALTER TABLE `tbl_users2`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_users3`
--
ALTER TABLE `tbl_users3`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users4`
--
ALTER TABLE `tbl_users4`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
