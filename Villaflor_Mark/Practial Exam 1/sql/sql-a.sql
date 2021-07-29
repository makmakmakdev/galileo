--join the employee table to the salary table to get the salary of the employee
--(SELECT MAX(salary) from salary) get the max salary
SELECT e.*, s.salary FROM employees as e join salary as s on e.salary_id = s.id where s.salary = (SELECT MAX(salary) from salary);