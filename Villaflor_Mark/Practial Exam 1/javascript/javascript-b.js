const fetchData = (url) => {
    fetch(url)
    .then((res) => res.json())
    .then(data => {
        const employees = data.employees;

        employees.sort((a,b) => a.lastName > b.lastName ? 1 : -1); //Sort the data by ascending last name

        employee = employees[0] //Get the first record

        document.getElementById("firstName").value = employee.firstName;
        document.getElementById("lastName").value = employee.lastName;
        document.getElementById("birthday").value = employee.birthday;
        document.getElementById("genderMale").checked = employee.gender.male;
        document.getElementById("genderFemale").checked = employee.gender.female;

        (employee.knownLanguage).forEach(v => {
            document.getElementById(v.toLowerCase()).checked = true
        });
    });
}

const url = "./employees.php";

fetchData(url);