<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header('location:joblogin.php');
}
?> 
<!DOCTYPE html>
<html>
  <head>
    <title>Flow- Job Update</title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>

  body{
  background: #d9083c;
  }
  span{
  font-size:15px;
  }
  a{
  text-decoration:none;
  color: #0062cc;
  border-bottom:2px solid #0062cc;
  }
  .box{
  padding:60px 0px;
  color: white;
  }
  .box-part{
  background:#FFF;
  border-radius:0;
  padding:60px 10px;
  margin:30px 0px;
  background-color: #14171b;
  border-radius: 20px;
  color: white;
  }
  .text{
  margin:20px 0px;
  color: #ffffff;
  }
  .fa{
  color:#4183D7;
  }
  </style>
  <body>
    <h1 style="color: #fff;text-align: center;margin-top: 50px;margin-bottom: -20px;text-transform: uppercase;">*Update Job*</h1>
    <div class="box">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            
            <div class="box-part text-center">
              
              <div class="title">
                <h4 style="color: #d9083c;">Cognizant</h4>
              </div>
              
              <div class="text">
                <span>Update data of cognizant to the server.</span>
              </div>
              <!-----form ---->
              <!-- Button trigger modal -->
              <button style="background-color: #d9083c;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
              Update data
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLongTitle">Cognizant Update Job</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
<!---form update --->

       <form method="POST">
      <div class="form-group">
        <input name="title" type="text" class="form-control" id="admin"  placeholder="Enter Title of job">
      </div>
      <textarea name="content" placeholder="Enter job details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="form-group" style="margin-top: 15px;">
        <input name="link" type="text" class="form-control" id="admin"  placeholder="Enter job link">
      </div>


      <button style="margin-top: 20px;background-color: #d9083c;color: white; " type="submit" class="btn btn-danger" name="submit">Update Job</button>
    </form>
                <?php
                include 'connection.php';

                if (isset($_POST['submit']))
                 {
                  $title = mysqli_real_escape_string($con,$_POST['title']);
                  $content = mysqli_real_escape_string($con,$_POST['content']);
                  $link = mysqli_real_escape_string($con,$_POST['link']);

                  $queryt = "insert into cognizant( title, content, link) values('$title','$content','$link')" ;
                  $iquery = mysqli_query($con, $queryt);
				if ($iquery) {
					?>
					<script>
						swal("Data Inserted!", "Data sent to server!", "success");
					</script>
					<?php
				}
				else
				{
					?>
					<script>
						swal("Failed!", "server busy!", "error");
					</script>
					<?php
				}

                 }

                ?>

    <!-- form update ends-->

                    </div>
                  </div>
                </div>
              </div>
              <!--form ends--->
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            
            <div class="box-part text-center">
              
              <div class="title">
                <h4 style="color: #d9083c;">Wipro</h4>
              </div>
              
              <div class="text">
                <span>Update data of Wipro to the server.</span>
              </div>
              <!-----form ---->
              <!-- Button trigger modal -->
              <button style="background-color: #d9083c;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter1">
              Update data
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLongTitle">Wipro Update Job</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
<!---form update --->

       <form method="POST">
      <div class="form-group">
        <input name="title" type="text" class="form-control" id="admin"  placeholder="Enter Title of job">
      </div>
      <textarea name="content" placeholder="Enter job details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="form-group" style="margin-top: 15px;">
        <input name="link" type="text" class="form-control" id="admin"  placeholder="Enter job link">
      </div>


      <button style="margin-top: 20px;background-color: #d9083c;color: white; " type="submit" class="btn btn-danger" name="submit1">Update Job</button>
    </form>
                <?php
                include 'connection.php';

                if (isset($_POST['submit1']))
                 {
                  $title = mysqli_real_escape_string($con,$_POST['title']);
                  $content = mysqli_real_escape_string($con,$_POST['content']);
                  $link = mysqli_real_escape_string($con,$_POST['link']);

                  $queryt = "insert into wipro( title, content, link) values('$title','$content','$link')" ;
                  $iquery = mysqli_query($con, $queryt);
				if ($iquery) {
					?>
					<script>
						swal("Data Inserted!", "Data sent to server!", "success");
					</script>
					<?php
				}
				else
				{
					?>
					<script>
						swal("Failed!", "server busy!", "error");
					</script>
					<?php
				}

                 }

                ?>

    <!-- form update ends-->

                    </div>
                  </div>
                </div>
              </div>
              <!--form ends--->
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            
            <div class="box-part text-center">
              
              <div class="title">
                <h4 style="color: #d9083c;">Tcs</h4>
              </div>
              
              <div class="text">
                <span>Update data of Tcs to the server.</span>
              </div>
              <!-----form ---->
              <!-- Button trigger modal -->
              <button style="background-color: #d9083c;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter2">
              Update data
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLongTitle">Tcs Update Job</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
<!---form update --->

       <form method="POST">
      <div class="form-group">
        <input name="title" type="text" class="form-control" id="admin"  placeholder="Enter Title of job">
      </div>
      <textarea name="content" placeholder="Enter job details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="form-group" style="margin-top: 15px;">
        <input name="link" type="text" class="form-control" id="admin"  placeholder="Enter job link">
      </div>


      <button style="margin-top: 20px;background-color: #d9083c;color: white; " type="submit" class="btn btn-danger" name="submit2">Update Job</button>
    </form>
                <?php
                include 'connection.php';

                if (isset($_POST['submit2']))
                 {
                  $title = mysqli_real_escape_string($con,$_POST['title']);
                  $content = mysqli_real_escape_string($con,$_POST['content']);
                  $link = mysqli_real_escape_string($con,$_POST['link']);

                  $queryt = "insert into tcs( title, content, link) values('$title','$content','$link')" ;
                  $iquery = mysqli_query($con, $queryt);
				if ($iquery) {
					?>
					<script>
						swal("Data Inserted!", "Data sent to server!", "success");
					</script>
					<?php
				}
				else
				{
					?>
					<script>
						swal("Failed!", "server busy!", "error");
					</script>
					<?php
				}

                 }

                ?>

    <!-- form update ends-->

                    </div>
                  </div>
                </div>
              </div>
              <!--form ends--->
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            
            <div class="box-part text-center">
              
              <div class="title">
                <h4 style="color: #d9083c;">Infosys</h4>
              </div>
              
              <div class="text">
                <span>Update data of Infosys to the server.</span>
              </div>
              <!-----form ---->
              <!-- Button trigger modal -->
              <button style="background-color: #d9083c;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter3">
              Update data
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLongTitle">Infosys Update Job</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
<!---form update --->

       <form method="POST">
      <div class="form-group">
        <input name="title" type="text" class="form-control" id="admin"  placeholder="Enter Title of job">
      </div>
      <textarea name="content" placeholder="Enter job details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="form-group" style="margin-top: 15px;">
        <input name="link" type="text" class="form-control" id="admin"  placeholder="Enter job link">
      </div>


      <button style="margin-top: 20px;background-color: #d9083c;color: white; " type="submit" class="btn btn-danger" name="submit3">Update Job</button>
    </form>
                <?php
                include 'connection.php';

                if (isset($_POST['submit3']))
                 {
                  $title = mysqli_real_escape_string($con,$_POST['title']);
                  $content = mysqli_real_escape_string($con,$_POST['content']);
                  $link = mysqli_real_escape_string($con,$_POST['link']);

                  $queryt = "insert into infosys( title, content, link) values('$title','$content','$link')" ;
                  $iquery = mysqli_query($con, $queryt);
				if ($iquery) {
					?>
					<script>
						swal("Data Inserted!", "Data sent to server!", "success");
					</script>
					<?php
				}
				else
				{
					?>
					<script>
						swal("Failed!", "server busy!", "error");
					</script>
					<?php
				}

                 }

                ?>

    <!-- form update ends-->

                    </div>
                  </div>
                </div>
              </div>
              <!--form ends--->
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            
            <div class="box-part text-center">
              
              <div class="title">
                <h4 style="color: #d9083c;">Capgemini</h4>
              </div>
              
              <div class="text">
                <span>Update data of Capgemini to the server.</span>
              </div>
              <!-----form ---->
              <!-- Button trigger modal -->
              <button style="background-color: #d9083c;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter4">
              Update data
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLongTitle">Capgemini Update Job</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
<!---form update --->

       <form method="POST">
      <div class="form-group">
        <input name="title" type="text" class="form-control" id="admin"  placeholder="Enter Title of job">
      </div>
      <textarea name="content" placeholder="Enter job details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="form-group" style="margin-top: 15px;">
        <input name="link" type="text" class="form-control" id="admin"  placeholder="Enter job link">
      </div>


      <button style="margin-top: 20px;background-color: #d9083c;color: white; " type="submit" class="btn btn-danger" name="submit4">Update Job</button>
    </form>
                <?php
                include 'connection.php';

                if (isset($_POST['submit4']))
                 {
                  $title = mysqli_real_escape_string($con,$_POST['title']);
                  $content = mysqli_real_escape_string($con,$_POST['content']);
                  $link = mysqli_real_escape_string($con,$_POST['link']);

                  $queryt = "insert into capgemini( title, content, link) values('$title','$content','$link')" ;
                  $iquery = mysqli_query($con, $queryt);
				if ($iquery) {
					?>
					<script>
						swal("Data Inserted!", "Data sent to server!", "success");
					</script>
					<?php
				}
				else
				{
					?>
					<script>
						swal("Failed!", "server busy!", "error");
					</script>
					<?php
				}

                 }

                ?>

    <!-- form update ends-->

                    </div>
                  </div>
                </div>
              </div>
              <!--form ends--->
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            
            <div class="box-part text-center">
              
              <div class="title">
                <h4 style="color: #d9083c;">Other's</h4>
              </div>
              
              <div class="text">
                <span>Update data of Other's to the server.</span>
              </div>
              <!-----form ---->
              <!-- Button trigger modal -->
              <button style="background-color: #d9083c;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter5">
              Update data
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLongTitle">Other's Update Job</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
<!---form update --->

       <form method="POST">
      <div class="form-group">
        <input name="title" type="text" class="form-control" id="admin"  placeholder="Enter Title of job">
      </div>
      <textarea name="content" placeholder="Enter job details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="form-group" style="margin-top: 15px;">
        <input name="link" type="text" class="form-control" id="admin"  placeholder="Enter job link">
      </div>


      <button style="margin-top: 20px;background-color: #d9083c;color: white; " type="submit" class="btn btn-danger" name="submit5">Update Job</button>
    </form>
                <?php
                include 'connection.php';

                if (isset($_POST['submit5']))
                 {
                  $title = mysqli_real_escape_string($con,$_POST['title']);
                  $content = mysqli_real_escape_string($con,$_POST['content']);
                  $link = mysqli_real_escape_string($con,$_POST['link']);

                  $queryt = "insert into other( title, content, link) values('$title','$content','$link')" ;
                  $iquery = mysqli_query($con, $queryt);
				if ($iquery) {
					?>
					<script>
						swal("Data Inserted!", "Data sent to server!", "success");
					</script>
					<?php
				}
				else
				{
					?>
					<script>
						swal("Failed!", "server busy!", "error");
					</script>
					<?php
				}

                 }

                ?>

    <!-- form update ends-->

                    </div>
                  </div>
                </div>
              </div>
              <!--form ends--->
            </div>
          </div>

      </div>
  </div>
</div>

        
      <center>
      <button type="submit" class="btn btn-danger px-5" style="color: white;background-color: #14171b;margin-bottom: 50px;text-decoration: none;"><a href="logout.php" style="color: white;text-decoration: none;">LOGOUT</a></button>
      </center>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </html>