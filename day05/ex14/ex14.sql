SELECT `floor_number` AS `floor`, SUM(`nb_seats`) FROM `cinema`
GROUP BY `floor`
ORDER BY SUM(`nb_seats`) DESC;