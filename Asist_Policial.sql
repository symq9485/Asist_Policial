DROP DATABASE IF EXISTS Asist_Policial;
CREATE DATABASE Asist_Policial;

USE Asist_Policial;

DROP TABLE IF EXISTS Usuarios;
CREATE TABLE Usuarios(
	id_usuario VARCHAR(32) NOT NULL,
    clave VARCHAR(32) NOT NULL,
    privilegio BOOL NOT NULL
)	ENGINE = InnoDB;

DROP TABLE IF EXISTS Ciudadanos;
CREATE TABLE Ciudadanos(
	cedula INT UNSIGNED NOT NULL,
	nombre VARCHAR(64) NOT NULL,
	apellido VARCHAR(64) NOT NULL,
	l_nacimiento VARCHAR(64) NOT NULL,
    f_nacimiento VARCHAR(64) NOT NULL,
	PRIMARY KEY(cedula)
)	ENGINE = InnoDB;

DROP TABLE IF EXISTS Ubicacion_Ciudadanos;
CREATE TABLE Ubicacion_Ciudadanos(
	id_uc INT UNSIGNED NOT NULL AUTO_INCREMENT,
	cedula_uc INT UNSIGNED NOT NULL,
	estado_uc VARCHAR(64) NOT NULL,
	municipio_uc VARCHAR(64) NOT NULL,
	calle_uc VARCHAR(64) NOT NULL,
	vivienda_uc VARCHAR (64) NOT NULL,
	PRIMARY KEY (id_uc),
	INDEX UC_FK1(cedula_uc),
	FOREIGN KEY(cedula_uc)
		REFERENCES Ciudadanos(cedula)
)	ENGINE = InnoDB;

DROP TABLE IF EXISTS Crimenes;
CREATE TABLE Crimenes(
	expediente INT UNSIGNED NOT NULL,
    delito VARCHAR(64) NOT NULL,
    solicitado BOOL NOT NULL,
    cedula_c INT UNSIGNED NOT NULL,
    PRIMARY KEY (expediente),
    INDEX C_FK1(cedula_c),
    FOREIGN KEY (cedula_c)
		REFERENCES Ciudadanos(cedula)
)	ENGINE = InnoDB;

DROP TABLE IF EXISTS Lugar_Crimenes;
CREATE TABLE Lugar_Crimenes(
	id_lc INT UNSIGNED NOT NULL AUTO_INCREMENT,
    estado_lc VARCHAR(64) NOT NULL,
    municipio_lc VARCHAR(64) NOT NULL,
    calle_lc VARCHAR(64) NOT NULL,
    lugar_lc VARCHAR(64) NOT NULL,
    expediente_lc INT UNSIGNED NOT NULL,
    PRIMARY KEY(id_lc),
    INDEX LC_FK1(expediente_lc),
    FOREIGN KEY (expediente_lc)
		REFERENCES Crimenes(expediente)
)	ENGINE = InnoDB;

INSERT INTO Usuarios(id_usuario, clave, privilegio)
VALUES('sudo', 123, 0);

INSERT INTO Usuarios(id_usuario, clave, privilegio)
VALUES('user', 123, 1);

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000001, 'Ramon', 'Rojas', 'Maracay', '2010-12-18');

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000002, 'Pedro', 'Rojas', 'Yaracuy', '2009-11-9');

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000003, 'Ramon', 'Perez', 'Cumana', '2008-10-5');

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000004, 'Julio', 'Quiroga', 'Maracaibo', '2007-9-23');

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000005, 'Claudio', 'Quintana', 'Trujillo', '2006-8-24');

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000006, 'Ricardo', 'Rivas', 'Barinas', '2005-7-11');

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000007, 'Alan', 'Brito', 'Bolivar', '2004-6-22');

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000008, 'Elver', 'Andrade', 'Sucre', '2003-5-13');

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000009, 'Jonas', 'Jones', 'Merida', '2002-4-4');

INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento)
VALUES(20000010, 'Diego', 'Parra', 'Valencia', '2001-3-1');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000001, 'Nueva Esparta', 'Antolin del campo', 'Ruiz', '14');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000002, 'Nueva Esparta', 'Maneiro', 'Miranda', 'C-22');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000003, 'Nueva Esparta', 'Mariño', 'Zamora', 'D-7');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000004, 'Nueva Esparta', 'Mariño', 'Marina', 'Edif. Alai - Apt.12');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000005, 'Nueva Esparta', 'Marcano', 'Marina', '23-B');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000006, 'Nueva Esparta', 'Marcano', 'Marcano', '14');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000007, 'Nueva Esparta', 'Antolin del campo', 'Diaz', '20-9');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000008, 'Nueva Esparta', 'Macanao', 'Trujillo', '5-B');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000009, 'Nueva Esparta', 'Tubores', 'Juana', '15-C');

INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc)
VALUES(20000010, 'Nueva Esparta', 'Gomez', 'Ave.Santa Ana', '124-D');

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(1, 'robo', 0, 20000001);

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(2, 'extorcion', 1, 20000002);

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(3, 'clonacion de tarjetas', 0, 20000003);

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(4, 'ilicito cambiario', 1, 20000004);

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(5, 'daño a propiedad publica', 0, 20000005);

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(6, 'homicidio', 1, 20000006);

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(7, 'cicariato', 0, 20000007);

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(8, 'falsificacion', 1, 20000008);

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(9, 'evacion de impuestos', 0, 20000009);

INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c)
VALUES(10, 'estafa', 1, 20000010);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Antolin del campo', 'clara', 'edif. bajito', 1);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Antolin del campo', 'oscura', 'casa 12-c', 2);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Gracia', 'luigi', 'mancion-23', 3);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Garcia', 'mario', 'nientiendo64', 4);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Macanao', 'Narnia', 'magey', 5);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Macanao', 'La marina', 'Museo Marino', 6);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Tubores', 'Grandes', 'conferry', 7);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Mariño', '4 de mayo', 'media naranja', 8);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Maneiro', 'Ave. Jovito Villalba', 'Canodromo', 9);

INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc)
VALUES('Nueva Esparta', 'Maneiro', 'coll', 'central madeirence', 10);