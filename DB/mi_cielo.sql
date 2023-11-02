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
    conversation_id INT PRIMARY KEY auto_increment,
    id_user INT,
    date_send TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);

CREATE TABLE messages (
    message_id INT PRIMARY KEY auto_increment,
    conversation_id INT NOT NULL,
    id_user INT NOT NULL,
    content TEXT NOT NULL,
    date_send TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    see TINYINT(1) NOT NULL DEFAULT 0,
    FOREIGN KEY (conversation_id) REFERENCES conversations(conversation_id) ON DELETE CASCADE,
    FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);


/* 
WITH DateRange AS (
  SELECT CURDATE() - INTERVAL (n - 1) DAY AS fecha
  FROM (
    SELECT 1 AS n
    UNION ALL SELECT 2
    UNION ALL SELECT 3
    UNION ALL SELECT 4
    UNION ALL SELECT 5
    UNION ALL SELECT 6
    UNION ALL SELECT 7
  ) Numbers
)

SELECT dr.fecha, COUNT(u.id_user) AS cantidad_usuarios
FROM DateRange dr
LEFT JOIN users u ON dr.fecha = DATE(u.created_at)
GROUP BY dr.fecha
ORDER BY dr.fecha;





SELECT AVG(age) AS promedio_edad
FROM users WHERE id_user != 1;


SELECT u.name AS nombre_usuario, COUNT(t.id) AS cantidad_testimonios
FROM users u
INNER JOIN testimonio t ON u.id_user = t.id_user
GROUP BY u.id_user, u.name;



WITH HourRange AS (
  SELECT 0 AS hora
  UNION ALL SELECT 1
  UNION ALL SELECT 2
  UNION ALL SELECT 3
  UNION ALL SELECT 4
  UNION ALL SELECT 5
  UNION ALL SELECT 6
  UNION ALL SELECT 7
  UNION ALL SELECT 8
  UNION ALL SELECT 9
  UNION ALL SELECT 10
  UNION ALL SELECT 11
  UNION ALL SELECT 12
  UNION ALL SELECT 13
  UNION ALL SELECT 14
  UNION ALL SELECT 15
  UNION ALL SELECT 16
  UNION ALL SELECT 17
  UNION ALL SELECT 18
  UNION ALL SELECT 19
  UNION ALL SELECT 20
  UNION ALL SELECT 21
  UNION ALL SELECT 22
  UNION ALL SELECT 23
)

SELECT hr.hora, COUNT(t.id) AS cantidad_testimonios
FROM HourRange hr
LEFT JOIN testimonio t ON hr.hora = HOUR(t.create_at)
GROUP BY hr.hora
ORDER BY hr.hora;




-- Crear un rango de horas (0 a 23)
WITH HourRange AS (
  SELECT 0 AS hora
  UNION ALL SELECT 1
  UNION ALL SELECT 2
  UNION ALL SELECT 3
  UNION ALL SELECT 4
  UNION ALL SELECT 5
  UNION ALL SELECT 6
  UNION ALL SELECT 7
  UNION ALL SELECT 8
  UNION ALL SELECT 9
  UNION ALL SELECT 10
  UNION ALL SELECT 11
  UNION ALL SELECT 12
  UNION ALL SELECT 13
  UNION ALL SELECT 14
  UNION ALL SELECT 15
  UNION ALL SELECT 16
  UNION ALL SELECT 17
  UNION ALL SELECT 18
  UNION ALL SELECT 19
  UNION ALL SELECT 20
  UNION ALL SELECT 21
  UNION ALL SELECT 22
  UNION ALL SELECT 23
)

SELECT hr.hora, COUNT(d.id_record) AS cantidad_registros_diario
FROM HourRange hr
LEFT JOIN diary d ON hr.hora = HOUR(d.create_at)
GROUP BY hr.hora
ORDER BY hr.hora;




WITH GenderRange AS (
  SELECT 'Prefiero no decirlo' AS gender
  UNION ALL SELECT 'Hombre'
  UNION ALL SELECT 'Mujer'
  UNION ALL SELECT 'Otro'
)

SELECT gr.gender, ROUND(IFNULL(AVG(u.age), 0), 1) AS promedio_edad
FROM GenderRange gr
LEFT JOIN users u ON gr.gender = u.gender
GROUP BY gr.gender;




SELECT
    'p1' AS pregunta,
    SUM(CASE WHEN p1 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p1 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p2' AS pregunta,
    SUM(CASE WHEN p2 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p2 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p3' AS pregunta,
    SUM(CASE WHEN p3 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p3 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p4' AS pregunta,
    SUM(CASE WHEN p4 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p4 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p5' AS pregunta,
    SUM(CASE WHEN p5 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p5 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p6' AS pregunta,
    SUM(CASE WHEN p6 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p6 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p7' AS pregunta,
    SUM(CASE WHEN p7 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p7 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p8' AS pregunta,
    SUM(CASE WHEN p8 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p8 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p9' AS pregunta,
    SUM(CASE WHEN p9 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p9 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p10' AS pregunta,
    SUM(CASE WHEN p10 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p10 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1
UNION ALL
SELECT
    'p11' AS pregunta,
    SUM(CASE WHEN p11 = 'si' THEN 1 ELSE 0 END) AS respondieron_si,
    SUM(CASE WHEN p11 = 'no' THEN 1 ELSE 0 END) AS respondieron_no
FROM test
WHERE respondio = 1 */
