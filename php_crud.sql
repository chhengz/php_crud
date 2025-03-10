-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2025 at 01:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `created_at`) VALUES
(1, 'Sting', '32', '2025-03-10 11:28:14'),
(2, 'Sting', '32', '2025-03-10 11:31:33'),
(3, 'Coca', '20', '2025-03-10 11:31:33'),
(4, 'Pepsi', '18', '2025-03-10 11:31:33'),
(5, 'Sprite', '22', '2025-03-10 11:31:33'),
(6, 'Fanta', '25', '2025-03-10 11:31:33'),
(7, 'Red Bull', '40', '2025-03-10 11:31:33'),
(8, '7UP', '24', '2025-03-10 11:31:33'),
(9, 'Mountain Dew', '30', '2025-03-10 11:31:33'),
(10, 'Lipton Tea', '35', '2025-03-10 11:31:33'),
(11, 'Nestlé Water', '15', '2025-03-10 11:31:33'),
(12, 'Gatorade', '45', '2025-03-10 11:31:33'),
(13, 'Monster Energy', '50', '2025-03-10 11:31:33'),
(14, 'Nescafe', '38', '2025-03-10 11:31:33'),
(15, 'Ovaltine', '42', '2025-03-10 11:31:33'),
(16, 'Milo', '28', '2025-03-10 11:31:33'),
(17, 'Arizona Tea', '33', '2025-03-10 11:31:33'),
(18, 'Tropicana Juice', '37', '2025-03-10 11:31:33'),
(19, 'Pocari Sweat', '27', '2025-03-10 11:31:33'),
(20, 'Dr Pepper', '29', '2025-03-10 11:31:33'),
(21, 'RC Cola', '19', '2025-03-10 11:31:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
