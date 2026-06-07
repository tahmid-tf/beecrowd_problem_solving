WITH salario AS (
    SELECT
        e.matr,
        COALESCE(v.total_venc, 0) - COALESCE(d.total_desc, 0) AS salario
    FROM empregado e
    LEFT JOIN (
        SELECT
            ev.matr,
            SUM(v.valor) AS total_venc
        FROM emp_venc ev
        JOIN vencimento v
            ON v.cod_venc = ev.cod_venc
        GROUP BY ev.matr
    ) v
        ON v.matr = e.matr
    LEFT JOIN (
        SELECT
            ed.matr,
            SUM(ds.valor) AS total_desc
        FROM emp_desc ed
        JOIN desconto ds
            ON ds.cod_desc = ed.cod_desc
        GROUP BY ed.matr
    ) d
        ON d.matr = e.matr
)

SELECT
    dep.nome AS departamento,
    div.nome AS divisao,
    ROUND(COALESCE(AVG(s.salario), 0), 2) AS media_salario,
    COALESCE(MAX(s.salario), 0) AS maior_salario
FROM departamento dep
JOIN divisao div
    ON div.cod_dep = dep.cod_dep
LEFT JOIN empregado e
    ON e.lotacao_div = div.cod_divisao
LEFT JOIN salario s
    ON s.matr = e.matr
GROUP BY dep.nome, div.nome
ORDER BY media_salario DESC;