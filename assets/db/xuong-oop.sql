-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 12:43 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuong-oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`) VALUES
(17, 112);

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int NOT NULL,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Ghế'),
(5, 'Heroin'),
(2, 'Laptop'),
(4, 'Nước Hoa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `shipping_name` varchar(255) DEFAULT NULL,
  `shipping_email` varchar(255) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `status_delivery` enum('0','1','2','3','4','5') NOT NULL DEFAULT '0',
  `status_payment` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_name`, `user_email`, `user_phone`, `user_address`, `shipping_name`, `shipping_email`, `shipping_phone`, `shipping_address`, `status_delivery`, `status_payment`, `created_at`, `updated_at`) VALUES
(13, 112, 'Hoan', 'hoanthinh24@gmail.com', '0963743496', 'Quoocsas OAI', NULL, NULL, NULL, NULL, '0', 0, '2024-06-10 14:38:34', '2024-06-10 14:38:34'),
(14, 112, 'Tiến Trường ', 'hoanthinh24@gmail.com', '0999999', 'Thanh Hóa', NULL, NULL, NULL, NULL, '0', 0, '2024-06-10 14:51:57', '2024-06-10 14:51:57'),
(15, 112, 'user', 'hoanthinh24@gmail.com', '', '', NULL, NULL, NULL, NULL, '0', 0, '2024-06-10 15:17:05', '2024-06-10 15:17:05'),
(16, 112, 'Trường ngủ ngày (10h)', 'hoanthinh24@gmail.com', '0636363', 'Thanh Hóa', NULL, NULL, NULL, NULL, '0', 0, '2024-06-11 00:26:24', '2024-06-11 00:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price_regular` int NOT NULL,
  `price_sale` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price_regular`, `price_sale`) VALUES
(17, 13, 17, 1, 560000, 500000),
(18, 14, 17, 1, 560000, 500000),
(19, 15, 17, 1, 560000, 500000),
(20, 16, 17, 1, 560000, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_thumbnail` varchar(255) DEFAULT NULL,
  `price_regular` int NOT NULL,
  `price_sale` int DEFAULT NULL,
  `overview` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `img_thumbnail`, `price_regular`, `price_sale`, `overview`, `content`, `created_at`, `updated_at`) VALUES
(5, 4, 'Minh Quang Hết Pin không Có SẠc', 'assets/uploads/1717928734nuochoack4.jpg', 1000000, 15000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Nước Hoa Mini Versace Eros EDT 5ml', '2024-05-31 02:43:48', '2024-06-09 03:25:34'),
(6, 4, 'Trường Thích Ngủ Ngày (10h)', 'assets/uploads/1717985430nuochoack5.jpg', 1000000, 850000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Nước Hoa Mini Versace Eros EDT 5ml', '2024-05-31 02:43:48', '2024-06-09 19:10:30'),
(7, 4, 'Phúc Minh Quang OOP ĐỐI TƯỢNG', 'assets/uploads/1717987055nuochoack3.jpg', 1000000, 222000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Nước Hoa Mini Versace Eros EDT 5ml', '2024-05-31 02:43:48', '2024-06-09 19:37:35'),
(8, 4, 'Tiến Trường Thích NGủ 24h', 'assets/uploads/1717986800nuochoacl6.jpg', 1000000, 850000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Nước Hoa Mini Versace Eros EDT 5ml', '2024-05-31 02:43:48', '2024-06-09 19:33:20'),
(9, 1, 'Ghé Gỗ chân nhọn', 'assets/uploads/1717992617Rectangle 307.jpg', 1000000, 555000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Điện Thoại Mới Ra\r\n', '2024-05-31 02:43:48', '2024-06-09 21:10:17'),
(10, 1, 'IPHONE 15', 'assets/uploads/1717924020product-4.png', 1000000, 850000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Điện Thoại Ra\r\n', '2024-05-31 02:43:48', '2024-06-09 02:07:00'),
(11, 2, 'ASUS AIO 45X', 'assets/uploads/1717987098product-3.png', 1000000, 550000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Điện Thoại Ra lâu\r\n\r\n', '2024-05-31 02:43:48', '2024-06-09 19:38:18'),
(12, 1, 'Ghế Đệm', 'assets/uploads/1717987285Rectangle 307.jpg', 1000000, 850000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Điện Thoại Mới Ra\r\n', '2024-05-31 02:43:48', '2024-06-09 19:41:25'),
(16, 4, 'Nước Hoa', 'assets/uploads/1717986888nuochoacl6.jpg', 865000, 660000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Nước Hoa Mini Versace Eros EDT 5ml', '2024-06-09 09:57:51', '2024-06-09 19:34:48'),
(17, 4, 'Bro', 'assets/uploads/1717986858nuochoa2.jpg', 560000, 500000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Nước Hoa Mini Versace Eros EDT 5ml', '2024-06-09 09:59:32', '2024-06-09 19:34:18'),
(18, 4, 'Trường Heroin', 'assets/uploads/1717986817nuochoacl3.jpg', 60000, 50000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Nước Hoa Mini Versace Eros EDT 5ml', '2024-06-09 10:00:25', '2024-06-10 08:38:43'),
(19, 4, 'Vinh Quang Bro', 'assets/uploads/1717991514nuochoa2.jpg', 60000, 5000, 'Hương đầu: bạc hà, táo xanh, chanh.\r\n\r\nHương giữa: đậu Tonka, hoa phong lữ, Ambroxan.\r\n\r\nHương cuối: hương vani, cỏ Vetiver, địa y, tuyết tùng.', 'Nước Hoa Mini Versace Eros EDT 5ml', '2024-06-09 10:01:06', '2024-06-09 20:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('admin','member') NOT NULL DEFAULT 'member',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `type`, `created_at`, `updated_at`, `is_active`) VALUES
(106, 'Admin', NULL, 'ductv44@fpt.edu.vn', '$2y$10$hReLL2ozoAtf7SVLj9PBh.Z0XdhO/Bflcn63cCTttyMrXxHDgB8S2', 'admin', '2024-06-04 07:03:31', '2024-06-04 07:03:31', 1),
(107, 'ductv55', NULL, 'ductv55@fpt.edu.vn', '$2y$10$/g.BJf1jhyeytlFR8.AryevaAaL1fp.wLSqhHwtDn1cxntYo9v1SG', 'member', '2024-06-04 07:04:08', '2024-06-04 07:04:08', 1),
(111, 'hoanthinh', NULL, 'hoanthinh311@gmail.com', '$2y$10$Fts2seYfUKwCciBEML4qjOG03SGOiA.xyzN6S6xE4SiFCPP0sQmkC', 'admin', '2024-06-07 14:21:50', '2024-06-07 14:21:50', 1),
(112, 'user', NULL, 'hoanthinh24@gmail.com', '$2y$10$SO12YZ84rAsJGRucJqxUcu08X0xAG.bP5TPpua1NNOK/UQhENP6ca', 'member', '2024-06-08 13:39:21', '2024-06-08 13:39:21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
