
create table meteorologue(
    idMeteorologue int primary key not null auto_increment,
    nom varchar(255),
    motDePasse varchar(255)
);


create table region(
    idRegion int primary key not null auto_increment,
    designation varchar(255)
);
create table meteo(
    idMeteo int primary key not null auto_increment,
    idRegion int,
    mois int,
    annee int,
    precipitationMax float,
    precipitationMin float,
    temperatureMax float,
    temperatureMin float,
    FOREIGN KEY(idRegion) references region(idRegion)
);
create table culture(
    idCulture int primary key not null auto_increment,
    designation varchar(255),
    variete varchar(255),
    cycle varchar(255)
);
create table conditionCulture(
    idConditionCulture int primary key not null auto_increment,
    idCulture int,
    precipitationMax float,
    precipitationMin float,
    temperatureMax float,
    temperatureMin float,
    FOREIGN KEY(idCulture) references culture(idCulture)
);
create table decade(
    idDecade int primary key not null auto_increment,
    decade int,
    mois int,
    annee int
);
create table preparationSol(
    idPreparationSol int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)

);


create table semisOuPlantation(
    idSemisOuPlantation int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);



create table premierFertilisant(
    idPremierFertilisant int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);
create table deuxiemeFertilisant(
    idDeuxiemeFertilisant int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);
create table troisiemeFertilisant(
    idTroisiemeFertilisant int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);


create table premierButtage(
    idPremierButtage int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);
create table deuxiemeButtage(
    idDeuxiemeButtage int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);


create table premierSarclage(
    idPremierSarclage int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);
create table deuxiemeSarclage(
    idDeuxiemeSarclage int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);
create table troisiemeSarclage(
    idTroisiemeSarclage int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);

create table repiquage(
    idRepiquage int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);

create table recolte(
    idRecolte int primary key not null auto_increment,
    idDecadeDebut int,
    idDecadeFin int,
    FOREIGN KEY(idDecadeDebut) references decade(idDecade),
    FOREIGN KEY(idDecadeFin) references decade(idDecade)
);

create table calendrier(
    idCalendrier int primary key not null auto_increment,
    idCulture int,
    idRegion int,
    idPreparationSol int,
    idSemisOuPlantation int,
    idRepiquage int,
    idPremierFertilisant int,
    idDeuxiemeFertilisant int,
    idTroisiemeFertilisant int,
    idPremierSarclage int,
    idDeuxiemeSarclage int,
    idTroisiemeSarclage int,
    idPremierButtage int,
    idDeuxiemeButtage int,
    idRecolte int,

    FOREIGN KEY(idRegion) references region(idRegion),
    FOREIGN KEY(idCulture) references culture(idCulture),
    FOREIGN KEY(idPreparationSol) references preparationSol(idPreparationSol),
    FOREIGN KEY(idSemisOuPlantation) references semisOuPlantation(idSemisOuPlantation),
    FOREIGN KEY(idRepiquage) references repiquage(idRepiquage),
    FOREIGN KEY(idPremierFertilisant) references premierFertilisant(idPremierFertilisant),
    FOREIGN KEY(idDeuxiemeFertilisant) references deuxiemeFertilisant(idDeuxiemeFertilisant),
    FOREIGN KEY(idTroisiemeFertilisant) references troisiemeFertilisant(idTroisiemeFertilisant),
    FOREIGN KEY(idPremierSarclage) references premierSarclage(idPremierSarclage),
    FOREIGN KEY(idDeuxiemeSarclage) references deuxiemeSarclage(idDeuxiemeSarclage),
    FOREIGN KEY(idTroisiemeSarclage) references troisiemeSarclage(idTroisiemeSarclage),
    FOREIGN KEY(idPremierButtage) references premierButtage(idPremierButtage),
    FOREIGN KEY(idDeuxiemeButtage) references deuxiemeButtage(idDeuxiemeButtage),
    FOREIGN KEY(idRecolte) references recolte(idRecolte)
    
);


insert into meteorologue VALUES
(null,'afqas','afaas'),
(null,'fca','fca'),
(null,'avana','avana');

insert into region VALUES
(null,'Alaotra'),(null,'Mangoro'),(null,'Analamanga'),(null,'Analanjirofo'),
(null,'Taolagnaro'),(null,'Betroka,Amboasary'),(null,'Beroroha,Ankazoabe,Sakaraha,Benenitra'),(null,'Antsinanana'),
(null,'Betsiboka'),(null,'Boeny'),(null,'Bongolava'),(null,'Antsiranana'),
(null,'Ambilobe,Ambanja'),(null,"Haute_Matsiatra"),(null,'Ihorombe'),(null,'Itasy'),
(null,'Melaky'),(null,'Morondava,Belo sur Tsiribihina,Manja'),(null,'Mahambo,Miandrivazo'),(null,'Sofia'),
(null,'Vakinakaratra');

