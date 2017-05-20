-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 06:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabricsource`
--
CREATE DATABASE IF NOT EXISTS `fabricsource` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fabricsource`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'ps', 'ps');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`, `status`) VALUES
(3, 'Womes', 0),
(4, 'Powerloom Stripes', 0),
(5, 'Autoloom Stripes', 0),
(6, 'Millmade Checks', 0),
(8, 'Patchwork', 0),
(9, 'Seersucker Checks', 0),
(10, 'Seersucker Stripes', 0),
(11, 'Lycra Checks', 0),
(12, 'Lycra Stripes', 0),
(13, 'Voile Checks', 0),
(14, 'Voile Stripes', 0),
(15, 'Dobbies', 0),
(16, 'Double Cloth', 0),
(17, 'Production Prints', 0),
(18, 'Cambric Prints', 0),
(19, 'Poplin Prints', 0),
(20, 'Solid Cambric', 0),
(21, 'Solid Poplin', 0),
(22, 'Solid Drill', 0),
(23, 'Chambray', 0),
(24, 'Solid Lycra', 0),
(25, 'Linen', 0),
(26, 'Embroidery Fabrics', 0),
(27, 'Rayon Prints', 0),
(28, 'Corduroy', 0),
(29, 'Twill Checks', 0),
(30, 'Production Dyed', 0),
(31, 'Production Bottom Checks', 0),
(32, 'Pc Checks', 0),
(33, 'Pc Stripes', 0),
(34, 'Production Twill Checks', 0),
(35, 'Production Seersucker Stripes', 0),
(36, 'Production Seersucker Checks', 0),
(37, 'Denim', 0),
(38, 'soild indogo check s', 0),
(39, 'soild indogo check s', 0),
(40, 'Mens Prints', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `design_no` varchar(150) NOT NULL,
  `name` varchar(350) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `submini_id` int(11) NOT NULL,
  `specification` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `cat_id`, `subcat_id`, `submini_id`, `specification`) VALUES
(8, 3, 18, 0, 'Size'),
(9, 3, 18, 0, 'Color'),
(10, 3, 19, 4, 'Size'),
(11, 3, 19, 4, 'Color'),
(13, 3, 20, 0, 'Type');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `img_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subcat_id`, `cat_id`, `sub_category`) VALUES
(18, 3, 'Nighty wears'),
(19, 3, 'Cloth'),
(20, 3, 'T shirts');

-- --------------------------------------------------------

--
-- Table structure for table `submini_category`
--

CREATE TABLE `submini_category` (
  `submini_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `submini_category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submini_category`
--

INSERT INTO `submini_category` (`submini_id`, `cat_id`, `subcat_id`, `submini_category`) VALUES
(4, 3, 19, 'Tops'),
(5, 3, 19, 'Blouses');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendorname` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendorname`, `password`, `status`) VALUES
(1, 'sp', 'sp', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `submini_category`
--
ALTER TABLE `submini_category`
  ADD PRIMARY KEY (`submini_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `submini_category`
--
ALTER TABLE `submini_category`
  MODIFY `submini_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
