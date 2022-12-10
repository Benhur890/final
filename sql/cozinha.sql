/**git config --global user.email "maria.oliveira1@aluno.ifsp.edu.br"
git config --global user.name "Maria Eduarda de Oliveira"**/

drop database cozinha;

create database cozinha;

use cozinha;

CREATE TABLE dificuldade (
    codDif int NOT NULL AUTO_INCREMENT,
    valor int NOT NULL,
    -- 1-20(facil-azul), 21-50(mediano-amarelo), 51-100(dificil-vermelho)
    -- valor = 1-20 facil v(base)+dc(varavel) 10+-5=5
    PRIMARY KEY (codDif)
);

CREATE TABLE ingrediente (
    codIng int NOT NULL AUTO_INCREMENT,
    nome varchar(20) NOT NULL,
    dificuldade  int NOT NULL,
    porcao varchar(20) ,
    quant int NOT NULL,
    -- 1-10 qual a dificildade usado para quantificar a dificuldade bse de uma receita,
    -- ou seja, é uma constante em comparação  com a opnião que é uma variavel
    PRIMARY KEY (codIng)
);

CREATE TABLE usuario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    pontuacao varchar(50) NOT NULL, -- pontuação geral do usuario, com ela ele pode acessar diferentes niveis de receitas
    ativo tinyint not null default '0',
    moderador tinyint not null default '0',
    PRIMARY KEY (id)
);

CREATE TABLE receita (
    codRec int NOT NULL AUTO_INCREMENT,
    tempo int NOT NULL, -- preparo
    titulo varchar(50) NOT NULL,
    porcoes int NOT NULL, -- quantidade
    categoria varchar(50) NOT NULL, -- doces, frutos do mar, etc
    pontuacao int NOT NULL,
    visibilidade BOOLEAN NOT NULL, -- sim ou não, baseado no moderador
    dificuldade_codDif int NOT NULL,
    texto_cartao varchar(85) NOT NULL,
    PRIMARY KEY (codRec),
    CONSTRAINT fk_receita_dificuldade FOREIGN KEY (dificuldade_codDif) REFERENCES dificuldade (codDif)
);

CREATE TABLE ingRec (
    codIngRec int NOT NULL AUTO_INCREMENT,
    fk_ingrediente_codIng int NOT NULL,
    fk_receita_codRec int NOT NULL,
    PRIMARY KEY (codIngRec),
    CONSTRAINT fk_ingRe FOREIGN KEY (fk_ingrediente_codIng) REFERENCES ingrediente (codIng),
    CONSTRAINT fk_ingRec FOREIGN KEY (fk_receita_codRec) REFERENCES receita (codRec)
);



CREATE TABLE pontua (
    codPon int NOT NULL AUTO_INCREMENT,
    dataHora TIME NOT NULL, -- momento que o valor pontuado
    PRIMARY KEY (codPon),
    usuario_id int NOT NULL,
    receita_codRec int NOT NULL,
    CONSTRAINT fk_pontua_usuario FOREIGN KEY (usuario_id) REFERENCES usuario (id),
    CONSTRAINT fk_pontua_receita FOREIGN KEY (receita_codRec) REFERENCES receita (codRec)
);

select * from usuario;
select * from ingrediente;
select * from receita;

INSERT INTO `cozinha`.`ingrediente` (`nome`, `dificuldade`, `porcao`, `quant`) VALUES ('Massa ', '3', 'gramas', '500');



