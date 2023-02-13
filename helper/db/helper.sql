-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 01:23 PM
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
-- Database: `helper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_mobile` varchar(15) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_mobile`, `admin_password`, `reg_date`) VALUES
(1, 'vinod', 'vinod@gmail.com', '8090587674', '827ccb0eea8a706c4c34a16891f84e7b', '2023-02-04 07:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cont_id` int(11) NOT NULL,
  `contactname` varchar(150) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cmobile` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giverregistration`
--

CREATE TABLE `giverregistration` (
  `gr_id` int(11) NOT NULL,
  `guserfullname` varchar(100) NOT NULL,
  `serviceProviding` varchar(255) NOT NULL,
  `gemail` varchar(100) NOT NULL,
  `gmobileNumber` varchar(15) NOT NULL,
  `gaddress` varchar(150) NOT NULL,
  `gpassword` varchar(50) NOT NULL,
  `gstatus` varchar(10) NOT NULL DEFAULT '0',
  `gimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giverregistration`
--

INSERT INTO `giverregistration` (`gr_id`, `guserfullname`, `serviceProviding`, `gemail`, `gmobileNumber`, `gaddress`, `gpassword`, `gstatus`, `gimage`) VALUES
(1, 'amit verma', 'Provide 4 Wheeler Vehicle. ', 'amit@gmail.com', '8090587674', 'kanpur', '25d55ad283aa400af464c76d713c07ad', '1', '13-02-2023-07-32shiva-smite-windows-theme-2-hd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `price_table`
--

CREATE TABLE `price_table` (
  `price_id` int(11) NOT NULL,
  `service_price` varchar(15) NOT NULL,
  `giver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price_table`
--

INSERT INTO `price_table` (`price_id`, `service_price`, `giver_id`) VALUES
(1, '200', 4),
(2, '300', 1),
(3, '200', 2);

-- --------------------------------------------------------

--
-- Table structure for table `seekerregistration`
--

CREATE TABLE `seekerregistration` (
  `sr_id` int(11) NOT NULL,
  `suserfullname` varchar(150) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `smobileNumber` varchar(15) NOT NULL,
  `saddress` varchar(50) NOT NULL,
  `spassword` varchar(50) NOT NULL,
  `sstatus` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seekerregistration`
--

INSERT INTO `seekerregistration` (`sr_id`, `suserfullname`, `semail`, `smobileNumber`, `saddress`, `spassword`, `sstatus`) VALUES
(1, 'admin', 'admin@gmail.com', '8081718214', 'kanpur', '25d55ad283aa400af464c76d713c07ad', '1');

-- --------------------------------------------------------

--
-- Table structure for table `serviceslist`
--

CREATE TABLE `serviceslist` (
  `service_id` int(11) NOT NULL,
  `services` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serviceslist`
--

INSERT INTO `serviceslist` (`service_id`, `services`) VALUES
(1, 'Provide 2 Wheeler Vehicle. '),
(2, 'Provide 4 Wheeler Vehicle. '),
(3, 'Provide Tow Vehicle.'),
(4, 'Know Two Wheeler and Four Wheeler Driving.'),
(5, 'Mechanic Two Wheeler.'),
(6, 'Mechanic Four Wheeler.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `giverregistration`
--
ALTER TABLE `giverregistration`
  ADD PRIMARY KEY (`gr_id`);

--
-- Indexes for table `price_table`
--
ALTER TABLE `price_table`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `seekerregistration`
--
ALTER TABLE `seekerregistration`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `serviceslist`
--
ALTER TABLE `serviceslist`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giverregistration`
--
ALTER TABLE `giverregistration`
  MODIFY `gr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `price_table`
--
ALTER TABLE `price_table`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seekerregistration`
--
ALTER TABLE `seekerregistration`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `serviceslist`
--
ALTER TABLE `serviceslist`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
