--SQL Server
USE master 
go

DROP DATABASE IF EXISTS [menu_SuperBurger]
GO

CREATE DATABASE [menu_SuperBurger]
GO

USE [menu_SuperBurger]
GO


DROP TABLE IF EXISTS [dbo].cathegorie;
GO
DROP TABLE IF EXISTS [dbo].prix;
GO
DROP TABLE IF EXISTS [dbo].formats;
GO
DROP TABLE IF EXISTS [dbo]. produit;
GO
DROP TABLE IF EXISTS [dbo].accompagnement;
GO
DROP TABLE IF EXISTS [dbo].formats_Produit;
GO
DROP TABLE IF EXISTS [dbo].cathegorie_acompagnement;
GO




CREATE TABLE cathegorie(
   id_cathegorie INT IDENTITY (1, 1) ,
   Nomcathegorie VARCHAR(50) ,
   PRIMARY KEY(id_cathegorie)
);
INSERT INTO cathegorie(Nomcathegorie) VALUES
('Poutines'),--01
('Extra'),--02
('À-cotés'),--03
('Apéritifs'),--04
('Breuvages'),--05
('super-dogs'),--06
('Les x-men-super Sous-marin 7"'),--07
('Spaghetti'),--08
('Menu Petits Héros (12 ans et moins)'),--09
('Salades'),--10
('Harburger (Boeuf 6.5 oz)'),--11
('Nos mayos')--12


CREATE TABLE prix(
   idPrix INT  IDENTITY (1, 1),
   prix MONEY,
   PRIMARY KEY(idPrix)
);
Insert Into prix(prix) Values
(6.89),--1
(9.89),--2
(12.89),--3
(9.49),--4
(12.49),--5
(15.49),--6
(10.49),--07
(13.49),--08
(16.49),--09
(10.89),--10
(13.89),--11
(16.89), --12
(11.49),--13
(14.49),--14
(17.49),--15
(11.89),--16
(14.89),--17
(17.89),--18
(2.99),--19
(3.99), --20
(5.99),--21
(1.00),--22
(1.25),--23
(1.50),--24
(2.00),--25
(4.99),--26
(8.99),--27
(14.99),--28
(6.49),--29
(6.99),--30
(7.99),--31
(19.99),--32
(18.99),--33
(6.50),--34
(7.00),--35
(2.49),--36
(2.24),--37
(5.69),--38
(6.69),--39
(7.69),--40
(15.99),--41
(16.99),--42
(13.99),--43
(11.99),--44
(14.79),--45
(3.75),--46
(3.00),--47
(12.99)--48




CREATE TABLE produit(
   idproduit INT IDENTITY (1, 1),
   NomProduit VARCHAR(50) ,
   description VARCHAR(300) ,
   idPrix INT NOT NULL,
   id_cathegorie INT NOT NULL,
   PRIMARY KEY(idproduit),
   FOREIGN KEY(idPrix) REFERENCES prix(idPrix),
   FOREIGN KEY(id_cathegorie) REFERENCES cathegorie(id_cathegorie)
);

Insert Into produit(NomProduit,description,idPrix, id_cathegorie ) Values
--poutines
('La Harley Quinn','Sauce brune',1,1),--01
('','',2,1),--02
('','',3,1),--03

('Le Flash','sauce italiennes',4,1),--04
('','',5,1),--05
('','',6,1),--06

('Le super burger','sauce au poivre',4,1),--07
('','',5,1),--08
('','',6,1),--09
('La Torche','sauce à la viande épicée',4,1),--10
('','',5,1),--11
('','',6,1),--12
('Le Ant Man','sauce au poivre et oignon conflits',7,1),--13
('','',8,1),--14
('','',9,1),--15
('Le DEADPOOL','sauce brune et bacon',10,1),--16
('','',11,1),--17
('','',12,1),--18
('Le LOKI','sauce brune et viande fumée',10,1),--19
('','',11,1),--20
('','',12,1), --21
('Les 4 FANTASTIQUE','sauce brune,au poivre,italienne et épicée',5,1), --22
('','',6,1),--23
('Le PUNISHER','sauce brune ou poivre,boeufbraisé au sirop d''érable et balsamique',13,1),--24
('','',14,1),--25
('','',15,1),--26
('La CATWOMAN','sauce brune ,poulet panné ou grillé',10,1),--27
('','',11,1),--28
('','',12,1),--29
('Le DOCTEUR STRANGE','sauce brune ,sauce général tao,poulet,panné,graine de sésame et oignons verts',16,1),--30
('','',17,1),--31
('','',18,1),--32
('POUTINE LA CHOSE','sauce brune ,bouchée de Mac''N''Cheese frites, mayo à l''ail et oignons verts',16,1),--33
('','',17,1),--34
('','',18,1),--35
('LA SORCIÈRE ROUGE','sauce brune ,sauce ranch,poulet pané dans une sauce Buffalo et oignon verts',16,1),--36
('','',17,1),--37
('','',18,1),--38
('LE FAUCON','sauce brune, steack Philly,oignon caramélisés et fromage jalapeno fondant',13,1),--39
('','',14,1),--40
('','',15,1),--41

