CREATE DATABASE IF NOT EXISTS mhs;

USE mhs;

CREATE TABLE identitas (
    npm VARCHAR(12) PRIMARY KEY,
    nama VARCHAR(20),
    alamat VARCHAR(100),
    jk CHAR(1),
    tgl_lhr DATE,
    email VARCHAR(40)
);

CREATE TABLE users (
    username VARCHAR(20) PRIMARY KEY,
    pass VARCHAR(100),
    npm VARCHAR(12),
    level CHAR(1)
);

INSERT INTO users (username, pass, npm, level) VALUES 
('admin', md5('admin123'), '140810230001', '2'),
('user', md5('user123'), '140810230002', '1');

INSERT INTO identitas (npm, nama, alamat, jk, tgl_lhr, email) VALUES 
('140810230001', 'Admin', 'Jl. Admin', 'L', '2000-01-01', 'admin@example.com'),
('140810230002', 'User', 'Jl. User', 'P', '2001-02-02', 'user@example.com');
