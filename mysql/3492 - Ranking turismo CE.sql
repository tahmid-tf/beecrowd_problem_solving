WITH city_stats AS (
    SELECT
        c.cidade_id,
        c.nome_cidade,
        c.regiao,
        COUNT(DISTINCT p.ponto_id) AS qtd_pontos,
        CAST(ROUND(AVG(a.nota), 2) AS DECIMAL(10, 2)) AS media_avaliacoes
    FROM cidades c
    JOIN PontosTuristicos p
        ON p.cidade_id = c.cidade_id
    LEFT JOIN Avaliacoes a
        ON a.ponto_id = p.ponto_id
    GROUP BY
        c.cidade_id,
        c.nome_cidade,
        c.regiao
    HAVING COUNT(DISTINCT p.ponto_id) > 1
)

SELECT
    nome_cidade,
    regiao,
    qtd_pontos,
    media_avaliacoes,
    DENSE_RANK() OVER (
        PARTITION BY regiao
        ORDER BY media_avaliacoes DESC
    ) AS ranking_regional
FROM city_stats
ORDER BY
    regiao,
    ranking_regional,
    nome_cidade;
