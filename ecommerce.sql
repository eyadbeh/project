-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 04:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `comment`, `date`) VALUES
(17, 'aaa', 'aa@aa', 'Hello World!!!', '2022-05-22 18:50:01'),
(18, 'aaa', 'aaa@aaa', 'Hello World!', '2022-05-22 18:50:01'),
(19, 'aaa', 'a@a', 'a', '2022-05-22 18:50:01'),
(20, 'aaa', 'aa@aa', 'aaa', '2022-05-22 18:50:01'),
(21, 'a', 'a@aa', 'sfafasf', '2022-05-25 02:04:52'),
(22, 'asadas', 'saa@aaa', 'sdadas', '2022-05-25 02:05:02'),
(23, 'aaa', 'aaa@aaa', 'aa', '2022-05-30 09:52:44'),
(24, 'asdasda', 'eee@eeeee', 'fsafsafafs', '2022-07-16 23:19:46'),
(25, 'qqqq', 'qq@qwqwq', 'saada', '2022-07-22 23:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`, `date`) VALUES
(12, 'ee', 'ee@ee.com', '123456789', 'nasr city / cairo / egypt', 'cod', 'projectcar(3)', '15000', '2022-05-22 18:49:28'),
(13, 'eee', 'eee@eee.com', '123456789', 'nasrcity/cairo/egypt', 'cards', 'projectcar(1)', '5000', '2022-05-22 18:49:28'),
(14, 'aa', 'aaa@gmail.com', '123', 'asasa', 'cards', 'projectcar(4)', '20000', '2022-05-22 18:49:28'),
(15, 'asdsa', 'das@asda', '1616532', 'sadas', 'cod', 'projectcar(5)', '25000', '2022-05-25 02:09:30'),
(16, 'a', 'aa@aa', '123', 'aa', 'cod', 'projectcar(1)', '5000', '2022-05-30 09:49:17'),
(17, 'sacsa', 'sas@asasasdsa', '1515', 'sadasdasd', 'cod', 'projectcar(1)', '5000', '2022-07-13 17:42:04'),
(18, 'eee', 'eeee@eee', '111', 'fdsfwef', 'cod', 'Car 1(1)', '5000', '2022-07-16 23:20:35'),
(19, 'afasd', 'eee@eee', '131', 'fqfqe', 'cod', '', '0', '2022-07-16 23:24:46'),
(20, 'aaa', 'aaaaaa@aaa', '11', 'aaa', 'cod', 'Car 1(1), Car 2(1), Car 3(1)', '30000', '2022-07-17 09:48:25'),
(21, 'aaa', 'asa@asa', '121', 'asdasa', 'cod', 'Car 2(3), Car 3(3), Car 4(2)', '115000', '2022-07-22 23:22:51'),
(22, 'aa', 'aa@aa', '12345', 'qq', '', 'Car 1(1)', '5000', '2022-07-23 17:49:48'),
(23, 'aasa', 'as@sasa', '111', 'aaaaaa', 'cod', 'Car 1(1)', '5000', '2022-07-23 18:35:20'),
(24, 'hamouda', 'hamoo@a.com', '112233', 'nasr city', 'cod', 'Car 2(1), Car 3(1), Car 4(1)', '45000', '2022-07-23 18:36:57'),
(25, 'aaa', 'wdw@a', '2231', 'qqqq', 'cod', 'Car 2(1), Car 3(1), Car 4(1)', '45000', '2022-07-23 18:38:41'),
(26, 'asa', 'a@assdsa', '2222', 'adsa', 'cod', 'Car 3(1), Car 4(1)', '35000', '2022-07-23 21:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Car 1', '5000', 1, 'images\\Wall-e.jpg.jpg\"', 'p01'),
(2, 'Car 2', '10000', 1, 'images\\Wall-e.jpg.jpg\"', 'p02'),
(3, 'Car 3', '15000', 1, 'images\\Wall-e.jpg.jpg\"', 'p03'),
(4, 'Car 4', '20000', 1, 'images\\Wall-e.jpg.jpg\"', 'p04');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `new_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `name`, `new_name`) VALUES
(24, 'LINUX.pdf', '1307221657732318LINUX.pdf'),
(25, 'LINUX.pdf', '1307221657732337LINUX.pdf'),
(26, 'A000067-datasheet.pdf', '1307221657732637A000067-datasheet.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `username`, `email`, `password`, `date`) VALUES
(1, 'Eyad Osama', 'eyaad', 'eyad@nct.com', '123', '2022-07-18 23:18:40'),
(4, 'Ahmed Ihab', 'ahmed', 'ahmed@nct.com', '123', '2022-07-18 23:19:12'),
(5, 'Ibrahim Arafa', 'ibrahim', 'ibrahim@nct.com', '123', '2022-07-18 23:19:17'),
(6, 'Abdelrahman Ahmed', 'abdelrahman', 'abdelrahman@nct.com', '123', '2022-07-18 23:19:23'),
(7, 'Shimaa Saied', 'shimaa', 'shimaa@nct.com', '123', '2022-07-18 23:19:28'),
(8, 'Mohamed Gamal', 'mohamed', 'mohamed@nct.com', '123', '2022-07-18 23:19:35'),
(9, 'Karim Said', 'karim', 'karim@nct.com', '123', '2022-07-18 23:19:40'),
(10, 'Omar Anwar', 'omar', 'omar@nct.com', '123', '2022-07-18 23:19:46'),
(12, 'aaa', 'aaa', 'aaa@aaa', '123', '2022-07-18 23:19:01'),
(13, 'aaaaaa', 'aaaaaaaa', 'aaaaaaaaa@aaaaa', '123456', '2022-07-18 23:19:53'),
(15, 'Admin', 'admin', 'admin@admin', 'admin', '2022-07-18 23:18:49'),
(17, 'aq', 'aq', 'aq@aq', '111', '0000-00-00 00:00:00'),
(18, 'Prof', 'Prof', 'p@p', '123', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
