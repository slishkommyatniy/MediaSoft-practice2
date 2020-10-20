-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2020 at 10:20 PM
-- Server version: 5.7.29
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe` text COLLATE utf8mb4_unicode_ci,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `Ingredients`, `recipe`, `username`, `name_image`) VALUES
(2, 'Селёдка под шубой', 'Сeлeдкa мaлocoльнaя - 1шт,\r\nЛук peпчaтый - 1шт,\r\nКapтoфeль - 2шт,\r\nМopкoвь - 1шт,\r\nЯйцa - 3шт,\r\nЯблoкo - 1шт,\r\nСвeклa - 1шт\r\n  ', 'Сварить свеклу, морковь, картошку и яйца .\r\n\r\n2. Нарезать лук довольно мелко.\r\n\r\nКак нарезать репчатый лук\r\n\r\n3. Отваренные овощи отчистить. Картошку и яйца пропустить через яйце резку. Свеклу и морковь натереть на терке.\r\n\r\n4. Сельдь нарезать мелкими кусочками, убрав заранее кости .\r\n\r\n5. Выкладываем на порционную тарелку сначала сельдь, потом лук, картофель, яйцо, морковь, свеклу.\r\n\r\n6. Обмазать майонезом и в холодильник. Приятного аппетита!   ', 'slishkommyatniy', '2020_10_17_20_05_53_484100.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `username`, `password`) VALUES
(1, 'maksim', 'nikonorov.maksim@bk.ru', 'slishkommyatniy', '123456'),
(3, 'Никита', 'Red@mail.ru', 'Red', '123456'),
(5, 'Алмаз', 'Almaz@yandex.ru', 'Alonekisik', '123456'),
(10, 'admin', 'admin@bk.ru', 'admin', 'admin'),
(11, 'Юра', 'yra@bk.ru', 'yra', '123456'),
(13, 'admin', 'admin@bk.ru', 'admin1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
