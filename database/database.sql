CREATE DATABASE library;
USE library;

CREATE TABLE authors(
    id      int auto_increment not null primary key,
    name    varchar(100) not null
);

CREATE TABLE publishers(
    id      int auto_increment not null primary key,
    name    varchar(100) not null
);

CREATE TABLE books(
    id              int auto_increment not null primary key,
    author_id       int not null,
    publisher_id    int not null,
    name            varchar(255) not null,
    price           float(5,2) not null,
    CONSTRAINT fk_authors FOREIGN KEY(author_id) REFERENCES authors(id),
    CONSTRAINT fk_publishers FOREIGN KEY(publisher_id) REFERENCES publishers(id)
);

CREATE TABLE authors_publishers(
    id              int auto_increment not null primary key,
    author_id       int not null,
    publisher_id    int not null,
    CONSTRAINT fk_authors_publishers_authors FOREIGN KEY(author_id) REFERENCES authors(id),
    CONSTRAINT fk_authors_publishers_publishers FOREIGN KEY(publisher_id) REFERENCES publishers(id)
);

insert into authors(name) values('aldous huxley');
insert into authors(name) values('George R. R. Martin');

insert into publishers(name) values('Planeta');
insert into publishers(name) values('Agostini');
insert into publishers(name) values('Lubna');
insert into publishers(name) values('Gigamesh');
insert into publishers(name) values('Virtual');

insert into books(author_id,publisher_id,name,price) values(1,1,'Un mundo feliz',20.00);
insert into books(author_id,publisher_id,name,price) values(1,2,'La isla',20.00);
insert into books(author_id,publisher_id,name,price) values(1,3,'Time Must Have a Stop',20.00);
insert into books(author_id,publisher_id,name,price) values(1,4,'The Genius and the Goddess',20.00);
insert into books(author_id,publisher_id,name,price) values(1,1,'Crome Yellow',20.00);
insert into books(author_id,publisher_id,name,price) values(2,4,'Canço de gel i foc',10.50);
insert into books(author_id,publisher_id,name,price) values(2,4,'Xoc de reis',12.50);
insert into books(author_id,publisher_id,name,price) values(2,4,'Dança amb dracs',15.50);
insert into books(author_id,publisher_id,name,price) values(2,4,"tempesta d'espases",11.50);
insert into books(author_id,publisher_id,name,price) values(2,3,'Muerte de la luz',9.50);
insert into books(author_id,publisher_id,name,price) values(2,5,'Sueño del fevre',5.00);

insert into authors_publishers(author_id,publisher_id) values(1,1);
insert into authors_publishers(author_id,publisher_id) values(1,2);
insert into authors_publishers(author_id,publisher_id) values(1,3);
insert into authors_publishers(author_id,publisher_id) values(1,4);
insert into authors_publishers(author_id,publisher_id) values(2,3);
insert into authors_publishers(author_id,publisher_id) values(2,4);
insert into authors_publishers(author_id,publisher_id) values(2,5);