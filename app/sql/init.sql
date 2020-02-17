/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  alexfredes
 * Created: 17 feb. 2020
 */



CREATE TABLE articulo(
articulo_id serial,
titulo text);

insert into articulo (titulo)
VALUES ('Articulo 1');

insert into articulo (titulo)
VALUES ('Articulo 2');



CREATE TABLE usuarios(
usuario_id serial,
nombre text,
email text,
telefono int);


INSERT INTO usuarios (nombre, email, telefono)
VALUES('Alex', 'alex.fredes', 12345);