<?php

include 'config.php';

if (isset($_POST['register'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

  $select = " SELECT * FROM Users WHERE email = '$email'";
  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {

    echo "<script>alert('email already in use!')</script>";
  } else {

    if ($password != $cpassword) {

      echo "<script>alert('password not matched!')</script>";
    } else {

      $sql = "INSERT INTO Users (username, email, password)
                     VALUES('$username','$email','$password')";
      mysqli_query($conn, $sql);

      $username = "";
      $email = "";
      $password = "";
      $cpassword = "";
    }
  }
};

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>E-Tour</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>

<body>
  <div class="row justify-content-center m-0">
    <div class="col-sm-2 bg-dark text-light text-center sticky-top" style="height: 100vh;">
      <h3 class="p-4">Admin <br> Panel</h3>
      <hr>
      <div class="list-group">
        <a href="admin_panel.php" class="btn btn-dark p-3 text-start" aria-current="true">Dashboard</a>
        <a href="admin_users.php" class="btn btn-light m-3 text-start">Users</a>
        <a href="admin_tours.php" class="btn btn-dark p-3 text-start">Tours</a>
        <a href="admin_bookings.php" class="btn btn-dark p-3 text-start">Bookings</a>
        <a href="admin_inbox.php" class="btn btn-dark p-3 text-start">Inbox</a>
        <hr>
        <a href="index.php" class="btn btn-dark text-start">Back to site</a>
      </div>
    </div>
    <div class="col-sm-10 bg-light text-dark p-5">

      <!-- Button trigger modal -->
      <div class="d-flex">
        <button type="button" class="btn btn-danger px-5 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
          Add New User
        </button>
        <!-- <button type="button" class="btn btn-danger px-5 me-3">Remove User</button>
        <button type="button" class="btn btn-danger px-5">Update User</button> -->
      </div>

      <!-- Modal -->
      <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="registerModalLabel">ADD NEW USER</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">

                <form action="" method="POST">

                  <div class="row py-2">
                    <label for="username" class="form-label">Username <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="enter your username" name="username" required>
                  </div>
                  <div class="row py-2">
                    <label for="email" class="form-label">Email <span class="text-danger">*</label>
                    <input type="email" class="form-control" placeholder="enter your email" name="email" required>
                  </div>
                  <div class="row py-2">
                    <label for="password" class="form-label">Password <span class="text-danger">*</label>
                    <input type="password" class="form-control" placeholder="enter your password" name="password" required>
                  </div>
                  <div class="row py-2">
                    <label for="cpassword" class="form-label">Confirm Password <span class="text-danger">*</label>
                    <input type="password" class="form-control" placeholder="confirm your password" name="cpassword" required>
                  </div>
                  <div class="row py-4">
                    <button name="register" class="btn btn-danger">Register</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="updateModalLabel">UPDATE USER</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">

                <?php

                // if ($_SERVER['REQUEST_METHOD'] == 'GET') {

                //   $id = $_GET["id"];

                //   $sql = "SELECT * FROM Users WHERE id = $id";
                //   $result = mysqli_query($conn, $sql);
                //   $row = mysqli_fetch_assoc($result);

                //   if (!$row) {
                //     header("location: admin_users.php");
                //   }

                //   $username = $row["username"];
                //   $email = $row["email"];
                //   $password = $row["password"];
                // } else {

                //   $username = $_POST["username"];
                //   $email = $_POST["email"];
                //   $password = md5($_POST['password']);

                //   do {
                //     $sql = "UPDATE Users SET username = '$username', email = '$email', password = '$password' WHERE id = $id";
                //     $result = mysqli_query($conn, $sql);
                //     header("location: admin_users.php");
                //   } while (false);
                // }

                ?>

                <form action="updatecode.php" method="POST">

                  <input type="hidden" name="update_id" id="update_id">
                  <input type="hidden" value="<?php echo $id; ?>">

                  <div class="row py-2">
                    <label for="username" class="form-label">Username <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="enter your username" name="username" required>
                  </div>
                  <div class="row py-2">
                    <label for="email" class="form-label">Email <span class="text-danger">*</label>
                    <input type="email" class="form-control" placeholder="enter your email" name="email" required>
                  </div>
                  <div class="row py-2">
                    <label for="password" class="form-label">Password <span class="text-danger">*</label>
                    <input type="password" class="form-control" placeholder="enter your password" name="password" required>
                  </div>
                  <div class="row py-4">
                    <button name="update" class="btn btn-danger">Update</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

      <table class="table mt-5 bg-white">

        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>

        <tbody>
          <?php

          $sql = "SELECT * FROM Users";
          $result = mysqli_query($conn, $sql);

          if (!$result) {
            echo "<script>alert('Something Went Wrong')</script>";
          }

          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <th scope='row'>$row[id]</th>
            <td>$row[username]</td>
            <td>$row[email]</td>
            <td>   
              <a href='' class='btn btn-primary btn-sm editbtn'>Update</a>
            </td>
            <td>   
              <a href='delete_user.php?id=$row[id]' class='btn btn-danger btn-sm'>Delete</a>
            </td>
          </tr>";
          }

          ?>
        </tbody>

      </table>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- <script>
    $(document).ready(function() {

      $('.editbtn').on('click', function() {

        $('#updateModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        console.log(data);

        $('#isd').val(data[0]);
        $('#username').val(data[1]);
        $('#email').val(data[2]);
        $('#password').val(data[3]);
      });
    });
  </script> -->

</body>

</html>