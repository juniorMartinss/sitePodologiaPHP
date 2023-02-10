create database sitePodologiaPhp;

use sitePodologiaPhp;


CREATE TABLE agendamento( 
  id INT AUTO_INCREMENT PRIMARY KEY,
  data_agendamento DATE NOT NULL,
  hora_agendamento TIME NOT NULL,
  nome_paciente VARCHAR(255) NOT NULL,
  observacoes TEXT
)Engine=InnoDB;

CREATE TABLE pessoas(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nomeCompleto VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(100) NOT NULL,
  data_nascimento DATE NOT NULL,
  telefone VARCHAR(15),
  endereco VARCHAR(100),
  cidade VARCHAR(50),
  estado CHAR(2),
  cep VARCHAR(10),
  pais VARCHAR(50),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) Engine=InnoDB;	
