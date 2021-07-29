--year() gets the year value of a date
SELECT * FROM employees as e join departments as d on e.department_id = d.id WHERE year(e.date_hired) >= 2018 AND d.department = 'IT';