SELECT titre, resum FROM film 
WHERE titre LIKE '%42%' OR resum LIKE '%42%' 
ORDER BY duree_min;
-- WHERE INSTR(resum, 42) > 0 OR INSTR(titre, 42) > 0
