CREATE SCHEMA IF NOT EXISTS avaliacao;

USE avaliacao;

CREATE OR REPLACE TABLE IF NOT EXISTS tb_instrutor(

    matricula INT NOT NULL UNIQUE,
    nome VARCHAR(255) NOT NULL,
    notaDeAvaliacao FLOAT NOT NULL,
    PRIMARY KEY(matricula)
);


INSERT INTO tb_instrutores VALUES(15595, 'Luis Lessa', 10.0);
INSERT INTO tb_instrutores VALUES(12345, 'Joao da Silva', 3.0);