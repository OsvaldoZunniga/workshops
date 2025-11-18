CREATE TABLE estudiantes(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(40) not null,
    apellido varchar(40) not null,
    edad int not null
    fk_career int not null,
    CONSTRAINT fk_career foreign key (fk_career) REFERENCES carreras(id)

    

)
CREATE TABLE carreras(
    id int AUTO_INCREMENT not null PRIMARY KEY,
    codigo varchar(30) not null,
    nombre varchar(40) not null 
)