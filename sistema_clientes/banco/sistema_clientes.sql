-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para sistema_cliente
CREATE DATABASE IF NOT EXISTS `sistema_cliente` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sistema_cliente`;

-- Copiando estrutura para tabela sistema_cliente.acl_clientes
CREATE TABLE IF NOT EXISTS `acl_clientes` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(255) NOT NULL,
  `cli_email` varchar(255) NOT NULL,
  `cli_cargo` varchar(255) NOT NULL,
  `cli_empresa` varchar(255) NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela sistema_cliente.acl_clientes: ~2 rows (aproximadamente)
DELETE FROM `acl_clientes`;
/*!40000 ALTER TABLE `acl_clientes` DISABLE KEYS */;
INSERT INTO `acl_clientes` (`cli_id`, `cli_nome`, `cli_email`, `cli_cargo`, `cli_empresa`) VALUES
	(1, 'shayna silvares', 'shayna@albutech.com', 'analista de sistema', 'albutech.com'),
	(2, 'anderson albuquerque', 'anderson@autodicas.com', 'fundador', 'autodicas.com');
/*!40000 ALTER TABLE `acl_clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_cliente.acl_telefones
CREATE TABLE IF NOT EXISTS `acl_telefones` (
  `tel_id` int(11) NOT NULL AUTO_INCREMENT,
  `tel_tipo` varchar(50) NOT NULL,
  `tel_numero` varchar(50) NOT NULL,
  `tel_cliente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tel_id`),
  KEY `FK_cliente_telefone` (`tel_cliente_id`),
  CONSTRAINT `FK_cliente_telefone` FOREIGN KEY (`tel_cliente_id`) REFERENCES `acl_clientes` (`cli_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela sistema_cliente.acl_telefones: ~3 rows (aproximadamente)
DELETE FROM `acl_telefones`;
/*!40000 ALTER TABLE `acl_telefones` DISABLE KEYS */;
INSERT INTO `acl_telefones` (`tel_id`, `tel_tipo`, `tel_numero`, `tel_cliente_id`) VALUES
	(1, 'cel', '(21) 9699-1122', 1),
	(2, 'telefone', '(21) 2111-2233', 1),
	(3, 'cel', '(21) 96998-2508', 2);
/*!40000 ALTER TABLE `acl_telefones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
