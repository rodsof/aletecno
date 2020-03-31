CREATE DATABASE IF NOT EXISTS silmar;

/* ----------------------- TABLAS ---------------------------- */

CREATE TABLE IF NOT EXISTS silmar.provincias (
    id_provincia INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    PRIMARY KEY (id_provincia) 
);

CREATE TABLE IF NOT EXISTS silmar.localidades(
    id_localidad INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    cp VARCHAR(5) NOT NULL,
    id_provincia INT(11) NOT NULL,
    PRIMARY KEY (id_localidad),
    FOREIGN KEY (id_provincia) REFERENCES silmar.provincias(id_provincia)
);

CREATE TABLE IF NOT EXISTS silmar.users (
    id_usuario INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    apellido VARCHAR(45) NOT NULL,
    password VARCHAR(45) NOT NULL,
    dni VARCHAR(10) NOT NULL,
    calle VARCHAR(45) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    cuit_cuil VARCHAR(11) NULL,
    tel_fijo VARCHAR(10) NULL,
    tel_celular VARCHAR(15) NULL,
    id_localidad INT(11) NULL,
    administrador BOOLEAN NOT NULL DEFAULT 0, -- 0:cliente, 1:administrador/veterinario 
    PRIMARY KEY (id_usuario),
    UNIQUE(dni),
    FOREIGN KEY (id_localidad) REFERENCES silmar.localidades(id_localidad)
);

CREATE TABLE IF NOT EXISTS silmar.tallas(
    id_talla INT(11) NOT NULL AUTO_INCREMENT,
    medida VARCHAR(10) NOT NULL,
    PRIMARY KEY (id_talla)
);

CREATE TABLE IF NOT EXISTS silmar.pelajes(
    id_pelaje INT(11) NOT NULL AUTO_INCREMENT,
    medida VARCHAR(10) NOT NULL,
    PRIMARY KEY (id_pelaje)
);

CREATE TABLE IF NOT EXISTS silmar.mascotas(
    id_mascota INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    especie VARCHAR(45) NOT NULL,
    raza VARCHAR(45) NOT NULL,
    sexo BOOLEAN NOT NULL, -- 0:hembra, 1:macho
    color VARCHAR(20) NOT NULL,
    nombre_imagen VARCHAR(45) NULL,
    peso INT(2,2) NOT NULL,
    id_usuario INT(11) NOT NULL,
    id_pelaje INT(11) NOT NULL,
    id_talla INT(11) NOT NULL,
    PRIMARY KEY(id_mascota),
    FOREIGN KEY (id_usuario) REFERENCES silmar.usuarios(id_usuario),
    FOREIGN KEY (id_pelaje) REFERENCES silmar.pelajes(id_pelaje),
    FOREIGN KEY (id_talla) REFERENCES silmar.tallas(id_talla)
);

CREATE TABLE IF NOT EXISTS silmar.vacunas(
    id_vacuna INT(11) NOT NULL AUTO_INCREMENT,
    fecha_vacunacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    marca VARCHAR(45) NOT NULL,
    serie VARCHAR(45) NOT NULL,
    fecha_revacunacion DATETIME NULL,
    id_mascota INT(11) NOT NULL,
    PRIMARY KEY (id_vacuna),
    FOREIGN KEY (id_mascota) REFERENCES silmar.mascotas(id_mascota)
);

CREATE TABLE IF NOT EXISTS silmar.observaciones(
    id_observacion INT(11) NOT NULL AUTO_INCREMENT,
    observaciones TEXT,
    fecha_observacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    id_mascota INT(11) NOT NULL,
    PRIMARY KEY (id_observacion),
    FOREIGN KEY (id_mascota) REFERENCES silmar.mascotas(id_mascota)
);

CREATE TABLE IF NOT EXISTS silmar.desparasitaciones(
    id_desparasitacion INT(11) NOT NULL AUTO_INCREMENT,
    fecha_desparasitacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    marca VARCHAR(45) NULL,
    fecha_renovacion DATETIME NULL,
    dosis VARCHAR(45) NOT NULL,
    id_mascota INT(11) NOT NULL,
    PRIMARY KEY (id_desparasitacion),
    FOREIGN KEY (id_mascota) REFERENCES silmar.mascotas(id_mascota)
);

CREATE TABLE IF NOT EXISTS silmar.recordatorios(
    id_recordatorio INT(11) NOT NULL AUTO_INCREMENT,
    fecha_recordatorio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    recordatorio TEXT,
    id_usuario INT(11) NOT NULL,
    PRIMARY KEY (id_recordatorio),
    FOREIGN KEY (id_usuario) REFERENCES silmar.users(id_usuario)
);

/* ----------------------- INSERTS DEFAULT ---------------------------- */

INSERT INTO silmar.provincias (nombre) VALUES ('La Pampa');

INSERT INTO silmar.localidades (nombre,cp,id_provincia) VALUES ('Gral. Pico','6360',1);

INSERT INTO silmar.tallas (medida) VALUES
    ('chica'),
    ('media'),
    ('grande')
;

INSERT INTO silmar.pelajes (medida) VALUES
    ('corto'),
    ('medio'),
    ('largo')
;

/* ----------------------- INSERTS TESTING ---------------------------- */

INSERT INTO silmar.users (nombre,apellido,password,dni,calle,numero,administrador,id_localidad) VALUES
    ('user_nombre','user_apellido','password','11111111','110','420',1,1)
;

/* ----------------------- FUNCIONES ---------------------------- */


