<?php
  if(isset($_POST['submit']))
  {
    include('includes/config.php');

    // Rrecommeder a function for sequrity issu
    // Have to chak this issu after projact 1st submitino.
    $id = $_POST['id'];
    $name =  $_POST['name'];
    $price = $_POST['price'];
    $cat = $_POST['cat'];
    $prodes = $_POST['prodes'];
    $photo = $_POST['photo'];


      //3. Database Qure
        $sql = "INSERT INTO products (id, name, price, catagory, discription, photo)
      VALUES ('$id', '$name', '$price', '$cat', '$prodes', '$photo')";


        //4. Used Retuned data
        if(mysqli_query($link, $sql)){
        header( 'Location: products.php' ) ;
        } else{
            echo "ERROR: Could not able to execute $sql. ";
        }

      //5. close connection
        mysqli_close($link);

  }

  include('includes/header.php');
?>


<div class="row marketing">
  <div class="col-md-3"></div>
  <div class="col-md-9">
    <h3 class="form-signin-heading">Add a new Product</h3>
    Product Description:
    <!-- <textarea class="form-control"  rows="5" cols="10" name="story" form="problem">Enter Problem story here...</textarea> -->
    <textarea class="form-control" rows="3" cols="10" name="prodes" form="problem"> </textarea>
    <br>

    <form action="addproduct.php" method="post" id="problem">
      Product ID:
      <input class="form-control" type="text" name="id" required>
      <br>

      Product Name:
      <input class="form-control" type="text" name="name" required>
      <br>

      Product catagory:
      <input class="form-control" type="text" name="cat" required>
      <br>

      Price:
      <input class="form-control" type="text" name="price" required>
      <br>

      Photo name(with extention):
      <input class="form-control" type="text" name="photo" required>
      <br>

      <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit">
    </form>
    <br>
  </div>
</div>

<?php include('includes/footer.php'); ?>
