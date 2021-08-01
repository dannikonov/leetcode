SELECT id
FROM (
    SELECT
        id, Temperature,
        LAG(Temperature) OVER w AS 'LastTemperature',
        recordDate,
        LAG(recordDate) OVER w AS 'LastRecordDate'
        FROM Weather
        WINDOW w AS (ORDER BY recordDate)
     ) AS SUB
WHERE temperature > LastTemperature AND
    DATEDIFF(recordDate, LastRecordDate) = 1
