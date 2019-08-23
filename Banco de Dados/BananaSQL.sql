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
    idcliente int,
    foreign key idcliente references id(cliente)
);

create table favoritos(
    idcliente int primary key,
    idreceitas int primary key,
    foreign key idcliente references id(cliente),
    foreign key idreceitas references idreceitas(receitas)
);