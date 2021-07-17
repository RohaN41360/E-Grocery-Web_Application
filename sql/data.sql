-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 10:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(20) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `ussername` varchar(50) NOT NULL,
  `shopname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`, `ussername`, `shopname`) VALUES
(22, 'rohan pawar', 'rohanrpawar02@gmail.com', '654789130', 'asdasdsaa', 'cod', 'Besan Flour(1)(₹100),<br> Green Peas(1)(₹60),<br> Cherry(1)(₹200)', '360', 'rohan', 'super market'),
(25, 'rohan pawar', 'rohanrpawar02@gmail.com', '6547891230', 'pune', 'cod', 'orange(1)(₹80),<br> Apple(1)(₹160),<br> Pineapple(1)(₹40),<br> Tomatos(1)(₹20),<br> Pumpkin(1)(₹50)', '350', 'rohan', 'jiomart'),
(26, 'rohan pawar', 'rohanrpawar02@gmail.com', '6547891230', 'awdadd', 'cod', 'Pineapple(1)(₹40),<br> Bajra(1)(₹150),<br> almonds(1)(₹200)', '390', 'rohan123', 'super market'),
(27, 'rohan pawar', 'rohanrpawar02@gmail.com', '6547891230', 'awadwdwa', 'cod', 'Pineapple(1)(₹40),<br> Bajra(1)(₹150)', '190', 'rohan123', 'aaaa'),
(28, 'rohan pawar', 'rohanrpawar02@gmail.com', '6547891230', 'cv', 'cod', 'Pineapple(1)(₹40),<br> Bajra(1)(₹150),<br> almonds(1)(₹200),<br> Apple(1)(₹160)', '550', 'rohan', 'super market'),
(29, 'rohan pawar', 'rohanrpawar02@gmail.com', '7896541230', 'kharadi pune 14', 'cod', 'Maida(1)(₹100),<br> almonds(1)(₹200),<br> Bajra(1)(₹150),<br> Besan Flour(1)(₹100)', '550', 'rohan', 'jiomart'),
(30, 'rohan pawar', 'rohanrpawar02@gmail.com', '7896541230', 'kharadi pune 14', 'cod', 'Bajra(1)(₹150),<br> Besan Flour(1)(₹100),<br> Colgate(1)(₹60)', '310', 'rohan', 'jiomart'),
(31, 'rohan pawar', 'rohan02@gmail.com', '6547891230', 'kharadi', 'cod', 'almonds(1)(₹200),<br> Bajra(1)(₹150),<br> Maida(1)(₹100),<br> Besan Flour(1)(₹100),<br> Jaggery(1)(₹50)', '600', 'rohan', 'tejas goods'),
(32, 'rohan pawar', 'manisha@gmail.com', '4578912330', 'pune', 'cod', 'Bajra(1)(₹150),<br> Besan Flour(1)(₹100),<br> Colgate(1)(₹60)', '310', 'rohan', 'tejas goods'),
(33, 'rohan pawar', 'adasd@gmail.com', '6547891230', 'asdasda', 'cod', 'Bajra(1)(₹150),<br> Besan Flour(1)(₹100),<br> Colgate(1)(₹60),<br> orange(1)(₹80)', '390', 'rohan', 'jiomart'),
(34, 'rohan pawar', 'rohanrpawar02@gmail.com', '7894653212', 'kharadi pune 14', 'cod', 'Bajra(3)(₹150),<br> almonds(1)(₹200),<br> orange(1)(₹80),<br> Apple(1)(₹160),<br> Broccoli(1)(₹50),<br> ', '1090', 'rohan', 'jiomart'),
(35, 'rohan pawar', 'rohanrpawar02@gmail.com', '6547891230', 'kharadi pune 14', 'cod', 'Bajra(1)(₹150),<br> almonds(1)(₹200),<br> orange(1)(₹80),<br> Apple(1)(₹160),<br> Broccoli(1)(₹50),<br> Bananas(1)(₹50),<br> ', '840', 'rohan', 'jiomart'),
(36, 'tejas kashyapi', 'manisha@gmaol.com', '6547891230', 'kharadi', 'cod', 'almonds(1)(₹200),<br> Maida(1)(₹100),<br> Apple(1)(₹160)', '460', 'rohan', 'jiomart'),
(37, 'rohan pawar', 'rohanrpawar02@gmail.com', '7894545564', 'kharadi', 'cod', 'Bajra(1)(₹150),<br> Besan Flour(1)(₹100)', '250', 'rohan', 'tejas goods');

-- --------------------------------------------------------

--
-- Table structure for table `ownerregistration`
--

