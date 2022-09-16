<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

   <style>
   	*{
      
   		padding: 10px;
   		margin: 0;
   		box-sizing: border-box;
   	}
    body{
      background-color: #e4bad4;
    }
   	
    .main{
      background: url(images/register.jpg)no-repeat;
      background-size: 100% 100%;
      width: 100%;
    }
   </style>
  </head>

<body>
<div class="container">
	<div class="row">


     <section class="main"> 
    <div class="container  py-5">
      <div class="row">
        <div class="col-lg-5 offset-1 col-md-11 col-sm-11 col-11 text-white">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
              
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-10">
              <h3 class="font-weight-light">Knowledge</h3>
              <p class="font-weight-light pb-5">Gyaan yoga, also known as Gyaan Marg, is one of the three spiritual paths in Hinduism, which emphasizes the "path of knowledge". also known as the "path of self-realization".</p>
            </div>
            
          </div>
          
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
              
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-10">
              <h3 class="font-weight-light">Inspiration </h3>
              <p class="font-weight-light pb-5">Gyaan yoga, also known as Gyaan Marg, is one of the three spiritual paths in Hinduism, which emphasizes the "path of knowledge". also known as the "path of self-realization".</p>
            </div>
            
          </div>
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
              
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-10">
              <h3 class="font-weight-light">Motivation</h3>
              <p class="font-weight-light pb-5">Gyaan yoga, also known as Gyaan Marg, is one of the three spiritual paths in Hinduism, which emphasizes the "path of knowledge". also known as the "path of self-realization".</p>
            </div>
            
          </div>
          
        </div>
        <div class="col-lg-5 offset-1 col-md-11 col-sm-11 col-11">
          <div class="row">
          <div class=" card py-5 px-5">
            <div class="card body text-center">
              <h3 class="font-weight-light">Register</h3>

              <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	          <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
              <p>___________________________________</p>
               <div class="from">

               <form action="signup-check.php" method="post">


                <?php if (isset($_GET['name'])) { ?>
               <input type="text"  name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>" class="from-control px-5 "><br>
                <?php }else{ ?>
               <input type="text" name="name" placeholder="Name" class="from-control px-5 " class="from-control my-3 px-5"><br> <?php }?>  

               <?php if (isset($_GET['uname'])) { ?>
               <input type="text" name="uname"  placeholder="User Name" value="<?php echo $_GET['uname']; ?>" class="from-control my-3 px-5"><br>
                <?php }else{ ?>
               <input type="text" name="uname"  placeholder="User Name" class="from-control my-3 px-5"><br>
               <?php }?>


                <input type="password" name="password"  class="from-control my-3 px-5"  placeholder="password">

                <input type="password" name="re_password" class="from-control mx-3 px-5 " placeholder="confrim password">

                 <button type="submit" class="btn btn-dark btn-sm my-3 px-5">Register</button>
                 </form>
                  <p>Already have an account?<a href="logincss.php">Login</a></p>
                </div>

               </div>


            </div>

          </div>
             
        </div>

        
      </div>
      
    </div>


  </section>








</div>
</div>
<script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>
</html>