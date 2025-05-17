create database testes;

use testes;

create table usuarios(
  id int primary key auto_increment,
  nome varchar(100) not null,
  email varchar(100)
);

create table produtos(
  id_prod int primary key auto_increment,
  nome_prod varchar(150) not null,
  preco_prod decimal(5,2) not null,
  desc_prod varchar(250)
);