# latihanCRUD

- Create database test;
- use test;
- CREATE TABLE tb_blog (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_kategori INT(11) NOT NULL,
tanggal date NOT NULL,
judul varchar(50) NOT NULL,
isi text,
status INT(11) NOT NULL);


- insert into tb_blog(id_kategori,tanggal,judul,isi,status)values("3","12/02/2023","Testing","Hanya Testing","1");

- select * from tb_blog;
