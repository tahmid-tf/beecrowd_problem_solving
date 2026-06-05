SELECT name, customers_number as customers_number FROM lawyers where customers_number = (select max(customers_number) from lawyers)
union all
SELECT name, customers_number as customers_number FROM lawyers where customers_number = (select min(customers_number) from lawyers)
union all
SELECT 'Average' as name, floor(avg(customers_number)) as customers_number FROM lawyers;