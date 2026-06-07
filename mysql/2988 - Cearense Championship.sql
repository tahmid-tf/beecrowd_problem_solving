select name, 
(select count(team_1) from matches where team_1 = t.id) + (select count(team_2) from matches where team_2 = t.id) as matches,
(SELECT 
    COUNT(*)
FROM matches
WHERE (team_1 = t.id AND team_1_goals > team_2_goals)
   OR (team_2 = t.id AND team_2_goals > team_1_goals)) as victories,
   (SELECT 
    COUNT(*)
FROM matches
WHERE (team_1 = t.id AND team_1_goals < team_2_goals)
   OR (team_2 = t.id AND team_2_goals < team_1_goals)) as defeats,
   (SELECT 
    COUNT(*)
FROM matches
WHERE (team_1 = t.id AND team_1_goals = team_2_goals)
   OR (team_2 = t.id AND team_2_goals = team_1_goals)) as draws,
(
    SELECT 
        SUM(
            CASE
                WHEN (team_1 = t.id AND team_1_goals > team_2_goals) 
                     OR (team_2 = t.id AND team_2_goals > team_1_goals) THEN 3
                WHEN (team_1 = t.id AND team_1_goals = team_2_goals) 
                     OR (team_2 = t.id AND team_2_goals = team_1_goals) THEN 1
                ELSE 0
            END
        )
    FROM matches
    WHERE team_1 = t.id OR team_2 = t.id
) AS score

from teams t
order by 
CASE t.name
        WHEN 'CEARA' THEN 1
        WHEN 'FORTALEZA' THEN 2
        WHEN 'FLORESTA' THEN 3
        WHEN 'GUARANY DE SOBRAL' THEN 4
END;