insert into culture VALUES
(null,'Riz plateau','Narica 4,B22,Sebota 70','Intermediaire'),
(null,'Riz bas fond','Makalioka(mk34),Tsemaka,Dista','Long'),
(null,'Maïs','Irat 200,Volasoa','Intermediaire'),
(null,'Maïs','locale','Long');

insert into conditionCulture VALUES
(null,3,80,100,25,14),
(null,4,80,100,25,14);


insert into decade values
(null,1,1,2020),(null,2,1,2020),(null,3,1,2020),
(null,1,2,2020),(null,2,2,2020),(null,3,2,2020),
(null,1,3,2020),(null,2,3,2020),(null,3,3,2020),
(null,1,4,2020),(null,2,4,2020),(null,3,4,2020),
(null,1,5,2020),(null,2,5,2020),(null,3,5,2020),
(null,1,6,2020),(null,2,6,2020),(null,3,6,2020),
(null,1,7,2020),(null,2,7,2020),(null,3,7,2020),
(null,1,8,2020),(null,2,8,2020),(null,3,8,2020),
(null,1,9,2020),(null,2,9,2020),(null,3,9,2020),
(null,1,10,2020),(null,2,10,2020),(null,3,10,2020),
(null,1,11,2020),(null,2,11,2020),(null,3,11,2020),
(null,1,12,2020),(null,2,12,2020),(null,3,12,2020),

(null,1,1,2021),(null,2,1,2021),(null,3,1,2021),
(null,1,2,2021),(null,2,2,2021),(null,3,2,2021),
(null,1,3,2021),(null,2,3,2021),(null,3,3,2021),
(null,1,4,2021),(null,2,4,2021),(null,3,4,2021),
(null,1,5,2021),(null,2,5,2021),(null,3,5,2021),
(null,1,6,2021),(null,2,6,2021),(null,3,6,2021),
(null,1,7,2021),(null,2,7,2021),(null,3,7,2021),
(null,1,8,2021),(null,2,8,2021),(null,3,8,2021),
(null,1,9,2021),(null,2,9,2021),(null,3,9,2021),
(null,1,10,2021),(null,2,10,2021),(null,3,10,2021),
(null,1,11,2021),(null,2,11,2021),(null,3,11,2021),
(null,1,12,2021),(null,2,12,2021),(null,3,12,2021);

insert into meteo values
(null,1,10,2020,28.2,19.9,null,24.6),
(null,2,10,2020,59.6,65.5,23.4,23.2),
(null,3,10,2020,139.4,126.3,null,21.7);

-- Maïs irat 200 volasoa
insert into preparationSol values(null,31,33),(null,32,36),(null,27,29),(null,27,29),(null,34,35),(null,28,34);
insert into semisOuPlantation values(null,33,37),(null,35,38),(null,32,36),(null,30,33),(null,36,37),(null,null,33);

insert into repiquage values (null,null,null),(null,null,null),(null,null,null),(null,null,null),(null,null,null),(null,null,null);


insert into premierFertilisant values(null,31,33),(null,32,36),(null,27,29),(null,27,29),(null,34,35),(null,28,34);
insert into deuxiemeFertilisant values(null,35,38),(null,37,40),(null,34,37),(null,31,34),(null,36,37),(null,null,35);
insert into troisiemeFertilisant values(null,37,40),(null,37,40),(null,36,39),(null,33,36),(null,38,39),(null,null,40);


insert into premierSarclage values(null,35,38),(null,37,40),(null,34,37),(null,31,34),(null,38,39),(null,null,36);
insert into deuxiemeSarclage values(null,37,40),(null,null,null),(null,36,39),(null,33,34),(null,null,null),(null,null,38);
insert into troisiemeSarclage values (null,null,null),(null,null,null),(null,null,null),(null,null,null),(null,null,null),(null,null,null),(null,null,40);


insert into premierButtage values(null,35,38),(null,37,40),(null,34,37),(null,31,34),(null,null,null),(null,null,null);
insert into deuxiemeButtage values(null,37,40),(null,null,null),(null,36,39),(null,33,36),(null,null,null),(null,null,null);

insert into recolte values(null,45,48),(null,44,47),(null,45,48),(null,49,51),(null,48,49),(null,49,null);

insert into calendrier value
(null,1,3,1,1,1,1,1,1,1,1,1,1,1,1),
(null,3,1,1,1,1,1,1,1,1,1,1,1,1,1),
(null,3,2,2,2,2,2,2,2,2,2,2,2,2,2),
(null,3,3,3,3,3,3,3,3,3,3,3,3,3,3),
(null,3,4,4,4,4,4,4,4,4,4,4,4,4,4),
(null,1,16,5,5,5,5,5,5,5,5,5,5,5,5),
(null,2,15,6,6,6,6,6,6,6,6,6,6,6,6);