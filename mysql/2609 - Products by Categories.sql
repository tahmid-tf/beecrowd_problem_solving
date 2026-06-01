SELECT c.name, sum(p.amount) as sum FROM products p 
inner join categories c on p.id_categories = c.id 
group by c.name
order by c.name;