SELECT l.name, round((l.omega * 1.618),3) FROM dimensions d 
inner join life_registry l on d.id = l.dimensions_id
where l.name like 'Richard%'
and d.name in ('C875','C774')
ORDER BY l.omega ASC;