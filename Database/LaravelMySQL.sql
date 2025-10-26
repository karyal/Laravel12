use laravelmysql;
drop table students;

create table students (
	id int not null primary key auto_increment,
    fullname varchar(50) not null,
    courspersonspersonsaddressese varchar(50) not null,
    courseyear varchar(50) not null,
    section varchar(50) not null,
    created_at datetime not null,
    updated_at datetime not null
);

delete from students where id>0;
select * from students;

-- One to One Relationship
use laraveldatarelationship;
select * from persons;
select * from addresses;
select * from personaddresses;

insert into personaddresses(person_id, address) values(1,'Balaju');
insert into personaddresses(person_id, address) values(1,'Kalanki');
insert into personaddresses(person_id, address) values(1,'Balkhu');
insert into personaddresses(person_id, address) values(2,'Balaju');
insert into personaddresses(person_id, address) values(2,'Kalanki');
insert into personaddresses(person_id, address) values(3,'Balaju');
insert into personaddresses(person_id, address) values(3,'Kalanki');
insert into personaddresses(person_id, address) values(3,'Balhku');
insert into personaddresses(person_id, address) values(3,'Sanepa');

delete from personaddresses where id=4;
drop table persons;
drop table addresses;

desc persons;
show tables;