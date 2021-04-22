-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 06:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burgur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_course`
--

CREATE TABLE `admin_course` (
  `id` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `month` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_course`
--

INSERT INTO `admin_course` (`id`, `course`, `month`, `amount`) VALUES
(1, 'Only Burger Horbour', '100', '1 Month'),
(2, 'Only Burger Horbour', '150', '3 Month'),
(3, 'Only Burger Horbour', '200', '6 Month'),
(4, 'Only Burger Horbour', '300', '12 Month'),
(5, 'Only Choup Horbour', '50', '1 Month'),
(6, 'Only Choup Horbour', '70', '3 Month'),
(7, 'Only Choup Horbour', '150', '6 Month'),
(8, 'Only Choup Horbour', '250', '12 Month'),
(10, 'Both', '250', '1 Month'),
(11, 'Both', '350', '3 Month'),
(12, 'Both', '500', '6 Month'),
(13, 'Both', '800', '12 Month');

-- --------------------------------------------------------

--
-- Table structure for table `admin_plans`
--

CREATE TABLE `admin_plans` (
  `id` int(11) NOT NULL,
  `course` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_plans`
--

INSERT INTO `admin_plans` (`id`, `course`) VALUES
(2, 'Only Burger Horbour'),
(3, 'Only Choup Horbour'),
(4, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` varchar(20) NOT NULL,
  `msg` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `houdinv_staff_management`
--

CREATE TABLE `houdinv_staff_management` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_contact_number` varchar(250) NOT NULL,
  `staff_department` varchar(250) NOT NULL,
  `staff_status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `staff_warehouse` int(11) NOT NULL,
  `staff_email` varchar(250) NOT NULL,
  `staff_password` varchar(250) DEFAULT NULL,
  `staff_password_salt` varchar(150) DEFAULT NULL,
  `staff_alternat_contact` varchar(250) DEFAULT NULL,
  `staff_address` longtext NOT NULL,
  `password_send` varchar(250) DEFAULT NULL,
  `houdinv_staff_auth_token` varchar(255) NOT NULL,
  `houdinv_staff_auth_url_token` varchar(255) NOT NULL,
  `create_date` varchar(200) NOT NULL,
  `update_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houdinv_staff_management`
--

INSERT INTO `houdinv_staff_management` (`staff_id`, `staff_name`, `staff_contact_number`, `staff_department`, `staff_status`, `image`, `staff_warehouse`, `staff_email`, `staff_password`, `staff_password_salt`, `staff_alternat_contact`, `staff_address`, `password_send`, `houdinv_staff_auth_token`, `houdinv_staff_auth_url_token`, `create_date`, `update_date`) VALUES
(2, 'himanshu', '', 'Account', 1, 'http://localhost/digifever/upload/profilepic/image-1613757816.png', 4, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', '', '\\', 'email', 'u5mNZd', 'u5mNZd', '1532432610', '1613757816'),
(3, 'himanshu', '', '', 1, 'http://localhost/digifever/upload/profilepic/image-1613757816.png', 1, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', NULL, '', NULL, '', '', '', '1613757816'),
(10, 'himanshu', '', 'Account', 1, 'http://localhost/digifever/upload/profilepic/image-1613757816.png', 1, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', NULL, '', NULL, '', '', '', '1613757816');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `file` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `file`) VALUES
(2, 'test burger 1', 'http://localhost/Burgurhurbur/upload/menu/userimage-1618813735.jpg'),
(3, 'test burger 2', 'http://localhost/Burgurhurbur/upload/menu/userimage-1618813751.jpg'),
(4, 'test burger 3', 'http://localhost/Burgurhurbur/upload/menu/userimage-1618813767.jpg'),
(5, 'test burger 4', 'http://localhost/Burgurhurbur/upload/menu/userimage-1618813777.jpg'),
(6, 'test burger 5', 'http://localhost/Burgurhurbur/upload/menu/userimage-1618813794.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `name` varchar(500) NOT NULL,
  `number` varchar(15) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `file` varchar(2000) NOT NULL,
  `card` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `number`, `address`, `pass`, `file`, `card`) VALUES
(2, 'himan@gmail.com', 'himanshu', '08385902167', '114,AZAD NAGAR, 60 FEET ROAD,ALWAR', '1234', 'http://localhost/Burgurhurbur/upload/user/userimage-1618427283.JPG', '1126314816154364'),
(3, 'test@gmail.com', 'test', '123243455', 'dfdgfhfg', '1234', 'http://localhost/Burgurhurbur/upload/user/userimage-1618427411.jpg', '0040470835350011');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_course`
--
ALTER TABLE `admin_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_plans`
--
ALTER TABLE `admin_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_course`
--
ALTER TABLE `admin_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin_plans`
--
ALTER TABLE `admin_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
