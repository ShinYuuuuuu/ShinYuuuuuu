<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <style type="text/css">
      .container{
        margin-top:  200px;
        width:  1000px;
      }
     
    </style>
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-calendar-plus"></i> Add Details
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add Details</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                      <form method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">First Name</label>
                      <input type="text" class="form-control" name="firstname">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Last Name</label>
                      <input type="text" name="lastname" class="form-control">
                    </div>
                  
                </div>
                <div class="modal-footer">
                  <input type="submit" name="save" class=" btn btn-success" value="Save Changes" >
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php
                        include 'connection.php';
                        if ( isset($_POST['save'])) {
                          $fn=$_POST ['firstname'];
                          $ln=$_POST ['lastname'];

                          $sql = "INSERT INTO tbl_users(firstname, lastname) VALUES('$fn','$ln')";
                          if ($connection->query($sql) === TRUE) {
                          ?>
                          <script type="text/javascript">
                            Swal.fire({
                            title: "Saved!",
                            text: "New Record Created Successfully!",
                            icon: "success"
                          });
                                                    </script>
                          <?php
                          } else {
                            echo "Error: " . $sql . "<br>" . $connection->error;
                          }
                        }
                  ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
          </tr>
        </thead>
        <?php
        include 'connection.php'; 
        $sql = "SELECT * FROM tbl_users";
          $result = $connection->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '
                      <tbody>
                      <tr>
                        <th scope="row">'.$row['id'].'</th>
                        <td>'.$row['firstname'].'</td>
                        <td>'.$row['lastname'].'</td>
                      </tr>
                    </tbody>
              ';
            }
          }
        ?>
     
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>