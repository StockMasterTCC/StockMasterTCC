/*
 * para criar o banco de dados e a tabela de usuários
 * com um usuário administrador. (TESTE)
 */
DROP DATABASE IF EXISTS usuario;
create database usuario;
use usuario;

create table usuario (
    nome varchar(50) ,
    sobrenome varchar(50),
    email varchar(255),
    senha varchar(255)
);
insert into usuario (nome, sobrenome, email, senha)
select * from usuario