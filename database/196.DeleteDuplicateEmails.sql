DELETE P1
FROM Person AS P1
    INNER JOIN Person AS P2
WHERE P1.Email = P2.Email
    AND P1.id > P2.id