SELECT titre AS 'Titre', resum AS 'Resume', annee_prod
FROM film
INNER JOIN genre ON film.id_genre = genre.id_genre
WHERE film.id_genre = 25
ORDER BY annee_prod DESC;
