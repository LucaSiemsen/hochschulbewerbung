CREATE DATABASE IF NOT EXISTS hochschulbewerbung;
USE hochschulbewerbung;

CREATE TABLE IF NOT EXISTS bewerbungen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vorname VARCHAR(50),
    nachname VARCHAR(50),
    studiengang VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS kontakte (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    nachricht TEXT
);
