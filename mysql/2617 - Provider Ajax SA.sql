select pr.name, pv.name from providers pv inner join products pr on 
pv.id = pr.id_providers where
pv.name = 'Ajax SA';