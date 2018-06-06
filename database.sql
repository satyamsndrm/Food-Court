-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 03:46 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `cat` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `idesc` text,
  `keywd` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `i_name`, `cat`, `price`, `pic`, `idesc`, `keywd`) VALUES
(1, 'Veg Pizza( 100 )', 'PIZZA', '100', 'img/img/vegpizza.jpg', '4 Slices of Regular Crust', NULL),
(2, 'Cheese Margherita Pizza( 80 )', 'PIZZA', '80', 'img/img/Chesse Margherita Pizza.jpg', '4 Slices of Regular Crust', NULL),
(3, 'Onion Mushroom Capsicum Pizza(100)', 'PIZZA', '100', 'img/img/onion mushroom caps.jpg', '4 Slices of Regular Crust', NULL),
(4, 'Chilly Paneer Pizza( 110 )', 'PIZZA', '110', 'img/img/chilli panner pizza.jpg', '4 Slices of Regular Crust', NULL),
(5, 'Spicy Mushroom Pizza( 110 )', 'PIZZA', '110', 'img/img/spicy mushroom pizza.jpg', '4 Slices of Regular Crust', NULL),
(6, 'Double Cheese Pizza( 100 )', 'PIZZA', '100', 'img/img/double chesse pizza.jpg', '4 Slices of Regular Crust', NULL),
(7, 'Mushroom Paneer Pizza( 100 )', 'PIZZA', '100', 'img/img/panner mushroom pizza.jpg', '4 Slices of Regular Crust', NULL),
(8, 'Special Pizza( 120 )', 'PIZZA', '120', 'img/img/special pizza.jpg', '4 Slices of Regular Crust', NULL),
(9, 'Cheese Burst Pizza( 150 )', 'PIZZA', '150', 'img/img/chesse nurst pizza.jpg', '4 Slices of Regular Crust', NULL),
(10, 'Veg Burger( 25 )', 'BURGER', '25', 'img/img/veg burger.jpg', NULL, NULL),
(11, 'Noodles Burger( 30 )', 'BURGER', '30', 'img/img/noodle burger.jpg', NULL, NULL),
(12, 'Mix Veg Burger(35)', 'BURGER', '35', 'img/img/mix veg burger.jpg', NULL, NULL),
(13, 'Spicy Yummy Burger( 35 )', 'BURGER', '35', 'img/img/spicy yummy burger.jpg', NULL, NULL),
(14, 'Cheese Burger( 40 )', 'BURGER', '40', 'img/img/chesse burger.jpg', NULL, NULL),
(15, 'Jumbo Burger( 50 )', 'BURGER', '50', 'img/img/jumbo burger.jpg', NULL, NULL),
(16, 'Italian Burger( 60 )', 'BURGER', '60', 'img/img/italian burger.jpg', NULL, NULL),
(17, 'Burger Pizza( 70 )', 'BURGER', '70', 'img/img/burger pizza.jpg', NULL, NULL),
(18, 'Macroni Burger( 35 )', 'BURGER', '35', 'img/img/macroni burger.jpg', NULL, NULL),
(19, 'Veg Foot Long( 50 )', 'FOOT LONG & MARINE', '50', 'img/img/veg foot long.jpg', NULL, NULL),
(20, 'Paneer Foot Long( 50 )', 'FOOT LONG & MARINE', '50', 'img/img/panner foot long.jpg', NULL, NULL),
(21, 'Mushroom Foot Long(50)', 'FOOT LONG & MARINE', '50', 'img/img/mushroom foot long.jpg', NULL, NULL),
(22, 'Veg Marine( 50 )', 'FOOT LONG & MARINE', '50', 'img/noimg1.jpg', NULL, NULL),
(23, 'Paneer Marine( 50 )', 'FOOT LONG & MARINE', '50', 'img/noimg1.jpg', NULL, NULL),
(24, 'Cheesy Marine( 50 )', 'FOOT LONG & MARINE', '50', 'img/noimg1.jpg', NULL, NULL),
(25, 'Seekh Kabab Marine( 50 )', 'FOOT LONG & MARINE', '50', 'img/noimg1.jpg', NULL, NULL),
(26, 'Garlic Bread( 70 )', 'FOOT LONG & MARINE', '70', 'img/img/garlic bread.jpg', NULL, NULL),
(27, 'Strawberry Shake( 50 )', 'SHAKES', '50', 'img/img/strawberry shakes.jpg', NULL, NULL),
(28, 'Chocolate Shake( 50 )', 'SHAKES', '50', 'img/img/chocolate shake.jpg', NULL, NULL),
(29, 'Banana Shake( 50 )', 'SHAKES', '50', 'img/img/bannana shake.jpg', NULL, NULL),
(30, 'Mango Shake( 50 )', 'SHAKES', '50', 'img/img/mango shake.jpg', NULL, NULL),
(31, 'Vanilla Shake( 50 )', 'SHAKES', '50', 'img/img/vanila shake.jpg', NULL, NULL),
(32, 'Butter Scotch Shake( 50 )', 'SHAKES', '50', 'img/img/butterscotch shake.jpg', NULL, NULL),
(33, 'Black Current Shake( 50 )', 'SHAKES', '50', 'img/img/black current shake.jpg', NULL, NULL),
(34, 'Sizzing Brownie( 60 )', 'SHAKES', '60', 'img/img/sizzling brownie shake.jpg', NULL, NULL),
(35, 'Grilled Potato Sandwich( 40 )', 'SANDWICH', '40', 'img/img/grilled potato sandwitch.jpg', NULL, NULL),
(36, 'Cheese Grilled Sandwich( 50 )', 'SANDWICH', '50', 'img/img/chesse grilled  sandwitch.jpg', NULL, NULL),
(37, ' Mushroom Grilled Sandwich( 50 )', 'SANDWICH', '50', 'img/img/mushroom grilled sandwitch.jpg', NULL, NULL),
(38, 'Spicy Paneer Sandwich( 50 )', 'SANDWICH', '50', 'img/img/spicy panner sandwitch.jpg', NULL, NULL),
(39, 'Fruit Cocktail Sandwich( 50 )', 'SANDWICH', '50', 'img/img/fruit cocktail sandwitch.jpg', NULL, NULL),
(40, 'Veg Wrap( 40 )', 'WRAP', '40', 'img/img/veg wrap.jpeg', NULL, NULL),
(41, 'Veg kathi Roll( 30 )', 'WRAP', '30', 'img/img/veg kathai roll.jpg', NULL, NULL),
(42, 'Cheese kathi Roll( 50 )', 'WRAP', '50', 'img/img/chesse kahai roll.jpg', NULL, NULL),
(43, 'New Zig Zag Wrap( 50 )', 'WRAP', '50', 'img/img/new zig zag wrap.jpg', NULL, NULL),
(44, 'Cheese Wrap( 50 )', 'WRAP', '50', 'img/img/chesse wrap.jpg', NULL, NULL),
(45, 'New Dunkin Duck Wrap( 60 )', 'WRAP', '60', 'img/img/dunkin duck wrap.jpg', NULL, NULL),
(46, 'Momos( 50 )', 'SPECIAL', '50', 'img/img/fried momos.jpg', '10 Pieces', NULL),
(47, 'French Fries( 50 )', 'SPECIAL', '50', 'img/img/french fries.jpg', NULL, NULL),
(48, 'Smiley( 60 )', 'SPECIAL', '60', 'img/img/smiley.jpg', '10 Pieces', NULL),
(49, 'ColdDrinks', NULL, NULL, 'img/img/cold drinks.jpg', 'All products of cococola is being selled. You can tell us after order which colddrink you would like to have from us.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(15) NOT NULL,
  `hostel` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mob_no` varchar(255) DEFAULT NULL,
  `ordr` text NOT NULL,
  `d_upl` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `roll_no`, `hostel`, `email`, `mob_no`, `ordr`, `d_upl`) VALUES
(1, 'a', 'hlno', 'email', 'mob_no', 'order', '2017-11-13 03:29:51'),
(2, 'a', 'hlno', 'email', 'mob_no', 'order', '2017-11-13 16:05:23'),
(3, 'a', 'hlno', 'as@as', 'asa', ' , ', '2017-11-13 16:15:57'),
(4, 'a', 'hlno', 'as@as', 'asa', '1 veg Pizza1 Mix Veg Burger(35)1 Cheese Burst Pizza( 150 ) , ', '2017-11-13 16:39:39'),
(5, 'a', 'hlno', 'as@as', 'asa', '1 Veg Burger( 25 )1 Mix Veg Burger(35)1 Cheese Margherita( 80 ) , ', '2017-11-13 16:41:40'),
(6, 'a', 'hlno', 'as@as', 'asa', '1 Veg Burger( 25 ) , 1 Mix Veg Burger(35) , 1 Cheese Margherita( 80 )', '2017-11-13 16:43:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
