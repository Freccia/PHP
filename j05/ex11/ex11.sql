SELECT UPPER(p.nom)
AS 'NOM', p.prenom, a.prix, a.id_abo, m.id_abo, p.id_perso, m.id_fiche_perso
FROM membre m, abonnement a
INNER JOIN fiche_personne p
WHERE p.id_perso = m.id_fiche_perso
-- OR UNCOMMENT NEXT LINE TO FILTER RESULTS
-- AND a.id_abo = m.id_abo
AND a.prix > 42
ORDER BY p.nom, p.prenom ASC;

-- SELECT UPPER(fiche_personne.nom) 
-- AS 'NOM', prenom, abonnement.prix 
-- FROM membre
-- INNER JOIN fiche_personne ON fiche_personne.id_perso = membre.id_fiche_perso
-- INNER JOIN abonnement     ON abonnement.id_abo     = membre.id_abo 
-- WHERE prix > 42 
-- ORDER BY nom, prenom ASC;
