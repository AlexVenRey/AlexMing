CREATE DATABASE BD;
USE BD;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL 
);

INSERT INTO users (name, password) VALUES
    ('Alex', SHA2('qweQWE123', 256)),
    ('Ming', SHA2('qweQWE123', 256))
;
