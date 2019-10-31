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

create table receitas(
    idreceitas int primary key,
    nome varchar(50),
    descricao varchar(2000),
    ModPreparo varchar(10000),
    ingredientes varchar(1000),
    ultimaatualizacao date,
    nota int,
    idcliente int,
    CONSTRAINT fk_receiclientes FOREIGN KEY (idcliente) REFERENCES idcliente(cliente)
);

create table favoritos(
    idcliente int,
    idreceitas int,
    CONSTRAINT fk_favoritoscliente FOREIGN KEY (idcliente) REFERENCES id(cliente),
    CONSTRAINT fk_receitasfavoritas FOREIGN KEY (idreceitas) REFERENCES id(receitas)
);