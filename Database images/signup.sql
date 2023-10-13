-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 01:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(100) NOT NULL,
  `token_order` varchar(255) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_Id`, `token_order`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`, `date_time`) VALUES
(8, '8a967ae3dedc', 'Rushikesh  Ashok Kumbhar', 7558324332, 'Rainak vasti, Opposite Chavhan Store,Agashivnagar,Karad 415110', 'COD', '2023-03-21'),
(9, '34ab0d502875', 'Mrutunjay Panshetti', 9403977426, 'Somvar Peth,Lakshmi prasad Apartment,07,Karad 415110', 'COD', '2023-03-22'),
(10, '3b180619a9ed', 'Vaibhv Chavhan', 7709571612, 'Malkapur,karad 415539', 'COD', '2023-03-25'),
(11, '197abb62c86a', 'Prathamesh Deshmukh', 9373463120, 'Amrapur,kadepur,sangali 415236', 'COD', '2023-03-25'),
(12, '5ada83811db8', 'Kunal Yadav', 7385709594, 'Kadepur,sangli 142585', 'COD', '2023-03-31'),
(13, '47b12304fd00', 'Atharva Mohite', 8530421555, 'Karve naka ,karad 415539', 'COD', '2023-03-31'),
(14, 'fae66d2bb2ad', 'rushi', 4545, 'karad', 'COD', '2023-03-31'),
(15, 'f781ff4b1e58', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(16, '0d3c3a7598ac', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(17, 'e62b1935ee1f', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(18, '402902f4cf87', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(19, 'f629df50c643', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(20, 'aa84271a6707', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(21, 'dc62b9791c52', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(22, 'bfb1a2e1e7ef', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(23, '63fb63efa3b8', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(24, 'd1d2bd7c3069', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(25, '7cc9bb0fae22', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(26, '8f3cd6d4ce16', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(27, 'e8457a4de53d', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(28, '95f852a1dd1e', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(29, '4afa22a0dbc3', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(30, '1a5cc5747f60', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(31, '49db0ff58261', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03'),
(32, '3588fa86aaee', 'tejas patil', 7758955501, 'karad', 'COD', '2023-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `description`, `price`, `image`) VALUES
('[rushi]', '[genius]', 0, '[]');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `Confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `username`, `email`, `password`, `token`, `Confirm_password`) VALUES
(1, 'rushi', 'rushi', 'rushikeshkumbhar151@gmail.com', '$2y$10$3QQ7jDF77N.4H/LY9KTaqeoR7ZieAOEl4cOz8CaSOzwGDmsrp6JRe', 'b4438e48d24fa68dc1e1ba2c840d64', '$2y$10$VvpLpl2Ve195ucUMiEUIeeCwpemOcnl/fujUhJgkq2YZH65b9RG.C'),
(2, 'jay', 'jay', 'jayppanshetti@gmail.com', '$2y$10$kHJ11I0M6ESKkUqSRo8VTuUZo2YyAIqwUSlqD4xKVrPS82xglrpim', '0c2109917d1ecbf590609393dc6a65', '$2y$10$2UZ7OW9x8iGMdza9g3NIaOB6uKqNx0lZAPA4FM/bvbGbdlTphhfnW'),
(3, 'vaibhav', 'vaibhav9540', 'chavanvaibhav54321@gmail.com', '$2y$10$2p2/97F0uNAlTw/zjNTmnOD7P4sXlQddS0c8SuyRZypeAvtAa/gQO', 'd4a92c366e0bdf968036fcfc7aa95e', '$2y$10$2gxlpSx6jftujbyGTuhvGeuMj45lO9J/A8V0wqR.CTXOJvGNtOg4y'),
(4, 'prathmesh uday deshmukh', 'prathmesh', 'dprathmesh449@gmail.com', '$2y$10$fdPONl2v521kIVB82Tr3y.z2ASVmKRcWm9XbwOAKbiZ.7f0pYo7rO', '5593cf149e95361c344beb272c4443', '$2y$10$rPgZI2MmehH53AQOKqyCeO7n6QxcAf17wVouAMSerJz1R36muoMUm'),
(6, 'Kunal', 'Kunal9594', 'kunalyadav9594@gmail.com', '$2y$10$y0FnsuPj2E6LPjaDBqX4j.yQiwURNM5JDcmyMLax2DwFLLvktbn2W', 'ed5ccfd89f8f3a03892c98e1c1a220', '$2y$10$Bn.PeW0FfCzoI3LxChAebOJbdW3TPUb7IUN4IerEUMN0bPk3XQkHi'),
(7, 'Abhishek kumbhar', 'Abhi', 'kumbharabhishek@gmail.com', '$2y$10$3wvsEIJKYDNLV5mz7LHMweVu97gA78ZAENbkfXB2u5MDeksjLVHfe', '5f2dfacc5c411c70f3479d5fbfdc91', '$2y$10$mZMu0SGp6esT5LoQRs/EMO6PukIeHKnRZG.gGZhERCZIPCOj2RHn6'),
(8, 'shraddha Bhosale', 'shraddha', 'bhosaleshraddha17102002@gmail.com', '$2y$10$28ibkm/qTmFW4srSxN8juOSA0FNtvfn43erTgQHyMGGsM2QfCDI8S', '9bc989b7f3b97dc5544d0292a90c90', '$2y$10$DJePydTZ6PohDwOd8rhrheQESi5lQkw64/Gmql5jv305Lfq3RB0fe'),
(9, 'Mitali Thakkar', 'Mitali', 'thakkarmitali73@gmail.com', '$2y$10$jPnnc5WIBqMG3lCkiw8G9O/85FDXcU22oaqIy68Qs6NS1EhM9/Rym', 'd731dc9e31b74cea7916dc5a937b1c', '$2y$10$gLryZfaWQHjp7vBSRhXK2O0p6EhSSFswza0hWw3Ko7c7O/0IFA14i'),
(10, 'Gauri Vankhande', 'Gauri', 'gaurivankhande19@gmail.com', '$2y$10$dxtv30RNUXvPzKegYLCqF.W92fGM4UCV11ObIYP91tSJACOn.53PG', '3d658a977c50de4c48eadccb991622', '$2y$10$JEr15QJjNNDF271P.XGo1exNbOM9uz8/xxSjfEZhj/EJjngniYIZ.'),
(11, 'Atharva Mohite', 'Atharva', 'atharva.mohite2001@gmail.com', '$2y$10$CFGF1cXL1RJcrNPyKlqSBO9aB0wPBdgXzsSakgYr2.jh5eoYHj1fq', '1de6c82843e86a2fc6a668153e52c2', '$2y$10$yL8OqrNU73Gvp77iPoh/rO6JxatZjbhqY4CYL74eYG.l4HQVZlak.'),
(12, 'Tejas patil', 'tejas', 'tejas4539@gmail.com', '$2y$10$s3CY7f53xnOc79MKvpCY8eGw2RueMONAhVqdZ.WbDWMJpqrS.k1mC', 'd057635dd5077fc6e89627dc74d0d0', '$2y$10$vRHNc9QIj8TnSq.b2NOfk.neJX8TGf9iI/R/mqP8BfWecWEMFW.He');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(255) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(8, 'ROG STRIX B760-I GAMING Motherboard', 4500, 1),
(8, ' CORSAIR Vengeance RGB Pro 16GB ', 6500, 1),
(8, 'Intel Core i9-12900K', 35500, 1),
(8, 'Team T-FORCE VULCAN Z 16GB ', 8000, 1),
(8, ' Vetroo K1 Pangolin ', 11000, 1),
(8, 'Western Digital Green SSD', 3500, 1),
(8, 'ASUS-TUF NVIDIA GeForce RTX 3070 Ti', 67000, 1),
(8, ' ASUS ROG Ryujin cooler', 21500, 1),
(8, 'Microsoft Windows 10 Pro 64-bit, DVD - OEM Oprating System', 13890, 1),
(9, 'GIGABYTE B550 AORUS ELITE', 8000, 1),
(9, ' CORSAIR Vengeance RGB Pro 16GB ', 6500, 1),
(9, ' AMD Ryzen 7 5800X', 27000, 1),
(9, 'Phanteks Eclipse G360A', 7000, 1),
(9, ' SAMSUNG 870 SSD', 24500, 1),
(9, 'ASUS-TUF NVIDIA GeForce RTX 3070 Ti', 67000, 1),
(9, 'Corsair Hydro Series Cooler', 14000, 1),
(9, 'Gigabyte P550B 550 Watt 80 Plus Bronze SMPS', 3300, 1),
(9, 'Microsoft Windows 10 Pro 64-bit, DVD - OEM Oprating System', 13890, 1),
(10, 'Intel H610 Motherboard', 4000, 1),
(10, 'Team T-FORCE VULCAN Z 16GB ', 8000, 1),
(10, 'Fractal Design Pop', 78000, 1),
(10, ' Intel Core i5-13600K', 31000, 1),
(10, 'WD Red Pro HDD', 18000, 1),
(10, ' GIGABYTE GeForce RTX 4070 Ti', 50000, 1),
(10, 'Vetroo V5 CPU Air Cooler', 6000, 1),
(10, 'Esports FB550B 80 Plus Power Supply', 3026, 1),
(10, 'Microsoft Windows 11 Home 64-bit, DVD - OEM Oprating System', 9780, 1),
(11, 'ASUS ROG Strix B760', 10500, 1),
(11, ' G.SKILL Ripjaws V Series 16GB', 7000, 1),
(11, ' Intel Core i5-13600K', 31000, 1),
(11, ' NZXT H5 Flow', 6000, 1),
(11, ' SAMSUNG 870 SSD', 24500, 1),
(11, 'Gigabyte P550B 550 Watt 80 Plus Bronze SMPS', 3300, 1),
(11, 'GIGABYTE Radeon RX 6800 GAMING', 48500, 1),
(11, ' ASUS ROG Ryujin cooler', 21500, 1),
(11, 'Microsoft Windows 11 Pro Upgrade [from Home to Pro] Oprating System', 8136, 1),
(12, 'Intel H610 Motherboard', 4000, 1),
(12, ' G.SKILL TridentZ RGB Series 32GB ', 7500, 1),
(12, ' AMD Ryzen 9 7950X', 43000, 1),
(12, ' Corsair iCUE 4000X', 12500, 1),
(12, 'WD Red Pro HDD', 18000, 1),
(12, 'WD_BLACK  SSD', 7000, 1),
(12, 'GIGABYTE Gaming GeForce RTX 4090', 233000, 1),
(12, 'Corsair Hydro Series Cooler', 14000, 1),
(12, 'ASUS ROG Strix GeForce RTX 4090', 12000, 1),
(12, 'Thermaltake Smart Series 500W Power Supply', 3206, 1),
(12, 'Microsoft Windows 10 Home 32-bit/64-bit (Product Key Code Email Delivery) - OEM Oprating System', 16355, 1),
(13, 'ROG STRIX B760-I GAMING Motherboard', 4500, 1),
(13, ' CORSAIR Vengeance RGB Pro 16GB ', 6500, 1),
(13, 'Intel Core i7-13700K', 36000, 1),
(13, '  MONTECH SKY ONE LITE', 6500, 1),
(13, 'WD_BLACK SSD', 20000, 1),
(13, ' GIGABYTE GeForce RTX 4070 Ti', 50000, 1),
(13, 'ASUS ROG Strix GeForce RTX 4090', 12000, 1),
(13, 'Corsair Hydro Series Cooler', 14000, 1),
(13, 'CORSAIR RM850e Power Supply', 10609, 1),
(13, 'Microsoft Windows 10 Pro 64-bit, DVD - OEM Oprating System', 13890, 1),
(14, 'ASUS ROG Strix B760', 10500, 1),
(14, ' CORSAIR Vengeance RGB Pro 16GB ', 6500, 1),
(15, ' GIGABYTE Z790 UD', 7000, 1),
(15, ' CORSAIR Vengeance RGB Pro 16GB ', 6500, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
