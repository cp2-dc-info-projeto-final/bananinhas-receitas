use bananaSQL;

create table cliente(
    id int primary key,
    nome varchar(30),
    email varchar(30),
    tel int,
    senha varchar(255),
    sexo varchar(30),
    datanasc date
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
    descricao varchar(200),
    mododepreparo varchar(1000),
    ultimaatualizacao date,
    nota int,
    idcliente int,
    idingredientes int,
    CONSTRAINT fk_receiclientes FOREIGN KEY (idcliente) REFERENCES idcliente(cliente),
    CONSTRAINT fk_receingrediente FOREIGN KEY (idingredientes) REFERENCES id(ingredientes)
);

create table favoritos(
    idcliente int,
    idreceitas int,
    CONSTRAINT fk_favoritoscliente FOREIGN KEY (idcliente) REFERENCES id(cliente),
    CONSTRAINT fk_receitasfavoritas FOREIGN KEY (idreceitas) REFERENCES id(receitas)
);