SELECT COUNT(DISTINCT id_film) AS films
FROM historique_membre
WHERE date BETWEEN '2006/10/30' AND '2007/07/27'
	OR DAY(date) = 24 AND MONTH(date) = 12;

-- WHERE DATEDIFF(date, '2006-10-30') >= 0
-- AND DATEDIFF(date, '2007-07-27') <= 0
