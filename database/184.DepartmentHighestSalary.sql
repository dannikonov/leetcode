SELECT D.Name AS Department, E.name AS Employee, E.Salary
FROM Employee AS E
INNER JOIN (
    SELECT MAX(Salary) AS Salary, DepartmentId FROM Employee GROUP BY 2
) AS SUB
    ON SUB.Salary = E.Salary AND SUB.DepartmentId = E.DepartmentId
INNER JOIN Department AS D
    ON E.DepartmentId = D.Id