('LE SPHYNX (SPÉCIAL BURGER)','sauce brune , boeuf haché, bacon et nappé de fromage râpé',16,1),--42
('','',17,1),--43
('','',18,1),--44
--extra
('céleri rave','',19,2),--45
('','',20,2),--46
('','',21,2),--47
('Fromage en grain','',20,2),--48
('Fromage cheddar','',22,2),--49
('Fromage suisse','',23,2),--50
('sauce brune','',24,2),--51
('sauce aux poivres','',25,2),--52
('sauce à la viande','',25,2),--53
('sauce à la viande épicé','',25,2),--54
('boeuf haché','',19,2),--55
('poulet grillé','',20,2),--56
('smoked meat','',26,2),--57
--À-cotés
('frite','',26,3),	--58	
('','',27,3),--59		
('','',28,3),--60
('Frite Sauce','',1,3),--61
('','',2,3),--62
('Pogo','',47,3),--63
('Frites patate douce','',29,3)	,--64	
('rondelle d''oignon','',29,3)	,	--65
('Frites Légumes Racines','',30,3)	,--66	
('Frites raves','',30,3),	--67
('Bâtonnets de fromage','',31,3),	--68
('cornichons panés','',31,3),	--69
('avocats croustillants','',31,3),	--70
('assiette de tendres de poulet','servis avec frite,mayo moutarde et miel',28,3),--71
('','',32,3),--72
('Ailes de poulet','servis avec frite,mayo au choix',5,3),--73
('','',6,3),--74
('','',15,3),--75
('Paniers avengers','3 lanières de poulet pané, rondelle d''oignons, 3 bâtonnets de fromage et 3 mini-pogos servis avec mayo épicée et mayo parmesan',5,3),--76
--Apéritifs
('corona','',35,4),--77
('Stella','',35,4),--78
('Budweiser','',34,4),--79
('Cidre de pomme lacroix','',35,4),--80
--Breuvages
('bouteille d''eau','',36,5),--81
('cannette','',37,5),--82
('stewart''s','',19,5),--83
('café','',25,5),--84
('thé','',25,5),--85
--super-dogs
('le starlord','saucisse,condiments aux choix,choux crémeux ou choucroute',38,6),--86
('le rocket racoon','saucisse,oignon,sauce italienne ou épicée',39,6),--87
('le gamora','saucisse,fromage suisse,oignons caramélisés,choucroute et mayo dijon',40,6),--88
('le drax','steak philly,oignons et fromage jalapeno',27,6),--89
--Les x-men- super Sous-marin 7"
('le wolverine','steak perpperoni,oignon,champignon,piments verts,fromage suisse, laitue,tomates,mayo au choix et vinaigrette italienne',44,7),--90
('le mystique','Poulet pané ou grillé,oignon,champignons,piments verts,fromage suisse,laitue,tomates,mayo au choix et vinaigrette italienne',48,7),--91
('le tornade','végétarien,double légume,fromages suisse,laitue,tomates, mayo au choix et vinaigrette italienne,',44,7),--92
('le magneto','steak perpperoni,smoked meat,oignon,champignon,piments verts,fromage suisse, laitue,tomates,mayo au choix et vinaigrette italienne',43,7),--93
--Spaghetti
('le shazam','spaghetti sauce à la viande',43,8),--94
('le black adam','spaghetti sauce à la viande épicée',14,8),--95
--Menu Petits Héros (12 ans et moins)
('le robin','hamburger,frites et jus',27,9),--96
('le spiderman','cheeseburger,frites et jus',27,9),--97
('le baby groot','5 bouchées de poulet,frites et jus',27,9),--98
('le iron man','3 mini-pogos,frites et jus',27,9),--99
('le billy batson','spaghetti et jus',27,9),--100
--Salades
('salade hulk keto','boeuf,bacon,laitue,morceaux de pickles,fromage cheddar et sauce Super Burger',28,10),--101
('salade césar au poulet','poulet pané ou poulet grillé,laitue,croûton,fromage,parmesan et bacon',28,10),--102
('salade césar','laitue,croûton,fromage,parmesan et bacon',30,10),--103
('','',44,10),--104
--Harburger (Boeuf 6.5 oz)
('le joker','boeuf,laitue,tomates et oignons',4,11),--105
('le batman','boeuf,fromage cheddar,laitue,tomates et oignons',7,11),--106
('le superman','boeuf,bacon,fromage cheddar,laitue,tomates et oignons',44,11),--107
('le thor','boeuf,bacon,fromage suisse,oignons conflits,champignons et mayo parmesan',43,11),--108
('le super burger','boeuf,smoked meat, 2 fromage suisse,laitue,tomates,mayonnaise et moutarde',28,11),--109
('le capitaine america','boeuf,fromage cheddar jaune,rondelle d''oignon et sauce italienne ou épicée',43,11),--110
('le hulk','2 fois boeuf,fromage cheddar, laitue,cornichons et mayo SuperBurger ',28,11),--111
('le green lantern (vegan)','Végé Burger,laitue,tomate,oignons,mayo au choix',44,11),--112
('le supergirl','Poulet pannée ou Poulet grillé,bacon,laitue,tomates,oignons et mayo aux tomates séchées',45,11),--113
('le wonderwoman','Poulet pannée ou Poulet grillé,fromage suisse,laitue,tomates,oignons conflits et mayo parmesan',45,11),--114
('hamburger steak','boeuf,oignons conflits ,champignon sautés,sauce brune ou sauce au poivre',43,11),--115
('la chose','Galette de Mac''N''Cheese,boeuf,bacon,fromage cheddar,laitue,tomates,oignons conflits,mayo au pesto',41,11),--116
('la panthère noire','2 fois viande fumée, 2 fois fromage suisse,choucroute,cornichons et mayo dijon',28,11),--117
('le wasp',' Poulet pannée ou Poulet grillé,bacon,fromage suisse,cornichons,laitue,tomates,oignons et moutarde au miel',28,11),--118
('le venom','2 fois boeuf,bacon,fromage jalepeno,oignon frits,jalapenos frits et mayo épicée',41,11),--119
--Nos mayos
('Pesto basilic','',24,12),--120
('Pesto tomates séchées','',24,12),--121
('Épicée','',24,12),--122
('Parmesan','',24,12),--123
('Dijon','',24,12),--124
('ail','',24,12)--125


