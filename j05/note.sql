SHOW databases
USE *db*; 
SHOW tables;

DESC genre;
CREATE TABLE Test (champ1 varchar(255), id INT(4) PRIMARY KEY AUTO_INCREMENT);
DELETE FROM genre WHERE id_genre = 29;
INSERT into genre (nom) VALUES ('test'); 
INSERT into genre (id_genre, nom) VALUES (29, 'test');
INSERT into Test (nom) values ('toto');
UPDATE genre SET nom = 'test' WHERE id_genre = 29;

SELECT * FROM genre;
SELECT * FROM genre;
SELECT count(*), id_genre FROM film GROUP BY id_genre; 
SELECT * FROM film INNER JOIN genre ON film.id_genre = genre.id_genre WHERE id_genre = 25 ;
SELECT * FROM 'table';
SELECT champ FROM 'table;
describe 'table; DESC
SELECT id_film FROM film;
SELECT id_film FROM film limit 10;
SELECT id_film FROM film ORDER BY titre  LIMIT 10;
SELECT id_film FROM film ORDER BY titre DESC  LIMIT 10; (reverse)
SELECT id_film FROM film WHERE annee_prod > 5 AND annee_prod < 10  ORDER BY titre DESC  LIMIT 10;
SELECT count(id_film)  FROM film WHERE annee_prod > 5 AND annee_prod < 10  ORDER BY titre DESC  LIMIT 10;
count(id_film) max(id_film)
 
