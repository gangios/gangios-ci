CREATE DATABASE IF NOT EXISTS `gangios` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `gangios` ;

DROP TABLE IF EXISTS `gangios`.`users` ;

CREATE  TABLE IF NOT EXISTS `gangios`.`users` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(20) NOT NULL ,
  `password` VARCHAR(40) NOT NULL ,
  `salt` VARCHAR(32) NOT NULL ,
  `description` VARCHAR(50) NOT NULL ,
  `created` DATETIME NULL ,
  `updated` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX username (`username` ASC) )
ENGINE = MyISAM ;

DROP TABLE IF EXISTS `gangios`.`groups` ;

CREATE  TABLE IF NOT EXISTS `gangios`.`groups` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `groupname` VARCHAR(20) NOT NULL ,
  `permission` VARCHAR(20) NOT NULL,
  `description` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX groupname (`groupname` ASC) )
ENGINE = MyISAM ;

DROP TABLE IF EXISTS `gangios`.`groups_users` ;

CREATE  TABLE IF NOT EXISTS `gangios`.`groups_users` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `group_id` BIGINT UNSIGNED NOT NULL ,
  `user_id` BIGINT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX group_id (`group_id` ASC) ,
  INDEX user_id (`user_id` ASC) )
ENGINE = MyISAM ;

