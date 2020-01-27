-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 04:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sl` int(10) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--
--################PLEASE CHECK THE BELOW VALUES TO UNDERSTAND HOW WILL YOU MANAGE VALUES##################
INSERT INTO `admin` (`sl`, `id`, `name`, `password`, `phone`, `email`) VALUES
(1, '16101007', 'HM D Akash', 'akash', '01612112123', 'akash@gmail.com'),
(2, '16101012', 'Jannat Akhi', 'akhi', '01677777777', 'akhi@gmail.com'),
(3, '16101034', 'Imrul Hasan', 'imrul', '01775707460', 'imrulhasan273@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cafe_famous`
--

CREATE TABLE `cafe_famous` (
  `sl` int(10) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` int(10) NOT NULL,
  `available` varchar(10) NOT NULL,
  `image` longblob NOT NULL,
  `price` float NOT NULL,
  `rating` float NOT NULL,
  `reviewNo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cafe_famous`
--
----###########################################################################################################################################
INSERT INTO `cafe_famous` (`sl`, `id`, `name`, `description`, `quantity`, `available`, `image`, `price`, `rating`, `reviewNo`) VALUES
(1, '5000', 'Beef_delight_burger', 'Prepared with beef patty,cheeses & special sauce', 20, 'yes', '', 190, 0, 0),
(2, '5001', 'Sub_sandwich', 'Prepared with bread,chicken patty,cheeses,vegetables & special sauce', 25, 'yes', '', 220, 0, 0),
(3, '5002', 'chowmein', 'Prepared with chicken,vegetables & special sauce', 22, 'yes', '', 140, 0, 0),
(4, '5003', 'BBQ_chicken_rice_bowl', 'Fried rice with BBQ chicken', 26, 'yes', '', 160, 0, 0),
(5, '5004', 'Baked_pasta', 'Prepared with chicken,cheeses,vegetables & special delicious sauce', 25, 'yes', '', 180, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chillox`
--

CREATE TABLE `chillox` (
  `sl` int(10) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` int(10) NOT NULL,
  `available` varchar(10) NOT NULL,
  `image` longblob NOT NULL,
  `price` float NOT NULL,
  `rating` float NOT NULL,
  `reviewNo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chillox`
--
----###########################################################################################################################################
INSERT INTO `chillox` (`sl`, `id`, `name`, `description`, `quantity`, `available`, `image`, `price`, `rating`, `reviewNo`) VALUES
(1, '5100', 'chicken_burger', 'Prepared with chicken patty & special sauce', 23, 'yes', '', 140, 0, 0),
(2, '5101', 'Beef_cheese_burger', 'Prepared with beef patty,cheese & special sauce', 25, 'yes', '', 160, 0, 0),
(3, '5102', 'American_cheese_burger', 'Prepared with juicy patty,cheese & special sauce', 20, 'yes', '', 190, 0, 0),
(4, '5103', 'Naga_drums', 'Crispy fried chicken drums with the right amount of kick', 30, 'yes', '', 160, 0, 0),
(5, '5104', 'French_fry', 'Hot,thick & crispy', 26, 'yes', '', 80, 0, 0);


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `sl` int(10) NOT NULL,
  `id` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--
----########################################################################################################################################### 
INSERT INTO `customer` (`sl`, `id`, `name`, `password`, `phone`, `email`, `address`, `location`) VALUES
(1, '1000', 'Ananto jalil', '12345', '01600000000', 'anantot@gmail.com', '114/A, Farmgate, Dhaka', 'Farmgate'),
(2, '1001', 'Rasel rana', '12346', '01685000008', 'raselrana@gmail.com', '4/A, Dhanmondi, Dhaka', 'Dhanmondi'),
(3, '1002', 'Symon hasan', '12347', '01683002008', 'symon@gmail.com', '89/A, Panthapath, Dhaka', 'Panthapath'),
(4, '1003', 'Rakib islam', '12348', '01623002007', 'rakib@gmail.com', '13/A, Badda, Dhaka', 'Badda'),
(5, '1004', 'Kongkon khan', '12349', '01683002008', 'kongkon@gmail.com', 'sector-7, Uttora, Dhaka', 'Uttora'),
(6, '1005', 'Rehnuma asad', '12340', '01683002209', 'ridi@gmail.com', '74/A, Green Rd, Dhaka', 'Green road'),
(7, '1006', 'Rikta chowdhury', '12341', '01683002006', 'rikta@gmail.com', '52/9, East rajabazar, Dhaka', 'Tejgaon'),
(8, '1007', 'Rabeya bosri', '12342', '01683002088', 'bosri@gmail.com', '17/C, Panthapath, Dhaka', 'Panthapath'),
(9, '1008', 'Joya ahsan', '12343', '01683002118', 'joya@gmail.com', '32/A, Gulshan, Dhaka', 'Gulshan'),
(10, '1009', 'Tanjim reja', '12344', '01683332008', 'tanjim@gmail.com', '101/B, Banani, Dhaka', 'BANANI');
-- --------------------------------------------------------

--
-- Table structure for table `gamblers`


CREATE TABLE `gamblers` (
  `sl` int(10) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` int(10) NOT NULL,
  `available` varchar(10) NOT NULL,
  `image` longblob NOT NULL,
  `price` float NOT NULL,
  `rating` float NOT NULL,
  `reviewNo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamblers`
--
----###########################################################################################################################################
INSERT INTO `gamblers` (`sl`, `id`, `name`, `description`, `quantity`, `available`, `image`, `price`, `rating`, `reviewNo`) VALUES
(1, '5200', 'BBQ_chicken_pizza', 'Prepared with bbq chicken,cheese,mushroom,capsicum & sausage', 25, 'yes', '', 699, 0, 0),
(2, '5201', 'Cheesy_french_fry', 'Prepared with cheese and potato', 34, 'yes', '', 150, 0, 0),
(3, '5202', 'BBQ_wings', 'A classic bbq chicken wings with some added spices', 30, 'yes', '', 200, 0, 0),
(4, '5203', 'Bingo_cheese_burger', 'Prepared with beef patty,cheese & special sauce',26, 'yes', '', 159, 0, 0), 
(5, '5204', 'Thai_soup', 'Healthy and delicious food', 26, 'yes', '', 320, 0, 0);



-- --------------------------------------------------------

--
-- Table structure for table `mr_burger`
--

CREATE TABLE `mr_burger` (
  `sl` int(10) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` int(10) NOT NULL,
  `available` varchar(10) NOT NULL,
  `image` longblob NOT NULL,
  `price` float NOT NULL,
  `rating` float NOT NULL,
  `reviewNo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mr_burger`
--
----###########################################################################################################################################
INSERT INTO `mr_burger` (`sl`, `id`, `name`, `description`, `quantity`, `available`, `image`, `price`, `rating`, `reviewNo`) VALUES
(1, '5400', 'mr_handy_man', 'Prepared with 1 beef patty,pepperoni & cheese', 43, 'yes', '', 260, 0, 0),
(2, '5401', 'mr_perfect_burger', 'A saucculent chicken patty with sliced cheese & a choice of pickle', 30, 'yes', '', 160, 0, 0),
(3, '5402', 'chicken wings', 'A classic bbq chicken wings with some added spices', 35, 'yes', '', 180, 0, 0),
(4, '5403', 'mr_naga_burger', 'Prepared with 1 beef patty,cheese & hot spicy naga sauces', 26, 'yes', '', 190, 0, 0),
(5, '5404', 'mr_cowboy', 'Prepared with 2 beef patty,2 slices of cheese & beef bacon', 25, 'yes', '', 300, 0, 0);
-- ------------------------------------------------------

--
-- Table structure for table `nexus`
--

CREATE TABLE `nexus` (
  `sl` int(10) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` int(10) NOT NULL,
  `available` varchar(10) NOT NULL,
  `image` longblob NOT NULL,
  `price` float NOT NULL,
  `rating` float NOT NULL,
  `reviewNo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nexus`
--
----###########################################################################################################################################
INSERT INTO `nexus` (`sl`, `id`, `name`, `description`, `quantity`, `available`, `image`, `price`, `rating`, `reviewNo`) VALUES
(1, '5500', 'Chicken_salad', 'Mixed salad with chicken', 30, 'yes', '', 360, 0, 0),
(2, '5501', 'Nexus_special_salad', 'Spring mix with tomato,cucumber & cheese', 35, 'yes', '', 420, 0, 0),
(3, '5502', 'Mixed_seafood_salad', 'Spring mix with seafood,+blue cheese &tomatto', 26, 'yes', '', 400, 0, 0),
(4, '5503', 'Chicken_fried_rice', 'Prepared by fried rice with crispy chicken fry', 25, 'yes', '', 330, 0, 0),
(5, '5504', 'New_mexico_nachos', 'Prepared by chicken/beef , red/green chilli, bbq sauce,cheese and sour cream', 33, 'yes', '', 240, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cafe_famous`
--
ALTER TABLE `cafe_famous`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `chillox`
--
ALTER TABLE `chillox`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gamblers`
--
ALTER TABLE `gamblers`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mr_burger`
--
ALTER TABLE `mr_burger`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `nexus`
--
ALTER TABLE `nexus`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cafe_famous`
--
ALTER TABLE `cafe_famous`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chillox`
--
ALTER TABLE `chillox`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gamblers`
--
ALTER TABLE `gamblers`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mr_burger`
--
ALTER TABLE `mr_burger`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nexus`
--
ALTER TABLE `nexus`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
