<?php
  
 require('C:\xampp\htdocs\myProject\conn.php');
require('C:\xampp\htdocs\myProject\functions\readdraft.php');

  if (isset($_POST['edit'])) {
    $editid = $_POST['editid'];
    $edittitle = $_POST['edittitle'];
    $editcontent = $_POST['editcontent'];
    $editstatus = $_POST['editstatus'];
  }

   if (isset($_POST['update'])) {
    $updateid = $_POST['updateid'];
    $updatetitle = $_POST['updatetitle'];
    $updatecontent = $_POST['updatecontent'];
    $updatestatus = $_POST['updatestatus'];

    $queryUpdate = "UPDATE blog SET blog_title = '$updatetitle', blog_content = '$updatecontent', status = '$updatestatus' WHERE blog_id = '$updateid'";
    $sqlUpdate = mysqli_query($conn, $queryUpdate);

    echo '<script>alert("Saved to Post! Press ok")</script>';
    echo '<script>window.location.href = "/myProject/table.php"</script>';
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  </head>
<body>
 
  <div class="col-md-3"></div>
  <div class="col-md-6 well">
    <h3 class="text-primary">Save Data </h3>
    <hr style="border-top:3px solid;border-color:blueviolet; #ccc;"/>
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form method="POST">
        <div class="form-group">
          <label>Title</label>
          <textarea name="updatetitle" class="form-control" id="title" style="resize:none; width:350px; border-color:blueviolet;"  required/><?php echo $edittitle ?></textarea>
          </div>
          <input type="hidden" id="blog_id"/>
        </div>
        <div class="form-group">
          <label>Content</label>
          <textarea name="updatecontent" id="content" class="form-control" style="resize:none; width:3504px; height: 500px; border-color:blueviolet;" required><?php echo $editcontent ?></textarea>
        </div>
        <div class="form-group">
          <input type="checkbox" name="updatestatus" id="status" value="Post" class="form-control" required>
          <label>Remove from Drafts</label>
        </div>
        <br />
        <center>
         <input type="submit" name="update" value="SAVE" class="btn btn-success dropdown-toggle">
       <input type="hidden" id="save" name="updateid" value="<?php echo $editid ?>" class="btn btn-success dropdown-toggle">
        </center>
      </form>
    </div>
  </div>

</body>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/script.js"></script>
</html>