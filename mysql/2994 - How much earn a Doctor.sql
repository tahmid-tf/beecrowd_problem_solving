select name,
(
	SELECT ROUND(SUM((a.hours * 150) * (1 + w.bonus / 100)), 1)
	FROM attendances a
	INNER JOIN work_shifts w ON a.id_work_shift = w.id
	WHERE a.id_doctor = doctors.id
) as salary
from doctors 
order by salary desc;