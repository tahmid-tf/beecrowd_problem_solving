SELECT products.name, providers.name FROM products 
inner join providers on products.id_providers = providers.id 
where id_categories=6;