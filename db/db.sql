CREATE DATABASE sale;

USE sale;

CREATE TABLE product(
id int(10) primary key auto_increment,
name varchar(150) not null,
price decimal(20,2) not null,
description varchar(150)
);

