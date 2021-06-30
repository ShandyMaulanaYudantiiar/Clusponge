-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 03:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_clusponge`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `ID` int(3) NOT NULL,
  `NO` int(2) DEFAULT NULL,
  `SPESIES` varchar(31) DEFAULT NULL,
  `A_CAPAS_DEL_CORTEX` int(1) DEFAULT NULL,
  `A_CAPA_INTERNA_DEL_CORTEX` int(1) DEFAULT NULL,
  `A_CORTEX` int(1) DEFAULT NULL,
  `A_CORTEX_FIBROSO` int(1) DEFAULT NULL,
  `A_CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES` int(1) DEFAULT NULL,
  `A_CUERPOS_EXTRANOS_EN_EL_CORTEX` int(1) DEFAULT NULL,
  `A_GROSOR_DEL_CORTEX` int(1) DEFAULT NULL,
  `A_HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX` int(1) DEFAULT NULL,
  `A_TILOSTILOS_ADICIONALES_COANOSOMA` int(1) DEFAULT NULL,
  `B_NUMERO_DE_TIPOS_DE_MEGASCLERAS` int(1) DEFAULT NULL,
  `C_TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA` int(1) DEFAULT NULL,
  `C_TIPO_ESPICULA_PRINCIPAL_ESTILO` int(1) DEFAULT NULL,
  `C_TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS` int(1) DEFAULT NULL,
  `C_TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO` int(1) DEFAULT NULL,
  `C_TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA` int(1) DEFAULT NULL,
  `C_TIPO_ESPICULA_PRINCIPAL_OXAS` int(1) DEFAULT NULL,
  `C_TIPO_ESPICULA_PRINCIPAL_TILOSTILO` int(1) DEFAULT NULL,
  `D_ESPICULA_PRINCIPAL_ESTILO` int(1) DEFAULT NULL,
  `D_ESPICULA_PRINCIPAL_TILOSTILO` int(1) DEFAULT NULL,
  `D_FORMA_BASE_TILOSTILO_PRINCIPAL` int(1) DEFAULT NULL,
  `E_DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA` int(1) DEFAULT NULL,
  `E_FORMA_BASE_TILOSTILO_ECTOSOMICO` int(1) DEFAULT NULL,
  `E_FORMA_MEGASCLERA_ECTOSOMICA` int(1) DEFAULT NULL,
  `E_TIPO_MEGASCLERA_ECTOSOMICA` int(1) DEFAULT NULL,
  `F_TIPO_DE_EXOSTILO` int(1) DEFAULT NULL,
  `G_FORMA_MEGASCLERA_INTERMEDIARIA` int(1) DEFAULT NULL,
  `G_TIPO_MEGASCLERA_INTERMEDIARIA` int(1) DEFAULT NULL,
  `H_LONGITUD_MEGASCLERAS` int(1) DEFAULT NULL,
  `I_MICROSCLERAS` int(1) DEFAULT NULL,
  `I_TIPO_MICROSCLERA` int(1) DEFAULT NULL,
  `J_ASTER` int(1) DEFAULT NULL,
  `J_DIAMETRO_ESFERASTER` int(1) DEFAULT NULL,
  `J_TIPO_DE_ASTER` int(1) DEFAULT NULL,
  `J_TIPO_DE_DIPLASTER` int(1) DEFAULT NULL,
  `J_TIPO_DE_ESFERASTER` int(1) DEFAULT NULL,
  `K_FORMA_FINAL` int(1) DEFAULT NULL,
  `L_NUMERO_DE_PAPILAS` int(1) DEFAULT NULL,
  `L_PAPILAS` int(1) DEFAULT NULL,
  `M_COLOR` int(1) DEFAULT NULL,
  `N_SUPERFICIE` int(1) DEFAULT NULL,
  `O_DISPOSICION_ESPICULAR_ESQUELETO` int(1) DEFAULT NULL,
  `P_ALOJA_CANGREJO_ERMITANO` int(1) DEFAULT NULL,
  `P_PERFORANTE` int(1) DEFAULT NULL,
  `P_PSEUDORAICES` int(1) DEFAULT NULL,
  `P_SUSTRATO` int(1) DEFAULT NULL,
  `CREATED` datetime NOT NULL,
  `MODIFIED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`ID`, `NO`, `SPESIES`, `A_CAPAS_DEL_CORTEX`, `A_CAPA_INTERNA_DEL_CORTEX`, `A_CORTEX`, `A_CORTEX_FIBROSO`, `A_CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES`, `A_CUERPOS_EXTRANOS_EN_EL_CORTEX`, `A_GROSOR_DEL_CORTEX`, `A_HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX`, `A_TILOSTILOS_ADICIONALES_COANOSOMA`, `B_NUMERO_DE_TIPOS_DE_MEGASCLERAS`, `C_TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA`, `C_TIPO_ESPICULA_PRINCIPAL_ESTILO`, `C_TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS`, `C_TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO`, `C_TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA`, `C_TIPO_ESPICULA_PRINCIPAL_OXAS`, `C_TIPO_ESPICULA_PRINCIPAL_TILOSTILO`, `D_ESPICULA_PRINCIPAL_ESTILO`, `D_ESPICULA_PRINCIPAL_TILOSTILO`, `D_FORMA_BASE_TILOSTILO_PRINCIPAL`, `E_DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA`, `E_FORMA_BASE_TILOSTILO_ECTOSOMICO`, `E_FORMA_MEGASCLERA_ECTOSOMICA`, `E_TIPO_MEGASCLERA_ECTOSOMICA`, `F_TIPO_DE_EXOSTILO`, `G_FORMA_MEGASCLERA_INTERMEDIARIA`, `G_TIPO_MEGASCLERA_INTERMEDIARIA`, `H_LONGITUD_MEGASCLERAS`, `I_MICROSCLERAS`, `I_TIPO_MICROSCLERA`, `J_ASTER`, `J_DIAMETRO_ESFERASTER`, `J_TIPO_DE_ASTER`, `J_TIPO_DE_DIPLASTER`, `J_TIPO_DE_ESFERASTER`, `K_FORMA_FINAL`, `L_NUMERO_DE_PAPILAS`, `L_PAPILAS`, `M_COLOR`, `N_SUPERFICIE`, `O_DISPOSICION_ESPICULAR_ESQUELETO`, `P_ALOJA_CANGREJO_ERMITANO`, `P_PERFORANTE`, `P_PSEUDORAICES`, `P_SUSTRATO`, `CREATED`, `MODIFIED`) VALUES
