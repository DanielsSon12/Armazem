-- Criação do database
CREATE DATABASE loginbd
USE loginbd;

-- Criação da tabela usuário
CREATE TABLE usuario(
    	id INT PRIMARY KEY AUTO_INCREMENT,
    	nome_usuario VARCHAR(100) NOT NULL,
    	senha_usuario VARCHAR(50) NOT NULL,
    	email_usuario VARCHAR(50) NOT NULL
);


