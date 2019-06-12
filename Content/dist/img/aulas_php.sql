-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2019 às 01:39
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aulas_php`
--
CREATE DATABASE IF NOT EXISTS `aulas_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aulas_php`;

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `cadastra_usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `cadastra_usuario` (IN `nousu` VARCHAR(100), IN `tiusu` CHAR(1), IN `seusu` VARCHAR(32))  BEGIN































	































	Declare caddatusu date default now();/*Data de Cadastro de Usuario*/ 

  Declare nome_usuario_duplicado condition for sqlstate '23000';

	Declare exit handler for nome_usuario_duplicado

	begin

		select '0'  as 'Retorno';

    End;  





























	Insert Into usuario(nomusu,datcadusu,tipusu,senusu)































		Values(nousu,caddatusu,tiusu,md5(seusu));

  	select '1'  as 'Retorno';





























END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `codusu` int(11) NOT NULL AUTO_INCREMENT,
  `nomusu` varchar(100) NOT NULL,
  `datcadusu` date NOT NULL,
  `tipusu` char(1) NOT NULL,
  `senusu` varchar(32) NOT NULL,
  `stsusu` char(1) DEFAULT NULL,
  PRIMARY KEY (`codusu`),
  UNIQUE KEY `nomusu_UNIQUE` (`nomusu`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codusu`, `nomusu`, `datcadusu`, `tipusu`, `senusu`, `stsusu`) VALUES
(23, 'kevin', '2018-11-28', 'E', '202cb962ac59075b964b07152d234b70', NULL),
(39, 'Ruan_Teste_50', '2019-06-12', 'E', '202cb962ac59075b964b07152d234b70', NULL),
(40, 'Sabrina', '2019-06-12', 'E', '202cb962ac59075b964b07152d234b70', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
