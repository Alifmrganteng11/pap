CREATE TABLE users (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama varchar(100) NOT NULL UNIQUE,
    alamat varchar(100) NOT NULL,
    password varchar (100) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);