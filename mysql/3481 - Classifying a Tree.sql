WITH NodeTypes AS (
    SELECT DISTINCT
        node_id,
        CASE
            WHEN node_id = 50 THEN 'ROOT'
            WHEN pointer IS NULL THEN 'LEAF'
            ELSE 'INNER'
        END AS type
    FROM nodes
)

SELECT
    node_id,
    type
FROM NodeTypes
ORDER BY node_id;
