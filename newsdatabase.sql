create DATABASE L12_CRUD; USE L12_CRUD
CREATE TABLE Lajmet(
id int Primary key auto_increment,
titulli varchar(50) not null, 
permbajtja text(255) not null, 
data_e_publikimit char(6)not null, 
fotografia varchar(20),
);