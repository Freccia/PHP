SELECT titre, resum FROM film
WHERE INSTR(resum, 'vincent') > 0
-- WHERE resum LIKE '%vincent%'
ORDER BY id_film ASC;
