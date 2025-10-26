use laraveldatabase;
show tables;
desc users;

-- insert user
insert into users(id, name, email, email_verified_at, password, remember_token, created_at, updated_at)
values(1,'Raj Rai', 'raj@gmail.com', '2025-10-03 11:4', 'pass@word', '', '2025-10-03 11:4', '2025-10-03 11:4');

insert into users(id, name, email, email_verified_at, password, remember_token, created_at, updated_at)
values(2,'Keshor Sharma', 'keshor@gmail.com', '2025-10-03 11:4', 'pass@word', '', '2025-10-03 11:4', '2025-10-03 11:4');


-- Create new table
create table persons(
	pid int not null primary key,
	full_name varchar(50) not null,
	address varchar(50) not null,
	email varchar(50) not null,
	phone varchar(50) not null
);

show tables;
desc persons;

alter table people
rename persons;

CALL insert_dummy_persons();

use laraveldatabase;
select * from persons;
delete from persons where pid>=0;

INSERT INTO persons (pid, full_name, address, email, phone)
SELECT 
    t.n AS pid,
    CONCAT(first_name, ' ', last_name) AS full_name,
    CONCAT(city, ', Nepal') AS address,
    CONCAT(LOWER(first_name), '.', LOWER(last_name), '@gmail.com') AS email,
    CONCAT('98', LPAD(FLOOR(RAND()*100000000), 8, '0')) AS phone
FROM (
    SELECT 
        ELT(FLOOR(1 + (RAND()*100)), 
            'Aarav','Aarohi','Abhinav','Abhishek','Aditi','Aditya','Ajay','Akash','Alisha','Amrit',
            'Anil','Anita','Anjali','Anju','Ankit','Anup','Aparna','Arjun','Arpana','Ashish',
            'Asmita','Aayush','Aayusha','Babita','Bimal','Binita','Bishal','Bishnu','Bikash','Binod',
            'Bijay','Bharat','Bhawana','Bhim','Bhuvan','Buddha','Chandra','Chhabi','Chiran','Deepak',
            'Deepa','Devendra','Dibya','Dilip','Dipendra','Dinesh','Durga','Elina','Gaurav','Gita',
            'Govinda','Gopal','Hari','Hira','Indira','Ishwor','Ishika','Jaya','Jiban','Jyoti',
            'Kabita','Kanchan','Keshav','Kiran','Kishor','Krishna','Kusum','Lalit','Laxmi','Lokesh',
            'Madan','Manish','Manoj','Manju','Meera','Milan','Mina','Mohan','Mukesh','Namrata',
            'Narayan','Nabin','Neha','Nisha','Nirmala','Niraj','Nitesh','Pabitra','Padma','Prabin',
            'Prakash','Pramod','Pratima','Pooja','Prem','Pushpa','Rabin','Rajendra','Rajesh','Sandhya'
        ) AS first_name,
        ELT(FLOOR(1 + (RAND()*100)), 
            'Adhikari','Ayer','Acharya','Ale','Basnet','Bastola','Bhandari','Bhattarai','Bohora','Budhathoki',
            'Chaudhary','Chhetri','Dahal','Dangal','Dhakal','Dhamala','Dhungana','Gaire','Gautam','Ghimire',
            'Ghale','Gurung','Hamal','Joshi','KC','Khadka','Koirala','Kunwar','Lama','Lawati',
            'Magar','Maharjan','Mainali','Manandhar','Mishra','Nagarkoti','Nakarmi','Oli','Pandey','Parajuli',
            'Panta','Poudel','Rijal','Rai','Roka','Raut','Rimal','Ranjit','Rawal','Regmi',
            'Sapkota','Shahi','Shrestha','Shakya','Silwal','Sigdel','Simkhada','Subba','Sunuwar','Syangtan',
            'Tamang','Thapa','Tharu','Thing','Timsina','Upreti','Waiba','Yadav','Yonzon','Yonjan',
            'Bhujel','Gharti','Khatri','Neupane','Pathak','Sharma','Katuwal','Sigdel','Bohora','Adhikari',
            'Thulung','Limbu','Rai','Magar','Shrestha','Maharjan','Karmacharya','Manandhar','Tuladhar','Dangol'
        ) AS last_name,
        ELT(FLOOR(1 + (RAND()*100)), 
            'Kathmandu','Lalitpur','Bhaktapur','Kirtipur','Tokha','Budhanilkantha','Madhyapur Thimi','Changu Narayan','Banepa','Dhulikhel',
            'Panauti','Bhimeshwar','Manthali','Sindhuli','Hetauda','Bharatpur','Ratnanagar','Rapti','Kalaiya','Nijgadh',
            'Birgunj','Gaur','Malangwa','Janakpur','Jaleshwar','Gaushala','Siraha','Lahan','Dhangadhi','Tikapur',
            'Lamki Chuha','Attariya','Godawari','Ghorahi','Tulsipur','Lamahi','Nepalgunj','Kohalpur','Gulariya','Rajapur',
            'Thuli Bheri','Tripurasundari','Narayan','Baglung','Beni','Jomsom','Kawasoti','Devchuli','Gaindakot','Sainamaina',
            'Butwal','Siddharthanagar','Ramgram','Sunwal','Sandhikharka','Tansen','Waling','Putalibazar','Galyang','Chautara',
            'Barhabise','Pokhara','Lekhnath','Gorkha','Palungtar','Besisahar','Bhanu','Damauli','Bandipur','Lamjung',
            'Syangja','Parbat','Kushma','Madhyabindu','Devdaha','Bardibas','Ilam','Birtamod','Damak','Urlabari',
            'Letang','Sundar Haraicha','Itahari','Dharan','Biratnagar','Inaruwa','Baraha','Belbari','Shivasatakshi','Mechinagar',
            'Pathari Shanischare','Katahari','Kanchanpur','Rolpa','Dolpa','Mustang','Rasuwa','Nuwakot','Sarlahi','Mahottari'
        ) AS city,
        @row := @row + 1 AS n
    FROM information_schema.tables, (SELECT @row := 0) r
    LIMIT 1000
) t;

-- Student Table
create table students(
	sid int not null auto_increment primary key,
    full_name varchar(100) not null,
    class varchar(100) not null,
    section varchar(10) not null
);

-- updated_at timestamp

show tables;
desc students;

INSERT INTO students (sid, full_name, class, section) VALUES
(1, 'Ram Shrestha', 'Grade 5', 'A'),
(2, 'Anita Rai', 'Grade 10', 'B'),
(3, 'Hari Thapa', 'Grade 7', 'C'),
(4, 'Sunita Gurung', 'Grade 2', 'A'),
(5, 'Shyam Lama', 'Grade 11', 'D');