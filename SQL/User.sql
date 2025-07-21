CREATE DATABASE test;
USE test;
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);
INSERT INTO users (name, email, password)
    VALUES ("Arijit Singh", "arijit@gmail.com", "arijit123");
INSERT INTO users (name, email, password)
    VALUES ("Atif Aslam", "atif@gmail.com", "atif123");