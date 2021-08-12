CREATE FUNCTION getNthHighestSalary(N INT) RETURNS INT
BEGIN
    SET N=N-1;
    RETURN (
        SELECT DISTINCT Salary
        FROM Employee
        ORDER BY Salary DESC
        LIMIT N, 1
    );
END;

CREATE FUNCTION getNthHighestSalary(N INT) RETURNS INT
BEGIN
    RETURN (
        SELECT DISTINCT SUB.Salary
        FROM (
            SELECT Salary, dense_rank() over (ORDER BY Salary DESC) AS `dense_rank`
            FROM Employee
        ) AS SUB
        WHERE SUB.dense_rank = N
    );
END;