 SELECT floor_number AS 'floor', SUM(nb_seats) AS 'seats' FROM cinema group by floor_number order by SUM(nb_seats) DESC;
