-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 09:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nourishkids`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` text NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`username`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `companies_food`
--

CREATE TABLE `companies_food` (
  `id` int(255) NOT NULL,
  `food_item_name` varchar(255) NOT NULL,
  `food_category` varchar(255) NOT NULL,
  `food_quantity` varchar(255) NOT NULL,
  `container_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies_food`
--

INSERT INTO `companies_food` (`id`, `food_item_name`, `food_category`, `food_quantity`, `container_type`) VALUES
(14, 'Bananas', 'Fruits', '80', 'Pieces'),
(15, 'Samosas', 'Protein', '80', 'Pieces'),
(16, 'Beans', 'Protein', '50', 'Container'),
(17, 'Oranges', 'Fruits', '20', 'Pieces'),
(18, 'Oranges', 'Fruits', '20', 'Pieces'),
(19, 'kales', 'Vegetables', '5', 'Boxes'),
(20, 'watermelons', 'Fruits', '20', 'Pieces'),
(21, 'Beef', 'Protein', '50', 'Container'),
(22, 'Apple juice', 'Drinks', '10', 'Container'),
(23, 'Potatoes', 'Vegetables', '5', 'Boxes'),
(24, 'Potatoes', 'Vegetables', '5', 'Boxes'),
(25, 'Beef', 'Protein', '20', 'Boxes'),
(26, 'Beef', 'Protein', '5', 'Packets'),
(27, 'Oranges', 'Fruits', '5', 'Boxes'),
(28, 'Oranges', 'Fruits', '1', 'Boxes'),
(29, 'Potatoes', 'Fruits', '5', 'Boxes'),
(30, 'Beans', 'Protein', '2', 'Boxes');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phonenumber` int(225) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `email`, `phonenumber`, `address`) VALUES
(1, 'Strathmore University', 'SU@gmail.com', 54646, 'Madaraka'),
(2, 'Weston Hotel', 'Weston@gmail.com', 546656565, 'Langata'),
(3, 'Tamarind Tree', 'Tamarind@gmail.com', 5416464, 'Langata'),
(4, 'Rosantos Restaurant', 'Rosantos@gmail.com', 44684646, 'Moi Avenue'),
(5, 'Kenyatta University', 'KU@gmail.com', 23416416, 'Thika Rd');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phonenumber` int(225) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `email`, `phonenumber`, `address`) VALUES
(1, 'Furaha Children\'s Homes', 'Furaha@gmail.com', 2147483647, 'Upperhill'),
(2, 'Furaha Children\'s Homes', 'Furaha@gmail.com', 2147483647, 'Upperhill'),
(3, 'Kenya Children\'s Home', 'KCH@gmail.com', 544648, 'Langata'),
(4, 'Imani Children\'s Home', 'Imani@gmail.com', 45531354, 'Ngong\' Rd'),
(5, 'Mama Ng\'ina Children\'s Home', 'MamaNgina@gmail.com', 8868686, 'Embakassi'),
(8, 'Furaha Children\'s Homes', 'Furaha@gmail.com', 2147483647, 'Upperhill'),
(9, 'Kenya Children\'s Home', 'KCH@gmail.com', 544648, 'Langata'),
(10, 'Imani Children\'s Home', 'Imani@gmail.com', 45531354, 'Ngong\' Rd'),
(11, 'Mama Ng\'ina Children\'s Home', 'MamaNgina@gmail.com', 8868686, 'Embakassi'),
(12, 'AIC Children\'s Home', 'AICCH@gmail.com', 64135641, 'Ruai'),
(13, 'Elroi Children\'s Home', 'Elroi@gmail.com', 5864848, 'Kangundo'),
(14, 'Bidii Children\'s Home', 'Bidii@gmail.com', 65452442, 'Bidii'),
(15, 'KCH', 'KCHH@gmail.com', 4545556, 'Arcade');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `food_item_id` int(225) NOT NULL,
  `food_item_name` varchar(225) NOT NULL,
  `food_category` varchar(225) NOT NULL,
  `food_quantity` int(225) NOT NULL,
  `home_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`food_item_id`, `food_item_name`, `food_category`, `food_quantity`, `home_id`) VALUES
(1, 'Potatoes', 'Vegetables', 50, NULL),
(11, 'Apples', 'Fruits', 2, NULL),
(12, 'Apples', 'Fruits', 2, NULL),
(13, 'Apples', 'Fruits', 2, NULL),
(14, 'Apples', 'Fruits', 2, NULL),
(15, 'Apples', 'Fruits', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `food_item_id` int(255) NOT NULL,
  `food_item_name` varchar(255) NOT NULL,
  `food_category` varchar(255) NOT NULL,
  `food_quantity` varchar(255) NOT NULL,
  `container_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`food_item_id`, `food_item_name`, `food_category`, `food_quantity`, `container_type`) VALUES
