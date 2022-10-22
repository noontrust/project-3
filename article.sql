-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 10:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiki`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_short_title` varchar(32) NOT NULL,
  `article_title` text NOT NULL,
  `article_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_short_title`, `article_title`, `article_body`) VALUES
(1, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac lacus vel lorem commodo iaculis. Donec auctor et enim ac efficitur. Duis iaculis augue non augue vestibulum consequat. Morbi nisl eros, rutrum eget pharetra varius, imperdiet vel arcu. Nunc tincidunt turpis eget auctor bibendum. Morbi risus purus, fringilla sit amet urna non, facilisis rutrum est. Pellentesque finibus lectus lectus, nec ornare nunc malesuada in. Quisque imperdiet sodales purus a accumsan. Vestibulum in massa mi. Sed fermentum, mi quis pharetra tincidunt, neque metus gravida enim, non cursus nunc nisl id augue.\r\n\r\nNulla lobortis est quis tortor lacinia eleifend. Suspendisse ullamcorper, nibh ut feugiat mattis, velit ligula mollis quam, quis ornare ante dolor ut tellus. Nullam et ullamcorper ligula. Maecenas suscipit lectus nec dolor semper posuere. In elementum neque in nisi fringilla lobortis. Fusce eget odio vitae enim tempus mollis. Mauris et pretium purus. In vestibulum tortor in sapien placerat, quis porttitor nulla efficitur. Vestibulum fringilla nisi magna, eu dapibus erat aliquam eu. Phasellus justo ipsum, vehicula sed augue at, faucibus convallis dui. Donec vehicula pretium ullamcorper. Morbi gravida vitae neque eget fermentum. Praesent iaculis turpis sed feugiat consectetur. Phasellus mattis eros in lacus ultricies, quis ullamcorper sapien eleifend.\r\n\r\nEtiam ullamcorper tempor tellus, nec condimentum urna feugiat ac. Suspendisse rhoncus, eros sed elementum ullamcorper, sapien eros dictum nisl, sit amet tristique risus tortor ullamcorper sem. Vestibulum nec nulla nec eros pulvinar blandit. Phasellus diam nunc, molestie non pretium at, ultricies in leo. Proin eleifend nec lacus at hendrerit. Ut egestas non massa sed sagittis. Suspendisse et malesuada risus, in sodales purus. Nullam sed lorem tortor. Cras ullamcorper ut massa non mattis. Nam rutrum facilisis felis sit amet luctus. Donec mi augue, tincidunt nec pretium feugiat, imperdiet sit amet ipsum. Duis cursus lectus sed convallis auctor.\r\n\r\nFusce ornare odio augue, ut hendrerit quam facilisis non. Nulla condimentum mattis rhoncus. Cras suscipit lectus ac auctor volutpat. Pellentesque augue dui, euismod id quam id, rhoncus eleifend odio. Maecenas a convallis lectus. Maecenas euismod, lorem ac consectetur tristique, sem risus vulputate nunc, at ultrices metus massa ultrices ipsum. Donec iaculis faucibus fringilla. Nam consequat pretium feugiat. Nulla sit amet ante urna. Proin tincidunt malesuada sem, vel dapibus augue imperdiet nec. Praesent mollis diam sapien, id laoreet dui auctor sed. Nullam arcu massa, sodales vel elit non, maximus tristique dui. Donec venenatis lacinia ligula id maximus. Donec vitae gravida mauris, id hendrerit eros. Nunc sollicitudin nisl eu enim lacinia, a posuere nisl efficitur.\r\n\r\nDonec id nisi at odio aliquam facilisis. Nulla volutpat pulvinar malesuada. Nulla facilisi. Fusce eget molestie magna, in fermentum est. Pellentesque non vulputate diam. Nullam laoreet ornare finibus. Morbi nunc nisl, feugiat ut mollis in, aliquam id odio. Nam fermentum, augue sit amet vestibulum sagittis, est tortor consequat purus, non ornare libero elit nec ligula. Ut vel accumsan magna, ut finibus lacus. Vivamus tincidunt arcu at est pharetra, vel efficitur nisl cursus. Fusce vitae lacus volutpat, congue ante id, laoreet justo. Interdum et malesuada fames ac ante ipsum primis in faucibus.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD UNIQUE KEY `article_short_title` (`article_short_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
