CREATE TABLE user (
    id INTEGER PRIMARY KEY,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL
);

CREATE TABLE subject (
    id SERIAL PRIMARY KEY,
    code TEXT UNIQUE,
    course TEXT,
    year INTEGER,
    name TEXT UNIQUE
);

DROP IF EXISTS project;


CREATE TABLE project(
    id SERIAL PRIMARY KEY,
    createdate DATE NOT NULL,
    grade INTEGER DEFAULT check(grade>0 AND grade<= 20),
    details TEXT DEFAULT,
    archive BOOLEAN NOT NULL,
    id_subject INTEGER REFERENCES subject(id),
)