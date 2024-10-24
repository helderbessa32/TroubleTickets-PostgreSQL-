create schema if not exists lbaw;

DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS project CASCADE;
DROP TABLE IF EXISTS cards CASCADE;
DROP TABLE IF EXISTS items CASCADE;
DROP TABLE IF EXISTS subject CASCADE;
DROP TABLE IF EXISTS invite CASCADE;
DROP TABLE IF EXISTS members CASCADE;
DROP TABLE IF EXISTS task CASCADE;

CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  name VARCHAR NOT NULL,
  email VARCHAR UNIQUE NOT NULL,
  password VARCHAR NOT NULL,
  remember_token VARCHAR
  -- idTask INTEGER REFERENCES task(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE invite(
	id SERIAL PRIMARY KEY,
	invdate DATE NOT NULL,
	details TEXT,
	idUser INTEGER REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE cards (
  id SERIAL PRIMARY KEY,
  name VARCHAR NOT NULL,
  user_id INTEGER REFERENCES users NOT NULL
);

CREATE TABLE items (
  id SERIAL PRIMARY KEY,
  card_id INTEGER NOT NULL REFERENCES cards ON DELETE CASCADE,
  description VARCHAR NOT NULL,
  done BOOLEAN NOT NULL DEFAULT FALSE
);

CREATE TABLE subject (
    id SERIAL PRIMARY KEY,
    code TEXT UNIQUE,
    course TEXT,
    year INTEGER,
    name TEXT UNIQUE
);

CREATE TABLE project(
    id SERIAL PRIMARY KEY,
    name TEXT not null,
    grade INTEGER,
    details TEXT,
    archive BOOLEAN NOT NULL,
    subject TEXT not null
);



CREATE TABLE members(
	id SERIAL PRIMARY KEY,
	coordinator BOOLEAN,
	user_id INTEGER REFERENCES users NOT NULL ,
	project_id INTEGER REFERENCES project NOT NULL
);


INSERT INTO users VALUES (
  DEFAULT,
  'John Doe',
  'admin@example.com',
  '$2y$10$HfzIhGCCaxqyaIdGgjARSuOKAcm1Uy82YfLuNaajn6JrjLWy9Sj/W'
); -- Password is 1234. Generated using Hash::make('1234')

CREATE TABLE task (
    id SERIAL PRIMARY KEY,
    project_id INTEGER REFERENCES project,
    achieved BOOLEAN,
    name TEXT NOT NULL,
    details TEXT NOT NULL
);

INSERT INTO cards VALUES (DEFAULT, 'Things to do', 1);
INSERT INTO items VALUES (DEFAULT, 1, 'Buy milk');
INSERT INTO items VALUES (DEFAULT, 1, 'Walk the dog', true);

INSERT INTO cards VALUES (DEFAULT, 'Things not to do', 1);
INSERT INTO items VALUES (DEFAULT, 2, 'Break a leg');
INSERT INTO items VALUES (DEFAULT, 2, 'Crash the car');

insert into subject values (1, 1, 'Clothing', 1, 'Kiehn Group');
insert into project VALUES (10, 'Lbaw',11, 'Otsuka America Pharmaceutical, Inc.', true, 1);

insert into invite (id, invdate, details, idUser) values (1, '8/17/2022', 'regional', 1);
