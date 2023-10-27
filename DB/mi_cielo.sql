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
    role TINYINT(1) NOT NULL DEFAULT 1,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

insert into users (id_user, name, email, password, age, gender, location, role) values ( 1, 'Autoridad', 'autoridad@correo.com', 'wg0jLv0ySJeq+B3qWAIMnA==', 1, 'Prefiero no decirlo', 'desconocida', 0);

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
  respondio TINYINT(1) NOT NULL DEFAULT 0,
  create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);

CREATE TABLE reportes(
  id_report int not null PRIMARY KEY auto_increment,
  id_user int not null,
  name varchar(70) not null,
  email varchar(150) not null,
  departament varchar(50) not null,
  number_phone varchar(15) not null,
  location varchar(100) not null,
  date date not null,
  hour time not null,
  police varchar(2) not null,
  details text not null,
  cause text not null,
  recommendations text not null,
  notes text not null,
  name_img varchar(50) not null,
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

CREATE TABLE contacts(
  id int auto_increment PRIMARY KEY,
  id_user int not null,
  name varchar(50) not null,
  number_phone varchar(40),
  message text not null,
  create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);


CREATE TABLE conversations (
    conversation_id INT PRIMARY KEY,
    user_id INT,
    date_send TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE messages (
    message_id INT PRIMARY KEY auto_increment,
    conversation_id INT NOT NULL,
    user_id INT NOT NULL,
    content TEXT NOT NULL,
    date_send TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    see TINYINT(1) NOT NULL DEFAULT 0,
    FOREIGN KEY (conversation_id) REFERENCES conversations(conversation_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);




