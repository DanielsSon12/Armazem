-- Criação do database
CREATE DATABASE pessoabd
USE pessoabd;

-- Criação da tabela pessoa
CREATE TABLE pessoa(
    	id INT PRIMARY KEY AUTO_INCREMENT,
    	nome_pessoa VARCHAR(100),
        dataN_pessoa DATE,
    	cpf_pessoa VARCHAR(50),
    	endereco_pessoa VARCHAR(50),
);