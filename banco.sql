create database castracao;

create table castracao.dono(
    id int primary key not null auto_increment,
    nome varchar(100) not null,
    cpf varchar(11) not null,
    celular varchar(11) not null,
    email varchar(100) not null
);

create table castracao.endereco(
    id int primary key not null auto_increment,
    rua varchar(100) not null,
    numero varchar(11) not null,
    bairro varchar(100) not null,
    cidade varchar(100) not null,
    estado varchar(100) not null,
    cep varchar(8) not null
);

create table castracao.pet(
    id int primary key not null auto_increment,
    nome varchar(50) not null,
    especie varchar(50) not null,
    idade varchar(50) not null,
    sexo varchar(50) not null,
    raca varchar(50) not null,
    peso varchar(50) not null,
    vacinado varchar(50) not null,
    data date
);

create user 'letty493'@'%' identified by 'root123';

grant all privileges on castracao.* to 'letty493'@'%';
