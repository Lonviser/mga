<?php

//SQL-код базы
/*
CREATE DATABASE IF NOT EXISTS `app_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `app_db`;

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pass` char(60) NOT NULL,
  `verified` enum('N','Y') NOT NULL DEFAULT 'N',
  `created_at` timestamp NOT NULL,
  `confirmation_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT  
*/

define( 'DB_HOST', 'localhost');
define( 'DB_USER', 'studi181_mgaAdmin');
define( 'DB_PASS', 'vw7ihgEGD');
define( 'DB_NAME', 'studi181_mgaUsers');

$db = mysqli_connect("localhost", "studi181_mgaAdmin", "vw7ihgEGD", "studi181_mgaUsers" );

if( !$db ){
  echo 'Проблема с подключением к базе...';
  die;
}
mysqli_query($db, 'SET NAMES utf8');