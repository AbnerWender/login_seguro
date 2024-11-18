create database seguranca;
use seguranca;

create table usuario(
	id int auto_increment primary key,
	nome varchar(100),
    data_nasc date,
    email varchar(35) unique not null,
    senha varchar(100)
);