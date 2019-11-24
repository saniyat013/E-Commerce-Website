<?php
  if(isset($_POST['submit']))
  {
    include('includes/config.php');

    // Rrecommeder a function for sequrity issu
    // Have to chak this issu after projact 1st submitino.

    $blogid =  $_POST['blogid'];
    $blogtitle =  $_POST['blogtitle'];
    $blogdesc = $_POST['blogdescription'];




      //3. Database Qure
        $sql = "INSERT INTO blog (blogid, blogtitle, blogdescription)
      VALUES ('$blogid', '$blogtitle', '$blogdesc')";


        //4. Used Retuned data
        if(mysqli_query($link, $sql)){
        header( 'Location: allblog.php' ) ;
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
    <h3 class="form-signin-heading">Add a new Blog</h3>
    Blog Body:
    <!-- <textarea class="form-control"  rows="5" cols="10" name="story" form="problem">Enter Problem story here...</textarea> -->
    <textarea class="form-control" rows="3" cols="10" name="blogdescription" form="problem"> </textarea>
    <br>

    <form action="addblog.php" method="post" id="problem">
      Blog Title:
      <input class="form-control" type="text" name="blogtitle" required>
      <br>
      Blog ID:
      <input class="form-control" type="text" name="blogid" required>
      <br>

      <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit">
    </form>
    <br>
  </div>
</div>

<?php include('includes/footer.php'); ?>
