SELECT 
concat(
substring(np.cpf,1,3), '.',
substring(np.cpf,4,3), '.',
substring(np.cpf,7,3), '-',
substring(np.cpf,10,2)
) as CPF
FROM customers c inner join natural_person np on c.id = np.id_customers;