select  em.cpf, em.enome, de.dnome from empregados em
inner join departamentos de
on em.dnumero = de.dnumero
left join trabalha tr
on em.cpf = tr.cpf_emp
where tr.cpf_emp is null
order by em.cpf;