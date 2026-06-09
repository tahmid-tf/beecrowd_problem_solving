WITH CumulativeProfits AS (
    SELECT 
        c.name, 
        c.investment, 
        o.month, 
        SUM(o.profit) OVER (PARTITION BY c.id ORDER BY o.month) as running_total
    FROM clients c
    JOIN operations o ON c.id = o.client_id
),
PaybackMoments AS (
    SELECT 
        name, 
        investment,
        month as month_of_payback, 
        (running_total - investment) as payback_amount,
        ROW_NUMBER() OVER (PARTITION BY name ORDER BY month) as occurrence
    FROM CumulativeProfits
    WHERE running_total >= investment
)

SELECT name, round(investment,0), month_of_payback, round(payback_amount,0)
FROM PaybackMoments
WHERE occurrence = 1
ORDER BY name;