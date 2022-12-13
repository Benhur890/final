/**git config --global user.email "maria.oliveira1@aluno.ifsp.edu.br"
git config --global user.name "Maria Eduarda de Oliveira"**/

-- drop database cozinha;

create database cozinha;

use cozinha;

CREATE TABLE dificuldade (
    codDif int NOT NULL AUTO_INCREMENT,
    valor int NOT NULL,
    -- 1-20(facil-azul), 21-50(mediano-amarelo), 51-100(dificil-vermelho)
    -- valor = 1-20 facil v(base)+dc(varavel) 10+-5=5
    PRIMARY KEY (codDif)
);

CREATE TABLE usuario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    pontuacao varchar(50), -- pontuação geral do usuario, com ela ele pode acessar diferentes niveis de receitas
    ativo tinyint not null default '0',
    moderador tinyint not null default '0',
    qtdeComent int, -- quantidade de cometários
    PRIMARY KEY (id)
);

CREATE TABLE receita (
    codRec int NOT NULL AUTO_INCREMENT,
    tempo int NOT NULL, -- preparo
    titulo varchar(50) NOT NULL,
    porcoes int NOT NULL, -- quantidade
    categoria varchar(50) NOT NULL, -- doces, frutos do mar, etc
    avaliacao varchar(10) NOT NULL, -- estrelas da receita (base), 0-5, quantificada por avaliacao de comenta
    pontuacao int NOT NULL, -- variavel com comentario (difbase + difmod + difing+++)
    visibilidade BOOLEAN NOT NULL, -- sim ou não, baseado no moderador
    usuario_id int NOT NULL,
    dificuldade_codDif int NOT NULL,
    PRIMARY KEY (codRec),
    CONSTRAINT fk_receita_usuario FOREIGN KEY (usuario_id) REFERENCES usuario (id),
    CONSTRAINT fk_receita_dificuldade FOREIGN KEY (dificuldade_codDif) REFERENCES dificuldade (codDif)
);

CREATE TABLE ingrediente (
    codIng int NOT NULL AUTO_INCREMENT,
    nome varchar(20) NOT NULL,
    qtde int NOT NULL,
    codRec int NOT NULL,
    PRIMARY KEY (codIng),
    CONSTRAINT fk_ingrediente FOREIGN KEY (codRec) REFERENCES receita (codRec)
);

CREATE TABLE pontua (
    codPon int NOT NULL AUTO_INCREMENT,
    id int NOT NULL,
    codRec int NOT NULL,
	PRIMARY KEY (codPon),
    CONSTRAINT fk_pontua_usuario FOREIGN KEY (id) REFERENCES usuario (id),
    CONSTRAINT fk_pontua_receita FOREIGN KEY (codRec) REFERENCES receita (codRec)
);

INSERT INTO usuario (nome, email, senha, moderador) VALUES ("Márcia Baptistella", "marcia.antiHacker@gmail.com", "123458", 1) ;
select * from usuario;
select * from receita;
select * from ingrediente;

