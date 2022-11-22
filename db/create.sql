-- Active: 1668044754368@@127.0.0.1@3306@imperial
/* Cria a nossa data base */
CREATE DATABASE imperial;
/* Usa a nossa data base */
USE imperial;
SET FOREIGN_KEY_CHECKS=0;
/* Cria a tabela de Usuários */
CREATE TABLE usuario (
  id INTEGER NOT NULL,
  nome VARCHAR(100),
  username VARCHAR(20),
  email VARCHAR(100),
  telefone VARCHAR(25), 
  senha VARCHAR(255), 
  PRIMARY KEY (id)
);
/* Cria a tabela de Funcionários */ 
CREATE TABLE funcionario (
  cpf VARCHAR(25) NOT NULL,
  nome VARCHAR(100),
  telefone VARCHAR(25),
  email VARCHAR(100),
  senha VARCHAR(255),
  idCargo INTEGER,
  idEndereco INTEGER, 
  PRIMARY KEY (cpf),
  FOREIGN KEY (idCargo) REFERENCES cargo(id),
  FOREIGN KEY (idEndereco) REFERENCES endereco(id)
);
/* Cria a tabela de endereços */
CREATE TABLE endereco (
  id INTEGER NOT NULL,
  rua VARCHAR(100),
  numero VARCHAR(20),
  bairro VARCHAR(50),
  complemento VARCHAR(100),
  cidade INTEGER,
  estado INTEGER,
  PRIMARY KEY (id)
);
ALTER TABLE `imperial`.`endereco` 
ADD CONSTRAINT `idCidade`
  FOREIGN KEY (`cidade`)
  REFERENCES `imperial`.`cidade` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `idEstado`
  FOREIGN KEY (`estado`)
  REFERENCES `imperial`.`estado` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

/* Cria a tabela de Cidades */
CREATE TABLE cidade (
  id INTEGER NOT NULL,
  nome varchar(120),
  uf INTEGER,
  ibge INTEGER
)COMMENT='Municipios das Unidades Federativas';
/* Cria a tabela de Estados */
CREATE TABLE estado (
  id INTEGER NOT NULL,
  nome varchar(75),
  uf varchar(2),
  ibge INTEGER,
  pais INTEGER,
  ddd varchar(50)
)COMMENT='Unidades Federativas';
/* Cria a tabela de cargos */
CREATE TABLE cargo(
  id INTEGER NOT NULL,
  nome VARCHAR(100),
  descricao VARCHAR(500),
  salario FLOAT,
  cargaHoraria VARCHAR(50),
  PRIMARY KEY (id)
);
/* Cria a tabela de Produtos */
CREATE TABLE produtos (
  id INTEGER NOT NULL,
  nome VARCHAR(100),
  descricao VARCHAR(500),
  valor FLOAT,
  idDesenvolvedor VARCHAR(25),
  dataLancamento TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  FOREIGN KEY (idDesenvolvedor) REFERENCES desenvolvedores(cnpj)
);
/* Cria a tabela de Desenvolvedores */
CREATE TABLE desenvolvedores (
  cnpj VARCHAR(25) NOT NULL,
  nome VARCHAR(100) NOT NULL,
  PRIMARY KEY (cnpj)
);
/* Cria a tabela de Bibliotecas */
CREATE TABLE biblioteca (
  idUsuario INTEGER,
  idProduto INTEGER,
  FOREIGN KEY (idUsuario) REFERENCES usuario(id),
  FOREIGN KEY (idProduto) REFERENCES produtos(id)
);



/* 
  Cria a tabela de Suportes
  
CREATE TABLE suporte (
  protocolo INTEGER NOT NULL,
  dataInicio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  motivo VARCHAR(100),
  descricao VARCHAR(500),
  dataTermino TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  idUsuario INTEGER,
  idFuncionario VARCHAR(25),
  PRIMARY KEY (protocolo),
  FOREIGN KEY (idUsuario) REFERENCES usuario(id),
  FOREIGN KEY (idFuncionario) REFERENCES funcionario(cpf)
);

  Cria a tabela de Histórico de Suportes  

CREATE TABLE historicoSuporte (
  idUsuario INTEGER,
  idSuporte INTEGER,
  FOREIGN KEY (idUsuario) REFERENCES usuario(id),
  FOREIGN KEY (idSuporte) REFERENCES suporte(protocolo)
);
 */