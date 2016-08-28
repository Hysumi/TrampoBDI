-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Ago-2016 às 22:05
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trampo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrega`
--

DROP TABLE IF EXISTS `carrega`;
CREATE TABLE IF NOT EXISTS `carrega` (
  `Invocador_Nome` varchar(50) NOT NULL,
  `Item_Nome` varchar(50) NOT NULL,
  `Loja_Vendedor` varchar(50) NOT NULL,
  PRIMARY KEY (`Invocador_Nome`,`Item_Nome`,`Loja_Vendedor`),
  KEY `Item_Nome` (`Item_Nome`),
  KEY `Loja_Vendedor` (`Loja_Vendedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrega`
--

INSERT INTO `carrega` (`Invocador_Nome`, `Item_Nome`, `Loja_Vendedor`) VALUES
('BruxaDo71', 'Armadura de Couro', 'Hue'),
('Chiquinha', 'Bolo', 'Taverna'),
('DK', 'Anabolizante', 'BAMBAM'),
('DK', 'Armadura de Couro', 'BAMBAM'),
('DK', 'Capacete de Couro', 'BAMBAM'),
('Jogador666', 'Bolo', 'Viajante'),
('Jogador666', 'Mana Potion', 'Alquimista'),
('MisterBoo', 'Capacete de Couro', 'Johnny'),
('Tester', 'Max Potion', 'Alquimista'),
('Xaman', 'HP Potion', 'TiaCurandeira'),
('Xaman', 'Mana Potion', 'TiaCurandeira'),
('Zezinho', 'Escudo de Madeira', 'Ferreiro'),
('Zezinho', 'Espada de Madeira', 'Ferreiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `elemento`
--

DROP TABLE IF EXISTS `elemento`;
CREATE TABLE IF NOT EXISTS `elemento` (
  `Elemento_Tipo` varchar(50) NOT NULL,
  `Elemento_Nivel` int(11) DEFAULT NULL,
  `Invocador_Nome` varchar(50) NOT NULL,
  PRIMARY KEY (`Elemento_Tipo`,`Invocador_Nome`),
  KEY `Invocador_Nome` (`Invocador_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `elemento`
--

INSERT INTO `elemento` (`Elemento_Tipo`, `Elemento_Nivel`, `Invocador_Nome`) VALUES
('Fogo', 50, 'Jogador666'),
('Agua', 10, 'Jogador666'),
('Fogo', 10, 'Tester'),
('Eletrico', 60, 'Tester'),
('Ar', 20, 'Tester'),
('Agua', 10, 'Xaman'),
('Ar', 5, 'Xaman'),
('Terra', 15, 'Zezinho'),
('Fogo', 6, 'Zezinho'),
('Ar', 15, 'BruxaDo71'),
('Fogo', 15, 'BruxaDo71'),
('Agua', 7, 'Chiquinha'),
('Eletrico', 6, 'Chiquinha'),
('Terra', 50, 'MisterBoo'),
('Ar', 6, 'DK'),
('Eletrico', 20, 'DK');

-- --------------------------------------------------------

--
-- Estrutura da tabela `invocador`
--

DROP TABLE IF EXISTS `invocador`;
CREATE TABLE IF NOT EXISTS `invocador` (
  `Nickname` varchar(50) NOT NULL,
  `Invocador_Nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`Nickname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `invocador`
--

INSERT INTO `invocador` (`Nickname`, `Invocador_Nivel`) VALUES
('Xaman', 25),
('Zezinho', 25),
('Jogador666', 66),
('Tester', 80),
('BruxaDo71', 71),
('Chiquinha', 50),
('MisterBoo', 60),
('DK', 69);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `Item_Nome` varchar(50) NOT NULL,
  `Item_Tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Item_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`Item_Nome`, `Item_Tipo`) VALUES
('Mana Potion', 'Consumivel'),
('HP Potion', 'Consumivel'),
('Max Potion', 'Consumivel'),
('Bolo', 'Consumivel'),
('Anabolizante', 'Consumivel'),
('Armadura de Couro', 'Equipamento'),
('Espada de Madeira', 'Equipamento'),
('Escudo de Madeira', 'Equipamento'),
('Capacete de Couro', 'Equipamento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

DROP TABLE IF EXISTS `loja`;
CREATE TABLE IF NOT EXISTS `loja` (
  `Cidade` varchar(50) DEFAULT NULL,
  `Vendedor` varchar(50) NOT NULL,
  `Loja_Nome` varchar(50) NOT NULL,
  PRIMARY KEY (`Vendedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`Cidade`, `Vendedor`, `Loja_Nome`) VALUES
('VilaAlfa', 'Ferreiro', 'Mercadao'),
('CidadeCentral', 'Alquimista', 'CentroDosAlquimistas'),
('VilaAlfa', 'TiaCurandeira', 'Mercadao'),
('EstradaSul', 'Viajante', 'PontoSul'),
('BIRL', 'BAMBAM', 'Academia'),
('Lorencia', 'Taverna', 'PingaBoa'),
('Lorencia', 'Johnny', 'Raiban'),
('Huelandia', 'Hue', 'HueMania');

