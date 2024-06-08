CREATE TABLE vendedor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) NOT NULL,
    percentual_comissao DECIMAL(9, 2) NOT NULL,
    CONSTRAINT idx_vendedor__nome UNIQUE (nome)
)ENGINE=INNODB CHARSET=utf8 COLLATE=utf8_unicode_ci;

SELECT id, COUNT(*) 
FROM venda 
GROUP BY id 
HAVING COUNT(*) > 1;

-- Resolva duplicatas (exemplo para id = 3)
UPDATE venda SET id = id + 1000 WHERE id = 3;

-- Crie uma tabela temporária com id AUTO_INCREMENT
CREATE TABLE venda_temp (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(255) NOT NULL,
    quadrimestre VARCHAR(255) NOT NULL,
    valor_venda DECIMAL(10, 2) NOT NULL
);

-- Copie os dados para a tabela temporária
INSERT INTO venda_temp (cliente, quadrimestre, valor_venda)
SELECT cliente, quadrimestre, valor_venda FROM venda;

-- Renomeie as tabelas
RENAME TABLE venda TO venda_old, venda_temp TO venda;

-- Verifique a estrutura da nova tabela
DESCRIBE venda;