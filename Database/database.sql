create database meteo;
use meteo;

create table meteorologue(
idMeteorologue int primary key not null auto_increment,
nom varchar(100),
motDePasse varchar(100)
);