-- --------------------------------------------------------

--
-- Estrutura da tabela `monstro`
--

DROP TABLE IF EXISTS `monstro`;
CREATE TABLE IF NOT EXISTS `monstro` (
  `Monstro_Nome` varchar(50) NOT NULL,
  `Monstro_Nivel` int(11) DEFAULT NULL,
  `Monstro_Elemento` varchar(50) DEFAULT NULL,
  `Monstro_Tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Monstro_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `monstro`
--

INSERT INTO `monstro` (`Monstro_Nome`, `Monstro_Nivel`, `Monstro_Elemento`, `Monstro_Tipo`) VALUES
('Goblin', 5, 'Terra', 'Invocavel'),
('RainhaDoGelo', 50, 'Agua', 'Boss'),
('ReiTroll', 60, 'Terra', 'Boss'),
('Pikachu', 20, 'Eletrico', 'NaoInvocavel'),
('HapiaRainha', 45, 'Ar', 'Boss'),
('Boneca', 30, 'Fogo', 'Boss'),
('Polvo', 25, 'Agua', 'Invocavel'),
('GalinhaPintadinha', 20, 'Ar', 'NaoInvocavel'),
('LEOSTRONDA', 70, 'Terra', 'Boss'),
('Mandragora', 15, 'Terra', 'Invocavel'),
('Cobaia', 55, 'Agua', 'Invocavel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `skill_monstro`
--

DROP TABLE IF EXISTS `skill_monstro`;
CREATE TABLE IF NOT EXISTS `skill_monstro` (
  `Skill_Nome` varchar(50) NOT NULL,
  `Skill_Elemento` varchar(50) DEFAULT NULL,
  `Tempo_de_Recarga` float DEFAULT NULL,
  `Dano` int(11) DEFAULT NULL,
  PRIMARY KEY (`Skill_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `skill_monstro`
--

INSERT INTO `skill_monstro` (`Skill_Nome`, `Skill_Elemento`, `Tempo_de_Recarga`, `Dano`) VALUES
('ChoqueTrovao', 'Eletrico', 10, 200),
('ImpactoProfundo', 'Fogo', 10, 400),
('ZeroAbsoluto', 'Água', 20, 500),
('LancaChamas', 'Fogo', 30, 500),
('BombaDeAgua', 'Agua', 25, 400),
('BolhaDeAr', 'Ar', 15, 200),
('Chicotada', 'Terra', 15, 300),
('BolaDeFogo', 'Fogo', 2, 100),
('Pedrada', 'Terra', 66, 666);

-- --------------------------------------------------------

--
-- Estrutura da tabela `summon`
--

DROP TABLE IF EXISTS `summon`;
CREATE TABLE IF NOT EXISTS `summon` (
  `Monstro_Nome` varchar(50) NOT NULL,
  `Invocador_Nome` varchar(50) NOT NULL,
  `Nome_Skill` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Monstro_Nome`,`Invocador_Nome`),
  KEY `Nome_Skill` (`Nome_Skill`),
  KEY `Invocador_Nome` (`Invocador_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `summon`
--

INSERT INTO `summon` (`Monstro_Nome`, `Invocador_Nome`, `Nome_Skill`) VALUES
('Goblin', 'Jogador666', 'Pedrada'),
('Goblin', 'Tester', 'Chicotada'),
('Mandragora', 'Tester', 'Chicotada'),
('Cobaia', 'BruxaDO71', 'BombaDeAgua'),
('Cobaia', 'MisterBoo', 'BolhaDeAr'),
('Polvo', 'Chiquinha', 'BombaDeAgua'),
('Polvo', 'DK', 'BolhaDeAr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vende`
--

DROP TABLE IF EXISTS `vende`;
CREATE TABLE IF NOT EXISTS `vende` (
  `Item_Nome` varchar(50) NOT NULL,
  `Loja_Vendedor` varchar(50) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  PRIMARY KEY (`Item_Nome`,`Loja_Vendedor`),
  KEY `Loja_Vendedor` (`Loja_Vendedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vende`
--

INSERT INTO `vende` (`Item_Nome`, `Loja_Vendedor`, `Price`) VALUES
('Mana Potion', 'TiaCurandeira', 300),
('HP Potion', 'TiaCurandeira', 300),
('Mana Potion', 'Alquimista', 250),
('Max Potion', 'Alquimista', 280),
('Espada de Madeora', 'Ferreiro', 900),
('Escudo de Madeira', 'Ferreiro', 800),
('Anabolizante', 'BAMBAM', 9001),
('Bolo', 'Taverna', 200),
('Capacete de Couro', 'Jhonny', 700),
('Armadura de Couro', 'Hue', 1000),
('Armadura de Couro', 'BAMBAM', 9001),
('Capacete de Couro', 'BAMBAM', 9001);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
