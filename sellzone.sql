-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 09:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'DELL'),
(3, 'Samsung'),
(4, 'Sony'),
(5, 'Apacer'),
(6, 'Walton'),
(7, 'Others'),
(8, 'Logitech');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Mouse'),
(2, 'keyboard'),
(3, 'Monitor'),
(4, 'Sound box'),
(5, 'Pen drive'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_cat` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `author_address` text NOT NULL,
  `author_phone_number` varchar(255) NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `user_name`, `user_email`, `product_title`, `product_cat`, `product_brand`, `product_image`, `author_address`, `author_phone_number`, `product_desc`) VALUES
(1, 'Ashikur Rahaman', 'ashikurRahaman@gmail.com', 'DELL Optical Cable Mouse', '1', '2', 'mouse1.jpg', 'Syedpur , Nilphamari', '01743607289', 'It is a very bad product. I can not use it for a day.'),
(3, 'Md.Sourav Ahmed', 'souravAhmed@gmail.com', 'Samgung Monitor', '3', '3', 'HeadPhone.JPG', 'Naruli,Bogura', '01743607289', 'This guy send me a very bad quality product. ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `pro_desc` varchar(500) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `image`, `pro_desc`, `brand`) VALUES
(15, 'Md.Ashiqur Rahman ', 'AshiqurRahman@gmail.com', '01764477698', 'goldenSOund.jpg', 'One month used console.It is in a very good condition. \r\nI am expecting  250tk for this console.', 'Golden Sound'),
(16, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `author_address` varchar(255) NOT NULL,
  `author_phone_number` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `author_address`, `author_phone_number`, `product_desc`, `product_image`, `product_keywords`) VALUES
(2, '1', '2', '  DELL Optical Cable Mouse', 200, 'Saidpur , Nilphamari', '01743607289', '										<p>Â Two month used optical cable mouse. It is in a very good condition fully functional.</p>								', 'mouse1.jpg', 'DELL MOUSE Optical Cable'),
(3, '2', '6', '  Walton WKG005WB ', 350, 'Naruli,Bogura', '01743607289', '										<p>Â This keyboard is used for 3 months.</p>\r\n<p>And I fond no issue.All the keys are working perfectly.</p>\r\n<p>If you interested fill free to contact with me.</p>								', 'keyBord1.JPG', 'Walton,Keyboar,Gamming,WKG005WB'),
(4, '2', '7', 'Platinum Keyboard ', 150, 'Savar,Dhaka', '01758721142', 'One month used keyboard.\r\nFully functional', 'k.JPG', 'Platinum,Keyboar'),
(5, '3', '3', 'Samsung Monitor', 3000, 'Badurtala,Bogura', '01764651522', 'Two month used Samsung Monitor.\r\nMode: SyncMaster SA10\r\nFill free to contact with me.', 'monitor.jpg', 'Monitor,Samgsung,Used,SyncMaster SA10,SA10'),
(6, '4', '8', 'Logitech Sound System', 2000, 'Saidpur,Nilphamari', '01743607299', 'It is in great condition. I am buying a another one otherwise I am never gonna sell this. If you buy this soundbox it can serve you more then a year. If you interested fill free to contact me.', '59600a00d34db3d010cceaa0477bb188.jpg', 'Logitech Sound System,Logitech,Sound System,Sound box,2000'),
(7, '1', '8', '  Logitech G502 ', 1500, 'joypurhat sadar', '01749054744', '										Two-month used Logitech G502 Proteus Spectrum RGB GAMING MOUSE.\r\n\r\n\r\n\r\n								', 'logitech_g502_proteus_spectrum_professional_grade_gaming_mouse_1476294324_d24836f2.jpg', 'Logitech G502,Logitech ,G502,gaming,mouse,Gaming mouse, RGB '),
(8, '3', '3', 'samsung syncmaster 2333', 2800, 'Dhanmondi,Dhaka', '01960167934', 'Three months used monitor.No issues.\r\nModel:syncmaster 2333 ', '195d58164756c254ccbc240b99f9ad46.jpg', 'Samsung,monitor,used monitor,2800,Samsung monitor'),
(11, '5', '5', 'Apacer AH353 32GB', 300, 'Shyamoli,Dhaka', '01521404824', 'It is a three month used pen drive.\r\nModel: Apacer AH353 32GB \r\nUSB.3.1 Gen 1 Pen Drive.\r\nIf you are interested to buy then contact with me.', 'penDrive.JPG', 'Apacer,32 GB Pendrive,Pendrive,300,Pendrive'),
(12, '6', '7', '        Havit HV-G69', 250, 'Kazipara,Naogaon', '01974166444', '																																								One month used game-pad.\r\nModel:Havit HV-G69 with Vibration.\r\n\r\n																																', '70325374_506706823454920_2077295228024258560_n.jpg', 'Gamepad,Havit HV-G69,Vibration');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
