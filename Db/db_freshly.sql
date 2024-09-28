-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 12:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_freshly`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(60) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(6, 'ashik', 'ashik@gmail.com', '2778');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_status` int(11) NOT NULL DEFAULT 0,
  `booking_date` varchar(60) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_status`, `booking_date`, `user_id`, `booking_amount`) VALUES
(1, 1, '2024-09-27', 13, 100),
(2, 1, '2024-09-27', 13, 100),
(3, 1, '2024-09-27', 13, 100),
(4, 1, '2024-09-27', 13, 100),
(5, 1, '2024-09-27', 13, 100),
(6, 1, '2024-09-27', 13, 100),
(7, 1, '2024-09-27', 13, 100),
(8, 1, '2024-09-27', 13, 100),
(9, 1, '2024-09-27', 13, 100),
(10, 1, '2024-09-27', 13, 100),
(11, 1, '2024-09-27', 13, 100),
(12, 1, '2024-09-27', 13, 100),
(13, 1, '2024-09-27', 13, 100),
(14, 1, '2024-09-27', 13, 100),
(15, 1, '2024-09-27', 13, 100),
(16, 1, '2024-09-27', 13, 100),
(17, 1, '2024-09-27', 13, 100),
(18, 1, '2024-09-27', 13, 100),
(19, 1, '2024-09-27', 13, 100),
(20, 1, '2024-09-27', 13, 100),
(21, 1, '2024-09-27', 13, 100),
(22, 1, '2024-09-27', 13, 100),
(23, 1, '2024-09-27', 13, 100),
(24, 1, '2024-09-27', 13, 100),
(25, 1, '2024-09-27', 13, 100),
(26, 1, '2024-09-27', 13, 100),
(27, 1, '2024-05-29', 15, 100),
(28, 1, '2024-05-29', 15, 100),
(29, 1, '2024-05-29', 15, 100),
(30, 1, '2024-05-29', 15, 100),
(31, 2, '2024-05-29', 15, 100),
(32, 1, '2024-09-27', 13, 100),
(33, 1, '2024-09-27', 13, 100),
(34, 1, '2024-09-27', 13, 100),
(35, 1, '2024-09-27', 13, 100),
(36, 1, '2024-09-27', 13, 100),
(37, 1, '2024-09-27', 13, 100),
(38, 1, '2024-09-27', 13, 100),
(39, 1, '2024-09-27', 13, 100),
(40, 1, '2024-09-27', 13, 100),
(41, 1, '2024-09-27', 13, 100),
(42, 1, '2024-09-27', 13, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_quantity` int(11) NOT NULL,
  `cart_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `booking_id`, `cart_status`, `cart_quantity`, `cart_date`) VALUES
(23, 35, 23, 1, 25, ''),
(25, 35, 24, 1, 0, ''),
(26, 38, 24, 1, 84, ''),
(27, 38, 25, 1, 16, ''),
(28, 41, 25, 1, 17, ''),
(30, 42, 26, 1, 4, ''),
(31, 42, 27, 1, 4, ''),
(32, 38, 27, 1, 6, ''),
(33, 38, 28, 1, 15, ''),
(34, 41, 29, 1, 14, ''),
(35, 41, 30, 1, 16, ''),
(36, 38, 31, 1, 1, ''),
(37, 41, 31, 1, 1, ''),
(38, 43, 32, 1, 3, ''),
(39, 43, 33, 1, 3, ''),
(40, 44, 33, 1, 9, ''),
(41, 45, 33, 1, 12, ''),
(42, 47, 33, 1, 31, ''),
(43, 45, 34, 1, 2, ''),
(44, 46, 34, 1, 3, ''),
(45, 51, 35, 1, 3, ''),
(46, 53, 35, 1, 4, ''),
(47, 52, 35, 1, 5, ''),
(48, 59, 36, 1, 6, ''),
(49, 60, 36, 1, 7, ''),
(50, 61, 36, 1, 8, ''),
(51, 48, 37, 1, 4, ''),
(52, 49, 37, 1, 5, ''),
(53, 44, 38, 1, 15, ''),
(54, 44, 39, 1, 10, ''),
(55, 44, 40, 1, 2, ''),
(56, 48, 41, 1, 3, ''),
(57, 47, 41, 1, 2, ''),
(58, 54, 42, 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(10, 'Fruits'),
(11, 'vegetables'),
(12, 'meat'),
(13, 'fish'),
(14, 'egg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_date` date NOT NULL,
  `complaint_title` varchar(50) NOT NULL,
  `complaint_content` varchar(500) NOT NULL,
  `complaint_status` varchar(60) NOT NULL,
  `complaint_replay` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_date`, `complaint_title`, `complaint_content`, `complaint_status`, `complaint_replay`, `user_id`, `farmer_id`) VALUES
(10, '2019-12-08', 'site issue', 'delay', '', 'okk', 13, 0),
(12, '2024-05-25', 'site issue', 'delay', '', 'okk', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(3, 'Ernakulam'),
(4, 'Idukki'),
(6, 'kottayam'),
(7, 'kollam'),
(9, 'kannur'),
(12, ''),
(13, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmers`
--

