<?php
  
  require('./functions/readdraft.php');
  require('./functions/readpost.php');
  require('C:\xampp\htdocs\myProject\conn.php');
  //require('./pbfunctions/pbdelete.php');

  //require('C:\xampp\htdocs\webtext\pbdb.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

    <title>TABLE</title>
  </head>

  <body>

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">CONTENT</th>
      <th scope="col">STATUS</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($results =  mysqli_fetch_array($sqlTable)){ ?>
    <tr>
      <th scope="row"><?php echo $results['blog_id'] ?></th>
      <td><?php echo $results['blog_title'] ?></td>
      <td><?php echo $results['blog_content'] ?></td>
      <td><?php echo $results['status'] ?></td>
      <td>
         <form class="ED" action="./functions/updatedraft.php" method="post">
          <input type="submit" name="edit" value="EDIT" class="btn btn-info dropdown-toggle">
           <input type="hidden" name="editid" value="<?php echo $results['blog_id'] ?>" class="btn btn-danger dropdown-toggle">
           <input type="hidden" name="edittitle" value="<?php echo $results['blog_title'] ?>" class="btn btn-danger dropdown-toggle">
           <input type="hidden" name="editcontent" value="<?php echo $results['blog_content'] ?>" class="btn btn-danger dropdown-toggle">
           <input type="hidden" name="editstatus" value="<?php echo $results['status'] ?>" class="btn btn-danger dropdown-toggle">
          </form>
      </td>
    </tr> 
  <?php  } ?>
  </tbody>
  </table>
<br>
<br>
<br>
<br>
<br>
<br>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">CONTENT</th>
      <th scope="col">STATUS</th>

    </tr>
  </thead>
  <tbody>
    <?php while ($results =  mysqli_fetch_array($sqlTable1)){ ?>
    <tr>
      <th scope="row"><?php echo $results['blog_id'] ?></th>
      <td><?php echo $results['blog_title'] ?></td>
      <td><?php echo $results['blog_content'] ?></td>
      <td><?php echo $results['status'] ?></td>
    </tr> 
  <?php  } ?>
  </tbody>
  </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>