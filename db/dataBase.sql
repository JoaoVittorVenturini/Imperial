-- Active: 1668044754368@@127.0.0.1@3306@imperial
CREATE TABLE Usuario (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR(75) NOT NULL,
  username VARCHAR(20) NOT NULL,
  email VARCHAR(100) NOT NULL,
  telefone VARCHAR(14) NOT NULL,
  senha VARCHAR(25) NOT NULL,
  PRIMARY KEY (id)
);
/* Cria a tabela 02 Desenvolvedores */
CREATE TABLE Desenvolvedor (
  cnpj VARCHAR(18) NOT NULL,
  nome VARCHAR(75) NOT NULL,
  PRIMARY KEY (CNPJ)
);
/* Cria a tabela 03 Produtos */
CREATE TABLE Produto (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR(75) NOT NULL,
  descricao VARCHAR(500) NOT NULL,
  valor REAL NOT NULL,
  idDesenvolvedor VARCHAR(18) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (idDesenvolvedor) REFERENCES Desenvolvedor(cnpj)
);
/* Cria a tabela 04 Biblioteca */
CREATE TABLE Biblioteca (
  idUsuario INTEGER,
  idProduto INTEGER,
  FOREIGN KEY (idUsuario) REFERENCES Usuario(id),
  FOREIGN KEY (idProduto) REFERENCES Produto(id)
);
/* Cria a tabela 05 Cargos */
CREATE TABLE Cargo (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nome VARCHAR(75) NOT NULL,
  descricao VARCHAR(500) NOT NULL,
  salario REAL NOT NULL,
  cargaHorario VARCHAR(50),
  PRIMARY KEY (id)
);
/* Cria a tabela 06 Endereços */
CREATE TABLE Endereco (
  id INTEGER NOT,
  rua VARCHAR(100) NOT NULL,
  numero VARCHAR(50) NOT NULL,
  bairro VARCHAR(50) NOT NULL, 
  complemento VARCHAR(100),
  cidade VARCHAR(100) NOT NULL,
  estado VARCHAR(2) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (cidade) REFERENCES cidade(nome),
  FOREIGN KEY (estado) REFERENCES estado(uf),
);
/* Cria a tabela 07 Funcionários */
CREATE TABLE Funcionario (
  cpf VARCHAR(14) NOT NULL,
  nome VARCHAR(75) NOT NULL,
  telefone VARCHAR(14) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(25) NOT NULL,
  idCargo INTEGER,
  idEndereco INTEGER,
  PRIMARY KEY (cpf),
  FOREIGN KEY (idCargo) REFERENCES Cargo(id),
  FOREIGN KEY (idEndereco) REFERENCES Endereco(id)
);
/* Cria a tabela 08 Suporte */
CREATE TABLE Suporte (
  protocolo INTEGER NOT NULL AUTO_INCREMENT,
  dataInicio DATETIME NOT NULL,
  motivo VARCHAR(100) NOT NULL,
  descricao VARCHAR(500) NOT NULL,
  dataTermino DATETIME,
  idUsuario INTEGER,
  idFuncionario VARCHAR(14),
  PRIMARY KEY (protocolo),
  FOREIGN KEY (idUsuario) REFERENCES Usuario(id),
  FOREIGN KEY (idFuncionario) REFERENCES Funcionario(cpf)
);
/* Cria a tabela 09 Histórico de Supotes */
CREATE TABLE HistoricoSuporte (
  idUsuario INTEGER NOT NULL,
  idSuporte INTEGER NOT NULL,
  FOREIGN KEY (idUsuario) REFERENCES Usuario(id),
  FOREIGN KEY (idSuporte) REFERENCES Suporte(protocolo)
);
