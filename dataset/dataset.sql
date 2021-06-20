-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 05:44 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataset`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `NO` int(2) DEFAULT NULL,
  `SPESIES` varchar(31) DEFAULT NULL,
  `A.CAPAS_DEL_CORTEX` int(1) DEFAULT NULL,
  `A.CAPA_INTERNA_DEL_CORTEX` int(1) DEFAULT NULL,
  `A.CORTEX` int(1) DEFAULT NULL,
  `A.CORTEX_FIBROSO` int(1) DEFAULT NULL,
  `A.CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES` int(1) DEFAULT NULL,
  `A.CUERPOS_EXTRANOS_EN_EL_CORTEX` int(1) DEFAULT NULL,
  `A.GROSOR_DEL_CORTEX` int(1) DEFAULT NULL,
  `A.HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX` int(1) DEFAULT NULL,
  `A.TILOSTILOS_ADICIONALES_COANOSOMA` int(1) DEFAULT NULL,
  `B.NUMERO_DE_TIPOS_DE_MEGASCLERAS` int(1) DEFAULT NULL,
  `C.TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA` int(1) DEFAULT NULL,
  `C.TIPO_ESPICULA_PRINCIPAL_ESTILO` int(1) DEFAULT NULL,
  `C.TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS` int(1) DEFAULT NULL,
  `C.TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO` int(1) DEFAULT NULL,
  `C.TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA` int(1) DEFAULT NULL,
  `C.TIPO_ESPICULA_PRINCIPAL_OXAS` int(1) DEFAULT NULL,
  `C.TIPO_ESPICULA_PRINCIPAL_TILOSTILO` int(1) DEFAULT NULL,
  `D.ESPICULA_PRINCIPAL_ESTILO` int(1) DEFAULT NULL,
  `D.ESPICULA_PRINCIPAL_TILOSTILO` int(1) DEFAULT NULL,
  `D.FORMA_BASE_TILOSTILO_PRINCIPAL` int(1) DEFAULT NULL,
  `E.DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA` int(1) NOT NULL,
  `COL 24` int(1) DEFAULT NULL,
  `COL 25` int(1) DEFAULT NULL,
  `COL 26` int(1) DEFAULT NULL,
  `COL 27` int(1) DEFAULT NULL,
  `COL 28` int(1) DEFAULT NULL,
  `COL 29` int(1) DEFAULT NULL,
  `COL 30` int(1) DEFAULT NULL,
  `COL 31` int(1) DEFAULT NULL,
  `COL 32` int(1) DEFAULT NULL,
  `COL 33` int(1) DEFAULT NULL,
  `COL 34` int(1) DEFAULT NULL,
  `COL 35` int(1) DEFAULT NULL,
  `COL 36` int(1) DEFAULT NULL,
  `COL 37` int(1) DEFAULT NULL,
  `COL 38` int(1) DEFAULT NULL,
  `COL 39` int(1) DEFAULT NULL,
  `COL 40` int(1) DEFAULT NULL,
  `COL 41` int(1) DEFAULT NULL,
  `COL 42` int(1) DEFAULT NULL,
  `COL 43` int(1) DEFAULT NULL,
  `COL 44` int(1) DEFAULT NULL,
  `COL 45` int(1) DEFAULT NULL,
  `COL 46` int(1) DEFAULT NULL,
  `COL 47` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`NO`, `SPESIES`, `A.CAPAS_DEL_CORTEX`, `A.CAPA_INTERNA_DEL_CORTEX`, `A.CORTEX`, `A.CORTEX_FIBROSO`, `A.CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES`, `A.CUERPOS_EXTRANOS_EN_EL_CORTEX`, `A.GROSOR_DEL_CORTEX`, `A.HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX`, `A.TILOSTILOS_ADICIONALES_COANOSOMA`, `B.NUMERO_DE_TIPOS_DE_MEGASCLERAS`, `C.TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA`, `C.TIPO_ESPICULA_PRINCIPAL_ESTILO`, `C.TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS`, `C.TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO`, `C.TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA`, `C.TIPO_ESPICULA_PRINCIPAL_OXAS`, `C.TIPO_ESPICULA_PRINCIPAL_TILOSTILO`, `D.ESPICULA_PRINCIPAL_ESTILO`, `D.ESPICULA_PRINCIPAL_TILOSTILO`, `D.FORMA_BASE_TILOSTILO_PRINCIPAL`, `E.DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA`, `COL 24`, `COL 25`, `COL 26`, `COL 27`, `COL 28`, `COL 29`, `COL 30`, `COL 31`, `COL 32`, `COL 33`, `COL 34`, `COL 35`, `COL 36`, `COL 37`, `COL 38`, `COL 39`, `COL 40`, `COL 41`, `COL 42`, `COL 43`, `COL 44`, `COL 45`, `COL 46`, `COL 47`) VALUES
(0, 'AAPTOS_AAPTOS', 1, 0, 1, 0, 0, 0, 3, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 2, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 6, 5, 0, 0, 0, 3),
(1, 'ALECTONA_MILLARI', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 1, 0, 0, 5, 0, 0, 0, 5, 2, 0, 1, 0, 3),
(2, 'CLIONA_CARTERI', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 4, 0, 0, 5, 1, 1, 0, 5, 2, 0, 1, 0, 3),
(3, 'CLIONA_CELATA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 1, 1, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 4, 0, 0, 6, 3, 1, 0, 5, 2, 0, 1, 0, 3),
(4, 'CLIONA_LABYRINTHICA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 5, 2, 0, 1, 0, 3),
(5, 'CLIONA_SCHMIDTI', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 4, 0, 0, 5, 1, 1, 0, 5, 2, 0, 1, 0, 3),
(6, 'CLIONA_VIRIDIS', 1, 0, 1, 1, 0, 0, 4, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 4, 0, 0, 6, 3, 1, 0, 5, 2, 0, 1, 0, 3),
(7, 'DIPLASTRELLA_BISTELLATA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 2, 2, 0, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3),
(8, 'DIPLASTRELLA_ORNATA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 2, 1, 0, 5, 0, 0, 0, 6, 3, 0, 0, 0, 3),
(9, 'LAXOSUBERITES_ECTYONIMUS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 5, 4, 0, 0, 0, 3),
(10, 'LAXOSUBERITES_FERRERHERNANDEZI', 0, 0, 0, 2, 2, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 3, 2, 2, 1, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 6, 4, 0, 0, 0, 3),
(11, 'LAXOSUBERITES_RUGOSUS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 8, 4, 0, 0, 0, 3),
(12, 'OXYCORDYLA_PELLITA', 1, 0, 1, 0, 1, 0, 1, 0, 0, 3, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 1, 4, 0, 0, 0, 3, 1, 3, 0, 0, 0, 0, 0, 7, 0, 0, 1, 5, 5, 0, 0, 0, 3),
(13, 'POLYMASTIA_AGGLUTINARIS', 2, 3, 1, 0, 0, 1, 3, 0, 3, 3, 0, 1, 0, 0, 0, 0, 0, 2, 0, 0, 1, 1, 3, 2, 0, 2, 1, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 5, 5, 0, 0, 0, 3),
(14, 'POLYMASTIA_CONIGERA', 2, 3, 1, 0, 0, 0, 2, 0, 3, 3, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 1, 1, 3, 2, 0, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 7, 5, 0, 0, 0, 3),
(15, 'POLYMASTIA_CORTICATA', 2, 5, 1, 0, 0, 0, 4, 0, 3, 3, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 3, 2, 0, 1, 1, 3, 0, 0, 0, 0, 0, 0, 0, 2, 4, 1, 0, 5, 5, 0, 0, 0, 3),
(16, 'POLYMASTIA_ECTOFIBROSA', 2, 3, 1, 1, 0, 0, 2, 0, 1, 3, 0, 0, 0, 1, 0, 0, 0, 2, 3, 0, 0, 1, 3, 2, 0, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, 5, 2, 1, 0, 4, 5, 0, 0, 0, 3),
(17, 'POLYMASTIA_FUSCA', 2, 3, 1, 0, 0, 0, 3, 0, 2, 3, 0, 0, 0, 1, 0, 0, 0, 2, 3, 2, 1, 1, 1, 3, 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 6, 4, 1, 0, 5, 5, 0, 0, 0, 3),
(18, 'POLYMASTIA_GRIMALDI', 3, 3, 1, 1, 0, 0, 3, 0, 1, 3, 0, 0, 0, 1, 0, 0, 0, 1, 2, 2, 1, 1, 3, 2, 0, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 2, 4, 1, 0, 4, 5, 0, 0, 0, 3),
(19, 'POLYMASTIA_HIRSUTA', 2, 5, 1, 0, 0, 0, 4, 0, 3, 3, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 0, 1, 3, 2, 0, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 6, 3, 1, 0, 7, 2, 0, 0, 0, 3),
(20, 'POLYMASTIA_INFLATA', 2, 3, 1, 0, 0, 0, 3, 0, 4, 3, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 2, 2, 0, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 1, 7, 5, 0, 0, 0, 3),
(21, 'POLYMASTIA_INFRAPILOSA', 2, 3, 1, 0, 0, 0, 4, 0, 2, 3, 0, 0, 0, 1, 0, 0, 0, 1, 2, 2, 1, 1, 2, 2, 0, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 3, 1, 1, 4, 5, 0, 0, 0, 3),
(22, 'POLYMASTIA_INVAGINATA', 2, 5, 1, 0, 0, 0, 2, 0, 2, 3, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 2, 2, 5, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 4, 1, 1, 0, 7, 5, 0, 0, 0, 3),
(23, 'POLYMASTIA_LITTORALIS', 2, 4, 1, 0, 0, 0, 4, 0, 2, 3, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 2, 2, 0, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 1, 5, 0, 0, 0, 3),
(24, 'POLYMASTIA_MAMMILLARIS', 2, 3, 1, 0, 0, 0, 2, 0, 3, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 3, 2, 0, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 3, 1, 1, 7, 5, 0, 0, 0, 3),
(25, 'POLYMASTIA_MARTAE', 2, 3, 1, 0, 0, 0, 2, 0, 2, 3, 0, 0, 0, 1, 0, 0, 0, 3, 4, 2, 0, 2, 1, 2, 0, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 6, 2, 1, 0, 7, 5, 0, 0, 0, 3),
(26, 'POLYMASTIA_POLYTYLOTA', 2, 3, 1, 0, 0, 0, 2, 0, 4, 3, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 1, 1, 1, 2, 0, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 1, 1, 0, 1, 5, 0, 0, 0, 3),
(27, 'POLYMASTIA_RADIOSA', 1, 0, 1, 0, 0, 0, 3, 1, 2, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 0, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 5, 1, 1, 0, 7, 5, 0, 0, 0, 3),
(28, 'POLYMASTIA_ROBUSTA', 2, 3, 1, 0, 0, 0, 3, 0, 3, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 3, 2, 0, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 3, 1, 0, 1, 5, 0, 0, 0, 3),
(29, 'POLYMASTIA_SPINULA', 2, 3, 1, 0, 0, 0, 2, 1, 3, 3, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 2, 0, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 1, 1, 5, 0, 0, 0, 3),
(30, 'POLYMASTIA_TENAX', 2, 5, 1, 0, 0, 0, 4, 0, 4, 3, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 3, 2, 0, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 5, 5, 0, 0, 0, 3),
(31, 'POLYMASTIA_TISSIERI', 2, 3, 1, 0, 0, 0, 2, 0, 1, 3, 0, 0, 0, 1, 0, 0, 0, 3, 4, 2, 1, 1, 1, 2, 5, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 4, 2, 1, 0, 4, 5, 0, 0, 0, 3),
(32, 'POLYMASTIA_UBERRIMA', 2, 3, 1, 0, 0, 0, 4, 0, 4, 3, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 2, 0, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 3, 1, 0, 1, 5, 0, 0, 0, 3),
(33, 'PROSUBERITES_EPIPHYTUM', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3),
(34, 'PROSUBERITES_LONGISPINA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 1, 8, 3, 0, 0, 0, 3),
(35, 'PROSUBERITES_RUGOSUS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3),
(36, 'PROTELEIA_SOLLASI', 3, 4, 1, 0, 0, 0, 3, 0, 1, 3, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 2, 1, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 7, 5, 0, 0, 0, 3),
(37, 'PSEUDOSUBERITES_HYALINUS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 3, 2, 1, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 1, 5, 2, 0, 0, 0, 3),
(38, 'PSEUDOSUBERITES_SULFUREUS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 3, 2, 1, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 1, 5, 2, 0, 0, 0, 3),
(39, 'QUASILINA_BREVIS', 3, 1, 1, 0, 0, 0, 2, 0, 1, 2, 0, 0, 0, 1, 0, 0, 0, 1, 2, 2, 1, 1, 1, 3, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 7, 1, 1, 0, 1, 7, 0, 0, 0, 3),
(40, 'QUASILINA_INTERMEDIA', 1, 1, 1, 0, 0, 0, 2, 0, 2, 3, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 0, 1, 1, 2, 0, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 7, 1, 1, 0, 1, 7, 0, 0, 0, 3),
(41, 'QUASILINA_RICHARDII', 3, 1, 1, 0, 0, 0, 2, 0, 1, 2, 0, 0, 0, 1, 0, 0, 0, 1, 2, 2, 1, 1, 1, 3, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 7, 1, 1, 0, 1, 7, 0, 0, 0, 3),
(42, 'RHIZAXINELLA_BISETA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 1, 8, 1, 0, 0, 1, 3),
(43, 'RHIZAXINELLA_ELONGATA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 2, 0, 1, 1, 0, 0, 0, 1, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 8, 1, 0, 0, 1, 2),
(44, 'RHIZAXINELLA_PYRIFERA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 1, 2, 0, 0, 0, 0, 0, 8, 0, 0, 1, 6, 1, 0, 0, 0, 1),
(45, 'RHIZAXINELLA_UNISETA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 1, 8, 1, 0, 0, 1, 3),
(46, 'RIDLEYA_OVIFORMIS', 3, 3, 1, 0, 0, 0, 2, 0, 0, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 0, 1, 3, 1, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 1, 7, 0, 0, 0, 3),
(47, 'SPHAEROTYLUS_ANTARCTICUS', 2, 3, 1, 0, 0, 0, 3, 0, 3, 3, 0, 0, 0, 1, 0, 0, 1, 2, 3, 2, 1, 1, 1, 2, 3, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 4, 2, 1, 1, 7, 5, 0, 0, 0, 3),
(48, 'SPHAEROTYLUS_CAPITATUS', 2, 3, 1, 0, 0, 0, 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 1, 1, 1, 2, 3, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 3, 2, 1, 1, 7, 5, 0, 0, 0, 3),
(49, 'SPINULARIA_SPINULARIA', 1, 0, 1, 0, 0, 0, 2, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 2, 2, 0, 0, 0, 3, 1, 2, 0, 0, 0, 0, 0, 3, 0, 0, 0, 8, 5, 0, 0, 0, 3),
(50, 'SPIRASTRELLA_CUNCTATRIX', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 4, 0, 0, 5, 0, 0, 0, 6, 2, 0, 0, 0, 3),
(51, 'SPIRASTRELLA_MINAX', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 1, 1, 1, 0, 4, 0, 0, 5, 0, 0, 0, 6, 2, 0, 0, 0, 3),
(52, 'STYLOCORDYLA_BOREALIS', 1, 0, 1, 0, 0, 0, 1, 0, 0, 3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 2, 0, 2, 4, 0, 0, 0, 3, 1, 3, 0, 0, 0, 0, 0, 7, 0, 0, 0, 5, 5, 0, 0, 1, 3),
(53, 'SUBERITES_CAMINATUS', 1, 0, 1, 0, 0, 0, 3, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 2, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 4, 2, 1, 0, 5, 6, 0, 0, 0, 3),
(54, 'SUBERITES_CARNOSUS_V.INCRUSTANS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 3, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 1, 1, 6, 0, 0, 0, 3),
(55, 'SUBERITES_CARNOSUS_V.RAMOSUS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 3, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 9, 0, 0, 1, 1, 1, 0, 0, 0, 3),
(56, 'SUBERITES_CARNOSUS_V.TYPICUS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 3, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 1, 1, 6, 0, 0, 0, 3),
(57, 'SUBERITES_DOMUNCULA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 3, 0, 1, 0, 0, 0, 1, 1, 2, 3, 2, 1, 0, 0, 0, 0, 0, 0, 1, 1, 4, 0, 0, 0, 0, 0, 3, 0, 0, 0, 5, 6, 1, 0, 0, 1),
(58, 'SUBERITES_FICUS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 3, 0, 1, 0, 0, 0, 1, 1, 2, 3, 2, 1, 0, 0, 0, 0, 0, 0, 1, 1, 4, 0, 0, 0, 0, 0, 3, 0, 0, 0, 6, 6, 1, 0, 0, 1),
(59, 'SUBERITES_GIBBOSICEPS', 0, 0, 0, 2, 2, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 3, 1, 1, 1, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 5, 6, 0, 0, 0, 3),
(60, 'TENTORIUM_PAPILLATUS', 1, 0, 1, 0, 0, 0, 3, 0, 3, 2, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 1, 1, 2, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 6, 5, 0, 0, 0, 3),
(61, 'TENTORIUM_SEMISUBERITES', 1, 0, 1, 0, 0, 0, 3, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 2, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 6, 5, 0, 0, 0, 3),
(62, 'TERPIOS_FUGAX', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 2, 5, 2, 0, 0, 0, 3),
(63, 'TETHYA_AURANTIUM', 2, 2, 1, 1, 0, 0, 4, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 1, 4, 6, 0, 1, 3, 0, 0, 0, 2, 5, 0, 0, 0, 3),
(64, 'TETHYA_CITRINA', 1, 2, 1, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 1, 4, 3, 0, 1, 3, 0, 0, 0, 2, 5, 0, 0, 0, 3),
(65, 'TIMEA_CHONDRILLOIDES', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 1, 3, 3, 0, 1, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3),
(66, 'TIMEA_HALLEZI', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 1, 1, 1, 1, 3, 0, 1, 5, 0, 0, 0, 8, 3, 0, 0, 0, 3),
(67, 'TIMEA_MIXTA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 1, 1, 1, 5, 3, 0, 2, 5, 0, 0, 0, 8, 3, 0, 0, 0, 3),
(68, 'TIMEA_STELLATA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 1, 0, 5, 0, 0, 5, 0, 0, 1, 8, 3, 0, 0, 0, 3),
(69, 'TIMEA_UNISTELLATA', 0, 0, 0, 2, 2, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 2, 3, 0, 1, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3),
(70, 'TRACHYTELEIA_STEPHENSI', 1, 0, 1, 0, 0, 0, 2, 0, 4, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 4, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 8, 5, 0, 0, 0, 3),
(71, 'TRICHOSTEMA_HEMISPHAERICUM', 1, 0, 1, 0, 0, 0, 4, 0, 4, 3, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 2, 1, 1, 2, 0, 1, 1, 3, 0, 0, 0, 0, 0, 0, 0, 4, 2, 1, 0, 3, 5, 0, 0, 0, 2),
(72, 'TRICHOSTEMA_SARSI', 1, 0, 1, 0, 0, 0, 3, 0, 4, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 0, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 1, 2, 1, 0, 3, 5, 0, 0, 0, 2),
(73, 'TYLEXOCLADUS_JOUBINI', 1, 0, 1, 0, 0, 0, 3, 0, 2, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 2, 0, 0, 2, 1, 3, 0, 0, 0, 0, 0, 2, 0, 0, 0, 4, 5, 0, 0, 0, 3),
(74, 'WEBERELLA_BURSA', 2, 3, 1, 1, 0, 0, 3, 0, 4, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 1, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 3, 2, 1, 0, 1, 6, 0, 0, 0, 3),
(75, 'WEBERELLA_VERRUCOSA', 2, 3, 1, 0, 0, 0, 2, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 3, 2, 1, 0, 1, 6, 0, 0, 0, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
