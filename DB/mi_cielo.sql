 create database if not exists mi_cielo;

 use mi_cielo;

create table users(
    id_user int PRIMARY KEY NOT NULL,
    name varchar(70) NOT NULL,
    email varchar(150) not null unique,
    password varchar(255) not null,
    age TINYINT(2) not null,
    gender varchar(25) not null,
    location varchar(100) not null,
    active TINYINT(1) NOT NULL DEFAULT 1,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE diary (
  id_record int not null PRIMARY KEY auto_increment,
  id_user int not null,
  title varchar(40) not null,
  content text not null,
  create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);

CREATE TABLE test (
  id_user int not null,
  p1 varchar(2) not null DEFAULT 'no',
  p2 varchar(2) not null DEFAULT 'no',
  p3 varchar(2) not null DEFAULT 'no',
  p4 varchar(2) not null DEFAULT 'no',
  p5 varchar(2) not null DEFAULT 'no',
  p6 varchar(2) not null DEFAULT 'no',
  p7 varchar(2) not null DEFAULT 'no',
  p8 varchar(2) not null DEFAULT 'no',
  p9 varchar(2) not null DEFAULT 'no',
  p10 varchar(2) not null DEFAULT 'no',
  p11 varchar(2) not null DEFAULT 'no',
  create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);

CREATE TABLE testimonio(
  id int auto_increment PRIMARY KEY,
  id_user int not null,
  message text not null,
  create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);

