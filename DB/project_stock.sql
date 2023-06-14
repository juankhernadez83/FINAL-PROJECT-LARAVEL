use stock_project;
select*from supplier;

create database project_stock;
use project_stock;

/** DDL OPERATIONS*/
/** tables without foreign keys*/
create table measure(
	id int auto_increment,
    name varchar(50),
    primary key (id)
);

create table rol(
	id int auto_increment,
    name varchar(50),
    primary key (id)
);

create table status(
	id int auto_increment,
    name varchar(50),
    primary key (id)
);


/** tables with 1 foreign key*/
create table supplier(
	id int auto_increment,
    name varchar(50),
    last_name varchar(50),
    phone int,
    email varchar(50),
    id_status int,
    primary key (id),
    foreign key (id_status) references status(id)
);

/** tables with more than 1 foreign keys*/
create table admin(
	id int auto_increment,
    name varchar(50),
    last_name varchar(50),
    phone int,
    email varchar(50),
    password varchar(50),
    id_status int,
    id_rol int,
    primary key (id),
    foreign key (id_status) references status(id),
    foreign key (id_rol) references rol(id)
);

create table product(
	id int auto_increment,
    name varchar(50),
    price double,
    id_status int,
    id_supplier int,
    id_measure int,
    primary key (id),
    foreign key (id_status) references status(id),
    foreign key (id_supplier) references supplier(id),
    foreign key (id_measure) references measure(id)
);

/** tables with foreign key from product*/
create table input(
	id int auto_increment,
    quantity double,
    date_input date,
    id_product int,
    primary key (id),
    foreign key (id_product) references product(id)
);

create table output(
	id int auto_increment,
    quantity double,
    date_output date,
    id_product int,
    primary key (id),
    foreign key (id_product) references product(id)
);

create table stock(
	id int auto_increment,
    total double,
    id_product int,
    primary key (id),    
    foreign key (id_product) references product(id)
);

/** DML OPERATIONS*/
INSERT INTO measure(name) VALUES ('Unit');
INSERT INTO measure(name) VALUES ('Package');
INSERT INTO measure(name) VALUES ('Box');
 
INSERT INTO rol(name) VALUES ('Administrator');
INSERT INTO rol(name) VALUES ('Employee');

INSERT INTO status(name) VALUES ('Active');
INSERT INTO status(name) VALUES ('Inactive');

INSERT INTO supplier(name, last_name, phone, email, id_status) VALUES ('Thomas', 'Swift', 78290128, 'thomas@gmail.com', 1);
INSERT INTO supplier(name, last_name, phone, email, id_status) VALUES ('Kelvin', 'Smith', 77290129, 'kelvin@gmail.com', 1);

INSERT INTO admin(name, last_name, phone, email, password, id_status, id_rol) VALUES ('Harry', 'Williams', 72290127, 'harry@gmail.com', '1234', 1, 1);
INSERT INTO admin(name, last_name, phone, email, password, id_status, id_rol) VALUES ('Derek', 'Jones', 72290180, 'dereck@gmail.com', '12345', 1, 1);
INSERT INTO admin(name, last_name, phone, email, password, id_status, id_rol) VALUES ('John', 'Brown', 73290128, 'harry@gmail.com', '4321', 1, 2);

INSERT INTO product(name, price, id_status, id_supplier, id_measure) VALUES ('Tape', 1.50, 1, 1, 1);
INSERT INTO product(name, price, id_status, id_supplier, id_measure) VALUES ('Bond paper', 6.50, 1, 2, 2);

INSERT INTO input(quantity, date_input, id_product) VALUES (5, '2023-01-01', 1);
INSERT INTO input(quantity, date_input, id_product) VALUES (10, '2023-02-01', 2);

INSERT INTO output(quantity, date_output, id_product) VALUES (2, '2023-03-01', 1);
INSERT INTO output(quantity, date_output, id_product) VALUES (6, '2023-04-01', 2);

INSERT INTO stock(total, id_product) VALUES (3, 1);
INSERT INTO stock(total, id_product) VALUES (4, 2);

SELECT*FROM measure;
SELECT*FROM rol;
SELECT*FROM status;
SELECT*FROM stock;
SELECT*FROM input;
SELECT*FROM output;
SELECT*FROM supplier;
SELECT*FROM admin;
SELECT*FROM product;