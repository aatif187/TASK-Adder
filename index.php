<!DOCTYPE html>
<?php include"db.php";

$sql= "select * from task";
$rows= $db->query($sql);


 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TO-DO</title>


          <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  </head>
  <body>

    <div class="container">
      <div class="row">
        <center><h1 style=" text-decoration: underline;margin-top: 90px;margin-bottom: 40px;">TO-DO LIST</h1></center>
        <div class="col-md-10 col-md-offset-1">

              <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
              <button type="button" class="btn btn-secondary pull-right" onclick="print()" >Print</button>
              <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Task</h4>
                      </div>
                      <div class="modal-body">
                        <form class="" action="add.php" method="post">
                          <div class="form-group">
                            <label for="">What's Your Task?</label>
                            <input type="text" required name="task" value="task" class="form-control">

                          </div>
                          <input type="submit" name="Add" class="btn btn-success" value="Add">
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

              <hr><br>
              <div class="col-md-12 text-center">
                <form class="form-group" action="search.php" method="post">
                  <input type="text" placeholder="Search" name="search" class="form-control" value="">
                </form>
              </div>
              <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Task</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                  while ($in= $rows->fetch_assoc()):  ?>
                  <th scope="row"><?php echo $in['id'] ?></th>
                  <td class="col-md-10"><?php echo $in['name'] ?></td>
                  <td><a href="update.php?id=<?php echo $in['id']; ?>" class="btn btn-primary">Edit</a>  </td>
                  <td><a href="delete.php?id=<?php echo $in['id']; ?>" class="btn btn-danger">Delete</a>  </td>
                </tr>
              <?php endwhile; ?>
              </tbody>
            </table>
      </div>
    </div>
    </div>

  </body>
</html>
