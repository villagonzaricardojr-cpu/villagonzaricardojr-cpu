-- SDLC: DESIGN + DEVELOPMENT
CREATE DATABASE student_system;

USE student_system;

CREATE TABLE students (
    id VARCHAR(20) PRIMARY KEY,
    name VARCHAR(100),
    course VARCHAR(100),
    year VARCHAR(20),
    email VARCHAR(100)
);

-- FAST DATA RETRIEVAL (INDEX)
CREATE INDEX idx_name ON students(name);