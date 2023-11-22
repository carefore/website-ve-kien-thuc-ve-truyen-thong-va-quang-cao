CREATE DATABASE IF NOT EXISTS advertising_info;
USE advertising_info;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
);
