SELECT cu.name, o.id
FROM customers cu 
inner join orders o on o.id_customers = cu.id
where o.orders_date between '2016-01-01' and '2016-06-30';