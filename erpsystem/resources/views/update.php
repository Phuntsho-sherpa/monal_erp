<!DOCTYPE html>
<html>

<head>
  <title>EMPLOYEE MANAGMENT</title>
  <link href="update.css" rel="stylesheet">
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

        <button onclick="location.href='/welcome'" type="button" class="btn btn-primary">Back</button>

      </div>
    </div>
  </nav>
  <br>
  <div class="form-container">
    <legend><b>Update employee</b></legend>
    <form action="welcome.blade.php" method="POST">
      <input type="hidden" name="student_id">


      <div class="datee">
        <label class="form-label">Date</label>
        <input type="date" class="form-control" id="dateInput">
        <div class="form-text">Enter the date you joined!</div>

      </div>
      <br>

      <div class="namee">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" id="nameInput">
        <div class="form-text">Enter your full name</div>

      </div>

      <br>

      <div class="button">
        <button type="button" class="btn btn-primary" name="update" onclick="updateDetail()">Submit to table</button>

      </div>
    </form>
  </div>
  <script>
    let editId = JSON.parse(localStorage.getItem("editId"));
    let empArray = JSON.parse(localStorage.getItem("empArray"));
    const nameInput = document.getElementById('nameInput');
    nameInput.value = empArray[editId].empName;
    const dateInput = document.getElementById('dateInput');
    dateInput.value = empArray[editId].empDate;


    function updateDetail() {
      empArray[editId].empName = nameInput.value;
      empArray[editId].empDate = dateInput.value;
      localStorage.setItem('empArray', JSON.stringify(empArray));
      localStorage.removeItem('editId')
      // show an alert message to indicate that the update was successful
      alert("Update successful!");
      window.location.href = "/welcome";
    }



    function clearId() {
      localStorage.removeItem('editId')
    }
  </script>
</body>

</html>