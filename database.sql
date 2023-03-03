DROP DATABASE IF EXISTS `pb`;

CREATE DATABASE `pb`;

USE `pb`;

CREATE TABLE `pastes` (
    id VARCHAR(50) NOT NULL PRIMARY KEY,
    content LONGTEXT,
    syntax VARCHAR(20) NOT NULL default 'None',
    host VARCHAR(50) default '127.0.0.1',
    as_of_day timestamp default current_timestamp(),
    deleted_flag VARCHAR(1) default 'N'

);