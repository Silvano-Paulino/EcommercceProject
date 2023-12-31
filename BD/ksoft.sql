-- MySQL Script generated by MySQL Workbench
-- Mon Sep  4 11:52:45 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema projecto_final
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projecto_final` DEFAULT CHARACTER SET utf8 ;
USE `projecto_final` ;

-- -----------------------------------------------------
-- Table `projecto_final`.`pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`pais` (
  `codPais` INT(11) NOT NULL AUTO_INCREMENT,
  `pais` VARCHAR(70) NOT NULL,
  PRIMARY KEY (`codPais`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`provincia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`provincia` (
  `codProvincia` INT(11) NOT NULL AUTO_INCREMENT,
  `provincia` VARCHAR(70) NOT NULL,
  `paisFk` INT(11) NOT NULL,
  PRIMARY KEY (`codProvincia`),
  CONSTRAINT `provincia_ibfk_1`
    FOREIGN KEY (`paisFk`)
    REFERENCES `projecto_final`.`pais` (`codPais`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`municipios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`municipios` (
  `codMunicipio` INT(11) NOT NULL AUTO_INCREMENT,
  `municipio` VARCHAR(70) NOT NULL,
  `provinciaFk` INT(11) NOT NULL,
  PRIMARY KEY (`codMunicipio`),
  CONSTRAINT `municipios_ibfk_1`
    FOREIGN KEY (`provinciaFk`)
    REFERENCES `projecto_final`.`provincia` (`codProvincia`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`niveis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`niveis` (
  `codNivel` INT(11) NOT NULL AUTO_INCREMENT,
  `nivel` VARCHAR(70) NOT NULL,
  PRIMARY KEY (`codNivel`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`usuarios` (
  `codUser` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(80) NOT NULL,
  `senha` VARCHAR(130) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `foto` VARCHAR(70) NOT NULL,
  `telefone` INT(11) NOT NULL,
  `municipioFk` INT(11) NOT NULL,
  `nivelFk` INT(11) NOT NULL,
  PRIMARY KEY (`codUser`),
  CONSTRAINT `usuarios_ibfk_1`
    FOREIGN KEY (`municipioFk`)
    REFERENCES `projecto_final`.`municipios` (`codMunicipio`),
  CONSTRAINT `usuarios_ibfk_2`
    FOREIGN KEY (`nivelFk`)
    REFERENCES `projecto_final`.`niveis` (`codNivel`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`sms`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`sms` (
  `codSms` INT NOT NULL,
  `mensagem` TEXT NOT NULL,
  `usuarioFk` INT(11) NOT NULL,
  PRIMARY KEY (`codSms`),
  CONSTRAINT `fk_sms_usuarios`
    FOREIGN KEY (`usuarioFk`)
    REFERENCES `projecto_final`.`usuarios` (`codUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projecto_final`.`preco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`preco` (
  `codPreco` INT(11) NOT NULL AUTO_INCREMENT,
  `preco` DOUBLE NOT NULL,
  PRIMARY KEY (`codPreco`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`categorias` (
  `codCategoria` INT(11) NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`codCategoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`produto` (
  `codProduto` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(80) NOT NULL,
  `descricao` TEXT NOT NULL,
  `capa` VARCHAR(70) NOT NULL,
  `precoFk` INT(11) NOT NULL,
  `categoriaFk` INT(11) NOT NULL,
  `visiblidade` TINYINT NOT NULL,
  PRIMARY KEY (`codProduto`),
  CONSTRAINT `produto_ibfk_1`
    FOREIGN KEY (`precoFk`)
    REFERENCES `projecto_final`.`preco` (`codPreco`),
  CONSTRAINT `produto_ibfk_2`
    FOREIGN KEY (`categoriaFk`)
    REFERENCES `projecto_final`.`categorias` (`codCategoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`fotoProduto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`fotoProduto` (
  `codFoto` INT(11) NOT NULL,
  `fotos` VARCHAR(100) NOT NULL,
  `produtoFk` INT(11) NOT NULL,
  PRIMARY KEY (`codFoto`),
  CONSTRAINT `fk_fotoProdut0_produto1`
    FOREIGN KEY (`produtoFk`)
    REFERENCES `projecto_final`.`produto` (`codProduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `projecto_final` ;

-- -----------------------------------------------------
-- Table `projecto_final`.`estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`estados` (
  `codEstado` INT(11) NOT NULL AUTO_INCREMENT,
  `estado` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`codEstado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`pagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`pagamento` (
  `codPagamento` INT(11) NOT NULL AUTO_INCREMENT,
  `comprovativo` VARCHAR(80) NOT NULL,
  `referencia` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`codPagamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`pedidos` (
  `codPedido` INT(11) NOT NULL AUTO_INCREMENT,
  `usuarioFk` INT(11) NOT NULL,
  `pedido` TEXT NOT NULL,
  `estadoFk` INT(11) NOT NULL,
  `datPedido` DATE NOT NULL,
  PRIMARY KEY (`codPedido`),
  CONSTRAINT `pedidos_ibfk_1`
    FOREIGN KEY (`estadoFk`)
    REFERENCES `projecto_final`.`estados` (`codEstado`),
  CONSTRAINT `pedidos_ibfk_2`
    FOREIGN KEY (`usuarioFk`)
    REFERENCES `projecto_final`.`usuarios` (`codUser`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projecto_final`.`venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projecto_final`.`venda` (
  `codVenda` INT(11) NOT NULL AUTO_INCREMENT,
  `precoVenda` DOUBLE NOT NULL,
  `datVenda` DATE NOT NULL,
  `quantidade` INT(50) NOT NULL,
  `produtoFk` INT(11) NOT NULL,
  `pagamentoFk` INT(11) NOT NULL,
  PRIMARY KEY (`codVenda`),
  CONSTRAINT `venda_ibfk_1`
    FOREIGN KEY (`produtoFk`)
    REFERENCES `projecto_final`.`produto` (`codProduto`),
  CONSTRAINT `fk_venda_pagamento1`
    FOREIGN KEY (`pagamentoFk`)
    REFERENCES `projecto_final`.`pagamento` (`codPagamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
