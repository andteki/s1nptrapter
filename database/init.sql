create database trapter
character set utf8
collate utf8_hungarian_ci;

grant all privileges
on trapter.*
to trapter@localhost
identified by 'titok';

use trapter;

create table datas (
    id int not null primary key auto_increment,
    aside int,
    bside int,
    cside int,
    dside int,
    area double
);


