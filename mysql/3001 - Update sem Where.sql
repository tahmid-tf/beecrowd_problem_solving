SELECT name,
	case
		when type = 'A' then 20.0
        when type = 'B' then 70.0
		when type = 'C' then 530.5
        else 0.0
        end as price
FROM products
order by type asc, id desc;