(1, 0, 'AAPTOS_AAPTOS', 1, 0, 1, 0, 0, 0, 3, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 2, 1, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 6, 5, 0, 0, 0, 3, '2021-06-30 05:18:27', '2021-06-30 05:26:21'),
(2, 1, 'ALECTONA_MILLARI', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 1, 0, 0, 5, 0, 0, 0, 5, 2, 0, 1, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(3, 2, 'CLIONA_CARTERI', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 4, 0, 0, 5, 1, 1, 0, 5, 2, 0, 1, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(4, 3, 'CLIONA_CELATA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 1, 1, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 4, 0, 0, 6, 3, 1, 0, 5, 2, 0, 1, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(5, 4, 'CLIONA_LABYRINTHICA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 5, 2, 0, 1, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(6, 5, 'CLIONA_SCHMIDTI', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 4, 0, 0, 5, 1, 1, 0, 5, 2, 0, 1, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(7, 6, 'CLIONA_VIRIDIS', 1, 0, 1, 1, 0, 0, 4, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 4, 0, 0, 6, 3, 1, 0, 5, 2, 0, 1, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(8, 7, 'DIPLASTRELLA_BISTELLATA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 2, 2, 0, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(9, 8, 'DIPLASTRELLA_ORNATA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 2, 1, 0, 5, 0, 0, 0, 6, 3, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(10, 9, 'LAXOSUBERITES_ECTYONIMUS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 5, 4, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(11, 10, 'LAXOSUBERITES_FERRERHERNANDEZI', 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 3, 2, 2, 1, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 6, 4, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(12, 11, 'LAXOSUBERITES_RUGOSUS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 8, 4, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(13, 12, 'OXYCORDYLA_PELLITA', 1, 0, 1, 0, 0, 0, 1, 0, 0, 3, 0, 1, 0, 0, 1, 0, 0, 2, 0, 0, 3, 0, 1, 4, 0, 0, 0, 3, 1, 3, 0, 0, 0, 0, 0, 7, 0, 0, 1, 5, 5, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(14, 13, 'POLYMASTIA_AGGLUTINARIS', 2, 3, 1, 0, 3, 1, 3, 0, 3, 3, 0, 1, 0, 0, 0, 0, 0, 2, 0, 0, 1, 1, 3, 2, 0, 2, 1, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 5, 5, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(15, 14, 'POLYMASTIA_CONIGERA', 2, 3, 1, 0, 3, 0, 2, 0, 3, 3, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 1, 1, 3, 2, 0, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 7, 5, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(16, 15, 'POLYMASTIA_CORTICATA', 2, 5, 1, 0, 5, 0, 4, 0, 3, 3, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 3, 2, 0, 1, 1, 3, 0, 0, 0, 0, 0, 0, 0, 2, 4, 1, 0, 5, 5, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(17, 16, 'POLYMASTIA_ECTOFIBROSA', 2, 3, 1, 1, 3, 0, 2, 0, 1, 3, 0, 0, 0, 1, 0, 0, 0, 2, 3, 0, 0, 1, 3, 2, 0, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, 5, 2, 1, 0, 4, 5, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(18, 17, 'POLYMASTIA_FUSCA', 2, 3, 1, 0, 3, 0, 3, 0, 2, 3, 0, 0, 0, 1, 0, 0, 0, 2, 3, 2, 1, 1, 1, 3, 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 6, 4, 1, 0, 5, 5, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(19, 18, 'POLYMASTIA_GRIMALDI', 3, 3, 1, 1, 3, 0, 3, 0, 1, 3, 0, 0, 0, 1, 0, 0, 0, 1, 2, 2, 1, 1, 3, 2, 0, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 2, 4, 1, 0, 4, 5, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(20, 19, 'POLYMASTIA_HIRSUTA', 2, 5, 1, 0, 5, 0, 4, 0, 3, 3, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 0, 1, 3, 2, 0, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 6, 3, 1, 0, 7, 2, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(21, 20, 'POLYMASTIA_INFLATA', 2, 3, 1, 0, 3, 0, 3, 0, 4, 3, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 2, 2, 0, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 1, 7, 5, 0, 0, 0, 3, '2021-06-30 05:18:28', '2021-06-30 05:26:21'),
(22, 21, 'POLYMASTIA_INFRAPILOSA', 2, 3, 1, 0, 3, 0, 4, 0, 2, 3, 0, 0, 0, 1, 0, 0, 0, 1, 2, 2, 1, 1, 2, 2, 0, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 3, 1, 1, 4, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:21'),
(23, 22, 'POLYMASTIA_INVAGINATA', 2, 5, 1, 0, 5, 0, 2, 0, 2, 3, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 2, 2, 5, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 4, 1, 1, 0, 7, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:21'),
(24, 23, 'POLYMASTIA_LITTORALIS', 2, 4, 1, 0, 4, 0, 4, 0, 2, 3, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 2, 2, 0, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 1, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(25, 24, 'POLYMASTIA_MAMMILLARIS', 2, 3, 1, 0, 3, 0, 2, 0, 3, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 3, 2, 0, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 3, 1, 1, 7, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(26, 25, 'POLYMASTIA_MARTAE', 2, 3, 1, 0, 3, 0, 2, 0, 2, 3, 0, 0, 0, 1, 0, 0, 0, 3, 4, 2, 0, 2, 1, 2, 0, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 6, 2, 1, 0, 7, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(27, 26, 'POLYMASTIA_POLYTYLOTA', 2, 3, 1, 0, 3, 0, 2, 0, 4, 3, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 1, 1, 1, 2, 0, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 1, 1, 0, 1, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(28, 27, 'POLYMASTIA_RADIOSA', 1, 0, 1, 0, 0, 0, 3, 1, 2, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 0, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 5, 1, 1, 0, 7, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(29, 28, 'POLYMASTIA_ROBUSTA', 2, 3, 1, 0, 3, 0, 3, 0, 3, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 3, 2, 0, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 3, 1, 0, 1, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(30, 29, 'POLYMASTIA_SPINULA', 2, 3, 1, 0, 3, 0, 2, 1, 3, 3, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 2, 0, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 1, 1, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(31, 30, 'POLYMASTIA_TENAX', 2, 5, 1, 0, 5, 0, 4, 0, 4, 3, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 3, 2, 0, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 5, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(32, 31, 'POLYMASTIA_TISSIERI', 2, 3, 1, 0, 3, 0, 2, 0, 1, 3, 0, 0, 0, 1, 0, 0, 0, 3, 4, 2, 1, 1, 1, 2, 5, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 4, 2, 1, 0, 4, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(33, 32, 'POLYMASTIA_UBERRIMA', 2, 3, 1, 0, 3, 0, 4, 0, 4, 3, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 2, 0, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 3, 1, 0, 1, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(34, 33, 'PROSUBERITES_EPIPHYTUM', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(35, 34, 'PROSUBERITES_LONGISPINA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 1, 8, 3, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(36, 35, 'PROSUBERITES_RUGOSUS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(37, 36, 'PROTELEIA_SOLLASI', 3, 4, 1, 0, 4, 0, 3, 0, 1, 3, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 2, 1, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1, 0, 7, 5, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(38, 37, 'PSEUDOSUBERITES_HYALINUS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 3, 2, 1, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 1, 5, 2, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(39, 38, 'PSEUDOSUBERITES_SULFUREUS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 3, 2, 1, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 1, 5, 2, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(40, 39, 'QUASILINA_BREVIS', 3, 1, 1, 0, 1, 0, 2, 0, 1, 2, 0, 0, 0, 1, 0, 0, 0, 1, 2, 2, 1, 1, 1, 3, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 7, 1, 1, 0, 1, 7, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(41, 40, 'QUASILINA_INTERMEDIA', 1, 1, 1, 0, 1, 0, 2, 0, 2, 3, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 0, 1, 1, 2, 0, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 7, 1, 1, 0, 1, 7, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(42, 41, 'QUASILINA_RICHARDII', 3, 1, 1, 0, 1, 0, 2, 0, 1, 2, 0, 0, 0, 1, 0, 0, 0, 1, 2, 2, 1, 1, 1, 3, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 7, 1, 1, 0, 1, 7, 0, 0, 0, 3, '2021-06-30 05:18:29', '2021-06-30 05:26:22'),
(43, 42, 'RHIZAXINELLA_BISETA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 1, 8, 1, 0, 0, 1, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(44, 43, 'RHIZAXINELLA_ELONGATA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 1, 1, 0, 0, 0, 1, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 8, 1, 0, 0, 1, 2, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(45, 44, 'RHIZAXINELLA_PYRIFERA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 1, 2, 0, 0, 0, 0, 0, 8, 0, 0, 1, 6, 1, 0, 0, 0, 1, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(46, 45, 'RHIZAXINELLA_UNISETA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 1, 8, 1, 0, 0, 1, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(47, 46, 'RIDLEYA_OVIFORMIS', 3, 3, 1, 0, 3, 0, 2, 0, 0, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 0, 1, 3, 1, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0, 1, 7, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(48, 47, 'SPHAEROTYLUS_ANTARCTICUS', 2, 3, 1, 0, 3, 0, 3, 0, 3, 3, 0, 0, 0, 1, 0, 0, 1, 2, 3, 2, 1, 1, 1, 2, 3, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 4, 2, 1, 1, 7, 5, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(49, 48, 'SPHAEROTYLUS_CAPITATUS', 2, 3, 1, 0, 3, 0, 3, 0, 3, 3, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 1, 1, 1, 2, 3, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 3, 2, 1, 1, 7, 5, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(50, 49, 'SPINULARIA_SPINULARIA', 1, 0, 1, 0, 0, 0, 2, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 2, 2, 0, 0, 0, 3, 1, 2, 0, 0, 0, 0, 0, 3, 0, 0, 0, 8, 5, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(51, 50, 'SPIRASTRELLA_CUNCTATRIX', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 4, 0, 0, 5, 0, 0, 0, 6, 2, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(52, 51, 'SPIRASTRELLA_MINAX', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 1, 1, 1, 0, 4, 0, 0, 5, 0, 0, 0, 6, 2, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(53, 52, 'STYLOCORDYLA_BOREALIS', 1, 0, 1, 0, 0, 0, 1, 0, 0, 3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 2, 0, 2, 4, 0, 0, 0, 3, 1, 3, 0, 0, 0, 0, 0, 7, 0, 0, 0, 5, 5, 0, 0, 1, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(54, 53, 'SUBERITES_CAMINATUS', 1, 0, 1, 0, 0, 0, 3, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 2, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 4, 2, 1, 0, 5, 6, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(55, 54, 'SUBERITES_CARNOSUS_V.INCRUSTANS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 3, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 1, 1, 6, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(56, 55, 'SUBERITES_CARNOSUS_V.RAMOSUS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 3, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 9, 0, 0, 1, 1, 1, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(57, 56, 'SUBERITES_CARNOSUS_V.TYPICUS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 3, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 1, 1, 6, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(58, 57, 'SUBERITES_DOMUNCULA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 3, 0, 1, 0, 0, 0, 1, 1, 2, 3, 2, 1, 0, 0, 0, 0, 0, 0, 1, 1, 4, 0, 0, 0, 0, 0, 3, 0, 0, 0, 5, 6, 1, 0, 0, 1, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(59, 58, 'SUBERITES_FICUS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 3, 0, 1, 0, 0, 0, 1, 1, 2, 3, 2, 1, 0, 0, 0, 0, 0, 0, 1, 1, 4, 0, 0, 0, 0, 0, 3, 0, 0, 0, 6, 6, 1, 0, 0, 1, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(60, 59, 'SUBERITES_GIBBOSICEPS', 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 3, 1, 1, 1, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 5, 6, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(61, 60, 'TENTORIUM_PAPILLATUS', 1, 0, 1, 0, 0, 0, 3, 0, 3, 2, 0, 0, 0, 0, 0, 0, 1, 0, 4, 2, 1, 1, 2, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 6, 5, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(62, 61, 'TENTORIUM_SEMISUBERITES', 1, 0, 1, 0, 0, 0, 3, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 2, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 6, 5, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(63, 62, 'TERPIOS_FUGAX', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 2, 5, 2, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(64, 63, 'TETHYA_AURANTIUM', 2, 2, 1, 1, 2, 0, 4, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 1, 4, 6, 0, 1, 3, 0, 0, 0, 2, 5, 0, 0, 0, 3, '2021-06-30 05:18:30', '2021-06-30 05:26:23'),
(65, 64, 'TETHYA_CITRINA', 1, 2, 1, 0, 2, 0, 4, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 1, 4, 3, 0, 1, 3, 0, 0, 0, 2, 5, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:23'),
(66, 65, 'TIMEA_CHONDRILLOIDES', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 1, 3, 3, 0, 1, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:23'),
(67, 66, 'TIMEA_HALLEZI', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 1, 1, 1, 1, 3, 0, 1, 5, 0, 0, 0, 8, 3, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:24'),
(68, 67, 'TIMEA_MIXTA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 2, 1, 1, 1, 5, 3, 0, 2, 5, 0, 0, 0, 8, 3, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:24'),
(69, 68, 'TIMEA_STELLATA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 1, 0, 5, 0, 0, 5, 0, 0, 1, 8, 3, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:24'),
(70, 69, 'TIMEA_UNISTELLATA', 0, 0, 0, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 2, 3, 0, 1, 5, 0, 0, 0, 5, 3, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:24'),
(71, 70, 'TRACHYTELEIA_STEPHENSI', 1, 0, 1, 0, 0, 0, 2, 0, 4, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 4, 2, 3, 2, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 8, 5, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:24'),
(72, 71, 'TRICHOSTEMA_HEMISPHAERICUM', 1, 0, 1, 0, 0, 0, 4, 0, 4, 3, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 2, 1, 1, 2, 0, 1, 1, 3, 0, 0, 0, 0, 0, 0, 0, 4, 2, 1, 0, 3, 5, 0, 0, 0, 2, '2021-06-30 05:18:31', '2021-06-30 05:26:24'),
(73, 72, 'TRICHOSTEMA_SARSI', 1, 0, 1, 0, 0, 0, 3, 0, 4, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 0, 1, 3, 3, 0, 0, 0, 0, 0, 0, 0, 1, 2, 1, 0, 3, 5, 0, 0, 0, 2, '2021-06-30 05:18:31', '2021-06-30 05:26:24'),
(74, 73, 'TYLEXOCLADUS_JOUBINI', 1, 0, 1, 0, 0, 0, 3, 0, 2, 3, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 2, 0, 0, 2, 1, 3, 0, 0, 0, 0, 0, 2, 0, 0, 0, 4, 5, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:24'),
(75, 74, 'WEBERELLA_BURSA', 2, 3, 1, 1, 3, 0, 3, 0, 4, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 2, 1, 1, 1, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 3, 2, 1, 0, 1, 6, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:24'),
(76, 75, 'WEBERELLA_VERRUCOSA', 2, 3, 1, 0, 3, 0, 2, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 3, 2, 1, 1, 1, 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 3, 2, 1, 0, 1, 6, 0, 0, 0, 3, '2021-06-30 05:18:31', '2021-06-30 05:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `ID_USER` int(2) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `FOTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID_USER`, `USERNAME`, `EMAIL`, `PASSWORD`, `FOTO`) VALUES
(0, 'User', 'user@gmail.com', '$2y$10$hDtalNpbYyC4syC4d9i4o.RgDyU4XCBGHPXKz8W5Qzc1yRwhOyA6m', 'ic-centang-removebg-preview.png'),
(2, 'Admin', 'admin@gmail.com', '$2y$10$EX0.IrgQw.DI/PbNInAlaOr5Y6G0fuIsO60jBMcKLOlXohAXALTE6', '1625047839.png'),
(11, 'asdasd', 'asd@gmail.com', '$2y$10$q73wX7GDlU/7Uo7N11HGKeIXquzaL9YNm7Mf6I7Uz6sdWwmmH5j3m', '1625059630.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID_USER` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