CREATE TABLE `ownerregistration` (
  `id` int(11) NOT NULL,
  `oemailid` varchar(25) NOT NULL,
  `ousername` varchar(20) NOT NULL,
  `opassword` varchar(20) NOT NULL,
  `oshopname` varchar(150) NOT NULL,
  `oaddress` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ownerregistration`
--

INSERT INTO `ownerregistration` (`id`, `oemailid`, `ousername`, `opassword`, `oshopname`, `oaddress`) VALUES
(4, 'shubham@gmail.com', 'shubham', '1230', 'jiomart', 'chandannagar'),
(11, 'socialmedia@gmail.com', 'tejas', '123', 'tejas goods', 'kharadi pune 14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(16, 'almonds', '200', 'images/almonds.jpg', 'palm100'),
(17, 'Bajra', '150', 'images/bajra.jpg', 'pbb100'),
(21, 'Maida', '100', 'images/maida.jpg', 'pmm100'),
(22, 'Besan Flour', '100', 'images/besan.jpg', 'pbf100'),
(23, 'Jaggery', '50', '	\r\nimages/jaggery.jpg', 'pjj100'),
(25, 'Sugar Free', '150', 'images/sugarfree.jpg', 'psfree100'),
(27, 'orange', '80', 'images/orange.jfif', 'fo100'),
(28, 'Apple', '160', 'images/apple.jpg', 'fapp100'),
(29, 'Pineapple', '40', 'images/pineapple.jpg', 'fpapp100'),
(30, 'Bananas', '50', 'images/banana.jfif', 'fban100'),
(31, 'Guava', '80', 'images/guava.jfif', 'fguava100'),
(32, 'Tomatos', '20', 'images/tomato.jfif', 'vtom100'),
(33, 'Beetroots', '60', 'images/beetroot.jfif', 'vbeet100'),
(34, 'Pumpkin', '50', 'images/pumpkin.jfif', 'vpump100'),
(36, 'Broccoli', '50', 'images/broccoli.jfif', 'vbroc100'),
(37, 'Potato', '20', 'images/potato.jfif', 'vpot100'),
(39, 'Moong Dal', '60', 'images/moong.jpg', 'pdm100'),
(40, 'Green Peas', '60', 'images/peas.jfif', 'vpeas100'),
(42, 'Dettol Active Soap', '38', 'images/dettolactivesoap.jpg', 'pdsoap'),
(43, 'Garlic Paste', '30', 'images/garlicpaste.jpg', 'ppaste100'),
(44, 'Pomogranate', '120', 'images/pomogranate.jfif', 'fpomo100'),
(45, 'Cherry', '200', 'images/cherry.jfif', 'fch100'),
(66, 'poha', '50', 'images/poha.jpg', 'ppoha100'),
(67, 'Meat Masala', '20', 'images/meatmasala.jpg', 'pmeat100'),
(68, 'SoyaBean Oil', '115', 'images/soyabeanoil.jpg', 'psoya100'),
(69, 'Mustard Oil', '100', 'images/mustardoil.png', 'pmustoil'),
(70, 'Garlic Paste', '50', 'images/garlicpaste.jpg', 'pgpaste100'),
(72, 'Dettol pack of 4', '150', '	 images/dettolpack4.jpg', 'pdettol410'),
(73, 'SoyaBean Oil', '115', '	 images/soyabeanoil.jpg', 'psoya100'),
(74, 'Garlic Paste', '50', '	 images/garlicpaste.jpg', 'pgpaste100'),
(78, 'Apple ', '100', 'images/apple.jpg', 'fapple100'),
(79, 'Mustard Oil', '546', 'images/dettolpack4.jpg', 'oil');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Cid` int(11) NOT NULL,
  `rusername` varchar(255) NOT NULL,
  `rpassword` varchar(255) NOT NULL,
  `remailid` varchar(255) NOT NULL,
  `raddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Cid`, `rusername`, `rpassword`, `remailid`, `raddress`) VALUES
(1, 'rohan', '123456', 'rohan@gmail.com', 'pune'),
(2, 'social', '123456', 'socialmedia@gmail.com', 'pune'),
(3, 'sunil', '123', 'sunil@gmail.com', 'kharadi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `age` int(12) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `age`, `mobile`) VALUES
(1, 'John', 'Smith', 22, '4234534531'),
(2, 'Peterson', 'Parker', 40, '8645534531'),
(3, 'Rock', 'Madison', 20, '4234534531'),
(4, 'Abhi', 'Singh', 23, '4234429784'),
(5, 'Swami', 'Naidu', 21, '3747234671');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ownerregistration`
--
ALTER TABLE `ownerregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ownerregistration`
--
ALTER TABLE `ownerregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
