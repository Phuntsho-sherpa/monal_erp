<!DOCTYPE html>
<html>

<head>
  <title>EMPLOYEE MANAGMENT</title>
  <link href="addform.css" rel="stylesheet">
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

        <!-- <button onclick="location.href='/welcome'" type="button" class="btn btn-primary">Back</button> -->

      </div>
    </div>
  </nav>
  <br>
  <legend><b>Enter your Data</b></legend>
  <form action="welcome.blade.php" class="form" method="POST" autocomplete="off">
  <!DOCTYPE html>
<html>

<head>
  <title>EMPLOYEE MANAGMENT</title>
  <link href="addform.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

  
  
  <form action="home.html" class="form" method="POST" autocomplete="off">


    <div class="datee">
      <label class="form-label">Date</label>
      <input type="date" class="form-control" id="date">
      <div class="form-text">Enter the date you joined!</div>

    </div>
    <br>

    <div class="namee">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" id="name">
      <div class="form-text">Enter your full name</div>

    </div>

    <br>

    <div class="button">
      <button type="button" class="btn btn-primary" onclick="store()">Submit to table</button>

    </div>
  </form>



  <script>
function store() {
  let empArray = JSON.parse(localStorage.getItem("empArray")) || [];

  let Edate = document.getElementById("date").value;
  let Ename = document.getElementById("name").value;

  // Check if either input field is empty before adding to array
  if (Edate.trim() === '' || Ename.trim() === '') {
    alert('Please enter a valid date and name.');
    return;
  }

  empArray.push({ empDate: Edate, empName: Ename });
  localStorage.setItem('empArray', JSON.stringify(empArray));
  localStorage.setItem("mydate", Edate);
  localStorage.setItem("myname", Ename);
  window.location.href = "/welcome";
}

  </script>

</body>

</html>