(1, 'Cabbage', 'Vegetables', '1 large serving pot', ''),
(2, 'Apples', 'Fruits', '20', ''),
(3, 'Cabbage', 'Vegetable', '1 large serving pot', ''),
(4, 'Cabbage', 'Vegetable', '1 large serving pot', ''),
(5, 'Rice', 'Carbohydrates', '10 containers', ''),
(6, 'Rice', 'Carbohydrates', '10 containers', ''),
(7, 'Apples', 'Fruits', '2', 'Packets'),
(8, 'Apples', 'Fruits', '2', 'Packets');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phonenumber` int(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `cpassword` varchar(225) NOT NULL,
  `user_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phonenumber`, `address`, `password`, `cpassword`, `user_type`) VALUES
(1, 'Mercy Rotichhh', 'Rotich@gmail.com', 5547454, 'Arcade', 'bbf2dead374654cbb32a917afd236656', '0', ''),
(3, 'Mukiri Maryanne', 'mcrotich003@gmail.com', 555467, 'Arcade', 'e99a18c428cb38d5f260853678922e03', '0', ''),
(4, 'Mukiri Maryanne', 'muks@gmail.com', 2144424, 'Arcade', 'e99a18c428cb38d5f260853678922e03', '0', ''),
(5, 'Mercy Rotich', 'Rotich1@gmail.com', 5354365, 'Arcade', 'd077f244def8a70e5ea758bd8352fcd8', '0', 'admin'),
(12, 'admin', 'admin@gmail.com', 252, 'rtf', 'admin', 'admin', ''),
(14, 'Pendo Children\'s Home', 'Pendo@gmail.com', 1782123685, 'Nyayo', '202cb962ac59075b964b07152d234b70', '', ''),
(15, 'Furaha Children\'s Homes', 'Furaha@gmail.com', 2147483647, 'Upperhill', '202cb962ac59075b964b07152d234b70', '', 'home'),
(17, 'Strathmore University', 'SU@gmail.com', 54646, 'Madaraka', '202cb962ac59075b964b07152d234b70', '', 'company'),
(19, 'Weston Hotel', 'Weston@gmail.com', 546656565, 'Langata', '202cb962ac59075b964b07152d234b70', '', 'company'),
(20, 'Tamarind Tree', 'Tamarind@gmail.com', 5416464, 'Langata', '202cb962ac59075b964b07152d234b70', '', 'company'),
(21, 'Rosantos Restaurant', 'Rosantos@gmail.com', 44684646, 'Moi Avenue', '202cb962ac59075b964b07152d234b70', '', 'company'),
(23, 'Kenyatta University', 'KU@gmail.com', 23416416, 'Thika Rd', '202cb962ac59075b964b07152d234b70', '', 'company'),
(24, 'KCA University', 'KCA@gmail.com', 546468, 'Ruaraka', '202cb962ac59075b964b07152d234b70', '', 'company'),
(25, 'Inti Restaurant', 'Inti@gmail.com', 4644684, 'Westlands', '202cb962ac59075b964b07152d234b70', '', 'company'),
(26, 'Kenya Children\'s Home', 'KCH@gmail.com', 544648, 'Langata', '202cb962ac59075b964b07152d234b70', '', 'home'),
(27, 'Imani Children\'s Home', 'Imani@gmail.com', 45531354, 'Ngong\' Rd', '202cb962ac59075b964b07152d234b70', '', 'home'),
(28, 'Mama Ng\'ina Children\'s Home', 'MamaNgina@gmail.com', 8868686, 'Embakassi', '202cb962ac59075b964b07152d234b70', '', 'home'),
(29, 'AIC Children\'s Home', 'AICCH@gmail.com', 64135641, 'Ruai', '202cb962ac59075b964b07152d234b70', '', 'home'),
(30, 'Elroi Children\'s Home', 'Elroi@gmail.com', 5864848, 'Kangundo', '202cb962ac59075b964b07152d234b70', '', 'home'),
(32, 'Bidii Children\'s Home', 'Bidii@gmail.com', 65452442, 'Bidii', '202cb962ac59075b964b07152d234b70', '', 'home'),
(34, 'KCH', 'KCHH@gmail.com', 4545556, 'Arcade', '202cb962ac59075b964b07152d234b70', '', 'home'),
(36, 'Weston Hotel', 'rotich.mercy@strathmore.edu', 2534354, 'Arcade', '202cb962ac59075b964b07152d234b70', '', 'home'),
(37, 'Moi Educational Centre', 'MEC@gmail.com', 789532453, 'Mai Mahiu', '202cb962ac59075b964b07152d234b70', '', 'company'),
(38, 'Furah Children\'s Homes', 'Furah@gmail.com', 386638685, 'Furahaa', '202cb962ac59075b964b07152d234b70', '', 'home'),
(39, 'Kenya Children\'s Homee', 'KCHHH@gmail.com', 789523325, 'Arcade', '202cb962ac59075b964b07152d234b70', '', 'home');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies_food`
--
ALTER TABLE `companies_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`food_item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`food_item_id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies_food`
--
ALTER TABLE `companies_food`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `food_item_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `food_item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_home` FOREIGN KEY (`food_item_id`) REFERENCES `home` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
