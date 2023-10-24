CREATE DATABASE cadastro;
use cadastro;
Create table usuarios (
id Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
nick Varchar(30),
login Varchar(30),
senha Varchar(40),
nome Varchar(80),
telefone Varchar(11), 
Primary Key (nick)) ENGINE = InnoDB;
select * from usuarios;


drop database cadastro;