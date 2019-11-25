use bananaSQL;

create table cliente(
    id int primary key,
    nome varchar(50),
    email varchar(30),
    tel int,
    senha varchar(255),
    sexo varchar(30),
    datanasc date
);

create table receitas(
    idreceitas int primary key,
    nome varchar(50),
    descricao varchar(2000),
    ModPreparo varchar(10000),
    ingredientes varchar(1000)
);

ALTER TABLE `receitas` CHANGE `idreceitas` `idreceitas` INT(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `cliente` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
