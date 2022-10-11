-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 12:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shopcar`
--
CREATE DATABASE IF NOT EXISTS `db_shopcar` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_shopcar`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `msg` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `desc` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `price`, `desc`, `img`, `brand`, `time`, `state`) VALUES
(1, 'Honda Civic Type R', 699000000, 'Successful on the track and revered by driving enthusiasts around the world, the all-new 2023 Civic Type R is more powerful than ever, featuring a turbocharged 2.0-liter, 315-horsepower* engine mated to a precise six-speed manual transmission.', 'https://www.cstatic-images.com/car-pictures/xl/usc90hoc174a021001.png', 'Honda', 'Mới', b'1'),
(2, 'Ford Focus RS', 720000000, 'All good things must come to an end: The fantastic Ford Focus RS enters its final year of production packed with performance paraphernalia and ready to desecrate a racetrack near you. Ford\'s hard-core hatch has a 350-hp turbocharged four-cylinder engine that pairs exclusively with a six-speed manual transmission. Its torque-vectoring all-wheel drive is capable of conquering snow-covered streets or gravel-strewn back roads. While its cheap interior can\'t be ignored, the RS will still fit four adults and their stuff. Expect its uncompromising ride and restrictive racing seats to weed out the weak, but whoever\'s left standing is in for one helluva good time.', 'https://www.cstatic-images.com/car-pictures/xl/usc80foc351a021001.png', 'Ford', 'Mới', b'1'),
(3, 'Kia Rio', 300000000, 'The Kia Rio (Korean: 기아 리오) is a subcompact car manufactured by Kia since November 1999 and now in its fourth generation. Body styles have included a three and five-door hatchback and four-door sedan, equipped with inline-four gasoline and diesel engines, and front-wheel drive.', 'https://www.cstatic-images.com/car-pictures/xl/usc90kic031b021001.png', 'Kia', 'Cũ', b'1'),
(4, 'Volkswagen Golf Alltrack', 500000000, 'Just when you thought station wagons had all but disappeared, they have found a way to stay relevant: by mimicking crossovers. The 2019 Golf Alltrack is Volkswagen\'s response to the Subaru Outback. Although late to the quasi-SUV party, it has brought the right ingredients: raised ground clearance, standard all-wheel drive, and black-plastic cladding around the wheel openings and on the lower body for a more rugged, off-roady image. In this case, the protégé is more accomplished than the master; the Alltrack is more pleasant to drive than the Outback, largely on the merits of the strong foundation it shares with the entire 10Best Cars–winning Golf family.', 'https://www.cstatic-images.com/car-pictures/xl/usc80vwc351c021001.png', 'Volkswagen', 'Mới', b'1'),
(5, 'Acura TLX', 620000000, 'The TLX houses a potent 2.0-liter, VTEC Turbo engine boasting 272 horsepower 108 and 280 lb.-ft. of torque 110, for sharper throttle response and more thrilling acceleration. The turbocharged engine is paired with a quick-shifting 10-speed automatic transmission for optimal performance.', 'https://www.cstatic-images.com/car-pictures/xl/usd00acc182f021001.png', 'Acura', 'Cũ', b'1'),
(6, 'Mitsubishi i-MiEV', 560000000, 'The Mitsubishi i-MiEV (MiEV is an acronym for Mitsubishi innovative Electric Vehicle) is a five-door hatchback electric car produced in the 2010s by Mitsubishi Motors, and is the electric version of the Mitsubishi i. Rebadged variants of the i-MiEV are also sold in Europe by PSA Peugeot Citroën (PSA) as the Peugeot iOn and Citroën C-Zero. The i-MiEV was the world\'s first modern highway-capable mass production electric car.', 'https://www.cstatic-images.com/car-pictures/xl/usc60mic181a021001.png', 'Mitsubishi', 'Mới', b'1'),
(7, 'BMW M240', 200000000, 'It is a sporty two-door coupe or convertible with seating for four. Two models are available: the 230i and M240i. The 230i is powered by a 248-horsepower, turbocharged 2.0-liter four-cylinder engine, while the M240i gets a 335-hp, turbocharged 3.0-liter inline-six.', 'https://www.cstatic-images.com/car-pictures/xl/usd00bmc803a021001.png', 'BMW', 'Cũ', b'1'),
(8, 'Honda Civic Si', 550000000, 'For the Japanese and European markets, the Civic Type R was adopted as the high-performance variant of the Civic, starting with the EK9 hatch for Japan in 1996 and then with the EP3 hatch for Europe in 2001. The 2017 model year marked the first time that the Civic Type R was sold in North America, previous to this the Si trim was the highest in North America (except for Acura vehicles). While the Civic Type R has a more powerful engine, plus it available in a more track-oriented and spartan configuration including less sound deadening and amenities, by contrast the Civic Si has been positioned as more of a full-featured sport trim, featuring luxury options such as a sunroof and a seven-speaker audio system.', 'https://www.cstatic-images.com/car-pictures/xl/usd00hoc182a021001.png', 'Honda', 'Mới', b'1'),
(9, 'Genesis G80', 800000000, 'With a striking exterior design and a posh cabin, the 2022 G80 legitimizes Genesis as a true luxury brand. It\'s also on our Editors\' Choice list. Two turbocharged engines are offered—a 2.5-liter four-cylinder or a 3.5-liter V-6—and both deliver plentiful power and refinement. While the G80 slots in between the smaller G70 and the larger G90 in the Genesis lineup, its interior design is a cut above both of those sedans and it offers a more modern infotainment package too. The G80\'s fresh take on what makes a premium car premium puts it near the head of a competitive class of luxury sedans which includes established nameplates such as the Audi A6, the BMW 5-series, and the Mercedes-Benz E-class.', 'https://www.cstatic-images.com/car-pictures/xl/usc90gsc011c021001.png', 'Genesis', 'Mới', b'1'),
(10, '2019 Buick Envision Essence', 600000000, 'The Essence trim adds three-zone automatic climate control, leather upholstery, a heated steering wheel, driver-seat memory settings, heated outboard rear seats, and blind-spot monitoring with rear cross-traffic alert.', 'https://www.cstatic-images.com/car-pictures/xl/usc90hoc174a021001.png', 'Buick', 'Mới', b'1'),
(11, 'a', 1, 'a', 'a', 'a', 'Cũ', b'0'),
(12, 'Honda Civic Type R', 69900000, 'Successful on the track and revered by driving enthusiasts around the world, the all-new 2023 Civic Type R is more powerful than ever, featuring a turbocharged 2.0-liter, 315-horsepower* engine mated to a precise six-speed manual transmission.', 'https://www.cstatic-images.com/car-pictures/xl/usc90hoc174a021001.png', 'Honda', 'Mới', b'0'),
(13, 'Honda Civic Type R', 699000001, 'Successful on the track and revered by driving enthusiasts around the world, the all-new 2023 Civic Type R is more powerful than ever, featuring a turbocharged 2.0-liter, 315-horsepower* engine mated to a precise six-speed manual transmission.', 'https://www.cstatic-images.com/car-pictures/xl/usc90hoc174a021001.png', 'Honda', 'Mới', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quyen`
--

CREATE TABLE `tbl_quyen` (
  `id` int(11) NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_quyen`
--

INSERT INTO `tbl_quyen` (`id`, `ten`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `id_quyen`) VALUES
(17, 'Clone_Akat', 'c4ca4238a0b923820dcc509a6f75849b', 'cmstbita356@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
