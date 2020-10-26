use fullstack;
create table pedidos(
nome_cliente int auto_increment not null,
endereco varchar(80),
telefone int,
nome_produto varchar(150),
valor_uni decimal(8.2),
quantidade int,
valor_total int,
primary key (nome_cliente)
);