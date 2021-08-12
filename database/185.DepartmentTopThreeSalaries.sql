SELECT D.Name AS Department, SUB.Name AS Employee, SUB.Salary
FROM (
    SELECT Name,
        Salary,
        DepartmentId,
        dense_rank() OVER (PARTITION BY DepartmentId ORDER BY Salary DESC) AS `dense_rank`
    FROM Employee
    GROUP BY Name, DepartmentId
) AS SUB
INNER JOIN Department AS D
    ON SUB.DepartmentId = D.Id
WHERE SUB.dense_rank <= 3
ORDER BY 3 DESC;