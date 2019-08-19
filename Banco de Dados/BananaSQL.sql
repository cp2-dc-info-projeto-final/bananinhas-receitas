use bananaSQL;

create table cliente(
    id int primary key,
    nome varchar(30),
    email varchar(30),
    tel int,
    senha varchar(255),
    sexo varchar(30),
    DataNasc date
);

create table ingredientes(
    idingredientes int primary key,
    Nome varchar(30)
);

create table categoria(
    idreceitas int primary key,
    Nome varchar(30)
);

create table receitas(
    idreceitas int primary key,
    nome varchar(30),
    descrição varchar(200),
    mododepreparo varchar(1000),
    ultimaatualizacao date,
    nota int,

);

create table favoritos(

);