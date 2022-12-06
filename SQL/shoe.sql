-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 08:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID_Item` int(20) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `Item_price` int(20) NOT NULL,
  `Item_amount` int(11) NOT NULL,
  `Item_model` varchar(50) NOT NULL,
  `Image_item` varchar(200) NOT NULL,
  `Type_item` varchar(200) NOT NULL,
  `Item_data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID_Item`, `Item_name`, `Item_price`, `Item_amount`, `Item_model`, `Image_item`, `Type_item`, `Item_data`) VALUES
(1, 'Jordan 1 Retro High Off-White Chicago', 490000, 100, 'Jordan', 'Jordan 1 Retro High Off-White Chicago.png', 'Nike', '{\"Brand\":\"Nike\" , \"Item_name\": \"Jordan 1 Retro High Off-White Chicago\" , \"Price\":\"490000 ฿\"}'),
(2, 'Jordan 1 Retro High Off-White White', 390000, 100, 'Jordan', 'Jordan 1 Retro High Off-White White.png', 'Nike', '{\"Brand\":\"Nike\" , \"Item_name\": \"Jordan 1 Retro High Off-White White\" , \"Price\":\"390000 ฿\"}'),
(3, 'Jordan 1 Retro High Off-White University Blue', 72900, 100, 'Jordan', 'Jordan 1 Retro High Off-White University Blue.png', 'Nike', '{\"Brand\":\"Nike\" , \"Item_name\": \"Jordan 1 Retro High Off-White University Blue\" , \"Price\":\"72900 ฿\"}'),
(4, 'Nike Air Force 1 Low G-Dragon Peaceminusone Para-N', 21500, 100, 'Air Force 1', 'Nike Air Force 1 Low G-Dragon Peaceminusone Para-Noise.png', 'Nike', '{\"Brand\":\"Nike\" , \"Item_name\": \"Nike Air Force 1 Low G-Dragon Peaceminusone Para-N\" , \"Price\":\"21500 ฿\"}'),
(5, 'Nike Kwondo 1 G-Dragon Peaceminusone Triple White', 15000, 100, 'Kwondo', 'Nike Kwondo 1 G-Dragon Peaceminusone Triple White.png', 'Nike', '{\"Brand\":\"Nike\" , \"Item_name\": \"Nike Kwondo 1 G-Dragon Peaceminusone Triple White\" , \"Price\":\"15000 ฿\"}'),
(6, 'Yeezy Boost 350 V2 Zebra', 22000, 100, 'Yeezy Boost 350 V2', 'Yeezy Boost 350 V2 Zebra.png', 'Adidas', '{\"Brand\":\"Adidas\" , \"Item_name\": \"Yeezy Boost 350 V2\" , \"Price\":\"22000 ฿\"}'),
(7, 'Yeezy Boost 350 V2 Black Red', 15000, 100, 'Yeezy Boost 350 V2', 'Yeezy Boost 350 V2 Black Red.png', 'Adidas', '{\"Brand\":\"Adidas\" , \"Item_name\": \"Yeezy Boost 350 V2 Black Red\" , \"Price\":\"15000 ฿\"}'),
(8, 'Yeezy Boost 350 V2 Blue Tint', 18000, 100, 'Yeezy Boost 350 V2', 'Yeezy Boost 350 V2 Blue Tint.png', 'Adidas', '{\"Brand\":\"Adidas\" , \"Item_name\": \"Yeezy Boost 350 V2 Blue Tint\" , \"Price\":\"18000 ฿\"}'),
(9, 'Yeezy Wave Runner 700 Solid Grey', 25000, 100, 'Yeezy Wave Runner 700', 'Yeezy Wave Runner 700 Solid Grey.png', 'Adidas', '{\"Brand\":\"Adidas\" , \"Item_name\": \"Yeezy Wave Runner 700 Solid Grey\" , \"Price\":\"25000 ฿\"}'),
(10, 'Adidas ADI2000 Yu-Gi-Oh! Blue Eyes White Dragon', 5000, 100, 'ADI2000', 'Adidas ADI2000 Yu-Gi-Oh! Blue Eyes White Dragon.png', 'Adidas', '{\"Brand\":\"Adidas\" , \"Item_name\": \"Adidas ADI2000 Yu-Gi-Oh! Blue Eyes White Dragon\" , \"Price\":\"5000 ฿\"}'),
(11, 'Adidas ADI2000 Yu-Gi-Oh! Dark Magician', 5000, 100, 'ADI2000', 'Adidas ADI2000 Yu-Gi-Oh! Dark Magician.png', 'Adidas', '{\"Brand\":\"Adidas\" , \"Item_name\": \"Adidas ADI2000 Yu-Gi-Oh! Dark Magician\" , \"Price\":\"5000 ฿\"}'),
(12, 'Nike Air Force 1 Low G-Dragon Peaceminusone Para-N', 21500, 100, 'Air Force 1', 'Nike Air Force 1 Low G-Dragon Peaceminusone Para-Noise 2.0.png', 'Nike', '{\"Brand\":\"Nike\" , \"Item_name\": \"Nike Air Force 1 Low G-Dragon Peaceminusone Para-Noise 2.0\" , \"Price\":\"21500 ฿\"}');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID_Item` int(10) NOT NULL,
  `ID_Order` int(10) NOT NULL,
  `ID_User` int(255) NOT NULL,
  `Item_amount` int(255) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID_Item`, `ID_Order`, `ID_User`, `Item_amount`, `Time`) VALUES
(10, 1, 1, 1, '2022-11-15 00:00:00'),
(9, 2, 2, 1, '2022-11-15 00:00:00'),
(3, 3, 2, 1, '2022-11-23 01:31:29'),
(8, 4, 3, 1, '2022-11-23 01:32:56'),
(4, 5, 1, 2, '2022-11-23 01:34:47'),
(5, 6, 2, 2, '2022-11-23 01:36:08'),
(8, 7, 3, 3, '2022-11-23 01:37:27'),
(2, 185, 1, 1, '2022-11-22 15:51:31'),
(3, 186, 1, 1, '2022-11-22 15:51:53'),
(4, 188, 1, 1, '2022-11-22 17:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `ID_Receipt` int(20) NOT NULL,
  `ID_Order` varchar(10) NOT NULL,
  `ID_Item` int(10) NOT NULL,
  `Total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`ID_Receipt`, `ID_Order`, `ID_Item`, `Total_price`) VALUES
(1, '1', 2, 390000),
(2, '2', 3, 72900),
(3, '3', 3, 72900),
(4, '4', 8, 18000),
(5, '5', 4, 43000),
(6, '6', 5, 30000),
(7, '7', 8, 44000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Fullname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `Username`, `Password`, `email`, `Tel`, `Fullname`) VALUES
(1, 'Wichan', '111111', 't@hotmail.com', '0812345678', 'Tiktokza007'),
(2, 'Thongtong', '1234567', 'p@hotmail.com', '0912345678', 'Por'),
(3, 'Bobady', '1234567', 'b@hotmail.com', '0912345743', 'Bow'),
(4, 'zeakhinet', '123456', 'z@hotmail.com', '0846694215', 'Jump');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID_Item`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID_Order`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`ID_Receipt`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID_Item` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID_Order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `ID_Receipt` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