CREATE TABLE formats(
   idformats INT IDENTITY (1, 1),
  nomformats VARCHAR(25) ,  
   PRIMARY KEY( idformats),
     
);
INSERT INTO formats (nomformats) VALUES

('Bébé'),--01
('Petite'),--02
('Moyenne'),--03
('Grande'),--04
('4oz'),--05
('3 Morceaux'),--06
('5 Morceaux'),--07
('6 Ailes'),--08
('8 Ailes'),--09
('10 Ailes')--10

CREATE TABLE accompagnement(
   IDAccompagnement INT  IDENTITY (1, 1),
   NomAccompagnement  VARCHAR(50)  ,
   idPrix INT NOT NULL,
   PRIMARY KEY(IDAccompagnement),
   FOREIGN KEY(idPrix) REFERENCES prix(idPrix)
);
INSERT INTO accompagnement(NomAccompagnement ,   idPrix ) VALUES
('avec salade de choux et pickles',23),--01
('avec frite',19),--02
('avec poutine',30)--03



CREATE TABLE cathegorie_acompagnement(
   id_cathegorie INT,
   IDAccompagnement INT,
   PRIMARY KEY(id_cathegorie, IDAccompagnement),
   FOREIGN KEY(id_cathegorie) REFERENCES cathegorie(id_cathegorie),
   FOREIGN KEY(IDAccompagnement) REFERENCES accompagnement(IDAccompagnement)
);
INSERT INTO cathegorie_acompagnement(id_cathegorie, IDAccompagnement) values
(11,1),
(11,2),
(11,3)


CREATE TABLE formats_Produit(
   idproduit INT,
    idformats INT,
   PRIMARY KEY(idproduit,  idformats),
   FOREIGN KEY(idproduit) REFERENCES produit(idproduit),
   FOREIGN KEY( idformats) REFERENCES  formats( idformats)
);
insert into  formats_Produit(idproduit, idformats) values
(1,1),
(2,2),
(3,4),
(4,1),
(5,2),
(6,4),
(7,1),
(8,2),
(9,4),
(10,1),
(11,2),
(12,4),
(13,1),
(14,2),
(15,4),
(16,1),
(17,2),
(18,4),
(19,1),
(20,2),
(21,4),
(22,2),
(23,4),
(24,1),
(25,2),
(26,4),
(27,1),
(28,2),
(29,4),
(30,1),
(31,2),
(32,4),
(33,1),
(34,2),
(35,4),
(36,1),
(37,2),
(38,4),
(39,1),
(40,2),
(41,4),
(42,1),
(43,2),
(44,4),
(45,1),
(46,2),
(47,4),
(58,2),
(59,3),
(60,4),
(61,2),
(62,3),
(71,6),
(72,7),
(73,8),
(74,9),
(75,10),
(103,2),
(104,4)