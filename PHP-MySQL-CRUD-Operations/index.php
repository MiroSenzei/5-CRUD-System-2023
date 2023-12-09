<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <title>Emlpoyee Management System</title>
</head>

  <style>
     
    img{
      z-index: -1;
    position: absolute;
    background-size: cover;
    width:40%; /* Set
    }
  </style>
  

  <header>
    <img src="./10798281_19362653.jpg" alt="">
  <h1 class="text-center">Employee Management System</h1>
  </header>

<body>
  <div class="container">
    <div class="py-4">
      <a href="./create.php" class="btn btn-dark">
        <i class="bi bi-plus-circle-fill"></i> Add Employee
      </a>
    </div>

    <!-- Table starts here -->
    <table class="table table-bordered table-striped align-middle">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email Address</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Role</th>
          <th>Joining Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        # Include connection
        require_once "./config.php";

        # Attempt select query execution
        $sql = "SELECT * FROM employees";

        if ($result = mysqli_query($link, $sql)) {
          if (mysqli_num_rows($result) > 0) {
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $count = 1;
            foreach ($rows as $row) { ?>
              <tr>
                <td><?= $count++; ?></td>
                <td><?= $row["first_name"]; ?></td>
                <td><?= $row["last_name"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["age"]; ?></td>
                <td><?= $row["gender"]; ?></td>
                <td><?= $row["designation"]; ?></td>
                <td><?= $row["joining_date"]; ?></td>
                <td>
                  <a href="./update.php?id=<?= $row["id"]; ?>" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil-square">Update</i>
                  </a>&nbsp;
                  <a href="./delete.php?id=<?= $row["id"]; ?>" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash-fill">Delete</i>
                  </a>
                </td>
              </tr>
            <?php
            }
            # Free result set
            mysqli_free_result($result);
          } else { ?>
            <tr>
              <td class="text-center text-danger fw-bold" colspan="9">** No records were found **</td>
            </tr>
        <?php
          }
        }
        # Close connection
        mysqli_close($link);
        ?>
      </tbody>
    </table>
  </div>

  <script>
    const delBtnEl = document.querySelectorAll(".btn-danger");
    delBtnEl.forEach(function(delBtn) {
      delBtn.addEventListener("click", function(e) {
        const message = confirm("Are you sure you want to delete this record?");
        if (message == false) {
          e.preventDefault();
        }
      });
    });
  </script>
</body>

</html>