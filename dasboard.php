<?php

session_start();

if(isset($_SESSION["logged_in"]))
{

//print_r($_SESSION);
$data=$_SESSION["logged_in"]["fullname"];
$email=$_SESSION["logged_in"]["email"];


//echo $data;


require 'config.php';


$msg="";
if (isset($_POST["submit"]))
 {
  



  $target_dir="../images/";




  $target_file=$target_dir.basename($_FILES["item_image"]["name"]);
  move_uploaded_file($_FILES["item_image"]["tmp_name"],$target_file);

  $sql="INSERT INTO `users`(`item_image`) VALUES ('$target_file')";
  if($image==$user_image)
  {



  if(mysqli_query($connection,$sql))
  {
    $msg="Item added successfully";
  }
  else
  {
    $msg="Failed to add the Item.";
  }
  }
  

}



?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="author" content="sourav singh">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width ,initial-scale=1 shrink-to-fit=no">
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

     <style type="text/css">
      .image{
 background-image: url(../images/landing1.jpg);
 
 background-size: cover;
}


 
     </style>

</head>
<body class="image">

  <!-- new nav bar -->

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><h3><i>Dashboard</i></h3></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul>
      <span></span>
      <span></span>
    </ul>
    <ul class="navbar-nav mr-auto">
      
    
      <!-- <li style="width: 300px; margin-right:15px; "><input type="text" class="form-control" id="search" name=""></li>
      <li style=" margin-right:10px;"><input type="submit" class="btn btn-primary" id="serach_btn" name="" value="Search"></li> -->
      
    </ul>

    <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-home">&nbsp;</i>Home</a>
      </li>
       -->
       
      

      <li class="nav-item">
        <a class="nav-link" href="#" value=""><?= "User ".$data; ?></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login.php">Log Out</a>
      </li>



       
      
    </ul>
  </div> 
</nav>



  <div class="container" style="margin-left:300px;">
    <span><div class="row ">
    <div class="col-md-5 bg-light mt-5  rounded bg-dark"  style="margin-right: 800px;">
      <h2 class="text-center p-2 text-secondary">User Details</h2>
      <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
        

        <div class="form-group">
          <div class="custom-file">
            <input type="file" name="item_image" class="custom-file-input" id="customFile"
             required>

             <label for="customFile" class="custom-file-label">Choose profile Image </label>
          </div>
        </div>

        
      

      
         
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-success btn-block" value="Add">
        </div>

       
        <div>
          <?php 

            $sql2='select * from users where email=`$email`';
             $result=mysqli_fetch_assoc($connection,$sql2);




           ?>
           <div>
              <h1>Name <?= $result['uname'] ?></h1>
              <h1>Email <?= $result['email'] ?></h1>
              <img  src=<?php $result['item_image'] ?> />
           </div>

        </div>

         <div class="form-group">
          <a href='edit.php?id=<?= $id ?>'><input type="submit" name="edit" class="btn btn-success btn-block" value="edit"></a>
        </div>




        


      

        <div class="form-group">
          <h4 class="text-center text-danger"><?= $msg; ?></h4>
        </div>
      </form>

    </div>
      
    </div>

    

</div>



    


  

</body>
</html>

<?php } ?>

 
 