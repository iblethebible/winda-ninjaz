CREATE TABLE customer (
id INT PRIMARY KEY AUTO_INCREMENT,
custName TEXT(30),
custContact TEXT(30)
);

CREATE TABLE job (
id INT PRIMARY KEY AUTO_INCREMENT,
houseNumName TEXT(30) NOT NULL,
streetName TEXT(50) NOT NULL,
price int(3) NOT NULL,
frequency int(2),
dateLastDone date,
zone_id int(6) NOT NULL,
cust_id int(6) NOT NULL, 
info text(30)
);

CREATE TABLE zone (
id INT PRIMARY KEY AUTO_INCREMENT,
area TEXT(20) NOT NULL
);
