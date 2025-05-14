create database testes;

use testes;

create table usuarios(
  id int primary key auto_increment,
  nome varchar(100) not null,
  email varchar(100)
);