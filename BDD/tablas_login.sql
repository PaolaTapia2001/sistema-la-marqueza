-- 1. Crear la base de datos
CREATE DATABASE IF NOT EXISTS db_restaurant;
USE db_restaurant;

-- 2. Tabla de Roles
CREATE TABLE rol (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

-- 3. Tabla de Usuarios
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    PASSWORD VARCHAR(255) NOT NULL,
    rol_id INT,
    FOREIGN KEY (rol_id) REFERENCES rol(id)
);

-- 4. Inserción de Roles
INSERT INTO rol (nombre) VALUES ('Administrador'), ('Empleado');

-- 5. Inserción de Usuarios de Prueba
-- Nota: La contraseña '1234' está hasheada con PASSWORD_DEFAULT en PHP
INSERT INTO usuario (nombre_completo, username, PASSWORD, rol_id) VALUES 
('Paola Tapia', 'paola', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1),
('Usuario Prueba', 'empleado', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2);