SELECT REVERSE(SUBSTR(telephone, 2)) AS 'enohpelet' 
FROM distrib 
WHERE telephone LIKE '05%';
-- WHERE INSTR(telephone, 5) = 2;
