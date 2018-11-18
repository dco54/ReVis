create database revistest;
use revistest;
create table desarrollador(
	idDesarrollador int not null auto_increment,
    nombres varchar(30) not null,
    apellidos varchar(30) not null,
    correoElectronico varchar(30) not null,
    clave varchar(20) not null,
    primary key (idDesarrollador)
)	engine=InnoDB;
create table tipoAplicacion(
	idTipo int not null auto_increment,
    tipo varchar(40) not null,
    descripcion varchar(300) not null,    
    primary key (idTipo)
)	engine=InnoDB;

create table aplicacion(
	idAplicacion int not null auto_increment,
    desarrollador int,
    descripcion varchar(300) not null, 
    fecha date not null,
    tipo int,
    primary key (idAplicacion),
    foreign key (tipo) references tipoAplicacion(idTipo),
    foreign key (desarrollador) references desarrollador(idDesarrollador)
)	engine=InnoDB;
create table audio(
	idAudio int not null auto_increment,
    desarrollador int,
    descripcion varchar(300) not null, 
    fecha date not null,
    primary key (idAudio) ,
    foreign key (desarrollador) references desarrollador(idDesarrollador)
)	engine=InnoDB;
create table grafico(
	idGrafico int not null auto_increment,
    desarrollador int,
    descripcion varchar(300) not null,
    fecha date not null,
    primary key (idGrafico),
    foreign key (desarrollador) references desarrollador(idDesarrollador)
)	engine=InnoDB;
create table vista(
	idVista int not null auto_increment,
    aplicacion int not null,
    nombre varchar (50),
    descripcion varchar(300) not null,
    fecha date not null,
    primary key (idVista),
    foreign key (aplicacion) references aplicacion(idAplicacion)
)	engine=InnoDB;
create table videoDemo(
	idVideoDemo int not null auto_increment,
    aplicacion int not null,
    nombre varchar(80),
    descripcion varchar(300) not null,
    fecha date not null,
    primary key (idVideoDemo),
    foreign key (aplicacion) references aplicacion(idAplicacion)
)	engine=InnoDB;