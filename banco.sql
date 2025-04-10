create database castracao;

create table castracao.dono(
    id int primary key not null auto_increment,
    nome varchar(100) not null,
    cpf varchar(100) not null,
    celular varchar(100) not null,
    email varchar(100) not null
);

create table castracao.endereco(
    id int primary key not null auto_increment,
    rua varchar(100) not null,
    numero varchar(100) not null,
    bairro varchar(100) not null,
    cidade varchar(100) not null,
    estado varchar(100) not null,
    cep varchar(100) not null
);

create table castracao.pet(
    id int primary key not null auto_increment,
    nome varchar(100) not null,
    especie varchar(100) not null,
    idade varchar(100) not null,
    sexo varchar(100) not null,
    raca varchar(100) not null,
    peso varchar(100) not null,
    vacinado varchar(100) not null,
    data date
);

create user 'letty493'@'%' identified by 'root123';

grant all privileges on castracao.* to 'letty493'@'%';