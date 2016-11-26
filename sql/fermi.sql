
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fermi`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `fermi`
--

CREATE TABLE `fermi` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `field` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `studies` int(11) NOT NULL,
  `retribution` int(11) NOT NULL,
  `link` text NOT NULL,
  `coord` text NOT NULL,
  `quality` int(11) NOT NULL,
  `description_it` text NOT NULL,
  `description_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `fermi`
--
INSERT INTO fermi (name, field, period, region, studies, retribution, quality)
VALUES (,);
INSERT INTO fermi (name, field, period, region, studies, retribution, quality)
VALUES (,);
INSERT INTO fermi (name, field, period, region, studies, retribution, quality)
VALUES (,);
INSERT INTO fermi (name, field, period, region, studies, retribution, quality)
VALUES (,);
INSERT INTO fermi (name, field, period, region, studies, retribution, quality)
VALUES (,);



ALTER TABLE `fermi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `fermi`
--
ALTER TABLE `fermi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
