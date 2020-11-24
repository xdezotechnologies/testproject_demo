<!doctype html>
<html lang="en">
<?php require('connection/config.php'); ?> 
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
  <?php 
      //To show the existing data for edit
      if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $show_query = "SELECT * FROM students WHERE id=$id";
        $show_result = mysqli_query($conn,$show_query);
        $show_row = $show_result->fetch_assoc();
        $name = $show_row['name'];
        $email = $show_row['email'];
        $phone = $show_row['Phone'];
        $address = $show_row['address'];
      }
      ?>
    <div class="container">
      <?php 
      if(isset($_POST['submit'])) 
      {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        if($name!="" && $email !="") 
        {
          $query = "UPDATE students SET name='$name', email='$email', Phone='$phone', address='$address' WHERE id=$id";
          $result = mysqli_query($conn,$query);
  
          if($result)
          {
            echo header("Location: managestudent.php?msg=usuccess");
          }
          else 
          {
            echo header("Location: managestudent.php?msg=uerror");
          }
        }
        else
        {
          echo header("Location: managestudent.php?msg=field_must");
        }
      }
      ?>
        <div class="row">
        <form action="" action="#" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="<?php echo $name; ?>">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="<?php echo $email; ?>">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
          <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="" value="<?php echo $phone; ?>">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
          <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" id="" aria-describedby="helpId" placeholder="" value="<?php echo $address; ?>">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
          <input id="" class="btn btn-primary" type="submit" value="Save" name="submit">
      </form>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>