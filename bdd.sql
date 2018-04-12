CREATE DATABASE AlumnosDemo;

USE AlumnosDemo;


CREATE TABLE CareerTableDemo(
	id_career INT not null auto_increment PRIMARY KEY,
	career VARCHAR(50)
);



INSERT INTO 
  CareerTableDemo(career) 
VALUES 
('Ing. Sistemas Computacionales'), 
('Ing. Informatica'), 
('Ing. Civil'),
('Contador Público'),
('Lic. en Administración');
