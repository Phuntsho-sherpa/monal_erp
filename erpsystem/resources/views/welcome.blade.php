
<!--         



<div class="login-box">
  <h2>Login</h2>
  <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Password</label>
    </div>
    <a href="/need">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div> -->

<!DOCTYPE html>
<html>

<head>
  <title>EMPLOYEE MANAGMENT SYSTEM</title>
  <script src="home.js"></script>
  <link href="home.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
       
        
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <legend>EMPLOYEE MANAGMENT SYSTEM</legend>
      </div>

    </div>
  </nav>

  <br>

  <table class="table">
    <thead>
      <tr class="table-primary">
        <th scope="col">Sl.no</th>
        <th scope="col">Registered Date</th>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EDIT</th>
        <th scope="col">DELETE</th>
      </tr>
    </thead>

    <tbody id="myTable">

    </tbody>

  </table>

  <div class="btn-container">
    <button onclick="location.href='/add'" type="button" class="btn btn-outline-primary">Add</button>
  </div>
  <script>
    let empArray = JSON.parse(localStorage.getItem("empArray"));

    const tableBody = document.getElementById('myTable');
    for (let i = 1; i < empArray.length; i++) {
      const row = document.createElement('tr');
      const slColumn = document.createElement('td');
      const dateColumn = document.createElement('td');
      const idColumn = document.createElement('td');
      const nameColumn = document.createElement('td');
      const editColumn = document.createElement('td');
      const deleteColumn = document.createElement('td');

      slColumn.textContent = i + 0;
      dateColumn.textContent = empArray[i].empDate;
      idColumn.textContent = 'EM-' + i;
      nameColumn.textContent = empArray[i].empName;

      editColumn.setAttribute('id', i);
      editColumn.innerHTML = '<a href="/update " class="edit" id="edit"></i>Edit</a>'
      editColumn.addEventListener('click', () => {
        let dataToEdit = empArray[i];
        localStorage.setItem('editId', i);
        alert('You are going to edit an employee record.');
      })

      deleteColumn.setAttribute('id', i);
      deleteColumn.innerHTML = '<a href="/welcome" class="delete"></i>Delete</a>'
      deleteColumn.addEventListener('click', () => {
        if (confirm(' you want to delete this employee record?')) {
          empArray.splice(i, 1);
          localStorage.setItem('empArray', JSON.stringify(empArray));
          alert('Are you sure?.');
        }
      })

      row.appendChild(slColumn);
      row.appendChild(dateColumn);
      row.appendChild(idColumn);
      row.appendChild(nameColumn);
      row.appendChild(editColumn);
      row.appendChild(deleteColumn);

      tableBody.appendChild(row);
    };
  </script>

</body>

</html>