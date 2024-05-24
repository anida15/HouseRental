-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb30.awardspace.net
-- Generation Time: Aug 17, 2023 at 08:13 AM
-- Server version: 5.7.40-log
-- PHP Version: 8.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4245361_maseno`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `session` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_email`, `admin_password`, `session`) VALUES
('inforgenx@gmail.com', '$2y$10$lZnbepLCxEiG/s2fcWcXyeKruu9Dqc6Q.OffOLflA1d/bi2mj8vyK', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `book_house`
--

CREATE TABLE `book_house` (
  `book_code` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `seller_telphone` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `location` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `property` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `bedroom` varchar(100) NOT NULL,
  `full_name` text NOT NULL,
  `buyer_telphone` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_house`
--

INSERT INTO `book_house` (`book_code`, `username`, `seller_telphone`, `price`, `location`, `country`, `property`, `category`, `bedroom`, `full_name`, `buyer_telphone`, `status`, `time_update`) VALUES
('LC1wOvDtbr', '28S6LvqOTQ', '+2542323', 'Ksh 343532', '3232sfsf', 'Austria', 'Apartment', 'BUY', '3', 'sdadf', '+2542345', 'NO', '2023-01-16 13:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `book_land`
--

CREATE TABLE `book_land` (
  `book_code` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `seller_telphone` varchar(200) NOT NULL,
  `price` text NOT NULL,
  `land_dimension` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `facilities` text NOT NULL,
  `location` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `full_name` text NOT NULL,
  `buyer_telphone` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `file_storage_location` varchar(300) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fun_facts`
--

CREATE TABLE `fun_facts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_code` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tel_phone` varchar(200) NOT NULL,
  `price` text NOT NULL,
  `location` text NOT NULL,
  `country` text NOT NULL,
  `bedroom` varchar(200) NOT NULL,
  `bathroom` varchar(200) NOT NULL,
  `kitchen` varchar(200) NOT NULL,
  `verandah` varchar(200) NOT NULL,
  `laundry` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `property_type` varchar(200) NOT NULL,
  `land_dimension` text NOT NULL,
  `category` varchar(200) NOT NULL,
  `file_storage_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_code`, `username`, `tel_phone`, `price`, `location`, `country`, `bedroom`, `bathroom`, `kitchen`, `verandah`, `laundry`, `description`, `property_type`, `land_dimension`, `category`, `file_storage_location`) VALUES
('21168uodFPeLaCI20221', 'vUdj5esF1Y', '+254756405110', 'Ksh 7,500,000', 'Ruiru - Kimbo', 'Kenya', '3', '2', '1', '2', '1', 'BRAND NEW 3BEDROOMS BUNGALOW ALONG THIKA RD RUIRU KIMBO MURERA  MATANGI JUST PAST THETA  POLICE STATION ABOUT 3KM FROM THIKA RD IN A VERY DEVELOPED AREA. \r\n👉ABOUT 200METERS FROM TARMAC \r\n👉LOCATED IN A VERY DEVELOPED AREA N SERENE NEIGHBOURHOOD.\r\n👉SPACIOUS SUNKEN SITTING ROOM FITTED WITH GYPSUM FINISHING \r\n👉MASTER BEDROOMS IS  ENSUITE \r\n👉OPEN PLAN KITCHEN  WITH KITCHEN PANTRY \r\n👉SEPARATE BATHROOM N TOILET \r\n👉SPACIOUS ROOMS WITH MODERN GYPSUM FINISHING. \r\n👉ALL BEDROOMS HAVE MODERN SPACIOUS WARDROBES \r\n👉AMPLE PARKING\r\n👉PERIMETER WALL \r\n👉ELECTRIC FENCE ALL ROUND \r\n👉BIO DIGESTER (NO SEPTIC)\r\n👉PARKING OF MORE THAN 4 CARS\r\n👉ON PLOT SIZE 40*60\r\n👉READY TITLE DEED. \r\n\r\n  💢SELLING AT 7.5M.NEGOTIABLE.', 'Bungalow', '40 by 60', 'BUY', 'upload/21168uodFPeLaCI20221001.jpeg'),
('34664UlxvWma1M920220', 'vUdj5esF1Y', '+254756405110', 'Ksh 80,000', 'Gikambura - Kikuyu', 'Kenya', '4', '4', '1', '2', '1', 'Style meets elegance in this beautiful Four bedrooms mansionate all ensuite to let in Gikambura Kikuyu, sitting on 50 by 100 size of the Land.\r\n80k for rent', 'Mansionette', '50 by 100', 'RENT', 'upload/34664UlxvWma1M920220929.jpeg'),
('45833tX4lTgK3Y820220', 'vUdj5esF1Y', '+254756405110', 'Ksh 9000000', 'Nairobi', 'Kenya', '3', '2', '1', '1', '1', 'Ready borehole water supply and storage\r\nSolar water heating\r\n2 passenger lifts in each block with handicap access\r\nEn suite master bedroom\r\nShared common shower with separate WC\r\nAmple balconies and dhobi areas\r\nWell fitted kitchens and bedrooms\r\nAmple parking\r\nSecure masonry boundary wall with electric fence\r\nConveniently located near key social amenities along Waiyaki Way & Ngong Road', 'Apartment', '121sqm', 'BUY', 'upload/45833tX4lTgK3Y820220919.jpg'),
('4995xm2MU4dXlK202209', 'vUdj5esF1Y', '+254756405110', 'Ksh 35,000', 'Ruaka', 'Kenya', '2', '2', '1', '1', '0', 'Two executive bedrooms master ensuite to let few meters past joyland Ruaka. letting @35k.', 'Apartment', '0', 'RENT', 'upload/4995xm2MU4dXlK20220929.jpeg'),
('96600o9IhH3Emsl20220', 'vUdj5esF1Y', '+254756405110', 'Ksh 180,000', 'Kiambu road', 'Kenya', '4', '5', '1', '3', '1', 'An expressive Four bedrooms mansionate all ensuite sitting on 50 by 100 along kiambu road to Let.\r\n180k inclusive of service charge.\r\nHas beautiful shower cubicles', 'Mansionette', '50 by 100', 'RENT', 'upload/96600o9IhH3Emsl20220929.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `house_extend_photos`
--

CREATE TABLE `house_extend_photos` (
  `extend_house_code` varchar(200) NOT NULL,
  `house_code` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `file_storage_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_extend_photos`
--

INSERT INTO `house_extend_photos` (`extend_house_code`, `house_code`, `username`, `file_storage_location`) VALUES
('11826iLmCrJfcER20220919.jpg', '45833tX4lTgK3Y820220', 'vUdj5esF1Y', 'upload/11826iLmCrJfcER20220919.jpg'),
('12047pOLx9gltZz20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/12047pOLx9gltZz20221001.jpeg'),
('20865erURpC4nFY20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/20865erURpC4nFY20220929.jpeg'),
('22282ui8QDhbrVZ20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/22282ui8QDhbrVZ20220929.jpeg'),
('246819ke1IZuJLU20220929', '4995xm2MU4dXlK202209', 'vUdj5esF1Y', 'upload/246819ke1IZuJLU20220929.jpeg'),
('26935RgxAm2C6PM20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/26935RgxAm2C6PM20220929.jpeg'),
('31004Jhsq23c40m20220929', '4995xm2MU4dXlK202209', 'vUdj5esF1Y', 'upload/31004Jhsq23c40m20220929.jpeg'),
('31252QPcayA7vNx20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/31252QPcayA7vNx20220929.jpeg'),
('34798DY5lHef9ns20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/34798DY5lHef9ns20220929.jpeg'),
('355481JY4FfbXxt20220929', '4995xm2MU4dXlK202209', 'vUdj5esF1Y', 'upload/355481JY4FfbXxt20220929.jpeg'),
('36008EDiSW9Q5Pk20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/36008EDiSW9Q5Pk20220929.jpeg'),
('37614yB3n5xc62b20220929', '4995xm2MU4dXlK202209', 'vUdj5esF1Y', 'upload/37614yB3n5xc62b20220929.jpeg'),
('38493zxWM0gIvAf20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/38493zxWM0gIvAf20220929.jpeg'),
('38543QwVInU2Z5j20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/38543QwVInU2Z5j20220929.jpeg'),
('38744uNOqRI5omS20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/38744uNOqRI5omS20220929.jpeg'),
('38880W8oZ1kRqyj20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/38880W8oZ1kRqyj20220929.jpeg'),
('39854O2ao4FGLCj20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/39854O2ao4FGLCj20220929.jpeg'),
('41092ASwC6UGFiv20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/41092ASwC6UGFiv20220929.jpeg'),
('4150E9gz3AdH8M20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/4150E9gz3AdH8M20221001.jpeg'),
('42174OoKpqR1fe620220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/42174OoKpqR1fe620220929.jpeg'),
('42534yrYfoOQWjx20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/42534yrYfoOQWjx20221001.jpeg'),
('43928iUQqSDjyoJ20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/43928iUQqSDjyoJ20221001.jpeg'),
('450157rwNFi3oPJ20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/450157rwNFi3oPJ20220929.jpeg'),
('45498PNCqxFu73d20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/45498PNCqxFu73d20220929.jpeg'),
('47486bJMWOzkPjG20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/47486bJMWOzkPjG20220929.jpeg'),
('47764yE602T7bcO20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/47764yE602T7bcO20221001.jpeg'),
('47793j8FJZByups20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/47793j8FJZByups20220929.jpeg'),
('50418wn0KJl5pWi20220929', '4995xm2MU4dXlK202209', 'vUdj5esF1Y', 'upload/50418wn0KJl5pWi20220929.jpeg'),
('5095mb3k8h6pqJ20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/5095mb3k8h6pqJ20220929.jpeg'),
('52255GxPJU21hMS20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/52255GxPJU21hMS20221001.jpeg'),
('544409InjMu58eW20220919.jpg', '45833tX4lTgK3Y820220', 'vUdj5esF1Y', 'upload/544409InjMu58eW20220919.jpg'),
('55817EcHu4kLoJW20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/55817EcHu4kLoJW20220929.jpeg'),
('56632fHNIaoQV5720220929', '4995xm2MU4dXlK202209', 'vUdj5esF1Y', 'upload/56632fHNIaoQV5720220929.jpeg'),
('608766nvsDzxfyV20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/608766nvsDzxfyV20220929.jpeg'),
('61966CScHdPG4K920221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/61966CScHdPG4K920221001.jpeg'),
('63013TDjnm8QAwL20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/63013TDjnm8QAwL20220929.jpeg'),
('6484689NIbKQgUS20220929', '4995xm2MU4dXlK202209', 'vUdj5esF1Y', 'upload/6484689NIbKQgUS20220929.jpeg'),
('66268z0muGaFe7x20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/66268z0muGaFe7x20221001.jpeg'),
('68359X9YZLtpPFV20220929', '4995xm2MU4dXlK202209', 'vUdj5esF1Y', 'upload/68359X9YZLtpPFV20220929.jpeg'),
('7165ILQc9EVwaG20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/7165ILQc9EVwaG20220929.jpeg'),
('74414hd8zlfDnqv20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/74414hd8zlfDnqv20221001.jpeg'),
('77459qQEP2lMA6R20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/77459qQEP2lMA6R20220929.jpeg'),
('78966LgenusHjR020221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/78966LgenusHjR020221001.jpeg'),
('79452fYc6xdvqWp20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/79452fYc6xdvqWp20220929.jpeg'),
('82681M0xHgGTUuP20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/82681M0xHgGTUuP20220929.jpeg'),
('85374fm6KXPs0cJ20220919.jpg', '45833tX4lTgK3Y820220', 'vUdj5esF1Y', 'upload/85374fm6KXPs0cJ20220919.jpg'),
('86372UeEjbu8WcJ20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/86372UeEjbu8WcJ20221001.jpeg'),
('86891j39IsbxP5U20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/86891j39IsbxP5U20220929.jpeg'),
('876347IaluJNyzD20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/876347IaluJNyzD20221001.jpeg'),
('89541B0Y9xVgbTJ20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/89541B0Y9xVgbTJ20220929.jpeg'),
('90519bRUiErO2kW20220919.jpg', '45833tX4lTgK3Y820220', 'vUdj5esF1Y', 'upload/90519bRUiErO2kW20220919.jpg'),
('91212F2SWGswzRk20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/91212F2SWGswzRk20220929.jpeg'),
('92245dROQ3mxX6r20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/92245dROQ3mxX6r20220929.jpeg'),
('96017mnhBMP1LrG20220929', '34664UlxvWma1M920220', 'vUdj5esF1Y', 'upload/96017mnhBMP1LrG20220929.jpeg'),
('97759S9Xi80RBQK20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/97759S9Xi80RBQK20221001.jpeg'),
('98557vildCAKX3b20220929', '96600o9IhH3Emsl20220', 'vUdj5esF1Y', 'upload/98557vildCAKX3b20220929.jpeg'),
('99502a82ncVdJKH20221001', '21168uodFPeLaCI20221', 'vUdj5esF1Y', 'upload/99502a82ncVdJKH20221001.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `house_extend_video`
--

CREATE TABLE `house_extend_video` (
  `extend_house_code` varchar(100) NOT NULL,
  `house_code` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `file_storage_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `land_code` varchar(100) NOT NULL,
  `type` varchar(110) NOT NULL,
  `price` text NOT NULL,
  `facilities` text NOT NULL,
  `land_dimension` text NOT NULL,
  `location` text NOT NULL,
  `country` varchar(110) NOT NULL,
  `description` text NOT NULL,
  `username` varchar(110) NOT NULL,
  `tel_phone` varchar(200) NOT NULL,
  `file_storage_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`land_code`, `type`, `price`, `facilities`, `land_dimension`, `location`, `country`, `description`, `username`, `tel_phone`, `file_storage_location`) VALUES
('64519NKGHqX3Jfp20220919', 'Residential', 'Ksh 1500000', 'Water, Electricity, schools available', '50X100', 'Kitengela', 'Kenya', 'Introducing prime land located within a walking distance from kag university. convenience located a few minutes drive from the fast growing kitengela town. electricity availability water availability social amenities: schools, universities hospitals, banks, malls, filling stations, highways, markets, police posts and administrative centers within reach.', 'vUdj5esF1Y', '+254724787545', 'upload/64519NKGHqX3Jfp20220919.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `land_extend_photos`
--

CREATE TABLE `land_extend_photos` (
  `extend_land_code` varchar(100) NOT NULL,
  `land_code` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `file_storage_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_extend_photos`
--

INSERT INTO `land_extend_photos` (`extend_land_code`, `land_code`, `username`, `file_storage_location`) VALUES
('44423sXifZ9LQdK20220919', '64519NKGHqX3Jfp20220919', 'vUdj5esF1Y', 'upload/44423sXifZ9LQdK20220919.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `land_extend_video`
--

CREATE TABLE `land_extend_video` (
  `extend_land_code` varchar(200) NOT NULL,
  `land_code` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `file_storage_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership_application`
--

CREATE TABLE `membership_application` (
  `membership_code` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `applicant_email` text NOT NULL,
  `applicant_phone` text NOT NULL,
  `pending_application` int(100) NOT NULL,
  `status` varchar(200) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_application`
--

INSERT INTO `membership_application` (`membership_code`, `username`, `first_name`, `last_name`, `applicant_email`, `applicant_phone`, `pending_application`, `status`, `time_update`) VALUES
('1VtNZlj8Tu', '28S6LvqOTQ', 'anida', 'kimtai', 'anida@gmail.com', '+254790359782', 0, 'YES', '2022-09-19 16:44:28'),
('fnvNjrTE0P', 'vUdj5esF1Y', 'Patrick', 'Akello', 'akellopatrick84@yahoo.com', '+254724787545', 0, 'YES', '2022-09-18 18:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `username` varchar(200) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `tel_phone` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `approved` text NOT NULL,
  `time_join` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `first_name`, `last_name`, `email`, `tel_phone`, `password`, `approved`, `time_join`) VALUES
('28S6LvqOTQ', 'anida', 'kimtai', 'anida@gmail.com', '+2547879798', '$2y$10$9LDvs.0CKFXoIqhmJXxTUeaUS/Fpb6vXKLVzYsoKcfjTiOjKwvKvG', 'YES', '2022-09-18 19:08:09'),
('MHCZsVvnPW', 'Avato', 'Otava', 'avato@gmail.com', '+2547123456', '$2y$10$Yw8A.fBAchNg962Ot5KVzeQ0KfL7fWzTPOt4iSsVVctOCWdOb8wVK', 'NO', '2022-09-18 16:08:09'),
('tDSpiM0AJd', 'Kim', 'Kim', 'kim@gmail.com', '+25488', '$2y$10$ZWLcMWK4DXjoU4qAN5XKk.6CakS958VuL9QoojUYoFg1USvy602ta', 'NO', '2023-02-15 07:51:37'),
('vUdj5esF1Y', 'Patrick', 'Akello', 'akellopatrick84@yahoo.com', '+254724787545', '$2y$10$n9yXNyaGUi55wWHj7gPZcuaMPuRZOAp0xCuFSqpcGiGbIAbu1gEU2', 'YES', '2022-09-18 16:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `what_is_new`
--

CREATE TABLE `what_is_new` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `file_storage_location` varchar(200) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `book_house`
--
ALTER TABLE `book_house`
  ADD PRIMARY KEY (`book_code`);

--
-- Indexes for table `book_land`
--
ALTER TABLE `book_land`
  ADD PRIMARY KEY (`book_code`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fun_facts`
--
ALTER TABLE `fun_facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_code`);

--
-- Indexes for table `house_extend_photos`
--
ALTER TABLE `house_extend_photos`
  ADD PRIMARY KEY (`extend_house_code`);

--
-- Indexes for table `house_extend_video`
--
ALTER TABLE `house_extend_video`
  ADD PRIMARY KEY (`extend_house_code`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`land_code`);

--
-- Indexes for table `land_extend_photos`
--
ALTER TABLE `land_extend_photos`
  ADD PRIMARY KEY (`extend_land_code`);

--
-- Indexes for table `land_extend_video`
--
ALTER TABLE `land_extend_video`
  ADD PRIMARY KEY (`extend_land_code`);

--
-- Indexes for table `membership_application`
--
ALTER TABLE `membership_application`
  ADD PRIMARY KEY (`membership_code`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `what_is_new`
--
ALTER TABLE `what_is_new`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fun_facts`
--
ALTER TABLE `fun_facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `what_is_new`
--
ALTER TABLE `what_is_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
