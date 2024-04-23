-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 09:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `give_blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `b_group` varchar(100) DEFAULT NULL,
  `donated` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `phone`, `password`, `gender`, `b_group`, `donated`) VALUES
(3, 'Guinevere', 'Wooten', 'fidojyfiba@mailinator.com', '+1 (251) 298-6061', 'Pa$$w0rd!', 'other', 'A+', 'yes'),
(4, 'Mallory', 'Cleveland', 'ratopi@mailinator.com', '+1 (466) 844-1731', 'Pa$$w0rd!', 'female', 'O+', 'yes'),
(5, 'Kyra', 'Potter', 'bamyhufyqo@mailinator.com', '+1 (596) 901-7636', 'Pa$$w0rd!', 'male', 'O+', 'no'),
(6, 'Eve', 'Small', 'nuvexewy@mailinator.com', '+1 (372) 224-4897', 'Pa$$w0rd!', 'other', 'AB-', 'no'),
(7, 'Alea', 'Cotton', 'qerireceru@mailinator.com', '+1 (498) 698-2428', 'Pa$$w0rd!', 'male', 'AB+', 'no'),
(8, 'Chanda', 'Slater', 'vyrarejo@mailinator.com', '+1 (631) 872-6415', 'Pa$$w0rd!', 'male', 'O+', 'yes'),
(9, 'Tyrone', 'Fields', 'xygahuluj@mailinator.com', '+1 (989) 895-2786', 'Pa$$w0rd!', 'male', 'B-', 'yes'),
(10, 'Brody', 'Calhoun', 'test@mailinator.com', '+1 (563) 695-1661', 'Pa$$w0rd!', 'other', 'B-', 'yes'),
(11, 'Nehru', 'Walls', 'telorewyf@mailinator.com', '+1 (173) 583-5879', 'Pa$$w0rd!', 'female', 'B+', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
