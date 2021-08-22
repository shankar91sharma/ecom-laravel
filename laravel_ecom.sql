-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 03:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prodcut_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `prodcut_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 9, 2, '2021-08-15 01:41:06', '2021-08-15 01:41:06'),
(9, 4, 1, '2021-08-22 07:33:57', '2021-08-22 07:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'shankar', 'shankar91sharma@gmail.com', '7503406299', 'svd g', NULL, NULL),
(2, 'plain-artisan', 'shanake@gmail.com', '647565585', 'fs df', '2021-08-22 04:52:42', '2021-08-22 04:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_08_14_095843_create_users_table', 1),
(2, '2021_08_14_112652_create_products_table', 2),
(3, '2021_08_14_193903_create_cart_table', 3),
(4, '2021_08_22_080051_create_orders_table', 4),
(5, '2021_08_22_100719_create_contact_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `address`, `status`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'sector -5 , gurgaon', 'Pending', 'cod', 'Pending', NULL, NULL),
(2, 9, 1, 'sector -5 , gurgaon', 'Pending', 'cod', 'Pending', NULL, NULL),
(3, 8, 1, 'sector -5 , gurgaon', 'Pending', 'cod', 'Pending', NULL, NULL),
(4, 4, 4, 'tonk road jaipur', 'Pending', 'cod', 'Pending', NULL, NULL),
(5, 8, 4, 'tonk road jaipur', 'Pending', 'cod', 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `gallery`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Afresh - Lemon - 50 gm', '599', 'Weight Management', 'http://herbalifeallinone.com/assets/images/products/Weight-Management/herbalife-nutrition-afresh-lemon-energy-drink.jpg', 'Afresh Energy Drink Mix contains Orange Pekoe extract, green tea extract and natural caffeine powder. Caffeine helps you feel energized and supports alertness. Enjoy as a refreshing beverage at any time of the day. ', NULL, NULL),
(2, 'Afresh - Cinnamon - 50 gm', '599', 'Weight Management', 'http://herbalifeallinone.com/assets/images/products/Weight-Management/afresh-energy-drink-cinnamon-flavour-50gm.jpg', 'Mix 1 g of Afresh with 160 ml hot or cold water for a refreshing drink. Replace your Tea/Coffee with Afresh. Not to consume more than three servings per day. Consume not more than 500 ml per day.', NULL, NULL),
(3, 'Afresh - Elachi - 50 gm', '599', 'Weight Management', 'http://herbalifeallinone.com/assets/images/products/Weight-Management/afresh-energy-drink-elaichi-flavour-50gm.jpg', 'Afresh Energy Drink Mix contains Orange Pekoe extract, green tea extract and natural caffeine powder. Caffeine helps you feel energized and supports alertness. Enjoy as a refreshing beverage at any time of the day. ', NULL, NULL),
(4, 'Herbalife Line', '1799', 'Targeted Nutrition', 'http://herbalifeallinone.com/assets/images/products/Target-Nutrition/Herbalife-Line.jpg', 'One Softgel, two times per day, preferably with a meal. Not to exceed the recommended daily usage.  ', NULL, NULL),
(5, 'Herbalife H24 Hydrate', '2150', 'Energy And Fitness', 'http://herbalifeallinone.com/assets/images/products/energy-and-fitness/Herbalife24-Hydrate.png', 'Hydrate is developed by experts in sports nutrition. Replenish your body with bioavailable electrolytes. It provides five essential vitamins (B1, B2, B5, B12 and C) and five essential electrolytes (Calcium, Magnesium, Phosphorus, Potassium and Sodium). ', NULL, NULL),
(8, 'Immune Health', '1950', 'Vritilife Ayurvedic', 'http://herbalifeallinone.com/assets/images/products/vritilife-ayurvedic/vritilife-immune-health.jpg', 'Standardized extracts of Tulasi', NULL, NULL),
(9, 'Beta Heart Vanilla', '1560', 'Targeted Nutrition', 'http://herbalifeallinone.com/assets/images/products/Target-Nutrition/Beta-Heart-Vanilla.jpg', 'Nutritious powder containing Oat beta-glucan as key ingredient', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'shanakr sharma', 'shankar91sharma@gmail.com', '$2y$10$dGAzc5qwuq4xp8SsT0m8b.SILXsk3rBrh8igJuhAjZagTWYgnndq.', NULL, NULL),
(2, 'krishna', 'krishna@gmail.com', '$2y$10$dGAzc5qwuq4xp8SsT0m8b.SILXsk3rBrh8igJuhAjZagTWYgnndq.', NULL, NULL),
(4, 'rajiv', 'rajiv@gmail.com', '$2y$10$pqhwtCKQZqcN4dHQZ1oJne0Bz54.5OCNrEKou6fo9vEaPox5KBMTy', '2021-08-22 07:12:20', '2021-08-22 07:12:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
