SELECT name, round((salary * 10) / 100,2)
FROM people
where salary > 3000;