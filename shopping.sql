-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2022 at 10:45 AM
-- Server version: 10.2.3-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(250) NOT NULL,
  `Product_name` varchar(250) NOT NULL,
  `categories` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `ColorInput1` varchar(250) NOT NULL,
  `ColorInput2` varchar(250) NOT NULL,
  `ColorInput3` varchar(250) NOT NULL,
  `ColorInput4` varchar(250) NOT NULL,
  `size_s` enum('0','1') NOT NULL DEFAULT '0',
  `size_m` enum('0','1') NOT NULL DEFAULT '0',
  `size_l` enum('0','1') NOT NULL DEFAULT '0',
  `size_xl` enum('0','1') NOT NULL DEFAULT '0',
  `size_xxl` enum('0','1') NOT NULL DEFAULT '0',
  `Price` varchar(115) NOT NULL,
  `Quantity` varchar(44) NOT NULL,
  `Full_Detail` varchar(250) NOT NULL,
  `group_tag` varchar(80) NOT NULL,
  `img_big` varchar(250) NOT NULL,
  `img_small_1` varchar(250) NOT NULL,
  `img_small_2` varchar(250) NOT NULL,
  `img_small_3` varchar(250) NOT NULL,
  `img_small_4` varchar(250) NOT NULL,
  `img_small_5` varchar(250) NOT NULL,
  `img_small_6` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `unique_id`, `Product_name`, `categories`, `slug`, `Description`, `ColorInput1`, `ColorInput2`, `ColorInput3`, `ColorInput4`, `size_s`, `size_m`, `size_l`, `size_xl`, `size_xxl`, `Price`, `Quantity`, `Full_Detail`, `group_tag`, `img_big`, `img_small_1`, `img_small_2`, `img_small_3`, `img_small_4`, `img_small_5`, `img_small_6`) VALUES
(1, '6390848f19a0e', '', 'winter clothes-638ae8bb8bfe4', '', '', '#000000', '#33317d', '#56d4b7', '#009688', '', '', '', '', '', '', '', '', '', 'Image_created_with_a_mobile_phone.png', '', '', '', '', '', ''),
(2, '63908513c579e', '', 'winter clothes-638ae8bb8bfe4', '', '', '#000000', '#33317d', '#56d4b7', '#009688', '', '', '', '', '', '', '', '', '', 'Image_created_with_a_mobile_phone.png', '', '', '', '', '', ''),
(3, '63908579ccc36', '', 'winter clothes-638ae8bb8bfe4', '', '', '#000000', '#33317d', '#56d4b7', '#009688', '', '', '', '', '', '', '', '', '', 'Image_created_with_a_mobile_phone.png', '', '', '', '', '', ''),
(4, '639087d0392d3', '', 'winter clothes-638ae8bb8bfe4', '', '', '#000000', '#33317d', '#56d4b7', '#009688', '', '', '', '', '', '', '', '', '', 'IMG_20221114_072718.jpg', 'bank.png', '', '', '', '', ''),
(5, '63908804d83a3', '', '', '', '', '#000000', '#33317d', '#56d4b7', '#009688', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Slug` varchar(250) NOT NULL,
  `Sort_Description` varchar(250) NOT NULL,
  `Full_Description` varchar(250) NOT NULL,
  `Product_Tags` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`id`, `unique_id`, `Name`, `Slug`, `Sort_Description`, `Full_Description`, `Product_Tags`) VALUES
(1, '638ae8bb8bfe4', 'clothes', 'clothe', 'all clothes', 'all clothes', 'clothes'),
(2, '638ae9127fa85', 'electronics', 'electronics', 'full electronics', 'electronics', 'electronics');

-- --------------------------------------------------------

--
-- Table structure for table `Sub_Category`
--

CREATE TABLE `Sub_Category` (
  `id` int(15) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Slug` varchar(250) NOT NULL,
  `Sort_Description` varchar(250) NOT NULL,
  `Parent_uniqueid` varchar(250) NOT NULL,
  `Full_Description` varchar(250) NOT NULL,
  `Product_Tags` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sub_Category`
--

INSERT INTO `Sub_Category` (`id`, `Name`, `Slug`, `Sort_Description`, `Parent_uniqueid`, `Full_Description`, `Product_Tags`) VALUES
(1, 'winter clothes', 'winter-clothe', 'winter clothes', '638ae8bb8bfe4', 'winter clothes', 'winter clothes'),
(2, 'summner clothes', 'summner-clothe', 'summner k kapde', '638ae8bb8bfe4', 'bhadiya hai', '121'),
(3, 'tv', 't', 'tv', '638ae9127fa85', 'tv', 'tv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Sub_Category`
--
ALTER TABLE `Sub_Category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Sub_Category`
--
ALTER TABLE `Sub_Category`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
