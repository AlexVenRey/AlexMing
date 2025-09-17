CREATE DATABASE darkweb;
USE darkweb;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_user VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL 
);

