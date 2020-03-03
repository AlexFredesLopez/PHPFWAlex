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



    CREATE TABLE categoria(
      categoria_id serial primary key,
      categoria_nombre text,
      categoria_descripcion text
    );

    CREATE TABLE subcategoria (
      subcategoria_id serial primary key,
      subcategoria_nombre text,
      categoria_id integer,
    Foreign key (categoria_id) references categoria (categoria_id)

    );

    CREATE TABLE producto (
      producto_id serial primary key,
      producto_nombre text,
      subcategoria_id integer references subcategoria(subcategoria_id)
    );

    CREATE TABLE sku (
      sku_id serial primary key,
      sku_descripcion text,
      producto_id integer references producto(producto_id)
    );




INSERT INTO categoria (categoria_nombre, categoria_descripcion)
VALUES ('Categoria 1', 'Esto es una descirpcion de una categoria numero 1');

INSERT INTO categoria (categoria_nombre, categoria_descripcion)
VALUES ('Categoria 2', 'Esto es una descirpcion de una categoria numero 2');

INSERT INTO categoria (categoria_nombre, categoria_descripcion)
VALUES ('Categoria 3', 'Esto es una descirpcion de una categoria numero 3');


INSERT INTO subcategoria (subcategoria_nombre, categoria_id)
VALUES ('SubCategoria Categoria 1', 1);

INSERT INTO subcategoria (subcategoria_nombre, categoria_id)
VALUES ('SubCategoria Categoria 2', 2);

INSERT INTO subcategoria (subcategoria_nombre, categoria_id)
VALUES ('SubCategoria Categoria 3', 3);

INSERT INTO subcategoria (subcategoria_nombre, categoria_id)
VALUES ('SubCategoria Categoria 3.1', 3);

INSERT INTO subcategoria (subcategoria_nombre, categoria_id)
VALUES ('SubCategoria Categoria 3,2', 3);


INSERT INTO producto (producto_nombre, subcategoria_id)
VALUES ('Producto Subcategoria 1', 1);

INSERT INTO producto (producto_nombre, subcategoria_id)
VALUES ('Producto Subcategoria 2', 2);

INSERT INTO producto (producto_nombre, subcategoria_id)
VALUES ('Producto Subcategoria 3', 3);


GRANT ALL PRIVILEGES ON TABLE categoria TO mvc;
GRANT ALL PRIVILEGES ON TABLE subcategoria TO mvc;
GRANT ALL PRIVILEGES ON TABLE producto TO mvc;

GRANT USAGE, SELECT ON SEQUENCE subcategoria_subcategoria_id_seq TO mvc;
GRANT USAGE, SELECT ON SEQUENCE producto_producto_id_seq TO mvc;
GRANT USAGE, SELECT ON SEQUENCE categoria_categoria_id_seq TO mvc;