-- MySQL Script generated by MySQL Workbench
-- Mon Feb  8 14:54:07 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema muzika
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema muzika
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `muzika` DEFAULT CHARACTER SET utf16 COLLATE utf16_slovenian_ci ;
USE `muzika` ;

-- -----------------------------------------------------
-- Table `muzika`.`periodi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muzika`.`periodi` (
  `id` INT NOT NULL,
  `naziv` VARCHAR(45) NULL,
  `od_god` INT NULL,
  `do_god` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `muzika`.`kompozicije`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muzika`.`kompozicije` (
  `id` INT NOT NULL,
  `naziv` VARCHAR(45) NULL,
  `god` INT NULL,
  `trajanje` INT NULL,
  `periodi_id` INT NOT NULL,
  PRIMARY KEY (`id`, `periodi_id`),
  INDEX `fk_kompozicije_periodi_idx` (`periodi_id` ASC),
  CONSTRAINT `fk_kompozicije_periodi`
    FOREIGN KEY (`periodi_id`)
    REFERENCES `muzika`.`periodi` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `muzika`.`kompozitori`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muzika`.`kompozitori` (
  `id` INT NOT NULL,
  `ime` VARCHAR(45) NULL,
  `prezime` VARCHAR(45) NULL,
  `bio` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `muzika`.`instrumenti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muzika`.`instrumenti` (
  `id` INT NOT NULL,
  `naziv` VARCHAR(45) NULL,
  `opis` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `muzika`.`kompozicije_has_kompozitori`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muzika`.`kompozicije_has_kompozitori` (
  `kompozicije_id` INT NOT NULL,
  `kompozitori_id` INT NOT NULL,
  PRIMARY KEY (`kompozicije_id`, `kompozitori_id`),
  INDEX `fk_kompozicije_has_kompozitori_kompozitori1_idx` (`kompozitori_id` ASC),
  INDEX `fk_kompozicije_has_kompozitori_kompozicije1_idx` (`kompozicije_id` ASC),
  CONSTRAINT `fk_kompozicije_has_kompozitori_kompozicije1`
    FOREIGN KEY (`kompozicije_id`)
    REFERENCES `muzika`.`kompozicije` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_kompozicije_has_kompozitori_kompozitori1`
    FOREIGN KEY (`kompozitori_id`)
    REFERENCES `muzika`.`kompozitori` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `muzika`.`kompozicije_has_instrumenti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `muzika`.`kompozicije_has_instrumenti` (
  `kompozicije_id` INT NOT NULL,
  `instrumenti_id` INT NOT NULL,
  PRIMARY KEY (`kompozicije_id`, `instrumenti_id`),
  INDEX `fk_kompozicije_has_instrumenti_instrumenti1_idx` (`instrumenti_id` ASC),
  INDEX `fk_kompozicije_has_instrumenti_kompozicije1_idx` (`kompozicije_id` ASC),
  CONSTRAINT `fk_kompozicije_has_instrumenti_kompozicije1`
    FOREIGN KEY (`kompozicije_id`)
    REFERENCES `muzika`.`kompozicije` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_kompozicije_has_instrumenti_instrumenti1`
    FOREIGN KEY (`instrumenti_id`)
    REFERENCES `muzika`.`instrumenti` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;