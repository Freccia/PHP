SELECT nom, prenom FROM fiche_personne
WHERE INSTR(nom, '-') > 0 OR INSTR(prenom, '-') > 0
ORDER BY nom, prenom;

-- SELECT nom, prenom FROM fiche_personne 
-- WHERE nom LIKE '%-%' OR prenom LIKE '%-%' 
-- ORDER BY nom, prenom;
