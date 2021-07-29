--year() gets the year value of a date
SELECT * FROM employees WHERE year(date_hired) >= 2017 AND year(date_hired) <= 2018;