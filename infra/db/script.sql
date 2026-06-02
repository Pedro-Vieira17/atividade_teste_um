-- criação da database
CREATE DATABASE sistema_simples; 

-- usar tabela
USE sistema_simples;

-- criação tabela user(id, username, password)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- inserção de um username e uma password, tais como: "admin" e "123" respectivamente
INSERT INTO users (username, password) VALUES ('admin', '123');