CREATE TABLE `tbl_farmers` (
  `farmer_id` int(11) NOT NULL,
  `farmer_name` varchar(60) NOT NULL,
  `farmer_contact` varchar(60) NOT NULL,
  `farmer_email` varchar(60) NOT NULL,
  `farmer_password` varchar(60) NOT NULL,
  `farmer_photo` varchar(100) NOT NULL,
  `farmer_proof` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL,
  `farmer_address` varchar(100) NOT NULL,
  `farmer_status` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_farmers`
--

INSERT INTO `tbl_farmers` (`farmer_id`, `farmer_name`, `farmer_contact`, `farmer_email`, `farmer_password`, `farmer_photo`, `farmer_proof`, `place_id`, `farmer_address`, `farmer_status`) VALUES
(3, 'Arun G', '9584756852', 'arun@gmail.com', '123456', 'Screenshot (4).png', 'Screenshot (4).png', 4, 'Muvattupuzha', 1),
(7, 'adarsh manoj', '9207066221', 'adarsh@gmail.com', '0004', 'Screenshot (1).png', 'Screenshot (1).png', 11, 'mangalathnada', 1),
(8, 'vyshak', '9875654682', 'vyshak@gmail.com', '8844', 'Screenshot (1).png', 'Screenshot (1).png', 10, 'peringala', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newuser`
--

CREATE TABLE `tbl_newuser` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_gender` varchar(60) NOT NULL,
  `user_contact` varchar(60) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_photo` varchar(60) NOT NULL,
  `user_proof` varchar(60) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_newuser`
--

INSERT INTO `tbl_newuser` (`user_id`, `user_name`, `user_gender`, `user_contact`, `user_email`, `user_password`, `place_id`, `user_photo`, `user_proof`, `user_address`) VALUES
(13, 'ATHUL', 'Male', '9678425387', 'athul@gmail.com', '789654', 10, 'Screenshot (1).png', 'Screenshot (1).png', 'Kizhakkambalam'),
(15, 'Ashik', 'Male', '9778356905', 'ashik3@gmail.com', '8746', 9, 'Screenshot (1).png', 'Screenshot (1).png', 'kochuveettik(H) pattimattom');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(60) NOT NULL,
  `place_pincode` varchar(60) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pincode`, `district_id`) VALUES
(6, 'Muvattupuzha', '686668', 3),
(8, 'pattimattom', '683562', 0),
(9, 'pattimattom', '683562', 3),
(10, 'kizhakkambalam', '683561', 3),
(11, 'perumbavoor', '684560', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_details` varchar(60) NOT NULL,
  `product_price` varchar(60) NOT NULL,
  `product_photo` varchar(60) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_quantity` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_details`, `product_price`, `product_photo`, `farmer_id`, `category_id`, `product_quantity`) VALUES
(43, 'Ginger', '', '100', 'ginger.jfif', 7, 11, '20'),
(44, 'Potato', 'fresh', '40', 'potato.jpg', 7, 11, '70'),
(45, 'Tomato', 'red', '70', 'Freshly.jpg', 7, 11, '50'),
(46, 'Brinjal', 'violet', '40', 'bringal.jpg', 7, 11, '20'),
(47, 'cabbage', 'large/small', '45', 'cabbage.jfif', 7, 11, '50'),
(48, 'Beans', 'fresh', '40', 'beans.jpg', 7, 11, '50'),
(49, 'Bitterguard', 'fresh', '50', 'bitterguard.webp', 7, 11, '50'),
(50, 'Apple', 'Red', '70', 'apple.jfif', 7, 10, '50'),
(51, 'Banana', 'large', '70', 'images (3).jfif', 7, 10, '50'),
(52, 'Orange', 'kashmir', '50', 'orange.jfif', 7, 10, '20'),
(53, 'Mango', 'malgova', '50', 'mango.jpg', 7, 10, '20'),
(54, 'Wattermelon', 'Yellow', '50', 'Watermelon.jpg', 7, 10, '20'),
(55, 'strawberry', 'fresh', '110', 'strawberry.jfif', 7, 10, '20'),
(56, 'rambuttan', 'fresh', '80', 'rambuttan.jfif', 7, 10, '20'),
(57, 'Kiwi', 'fresh', '160', 'kiwi.png', 7, 10, '20'),
(58, 'Avagado', 'fresh', '190', 'images (1).jfif', 7, 10, '50'),
(59, 'Beef', 'fresh', '260', 'beef.png', 7, 12, '300'),
(60, 'Chicken', 'fresh', '180', 'full-chicken.jpg', 7, 12, '150'),
(61, 'Tuna', 'seafish', '400', 'tuna.jpg', 7, 13, '70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_value` int(11) NOT NULL,
  `rating_comment` varchar(50) NOT NULL,
  `rating_date` varchar(30) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`rating_id`, `user_id`, `rating_value`, `rating_comment`, `rating_date`, `product_id`) VALUES
(17, 13, 3, 'eghrgbhdrs', '2024-05-25 03:13:42', 38),
(18, 13, 5, 'ebgsedfr', '2024-05-25 03:14:29', 38),
(19, 15, 3, 'fresh\n', '2024-05-29 21:32:15', 42);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`category_id`, `subcategory_id`, `subcategory_name`) VALUES
(8, 6, 'SubCategory-1'),
(9, 7, 'SubCategory-2'),
(10, 8, 'apple'),
(10, 9, 'orange'),
(11, 10, 'tomato'),
(12, 11, 'beef'),
(12, 12, 'chicken'),
(13, 13, 'tuna'),
(14, 14, 'hen'),
(14, 15, 'duck');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_farmers`
--
ALTER TABLE `tbl_farmers`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `tbl_newuser`
--
ALTER TABLE `tbl_newuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_farmers`
--
ALTER TABLE `tbl_farmers`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_newuser`
--
ALTER TABLE `tbl_newuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
