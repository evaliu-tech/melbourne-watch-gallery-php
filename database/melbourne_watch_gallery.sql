-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2026 at 04:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melbourne_watch_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `overview` text NOT NULL,
  `model_no` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `overview`, `model_no`, `price`, `image_1`, `image_2`, `image_3`, `image_4`) VALUES
(22, 'SAMSUNG Samsung Galaxy Watch6 40mm (Graphite)', 'Know your\'s health inside out with the new Galaxy Watch6. From advanced sleep analysis and coaching to help improve your rest, to personalised heart rate zone workouts and running analysis to boost your fitness goals. Be free from the phone in your pocket, Galaxy Watch6 lets you manage calls, notifications, reminders, music all from your wrist with a battery you can count on and a scratch-resistant design that’s built for whatever the day brings.', '11901306753', 549, 'https://www.jbhifi.com.au/cdn/shop/products/654735-Product-0-I-638307598827772230.jpg?', 'https://www.jbhifi.com.au/cdn/shop/products/654735-Product-1-I-638307598841912584.jpg?v=1695163162', 'https://www.jbhifi.com.au/cdn/shop/products/654735-Product-2-I-638307598827695045.jpg?v=1695163162', 'https://www.jbhifi.com.au/cdn/shop/products/654735-Product-3-I-638307598817116676.jpg?v=1695163162'),
(23, 'Apple Watch Series 10 42mm Rose Gold Aluminium Case GPS Sport Band (S/M) [Light Blush]', 'Meet Apple Watch Series 10. A bigger display with more screen area and a thinner, lighter design. Get advanced fitness and health features, plus faster charging.\r\n\r\nKey Features\r\n\r\nWhy Apple Watch Series 10\r\nBigger display with up to 30 per cent more screen area.1 A thinner, lighter and more comfortable design.1 Advanced health and fitness features provide invaluable insights.2 Safety features connect you to help when you need it.3 Faster charging gives you 80 per cent battery in about 30 minutes.4\r\n\r\nAdvanced Health Insights\r\nTake an ECG at any time.5 Get notifications if you have high or low heart rate or an irregular heart rhythm.6 Understand your menstrual cycle and get retrospective ovulation estimates.7 See overnight health metrics like heart rate, respiratory rate and more with the Vitals app.8\r\n\r\nA Powerful Fitness Partner\r\nMeasure all the ways you move with Activity Rings, which are customisable to match your lifestyle. Get advanced metrics for a range of workouts with the Workout app. Track the intensity of your workouts with training load. Use depth and water temperature sensors for your aquatic adventures. And Apple Watch comes with three months of Apple Fitness+ free.9\r\n\r\nStay Connected\r\nSend a text, take a call, listen to music and podcasts, use Siri and get notifications on the go. Apple Watch Series 10 (GPS) works with your iPhone or Wi-Fi to keep you connected.', 'MWWH3ZP/A', 649, 'https://www.jbhifi.com.au/cdn/shop/files/623420-Product-0-I-638615211003012042.jpg?', 'https://www.jbhifi.com.au/cdn/shop/files/623420-Product-1-I-638615211004339665.jpg?', 'https://www.jbhifi.com.au/cdn/shop/files/623420-Product-3-I-638615211003570892.jpg?', 'https://www.jbhifi.com.au/cdn/shop/files/623420-Product-5-I-638615211003993772.jpg?'),
(24, 'Apple Watch Series 10 46mm Gold Titanium Case GPS + Cellular Milanese Loop', 'Meet Apple Watch Series 10. A bigger display with more screen area and a thinner, lighter design. Get advanced fitness and health features, plus faster charging.\r\n\r\nKey Features\r\n\r\nWhy Apple Watch Series 10\r\nBigger display with up to 30 per cent more screen area.1 A thinner, lighter and more comfortable design.1 Advanced health and fitness features provide invaluable insights.2 Safety features connect you to help when you need it.3 Faster charging gives you 80 per cent battery in about 30 minutes.4\r\n\r\nAdvanced Health Insights\r\nTake an ECG at any time.5 Get notifications if you have high or low heart rate or an irregular heart rhythm.6 Understand your menstrual cycle and get retrospective ovulation estimates.7 See overnight health metrics like heart rate, respiratory rate and more with the Vitals app.', 'MX003ZP/A', 1359, 'https://www.jbhifi.com.au/cdn/shop/files/656226-Product-0-I-638615334006044870.jpg?', 'https://www.jbhifi.com.au/cdn/shop/files/656226-Product-1-I-638615334006687467.jpg?', 'https://www.jbhifi.com.au/cdn/shop/files/656226-Product-2-I-638615334006194510.jpg?', 'https://www.jbhifi.com.au/cdn/shop/files/656226-Product-4-I-638615334007141523.jpg?'),
(27, 'SAMSUNG Samsung Galaxy Watch Ultra 47mm (Titanium Grey) [2025]', 'The ultimate adventure companion, Watch Ultra is built for the wild. Ultra precise, ultra intelligent, and ultra long-lasting it’s packed full of next-gen technology with our longest lasting battery yet. Go from city, to surf, to sand, to summit and reach peak performance with advanced tracking powered by Galaxy AI. 1,2\r\n\r\nKey Features\r\n\r\nUltra Performance\r\nExperience ultra performance and endurance with a long lasting battery.\r\n\r\nUltra Adventure\r\nBuilt for outdoor adventure, Watch Ultra is at home in the wild.\r\n\r\nUltra Design\r\nDesigned for action, Watch Ultra makes a bold statement in every landscape.', '11901341086', 1299, 'https://www.jbhifi.com.au/cdn/shop/files/815306-Product-0-I-638874464402942191.jpg?v=1751849708', 'https://www.jbhifi.com.au/cdn/shop/files/815306-Product-1-I-638874464403712677.jpg?v=1751849708', 'https://www.jbhifi.com.au/cdn/shop/files/815306-Product-3-I-638874464404565532.jpg?v=1751849708', 'https://www.jbhifi.com.au/cdn/shop/files/815306-Product-4-I-638874464403332037.jpg?v=1751849708'),
(28, 'Ryze EVO Fitness & Wellbeing Smart Watch with Alexa (Rose Gold/Pink)', 'Ryze above your fitness goals\r\nMotivate yourself, set goals, track your activities, check your progress, and be the champion you want to be.\r\n• 25 Sports Mode Activity Tracker\r\n• Track Steps, Distance & Calories\r\n• AI Run Companion & More\r\n\r\nInsights to improve your wellbeing\r\nPut your health & wellbeing first with advanced biometric monitors that provide you with meaningful health insights into your body.\r\n\r\n• Heart Rate & Blood Oxygen\r\n• Stress Level & Breathing Training\r\n• Sleep Score & Feminine Health', 'RZ-EVPK', 149, 'https://www.jbhifi.com.au/cdn/shop/products/603586-Product-0-I-637976221377312626.jpg?v=1661989449', 'https://www.jbhifi.com.au/cdn/shop/products/603586-Product-2-I-637976221377312626.jpg?v=1661989449', 'https://www.jbhifi.com.au/cdn/shop/products/603586-Product-3-I-637976221379188180.jpg?v=1661989449', 'https://www.jbhifi.com.au/cdn/shop/products/603586-Product-5-I-637976221377312626.jpg?v=1661989449'),
(31, 'SAMSUNG Samsung Galaxy Watch6 Classic 47mm LTE (Silver)', 'Experience edge-to-edge stainless steel luxury on Samsung’s biggest screen yet with the Galaxy Watch6 Classic. Enjoy the iconic, durable design featuring advanced health and wellness technology to help you get in the zone1 and connectivity to your phone to manage the world from your wrist. Good sleep and good health go hand-in-hand, so rest easy with sleep coaching and get more wellness stats1 with around-the-clock health tracking and a battery you can count on.\r\n\r\nBigger, Better\r\nExperience edge-to-edge luxury on our biggest screen yet. Expertly engineered, Watch6 Classic marries iconic design with advanced health and wellness technology.\r\n\r\nGet in the workout zone\r\nUnlock intuitive data from your workouts, with a watch designed to detect your activity and created workout routines. With personalised Heart Rate Zones, you’ll know when to push harder – and when to rest. ', '11901306768', 849, 'https://www.jbhifi.com.au/cdn/shop/products/654758-Product-0-I-638307595802871095.jpg?v=1695162860', 'https://www.jbhifi.com.au/cdn/shop/products/654758-Product-1-I-638307595876877680.jpg?v=1695162860', 'https://www.jbhifi.com.au/cdn/shop/products/654758-Product-2-I-638307595803707213.jpg?v=1695162860', 'https://www.jbhifi.com.au/cdn/shop/products/654758-Product-3-I-638307595865864174.jpg?v=1695162860');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(3, 'jerry', 'b59c67bf196a4758191e42f76670ceba'),
(4, 'admin', '4a7d1ed414474e4033ac29ccb8653d9b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
