SELECT pr.name, pv.name, ca.name FROM products pr 
inner join providers pv on pr.id_providers = pv.id
inner join categories ca on pr.id_categories = ca.id
where pv.name = 'Sansul SA' and ca.name = 'Imported';