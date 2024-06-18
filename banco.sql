CREATE TABLE projeto(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL
);

CREATE TABLE tarefa(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    descricao VARCHAR(255),
    duracao DOUBLE DEFAULT 0.0,
    projeto_id INTEGER,
    FOREIGN KEY (projeto_id) REFERENCES projeto(id),
    ON DELETE CASCADE,
    ON UPDATE CASCADE
);