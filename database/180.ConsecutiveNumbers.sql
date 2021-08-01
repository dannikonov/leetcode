SELECT cur AS ConsecutiveNums FROM (
    SELECT Id,
        Num AS cur,
        LAG(Num) OVER w AS 'prev',
        LAG(Num, 2) OVER w AS 'prev_prev'
    FROM Logs
    WINDOW w AS (ORDER BY Id)
) AS SUB
GROUP BY cur, prev, prev_prev
HAVING cur = prev AND prev = prev_prev
