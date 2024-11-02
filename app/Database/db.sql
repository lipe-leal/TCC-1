CREATE DATABASE amlustres;
USE amlustres;

CREATE TABLE funcionario (
    idfuncionario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email VARCHAR(255),
    setor INT,
    cidade VARCHAR(20)
) ENGINE=InnoDB;

CREATE TABLE categoria (
	idcategoria INT PRIMARY KEY AUTO_INCREMENT,
	nome varchar(50)
)ENGINE=InnoDB;

CREATE TABLE produto (
    idproduto INT PRIMARY KEY AUTO_INCREMENT,
    nome varchar(50) not null,
    imagem varchar(50) NULL,
    preco DECIMAL(10, 2) NOT NULL,
    fkcategoria INT,
    foreign key(fkcategoria) REFERENCES categoria(idcategoria)
) ENGINE=InnoDB;



CREATE TABLE cliente (
    idcliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    DataDeNascimento DATE NOT NULL,
    senha VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    Endereco VARCHAR(255) NOT NULL,
    telefone CHAR(11),
    fkfuncionario INT,
    FOREIGN KEY (fkfuncionario) REFERENCES funcionario(idfuncionario) 
) ENGINE=InnoDB;

CREATE TABLE FeedBack (
    idfeedback INT PRIMARY KEY AUTO_INCREMENT,
    fkcliente INT,
    fkproduto INT,
    comentario VARCHAR(100),
    nota INT CHECK (nota BETWEEN 1 AND 5),
    data_feedback DATE NOT NULL,
    FOREIGN KEY (fkcliente) REFERENCES cliente(idcliente) ,
    FOREIGN KEY (fkproduto) REFERENCES produto(idproduto) 
) ENGINE=InnoDB;

CREATE TABLE pedidos (
    idpedidos INT PRIMARY KEY AUTO_INCREMENT,
    fkcliente INT,
    fkproduto INT,
    quantidade INT NOT NULL,
    DataDePedido DATE NOT NULL,
    stats VARCHAR(100) DEFAULT 'Pendente',
    FOREIGN KEY (fkcliente) REFERENCES cliente(idcliente) ,
    FOREIGN KEY (fkproduto) REFERENCES produto(idproduto) 
) ENGINE=InnoDB;

CREATE TABLE feedback_cliente (
    fkcliente INT,
    fkfeedback INT,
    PRIMARY KEY (fkcliente, fkfeedback),
    FOREIGN KEY (fkcliente) REFERENCES cliente(idcliente) ,
    FOREIGN KEY (fkfeedback) REFERENCES FeedBack(idfeedback) 
) ENGINE=InnoDB;


