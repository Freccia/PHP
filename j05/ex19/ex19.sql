SELECT DATEDIFF(MAX(DATE(date)), MIN(DATE(date))) AS 'uptime'
FROM historique_membre;
-- SELECT DATEDIFF(MAX(DATE(date_dernier_film)), MIN(DATE(date_dernier_film))) AS 'uptime'
-- FROM membre;
