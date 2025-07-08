/*
 * para criar o banco de dados e a tabela de usuários
 * com um usuário administrador. (TESTE)
 */
DROP DATABASE IF EXISTS usuario;
create database usuario;
use usuario;

create table usuario (
    nome varchar(50) NOT NULL,
    sobrenome varchar(50) NOT NULL,
    email varchar(255) NOT NULL,
    senha varchar(255) NOT NULL
);
insert into usuario (nome, sobrenome, email, senha)
VALUES
('admin', 'administrando', 'admin@email.com', 'admin2345');