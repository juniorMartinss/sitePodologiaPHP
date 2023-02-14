create database sitePodologiaPhp;

use sitePodologiaPhp;


CREATE TABLE agendamento( 
  id int auto_increment primary key,
  data_agendamento date not null,
  hora_agendamento time not null,
  nome_paciente VARCHAR(255) not null,
  observacoes text
)Engine=InnoDB;

CREATE TABLE pessoas(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nomeCompleto VARCHAR(50) NOT NULL,
  cpf varchar(11) not null unique,
  data_nascimento DATE NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  telefone VARCHAR(15),
  senha VARCHAR(100) NOT NULL,
  sexo varchar(10)
  
) Engine=InnoDB;


select * from pessoas;				

drop table pessoas;

