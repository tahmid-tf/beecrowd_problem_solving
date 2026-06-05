SELECT pr.name, pv.name, pr.price FROM products pr 
inner join providers pv on pr.id_providers = pv.id
inner join categories ca on pr.id_categories = ca.id
where ca.name = 'Super Luxury' and pr.price > 1000;