create database fakultas;  

-- menggunakan database
use fakultas; 

-- membuat tabel jurusan
create table jurusan(
    id int primary key auto_increment,
    kode_jrsn char(5) not null,
    nama_jrsn varchar(60) not null
);
-- melihat deskripsi tabel
desc jurusan;

-- membuat tabel mahasiswa
create table mahasiswa(
    id int primary key auto_increment,
    id_jrsn int not null,
    nim char(15) not null,
    nama varchar(60) not null,
    jenis_klmn enum ('p','l') not null,
    tmpt_lahir varchar(50) not null,
    tgl_lahir date not null,
    alamat varchar(100) not null,
    foreign key (id_jrsn) references jurusan(id)
);
-- melihat deskripsi tabel
desc mahasiswa;

-- melihat semua table
show tables;

-- menginput field jurusan
insert into jurusan (kode_jrsn,nama_jrsn) values ('TRPL','Teknik Informatika');
-- menginput field mahasiswa
insert into mahasiswa (id_jrsn,nim,nama,jenis_klmn,tmpt_lahir,tgl_lahir,alamat) values ('1','362055401032','ovinda','p','bwi','2001-10-27','jln ikan gurami');
-- melihat inputan field
select*from nama_tabel;

-- update data tabel
update nama_tabel set (field) = "data field" where (foreign key) = angka kolom;
update mahasiswa set alamat = "jl. ikan paus no.70" where id = 1;

-- delete data tabel
delete from mahasiswa where id = 1;
