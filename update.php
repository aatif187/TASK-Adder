<!DOCTYPE html>
<?php include"db.php";
$id=$_GET['id'];
$sql= "select * from task where id= '$id'";
$rows= $db->query($sql);

$val= $rows->fetch_assoc();
if(isset($_POST['Add']))
{
  $task=$_POST['task'];
  $sql2= "update task set name='$task' where id='$id' ";
  $db->query($sql2);
  header('location:index.php');
}

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
        <center><h1 style="margin-top: 90px;margin-bottom: 40px; text-decoration: underline; ">Update Task</h1></center>
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-striped table-dark">

                <hr><br>
                        <form class="" method="post">
                          <div class="form-group">
                            <label for="">What's Your Updated Task?</label>
                            <input type="text" required name="task" value="<?php echo $val['name']; ?>" class="form-control">

                          </div>
                          <input type="submit" name="Add" class="btn btn-success" value="Add">&nbsp
                          <a href="index.php" class="btn btn-danger">Back</a>
                        </form>
                      </div>
            </div>
    </div>
    </div>

  </body>
</html>
