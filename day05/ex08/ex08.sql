SELECT first_name, last_name, DATE(birthdate) AS birthdate
FROM user_card
WHERE YEAR(birthdate) = 1989
ORDER BY last_name ASC;
