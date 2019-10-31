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

create table categoria(
    idreceitas int primary key,
    Nome varchar(50)
);

create table ingredientes(

idingrediente int primary key,
Descri varchar (500)
ModPreparo varchar(9999),
Nome varchar(100),
NomeReceita varchar(100),

);

create table receitas(
    idreceitas int primary key,
    nomereceita varchar(500),
    descricao varchar(2000),
    modpreparo varchar(1000),
     nome varchar(1000)

);

create table favoritos(
    idcliente int,
    idreceitas int,
    CONSTRAINT fk_favoritoscliente FOREIGN KEY (idcliente) REFERENCES id(cliente),
    CONSTRAINT fk_receitasfavoritas FOREIGN KEY (idreceitas) REFERENCES id(receitas)
);