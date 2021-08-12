SELECT E.Name AS Employee
FROM Employee AS E
INNER JOIN Employee AS EM
    ON E.ManagerId = EM.id
    AND E.Salary > EM.Salary