-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Apr 2021 um 09:14
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_natalia_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_natalia_biglibrary` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cr10_natalia_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `library_stock`
--

CREATE TABLE `library_stock` (
  `id` int(11) NOT NULL,
  `mediaType` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `authorFirstName` varchar(255) NOT NULL,
  `authorLastName` varchar(255) NOT NULL,
  `shortDesrc` varchar(255) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `publishDate` date NOT NULL,
  `publisherName` varchar(255) NOT NULL,
  `publisherAddress` varchar(255) NOT NULL,
  `publisherSize` varchar(255) NOT NULL,
  `mediaStatus` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `library_stock`
--

INSERT INTO `library_stock` (`id`, `mediaType`, `title`, `authorFirstName`, `authorLastName`, `shortDesrc`, `ISBN`, `publishDate`, `publisherName`, `publisherAddress`, `publisherSize`, `mediaStatus`, `img`) VALUES
(32, 'Book', 'ASoIF A Dance with Dragons', 'George R.R.', 'Martin', 'In the aftermath of a colossal battle, the future of the Seven Kingdoms hangs in the balanceâ€”beset by newly emerging threats from every direction. ', '978-0-553-10354-0', '1996-01-08', 'Random House LCC US', 'Random House Street 1, USA', 'big', 'active', '6083c2b8d3823.jpeg'),
(33, 'eBook', 'ASoIF A Dance with Dragons', 'George R.R.', 'Martin', 'In the aftermath of a colossal battle, the future of the Seven Kingdoms hangs in the balanceâ€”beset by newly emerging threats from every direction. ', '978-0-553-80147-7', '2011-07-12', 'Random House LCC US', 'Random House Street 1, USA', 'big', 'active', '6083c2e735600.jpeg'),
(34, 'eBook', 'Becoming', 'Michelle', 'Obama', 'Die kraftvolle und inspirierende Autobiografie der ehemaligen First Lady der USA. Michelle Obama ist eine der Ã¼berzeugendsten und beeindruckendsten Frauen der Gegenwart. Als erste afro-amerikanische First Lady der USA trug sie maÃŸgeblich dazu bei, das g', '978-3-641-22732-6', '2018-11-13', 'Random House ebook', 'Random House Street 1, USA', 'medium', 'inactive', '6083c3182a73c.jpeg'),
(35, 'DVD', 'The Revenant ', 'Alejandro G.', 'IÃ±Ã¡rritu', 'Bei einer Expedition tief in der amerikanischen Wildnis wird der legendÃ¤re Forscher und Abenteurer Hugh Glass (Leonardo DiCaprio) brutal von einem BÃ¤ren attackiert. Seine Jagdbegleiter, die Ã¼berzeugt sind, dass er dem Tod geweiht ist, lassen ihn zurÃ¼c', '401-0-232-06806-4', '2016-05-19', 'Twentieth Century Fox', '20th Fox Street 1, USA', 'medium', 'inactive', '6083c34939363.jpeg'),
(36, 'CD', 'Nevermind (Remastered)', 'Nirvana', '', 'Digitally Remastered CD.', '060-2-527-77908-9', '2011-09-23', 'Universal Music Vertrieb - A Division of Universal Music GmbH', 'UMV Street 1, Austria', 'small', 'active', '6083c380a0ee1.jpeg'),
(37, 'Book', 'Der Kleine Prinz', 'Antoine', 'de Saint-Exupery', 'Der Kleine Prinz lebt zusammen mit seiner Rose auf dem Planeten Asteroid B 612 und besucht die Erde. Hier lernt er neben dem ErzÃ¤hler, der mit seinem Flugzeug in der WÃ¼ste notlandete, unter anderem den Fuchs kennen, der ihm das Vertraut-machen erklÃ¤rt.', '978-3-7920-0057-1', '2015-02-12', 'Karl Rauch Verlag GmbH & Co. KG', 'VerlagsstraÃŸe 21, NeukÃ¶lln, Berlin', 'small', 'active', '6083c3b8191c1.jpeg'),
(38, 'eBook', 'Der HundertjÃ¤hrige, der aus dem Fenster stieg und verschwand', 'Jonas', 'Jonasson', 'Allan Karlsson hat Geburtstag. Er wird 100 Jahre alt. Eigentlich ein Grund zu feiern. Doch wÃ¤hrend sich der BÃ¼rgermeister und die lokale Presse auf das groÃŸe Spektakel vorbereiten, hat der HundertjÃ¤hrige ganz andere PlÃ¤ne: er verschwindet einfach -', '978-3-6410-5668-1', '2011-08-29', 'Random House ebook', 'Random House Street 1, USA', 'medium', 'inactive', '6083c3e5de5a6.jpeg'),
(39, 'Book', 'Eye of the Needle', 'Ken', 'Follett', 'Victory Hangs in the Balance. It is 1944 and weeks before D-Day. The Allies are disguising their invasion plans with elaborate decoys of ships and planes. If they can land a force on mainland Europe, they will gain the upper hand in a war that has ravaged', '978-1-5098-6003-6', '2019-05-30', 'Pan Macmillan', 'Peter Pan Street 1, Neverland', 'small', 'inactive', '6083c4169adc0.jpeg'),
(40, 'DVD', 'Harry Potter Collection', 'J. K.', 'Rowling', 'Collection of all  Harry Potter movies (Harry Potter 1 - 8)', '505-1-8903-1596-0', '2018-09-06', 'Warner Home Video', 'Hogwarts Street 1, England', 'big', 'active', '6083c44986b3b.jpeg'),
(41, 'Book', 'Star Wars - The Empire strikes back', 'Irvin', 'Kershner', 'After the defeat in the battle on the ice planet Hoth, the rebels must flee. While Princess Leia, Han Solo and the Wookie Chewbacca try to escape the Imperial forces in the \"Raging Falcon\", Luke Skywalker goes in search of the legendary Jedi master Yoda, ', '401-0-2320-7981-7', '2020-04-30', 'Twentieth Century Fox', '20th Fox Street 1, USA', 'small', 'inactive', 'image.png');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `library_stock`
--
ALTER TABLE `library_stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `library_stock`
--
ALTER TABLE `library_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
