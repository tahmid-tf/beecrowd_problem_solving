SELECT amount as most_frequent_value FROM value_table 
group by amount
order by count(amount) desc
limit 1;