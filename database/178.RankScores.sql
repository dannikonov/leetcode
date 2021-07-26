SELECT Score, DENSE_RANK() OVER w AS `Rank`
FROM Scores
WINDOW w AS (order by Score DESC)