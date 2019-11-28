-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`cinema`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cinema` (
  `cinema_id` INT(11) NOT NULL,
  `cinema_number` INT(11) NOT NULL,
  PRIMARY KEY (`cinema_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mydb`.`customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`customer` (
  `customer_name` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `customer_gender` INT(11) NULL DEFAULT NULL,
  `customer_bd` DATE NULL DEFAULT NULL,
  `customer_email` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `customer_password` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`customer_email`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mydb`.`movie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`movie` (
  `movie_id` INT(11) NOT NULL,
  `movie_name` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `movie_length` INT(11) NOT NULL,
  `movie_kind` VARCHAR(45) CHARACTER SET 'utf8' NULL DEFAULT NULL,
  `movie_trailer` LONGBLOB NULL DEFAULT NULL,
  `movie_picture` LONGBLOB NULL DEFAULT NULL,
  PRIMARY KEY (`movie_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mydb`.`seat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`seat` (
  `seat_id` CHAR(5) NOT NULL,
  `seat_status` VARCHAR(45) NULL,
  PRIMARY KEY (`seat_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mydb`.`schedule`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`schedule` (
  `schedule_id` INT(11) NOT NULL,
  `schedule_time_start` DATETIME NOT NULL,
  `schedule_time_end` DATETIME NOT NULL,
  `cinema_cinema_id` INT(11) NOT NULL,
  `movie_movie_id` INT(11) NOT NULL,
  `seat_seat_id` CHAR(5) NOT NULL,
  PRIMARY KEY (`schedule_id`, `cinema_cinema_id`, `movie_movie_id`, `seat_seat_id`),
  INDEX `fk_schedule_cinema1_idx` (`cinema_cinema_id` ASC),
  INDEX `fk_schedule_movie1_idx` (`movie_movie_id` ASC),
  INDEX `fk_schedule_seat1_idx` (`seat_seat_id` ASC),
  CONSTRAINT `fk_schedule_cinema1`
    FOREIGN KEY (`cinema_cinema_id`)
    REFERENCES `mydb`.`cinema` (`cinema_id`),
  CONSTRAINT `fk_schedule_movie1`
    FOREIGN KEY (`movie_movie_id`)
    REFERENCES `mydb`.`movie` (`movie_id`),
  CONSTRAINT `fk_schedule_seat1`
    FOREIGN KEY (`seat_seat_id`)
    REFERENCES `mydb`.`seat` (`seat_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mydb`.`ticket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ticket` (
  `ticket_id` INT(11) NOT NULL,
  `ticket_cost` FLOAT NOT NULL,
  `ticket_date` DATE NOT NULL,
  `schedule_schedule_id` INT(11) NOT NULL,
  `customer_customer_email` VARCHAR(100) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`ticket_id`, `schedule_schedule_id`, `customer_customer_email`),
  INDEX `fk_ticket_schedule1_idx` (`schedule_schedule_id` ASC),
  INDEX `fk_ticket_customer1_idx` (`customer_customer_email` ASC),
  CONSTRAINT `fk_ticket_schedule1`
    FOREIGN KEY (`schedule_schedule_id`)
    REFERENCES `mydb`.`schedule` (`schedule_id`),
  CONSTRAINT `fk_ticket_customer1`
    FOREIGN KEY (`customer_customer_email`)
    REFERENCES `mydb`.`customer` (`customer_email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

---insert cinema
INSERT INTO `cinema` (`cinema_id`, `cinema_number`) VALUES ('1', '16'), ('2', '14');

---insert customer
INSERT INTO `customer` (`customer_name`, `customer_gender`, `customer_bd`, `customer_email`, `customer_password`) VALUES ('Hoang Hao', '1', '1998-11-13', 'hao@gmail.com', '1234'), 
('Phuc Loc', '1', '1999-11-11', 'loc@gmail.com', '12345');

--insert movie
INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_length`, `movie_kind`, `movie_trailer`, `movie_picture`) VALUES ('0001', 'Sherlock Holmes 1', '180', 'Detective', NULL, NULL);

--insert schedule
INSERT INTO `schedule` (`schedule_id`, `schedule_time_start`, `schedule_time_end`, `cinema_cinema_id`, `movie_movie_id`, `seat_seat_id`) 
VALUES ('1', '2019-11-19 20:30:03', '2019-11-19 23:00:00', '1', '1', 'A01');

--insert seat
INSERT INTO `seat` (`seat_id`, `seat_status`) VALUES ('A01', '0'), ('A02', '1'), ('A03', '0'), 
('A04', '1'), ('B01', '0'), ('B-02', '1'), ('B03', '0'), ('B04', '1'); 

--insert ticket

INSERT INTO `ticket` (`ticket_id`, `ticket_cost`, `ticket_date`, `schedule_schedule_id`, `customer_customer_email`) 
VALUES ('1', '10', '2019-11-20', '1', 'loc@gmail.com');