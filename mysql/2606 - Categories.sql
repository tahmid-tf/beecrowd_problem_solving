SELECT p.id, p.name 
FROM categories c 
inner join products p
on c.id = p.id_categories
where c.name like 'super%';