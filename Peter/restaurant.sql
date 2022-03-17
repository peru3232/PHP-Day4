-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Mrz 2022 um 16:48
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dishes`
--

CREATE TABLE `dishes` (
  `dishID` int(11) NOT NULL,
  `image` varchar(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(1000) NOT NULL,
  `ingredienties` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `dishes`
--

INSERT INTO `dishes` (`dishID`, `image`, `name`, `price`, `description`, `ingredienties`) VALUES
(13, '62332de82af38.jpg', 'Pizza Diavola', 11.9, 'Who believes pizza diavola to be nothing special, hasn`t tasted our favourite creation. Inside of the traditional stone oven, a perfect composition of a crispy middle-thin pizza crust and a characteristic spicy topping appears. The combination of a special Italian hot salami, pepperoni, red onions and tasty self-made pizza sauce (cooked after grandmother`s recipe for about five hours) is absolutely irresistible and strongly recommended for those, who are in search of savoury impressions.', 'wheat pizza crust, tomato-chili-oregano sauce, mozzarella cheese, salami, red onions, pepperoni, Italian herbs.'),
(14, '623342d3a2f43.jpg', 'Cozze alla Marinara', 12.9, 'Here we proudly present our version of this traditional Italian seamen speciality. Our blue mussels originate from Tuscany and are brought fresh for You to enjoy the real taste of the Tyrrhenian Sea, refined with the finest Austrian herbs, such as garlic, parsley and wild oregano. A special touch is given by our house-made white dry wine which we use for our most delicious marinara sauce.', 'blue (common) mussels, white wine, olive oil, garlic, parsley, dry chili pepper, fresh lemon juice'),
(15, '62332e6fcb0fd.jpg', 'Antipasto Caldo e Freddo', 24.9, 'Use the unique chance to taste our chef`s suggestion. Best enjoyed with our white wine, this dish is a composition of hot and cold fish and mussels variety, which may differ due to the season and thus surprise the most sophisticated gourmet. From baked scallops, oysters and blue mussels to shrimps and sturgeon quiche - the magnificence of this dish won`t disappoint You!', 'fish and mussels variety, cooked (bioled, fried or baked) with diverse herbs and sauces. Please contact our chef to find out more.'),
(16, '62332ea365851.jpg', 'Calamari Fritti Speciale', 10.9, 'Our small guests love this dish! The batter-coated squid rings after an old Grado recipe are fried till the golden tinge, being crispy outside while delicate and juicy under the coat. Best served with mixed salad and/or fried potatoes.', 'squid rings, flavour coat (includes herbs, eggs and milk), lemon slices.'),
(17, '62332edc6a37e.jpg', 'Profiteroles', 7.9, 'This typical French dessert would perfectly complete any meal. Best served with coffee at lunch time and grappa in the evening, it`s a light and tasty creation, consisting of puff pastry, filled with whipped cream and garnished with dark chocolate.', 'wheat puff dough, whipped cream, dark chocolate topping (with or without alcohol addition).'),
(18, '62332f0e09d5d.jpg', 'Pizza Rustica', 10.9, 'The highlight of this pizza is a special kind of mozzarella - Mozzarella Bufala, which makes the taste of this pizza particularly delicate and delicious. In a combination with salami and prosciutto cotto, as well as red onions, sweet pepper and a special mild pizza sauce, baked in a stone oven, this dish would become Your favorite in a short time.', 'wheat pizza crust, tomato-chili-oregano mild sauce, Mozzarella Bufala, salami, red onions, sweet pepper, prosciutto cotto, Italian herbs.'),
(19, '62332f38c7168.jpg', 'Spaghetti Aglio è Oglio', 8.9, 'The best taste lies in simplicity. This dish is delicious in its really brilliant combination of simple components. When in olive oil fried garlic meets Italian herbs and original Italian spaghetti - Your senses explode in delight. Parmigiano reggiano tops this unique creation.', 'boiled spaghetti, garlic, olive oil, parsley, chili pepper, Italian herbs, Parmigiano reggiano cheese.'),
(20, '62332f5f3a8ab.jpg', 'Zuppa di Pesce', 18.9, 'This traditional soup is a Sicilian speciality and will definitely make You dream of a romantic fishing village somewhere in Italy. Its taste is an exqisite combination of seafood and fine vegetables in a spicy sauce. Zuppa di pesce is rather a stew than a soup, where You can find different sorts of fish and mussels typical for Italian cuisine.', 'Different fish and mussels kinds, tomatoes, Italian herbs, white wine, vegetables of the season.');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dishID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dishID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
